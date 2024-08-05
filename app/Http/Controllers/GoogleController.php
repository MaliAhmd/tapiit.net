<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\style;
use App\Models\profileview;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use Dompdf\Dompdf;
use BaconQrCode\Writer;
use Illuminate\Support\Facades\Crypt;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if (!$existingUser) {
            $newUser = new User();
            $newUser->google = $user->getId();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->layout = 1;
            $newUser->password = Hash::make($user->getName() . '@' . $user->getId());
            $newUser->status ='active';
            $newUser->save();
            $regUser = User::where('email', $user->getEmail())->first();
            $link = route('profileview', ['email' => Crypt::encrypt($user->email)]);
            $renderer = new ImageRenderer(
                new RendererStyle(400),
                new \BaconQrCode\Renderer\Image\SvgImageBackEnd()
            );
            $writer = new Writer($renderer);
            $qrCode = $writer->writeString($link);

            $dompdf = new Dompdf();

            $html = '<html><body><img style="margin: 70px 100px" src="data:image/svg+xml;base64,' . base64_encode($qrCode) . '" /></body></html>';
            $dompdf->loadHtml($html);

            $options = new Options();
            $options->set('isPhpEnabled', true);
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);
            $options->set('defaultFont', 'Arial');
            $dompdf->setOptions($options);
            $dompdf->setPaper([0, 0, 500, 500], 'portrait');

            $dompdf->render();

           
            $pdfFileName = $user->email . '_qr' . '.pdf';
            $pdfFilePath = public_path('uploads/users/QR/' . $pdfFileName);
            $pdfContent = $dompdf->output();

            // $newPath = str_replace('public/', '', $pdfFilePath);
            file_put_contents($pdfFilePath, $pdfContent);
            
            
            $style = new style();
            $style->user_id = $regUser->id;
            $style->font = "Core Sans C";
            $style->save();
            
            $qrlink = new profileview();
            $qrlink->user_id = $regUser->id;
            $qrlink->link = $link;
            $qrlink->qr = $pdfFileName;
            $newUser->status = 'active';
            
            $newUser->save();
            $qrlink->save();
            
            $u = [
                'name' => $regUser->name,
                'email' => $regUser->email,
            ];
            session()->put('user', $u);
            if ($regUser->profile == 0) {
                return redirect()->route('onetime');
            }
            return redirect('products');
        } else {
            if ($existingUser->google == null) {
                $newUser = User::where('email', $user->getEmail())->first();
                $newUser->google = $user->getId();
                $newUser->password = Hash::make($user->getName() . '@' . $user->getId());
                $newUser->save();
                $u = [
                    'name' => $existingUser->name,
                    'email' => $existingUser->email,
                ];
                session()->put('user', $u);
            } else {
                $u = [
                    'name' => $existingUser->name,
                    'email' => $existingUser->email,
                ];
                session()->put('user', $u);
                if ($existingUser->profile == 0) {
                    return redirect()->route('onetime');
                }
                return redirect('products');
            }
        }
        return redirect('/');
    }
}