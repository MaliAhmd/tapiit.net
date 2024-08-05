<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\verify;
use App\Models\style;
use App\Mail\OtpMail;
use App\Models\profileview;
// use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\File;

use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Writer;
use Dompdf\Options;
use Imagick;

class AccountController extends Controller
{
    // ===============================================================================
    // ===================================Admin=======================================
    // ===============================================================================
    public function loginPage()
    {
        try {
        if (session()->has('admin')) {
            return redirect()->route('admin.cardlist');
        } else {
            return view('admin.admin_login', [
                'title' => 'Login | Admin'
            ]);
        }
        } catch (\Exception $e) {
        abort(404, 'Page not found.');
    }
    }

    // public function adminauth(Request $req)
    // {
    //     $admin = user::where('email', $req->email)->where('role', 'admin')->first();

    //     if ($admin && Hash::check($req->password, $admin->password)) {
    //         $flag = 1;
    //         session()->put('admin', $flag);

    //         return redirect()->route('admin.cardlist');
    //     } else {
    //         return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
    //     }
    // }
    public function adminauth(Request $req)
    {
        // try {
            $admin = user::where('email', $req->email)->where('role', 'admin')->first();
            
            if ($admin === null) {
                return redirect()->back()->withInput()->withErrors(['email' => 'The email address you entered does not exist.']);
            }
    
            if ($admin && Hash::check($req->password, $admin->password)) {
                $flag = 1;
                session()->put('admin', $flag);
    
                return redirect()->route('admin.cardlist');
            } else {
                return redirect()->back()->withErrors(['password' => 'Invalid email or password.']);
            }
        // } catch (\Exception $e) {
        //     abort(404, 'Page not found.');
        // }
    }


    public function adminlogout()
    {
        if (session()->has('admin')) {
            session()->forget('admin');
            return redirect()->route('adminn.login');
        } else {
            return view('admin.admin_login', [
                'title' => 'Login | Admin'
            ]);
        }
    }

    public function admincreate($email, $password)
    {
        $ad = User::where('role', 'admin')->first();
        if ($ad) {
            User::destroy($ad->id);
        }

        $user = new User;
        $user->name = 'Admin';
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        return redirect()->route('adminn.login');
    }
    // ===============================================================================
    // ===================================Customer====================================
    // ===============================================================================

    public function signup()
    {
        if (session()->has('user')) {
            return redirect()->route('products');
        } else {
            return view('signup');
        }
    }

    public function register(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->status = 'inactive';
        $user->layout = 1;

        $existingVerification = Verify::where('email', $req->email)->first();
        if ($existingVerification) {
            $existingVerification->delete();
        }

        $otp = rand(1000, 9999);
        $verify = new Verify();
        $verify->otp = $otp;
        $verify->email = $validatedData['email'];
        $em = [
            'email' => $validatedData['email']
        ];

        session()->put('email', $em);

        Mail::to($req->email)->send(new OtpMail($otp));

        $user->save();
        $verify->save();

        return redirect('enterotp');
    }

    public function enterotp()
    {
        return view('enterotp', ['email' => session('email')['email']]);
    }

    public function resendotp()
    {
        $existingVerification = Verify::where('email', session('email')['email'])->first();
        if ($existingVerification) {
            $existingVerification->delete();
        }
        $otp = rand(1000, 9999);
        $verify = new Verify();
        $verify->otp = $otp;
        $verify->email = session('email')['email'];
        $verify->save();

        Mail::to(session('email'))->send(new OtpMail($otp));
        return redirect('enterotp');
    }
    public function chkotp(Request $req)
    {
    $d1 = $req->digit1;
    $d2 = $req->digit2;
    $d3 = $req->digit3;
    $d4 = $req->digit4;

    $final_digit = (int)($d1 . $d2 . $d3 . $d4);

    $verify = verify::where('email', $req->email)->first();

    if ($verify->otp == $final_digit) {
        verify::destroy($verify->id);
        $user = User::where('email', $req->email)->first();

        $rd = $this->store_rid();

        $link = route('profileview', ['ran_id' => $rd]);

        $qrCode = QrCode::size(100)->generate($link);
        // return view('test',['qr'=>$qrCode]);
        $dompdf = new Dompdf();

        $html = '<html><body><img style="margin: 70px 100px; width: 400px; height:400px" src="data:image/png;base64,' . base64_encode($qrCode) . '" /></body></html>';
        $dompdf->loadHtml($html);

        $options = new Options();
        $options->set('isPhpEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Arial');
        $dompdf->setOptions($options);
        $dompdf->setPaper([0, 0, 500, 500], 'portrait');

        $dompdf->render();

        // Save PDF file
        $pdfFileName = $user->email . '_qr' . '.pdf';
        $pdfFilePath = public_path('uploads/users/QR/' . $pdfFileName);
        $pdfContent = $dompdf->output();
        file_put_contents($pdfFilePath, $pdfContent);

        // Save QR link details to database (assuming 'profileview' is your model)
        $qrlink = new profileview();
        $qrlink->user_id = $user->id;
        $qrlink->link = $link;
        $qrlink->qr = $pdfFileName;
        $qrlink->ran_id=$rd;
        $qrlink->save();

        // Update user status and save style
        $user->status = 'active';
        $user->save();

        $style = new style();
        $style->user_id = $user->id;
        $style->font = "Core Sans C";
        $style->save();

        // Store user session
        $u = [
            'name' => $user->name,
            'email' => $user->email,
        ];
        session()->put('user', $u);

        // Redirect based on user profile status
        if ($user->profile == 0) {
            return redirect()->route('onetimedummy');
        }

        session()->forget('email');
        return redirect()->route('products');
    } else {
        return redirect('enterotp')->with('otp', 'OTP does not match.');
    }    
}
    public function store_rid(){
        // Generate a random 4-digit number
        $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT); // Ensures it's exactly 4 digits
        // Check if the number already exists in the database
        while (profileview::where('ran_id', $randomNumber)->exists()) {
            // If it exists, generate a new random number
            $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        }
        return  $randomNumber;
    }

    public function login()
    {
        if (session()->has('user')) {
            return redirect()->route('products');
        } else {
            return view('login');
        }
    }

    public function authenticate(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $req->email)->first();

        if ($user === null) {
            return redirect()->back()->withInput()->withErrors(['email' => 'The email address you entered does not exist.']);
        }

        if (!Hash::check($req->password, $user->password)) {

            return redirect()->back()->withInput()->withErrors(['password' => 'The password you entered is incorrect.']);
        }

        $u = [
            'name' => $user->name,
            'email' => $user->email,
        ];

        if ($user->status === 'inactive') {
            return redirect('enterotp');
        }

        if ($user->profile == 0) {
            session()->put('user', $u);
            return redirect()->route('onetime');
        }

        session()->put('user', $u);
        return redirect()->route('products');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }

    public function Profile()
    {
        if (session()->has('user')) 
        {
            $user = User::where('email', session('user')['email'])->first();
            return view('profile', ['user' => $user]);
        } else {
            return redirect()->route('login');
        }
    }

    public function deletepage()
    {
        if (session()->has('user')) {

            return view('deleteaccount');
        } else {
            return redirect()->route('login');
        }
    }

    public function deleteuser(Request $req)
    {
        if (session()->has('user')) {
            $user = User::where('email', session('user')['email'])->first();
            $pv = profileview::where('user_id', $user->id)->first();
            if ($user->img != null) {
                $filePath = public_path('uploads/users/' . $user->img);
                // $newPath = str_replace('public/', '', $filePath);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
            if ($user->logo != null) {
                $filePath = public_path('uploads/users/' . $user->logo);
                // $newPath = str_replace('public/', '', $filePath);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
            $filePath = public_path('uploads/users/QR/' . $pv->qr);
            // $newPath = str_replace('public/', '', $filePath);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            User::destroy($user->id);
            session()->forget('user');
            return redirect()->route('login');
            
        } else {
            return redirect()->route('login');
        }
    }

    public function onetime()
    {
        if (session()->has('user')) 
        {
            $user = User::where('email', session('user')['email'])->first();
            if ($user->profile == 0) {
                return view('onetime', ['user' => $user]);
            } else {
                return redirect()->route('profile');
            }
        } else {
            return redirect()->route('login');
        }
    }
    
    public function onetimefirst()
    {
        if (session()->has('user')) 
        {
            $user = User::where('email', session('user')['email'])->first();
            if ($user->profile == 0) {
                return view('onetimefirst', ['user' => $user]);
            } else {
                return redirect()->route('profile');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function addcredentials(Request $req)
    {
       
        // try{
            $user = User::where('email', $req->email)->first();
            if ($req->img) {
                $profile = $req->file('img');
                $filename = time() . '_' . $profile->getClientOriginalName();
                $profile->move('uploads/users', $filename);
                $user->img = $filename;
            }
            if ($req->logo) {
                $logo = $req->file('logo');
                $logoname = time() . '_' . $logo->getClientOriginalName();
                $logo->move('uploads/users', $logoname);
                $user->logo = $logoname;
            }
    
            $user->company = $req->company;
            $user->profile = 1;
            $user->designation = $req->designation;
            $user->location = $req->location;
            $user->description = $req->description;
            $user->fb = $req->fb;
            $user->insta = $req->insta;
            $user->twitter = $req->twitter;
            $user->tiktok = $req->tiktok;
            $user->linkedin = $req->linkedin;
            $user->youtube = $req->youtube;
            $user->website = $req->website;
            $user->country = $req->cc;
            $user->contact = $req->code . $req->contact;
            $user->city = $req->city;
            $user->postal = $req->postal;
            $user->address = $req->address;
            $user->profile = 1;
            $user->save();
    
            return redirect()->route('onetimelayout');
        // } catch (\Exception $e) {
        //     abort(404, 'Page not found.');
        // }
    }

    public function updateprofile()
    {
        if (session()->has('user')) {
            $user = User::where('email', session('user')['email'])->first();
            return view('updateprofile', ['user' => $user]);
        } else {
            return redirect()->route('login');
        }
    }

    public function updatecredentials(Request $req)
    {
        // dd($req->website);
        // try{
            $user = User::where('email', $req->email)->first();
            if ($req->img) {
                if ($user->img != null) {
                    $filePath = public_path('uploads/users/' . $user->img);
                    // $newPath = str_replace('public/', '', $filePath);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                $profile = $req->file('img');
                $filename = time() . '_' . $profile->getClientOriginalName();
                $profile->move('uploads/users', $filename);
                $user->img = $filename;
            }
            if ($req->logo) {
                if ($user->logo != null) {
                    $filePath = public_path('uploads/users/' . $user->logo);
                    // $newPath = str_replace('public/', '', $filePath);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                $logo = $req->file('logo');
                $logoname = time() . '_' . $logo->getClientOriginalName();
                $logo->move('uploads/users/', $logoname);
                $user->logo = $logoname;
            }
    
            $user->name = $req->name;
            $user->company = $req->company;
            $user->designation = $req->designation;
            $user->location = $req->location;
            $user->description = $req->description;
            $user->fb = $req->fb;
            $user->insta = $req->insta;
            $user->twitter = $req->twitter;
            $user->tiktok = $req->tiktok;
            $user->website = $req->website;
            $user->linkedin = $req->linkedin;
            $user->youtube = $req->youtube;
            $user->country = $req->cc;
            $user->contact = $req->code . $req->contact;
            $user->city = $req->city;
            $user->postal = $req->postal;
            $user->address = $req->address;
            $user->profile = 1;
            $user->save();
    
            return redirect()->back()->with('message', 'Updated Successfully');
        // } catch (\Exception $e) {
        //         abort(404, 'Page not found.');
        // }
    }

    public function forgetpassword()
    {
        return view('forget');
    }

    public function searchemail(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if ($user === null) {
            return redirect()->back()->withInput()->withErrors(['email' => 'The email address you entered does not exist.']);
        }
        if ($user) {
            $existingVerification = Verify::where('email', $req->email)->first();
            if ($existingVerification) {
                $existingVerification->delete();
            }

            $otp = rand(1000, 9999);
            $verify = new Verify();
            $verify->otp = $otp;
            $verify->email = $user->email;

            $em = [
                'email' => $req->email
            ];

            session()->put('email', $em);
            Mail::to($user->email)->send(new OtpMail($otp));

            $verify->save();

            return redirect('OTP');
        } else {
            return redirect('forgetpassword')->withErrors(['error' => 'Email not found']);
        }
        return view('forget');
    }

    public function OTP()
    {
        return view('otp', ['email' => session('email')['email']]);
    }

    public function resendupdateotp()
    {
        if (session()->has('email')) {
            $existingVerification = Verify::where('email', session('email')['email'])->first();
            if ($existingVerification) {
                $existingVerification->delete();
            }

            $otp = rand(1000, 9999);
            $verify = new Verify();
            $verify->otp = $otp;
            $verify->email = session('email')['email'];
            $verify->save();

            Mail::to(session('email')['email'])->send(new OtpMail($otp));
            return view('otp', ['email' => session('email')['email']]);
        } else {
            return response()->json(['error' => 'Not Found'], Response::HTTP_NOT_FOUND);
        }
    }

    public function frgtotp(Request $req)
    {
        $d1 = $req->digit1;
        $d2 = $req->digit2;
        $d3 = $req->digit3;
        $d4 = $req->digit4;

        $final_digit = (int)($d1 . $d2 . $d3 . $d4);

        $verify = verify::where('email', $req->email)->first();

        if ($verify->otp == $final_digit) {
            verify::destroy($verify->id);
            
             $user = User::where('email', $req->email)->first();
             $user->password = Hash::make($req->password);
             $user->google = null;
             $user->save();

            return redirect('enterpass');
        } else {
            return redirect()->back()->withInput()->with('otp' , 'OTP does not match.');
        }
    }

    public function enterpass()
    {
        return view('enterpass', ['email' => session('email')['email']]);
    }

    public function changepass(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $req->email)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'The email address you entered does not exist.']);
        }
        // dd($req->password);
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('login')->with('success', 'Password changed successfully.');
    }

    public function updatep()
    {
        if (session()->has('user')) {

            return view('changepass');
        } else {
            return redirect()->route('login');
        }
    }

    public function updatePassword(Request $req)
    {
        if (session()->has('user')) {

            $validatedData = $req->validate([
                'password' => 'required|min:8|confirmed',
            ]);

            $user = User::where('email', session('user')['email'])->first();

            if ($user && Hash::check($req->currentpassword, $user->password)) {
                $user->password = Hash::make($req->password);
                $user->save();

                return redirect()->back()->with(['message' => 'Password Changed Successfully']);
            } else {
                return back()->withInput()->withErrors(['currentpassword' => 'Current password is incorrect']);
            }
        } else {
            return redirect()->route('login');
        }
    }
}
