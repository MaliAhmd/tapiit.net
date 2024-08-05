<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\profileview;
use App\Models\card;
use App\Models\order;
use App\Models\orderhistory;
use App\Models\cart;
use App\Models\record;
use App\Models\reviews;
use App\Models\User;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use Illuminate\Support\Facades\File;
use Dompdf\Dompdf;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{
    public function users()
    {
        if (session()->has('admin')) {
            $data = user::where('role', '!=', 'admin')->get();
            $pv = profileview::all();

            return view('admin.users', [
                'title' => 'Users | Admin',
                'data' => $pv,
                // 'pvs' => $pv
            ]);
            return redirect()->route('cart');
        } else {
            return redirect()->route('adminn.login');
        }
    }
    
    public function deleteuser(Request $req)
    {
        $user = User::find($req->id) ; 
        $pv = profileview::where('user_id',$req->id)->first(); 
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
         profileview::destroy($pv->id);
         User::destroy($user->id);
          return redirect()->back()->with('message','User Deleted Successfully');
    }

    public function orders()
    {
        if (session()->has('admin')) {
            $data = order::all();
            $records = record::all();

            return view('admin.orders', [
                'title' => 'Order List | Admin',
                'orders' => $data,
                'records' => $records
            ]);
        } else {
            return redirect()->route('adminn.login');
        }
    }
    public function orderhistory()
    {
        if (session()->has('admin')) {
            $data = orderhistory::all();

            return view('admin.ordershistory', [
                'title' => 'Order List | Admin',
                'orders' => $data,
            ]);
        } else {
            return redirect()->route('adminn.login');
        }
    }
    public function reciept($id)
{
    if (session()->has('admin')) {
        $data = order::where('orderno',$id)->first();
        $records = record::where('ordernumber',$data->orderno)->get();

        $finalBill = 0; // Initialize final bill variable
        $Qty = 0; // Initialize quantity variable

        foreach ($records as $record) {
            $card = $record->card;

            $offersExist = offer::where('card_id', $card->id)
                ->where('buythis', $record->quantity)
                ->where('status', 1)
                ->exists();

            if (!$offersExist) {
                $subBill = number_format($card->saleprice * $record->quantity, 0);
                $finalBill += $subBill;
                $Qty += $record->quantity;
            } else {
                $offer = offer::where('card_id', $card->id)
                    ->where('buythis', $record->quantity)
                    ->where('status', 1)
                    ->first();

                $discountedPrice = $card->saleprice * $record->quantity;
                $discountedPrice = ($offer->getoff / 100) * $discountedPrice;
                $subBill = number_format(($card->saleprice * $record->quantity) - $discountedPrice, 0);
                $finalBill += $subBill;
                $Qty += $record->quantity;
            }
        }

        return view('admin.reciept', [
            'title' => 'Order List | Admin',
            'order' => $data,
            'records' => $records,
            'finalBill' => $finalBill, // Pass final bill to the view
            'Qty' => $Qty // Pass quantity to the view
        ]);
    } else {
        return redirect()->route('adminn.login');
    }
}


public function generatePDF($id)
{
    $data = Order::where('orderno', $id)->first();
    $records = Record::where('ordernumber', $data->orderno)->get();

    $html = view('admin.print', [
        'order' => $data,
        'records' => $records
    ])->render();


    $dompdf = new Dompdf();

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    return $dompdf->stream($data->orderno.'.pdf');
}



    public function ordersdel(Request $req)
    {
        if (session()->has('admin')) {
            order::destroy($req->id);

           return redirect()->back()->with('message','Order Deleted Successfully');
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function cardslist()
    {
        if (session()->has('admin')) {
            $data = card::all();
            return view('admin.cards', [
                'title' => 'Cards List | Admin',
                'data' => $data,
            ]);
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function addcard(Request $req)
    {
        if (session()->has('admin')) {
            $req->validate([
                'file.*' => 'required|mimes:jpeg,jpg,png|max:14048',
            ]);

            $filenames = [];

            foreach ($req->file('file') as $f) {
                $filename = time() . '_' . $f->getClientOriginalName();
                $f->move('uploads', $filename);
                $filenames[] = $filename;
            }

            $cardDesign = new card;
            $cardDesign->cardname = $req->cardname;
            $cardDesign->carddesc = $req->carddesc;
            $cardDesign->cardprice = $req->cardprice;
            $cardDesign->saleprice = $req->cardprice;
            $cardDesign->detail1 = $req->desc1;
            $cardDesign->detail2 = $req->desc2;
            $cardDesign->material = $req->material;
            $cardDesign->weight = $req->weight;
            $cardDesign->tag = $req->tag;
            $cardDesign->dimensions = $req->dimension;

            $cardDesign->files = implode(',', $filenames);

            $cardDesign->save();

            return redirect()->back()->with('success', 'Card design added successfully.');
        } else {
            return redirect()->route('adminn.login');
        }
    }


    public function updatecard(Request $req)
    {
        if (session()->has('admin')) {
            $cardDesign = card::find($req->card);

            $cardDesign->cardname = $req->cardname;
            $cardDesign->cardprice = $req->cardprice;
            $cardDesign->carddesc = $req->carddesc;
            $cardDesign->detail1 = $req->desc1;
            $cardDesign->detail2 = $req->desc2;
            $cardDesign->material = $req->material;
            $cardDesign->weight = $req->weight;
            $cardDesign->tag = $req->tag;
            $cardDesign->dimensions = $req->dimension;
            $cardDesign->save();

            return redirect()->route('admin.cardlist')->with('success', 'Card design updated successfully.');
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function deletecard(Request $req)
    {
        if (session()->has('admin')) {
            $card = card::find($req->id);

            if ($card) {
                $files = explode(',', $card->files);

                foreach ($files as $file) {
                    $filePath = public_path('uploads/' . $file);
                    // $newPath = str_replace('public/', '', $filePath);
                    if (file_exists($filePath)) {
                        File::delete($filePath);
                    }
                }
                $card->delete();

                return redirect()->back()->with('message', 'Card deleted successfully.');
            } else {
                return redirect()->route('admin.cardlist')->with('error', 'Card not found.');
            }
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function getreviews()
    {
        if (session()->has('admin')) {
            $reviews = reviews::all();
            return view('admin.reviews', [
                'title' => 'Reviews List | Admin',
                'data' => $reviews
            ]);
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function createsale(Request $req)
    {
        if (session()->has('admin')) {
            $card = card::find($req->id);
            $card->sale = $req->sale;
            $card->saleprice = $card->cardprice - (($card->cardprice * $req->sale) / 100);
            $card->save();

            return redirect()->route('admin.cardlist')->with('message', 'Sale Created successfully.');
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function salenoffer()
    {
        if (session()->has('admin')) {
            $sales = card::where('sale', '!=', 0)->get();
            $offers = offer::all();
            return view('admin.saleNoffer', [
                'title' => 'Reviews List | Admin',
                'data' => $sales,
                'offers' => $offers
            ]);
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function saledel(Request $req)
    {
        if (session()->has('admin')) {
            $card = card::find($req->id);
            $card->sale = 0;
            $card->saleprice = $card->cardprice;
            $card->save();

            return redirect()->back()->with('sale', 'Sale deleted successfully.');
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function offerdel(Request $req)
    {
        if (session()->has('admin')) {
            offer::destroy($req->id);

             return redirect()->back()->with('offer', 'Offer deleted successfully.');
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function offerstatus(Request $req)
    {
        if (session()->has('admin')) {
            $offer = offer::find($req->id);

            if ($offer->status == 0) {
                $offer->status = 1;
            } else {
                $offer->status = 0;
            }
            $offer->save();

            return redirect()->route('admin.salenoffer')->with('offer', 'Status Changed successfully.');
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function createoffer(Request $req)
    {
        if (session()->has('admin')) {
            $existingOffer = Offer::where('card_id', $req->id)
                      ->where('buythis', $req->buy)
                      ->exists();

        if (!$existingOffer) {
            $offer = new Offer();
            $offer->card_id = $req->id;
            $offer->buythis = $req->buy;
            $offer->getoff = $req->get;
            $offer->status = 1;
            $offer->save();
            return redirect()->back()->with('message', 'Offer created successfully.');
        }else{
            return redirect()->back()->with('message', 'Offer Already Exists.');
        }

        } else {
            return redirect()->route('adminn.login');
        }
    }


    public function getpdf(Request $req)
    {
        if (session()->has('admin')) {


            $user = user::where('email', $req->email)->first();
            $pvs = profileview::where('user_id', $user->id)->first();

            $pdfPath = public_path('uploads/users/QR') . '/' . $pvs->qr;
            // $newPath = str_replace('public/', '', $pdfPath);
            return response()->download($pdfPath);
        } else {
            return redirect()->route('adminn.login');
        }
    }

    public function getorderedpdf(Request $req)
    {
        if (session()->has('admin')) {
            $user = user::where('email', $req->email)->first();
            $pvs = profileview::where('user_id', $user->id)->first();

            $orderNo = $req->odr;

            $extension = pathinfo($pvs->qr, PATHINFO_EXTENSION);

            $newFileName = $orderNo . '_' . $pvs->qr;

            $pdfPath = public_path('uploads/users/QR') . '/' . $pvs->qr;
            // $newPath = str_replace('public/', '', $pdfPath);

            return response()->download($pdfPath, $newFileName);
        } else {
            return redirect()->route('adminn.login');
        }
    }
   
}
