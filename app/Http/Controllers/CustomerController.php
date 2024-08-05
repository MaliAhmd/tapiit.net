<?php

namespace App\Http\Controllers;

use App\Models\offer;
use App\Models\card;
use App\Models\cart;
use App\Models\profileview;
use App\Models\style;
use App\Models\contact;
use App\Models\orderhistory;
use App\Models\order;
use App\Models\record;
use App\Models\reviews;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Checkout\Session as StripeSession;
use Illuminate\Support\Str;
use Stripe\Stripe;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class CustomerController extends Controller
{
    public function     index()
    {
        $data = Card::all();
        return view(
            'index',
            [
                'card' => $data,
            ]
        );
    }

    public function guidelines()
    {
        $cards = card::all();
        return view('design_guidelines', ['card' => $cards]);
    }
    
    public function faq()
    {
        $cards = card::all();
        return view('faq', ['card' => $cards]);
    }

    public function how_it_works()
    {
        $cards = card::all();
        return view('how_it_works', ['card' => $cards]);
    }

    public function products()
    {
        $data = card::all();
        $offers = offer::all();

        return view('products', [
            'cards' => $data,
            'offers' => $offers
        ]);
    }

    public function product($id)
    {
        $data = card::find($id);
        $offers = offer::where('card_id', $id)->where('status', '!=', 0)->get();
        $reviewCount = reviews::where('card_id', $id)->count();

        return view('details', [
            'card' => $data,
            'offers' => $offers,
            'review' => $reviewCount
        ]);
    }

    public function cartSuccess()
    {
        $date = Carbon::now()->format('Y-m-d');
        $u = user::where('email', session('user')['email'])->first();
        $orderNumber = 'ORD' . Carbon::now()->format('mdis');
        
        $cartItems = Cart::where('user_id', $u->id)->get();
    
        $finalBill = 0; 
        $Qty = 0; 
    
        foreach ($cartItems as $cartItem) {
            $oh = new orderhistory();
            $rec = new record();
            $rec->date = $date;
            $rec->user_id = $cartItem->user_id;
            $rec->ordernumber = $orderNumber;
            $rec->card_id = $cartItem->card_id;
            $rec->quantity = $cartItem->quantity;
            
            
            $oh->date = $date;
            $oh->user = $u->email;
            $oh->ordernumber = $orderNumber;
            $oh->card = $cartItem->card->cardname;
            $oh->quantity = $cartItem->quantity;
    
            $card = $cartItem->card;
            $offersExist = offer::where('card_id', $card->id)
                            ->where('buythis', $cartItem->quantity)
                            ->where('status', 1)
                            ->exists();
            
            if (!$offersExist) {
                $subBill = $card->saleprice * $cartItem->quantity;
            } else {
                $offer = offer::where('card_id', $card->id)
                            ->where('buythis', $cartItem->quantity)
                            ->where('status', 1)
                            ->first();
                
                $discountedPrice = $card->saleprice * $cartItem->quantity;
                $discountedPrice = ($offer->getoff / 100) * $discountedPrice;
                $subBill = $discountedPrice;
            }
    
            $rec->totalBill = $subBill; 
            $oh->totalBill = $subBill; 
            $rec->save();
            $oh->save();
    
            $finalBill += $subBill;
            $Qty += $cartItem->quantity;
        }
    
        $order = new order();
        $order->user_id = $u->id;
        $order->date = $date;
        $order->orderno = $orderNumber;
        $order->totalBill = $finalBill; 
        $order->status = false;
        $order->save();
        
        $data = Order::where('orderno', $orderNumber)->first();
        $records = Record::where('ordernumber', $orderNumber)->get();
        $qr = profileview::where('user_id', $data->user_id)->first();
        Mail::to($u->email)->send(new OrderMail($data, $records,$qr->qr));
    
        Cart::where('user_id', $u->id)->delete();

        return redirect()->route('cart')->with(['message' => $orderNumber]);
    }

    public function cartCancel()
    {
        return redirect()->route('cart')->withErrors(['error' => 'Payment Canceled']);
    }

    public function cart()
    {
        if (session()->has('user')) {
            $u = User::where('email', session('user')['email'])->first();
            $data = cart::where('user_id', $u->id)->get();
            $offers = offer::where('status', '!=', 0)->get();

            return view('cart', [
                'cards' => $data,
                'offers' => $offers,
            ]);
        } else {
            return redirect()->route('login');
        }
    }

    public function add2cart(Request $req)
    {
        if (session()->has('user')) {
            $card = card::find($req->id);
            $total = $req->qty * $card->saleprice;
            $u = user::where('email', session('user')['email'])->first();
            $existingCartItem = cart::where('user_id', $u->id)
                ->where('card_id', $req->id)
                ->first();

            if ($existingCartItem) {
                $existingCartItem->quantity += $req->qty;
                $existingCartItem->total += $total;
                $existingCartItem->save();
            } else {
                $cart = new cart();
                $cart->user_id = $u->id;
                $cart->card_id = $req->id;
                $cart->quantity = $req->qty;
                $cart->total = $total;
                $cart->save();
            }

            return redirect()->route('products');
        } else {
            return redirect()->route('login');
        }
    }

    public function removeFromCart($id)
    {
        if (session()->has('user')) {
            $cartItem = cart::find($id);

            if ($cartItem) {
                if ($cartItem->quantity > 1) {
                    $cartItem->quantity--;
                } else {
                    cart::destroy($id);
                }
                $cartItem->save();
            }

            return redirect()->route('cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function incFromCart($id)
    {
        if (session()->has('user')) {
            $cartItem = cart::find($id);
            $qty = $cartItem->quantity;
            $cartItem->quantity = $qty + 1;
            $cartItem->save();

            return redirect()->route('cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function removeitem($id)
    {
        if (session()->has('user')) {
            cart::destroy($id);
            return redirect()->route('cart');
        } else {
            return redirect()->route('login');
        }
    }

    public function layouts()
        {
            if (session()->has('user')) {
    
                $user = user::where('email', session('user')['email'])->first();
                $style = style::where('user_id', $user->id)->first();
                return view('layouts',['font' => $style->font]);
            } else {
                return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
            }
        }
    public function onetimelayout()
        {
            if (session()->has('user')) {
                $user = user::where('email', session('user')['email'])->first();
                $style = style::where('user_id', $user->id)->first();
                return view('onetimelayout',['font' => $style->font]);
            } else {
                return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
            }
        }

    public function preview(Request $req)
    {
        if (session()->has('user')) {

            $user = user::where('email', session('user')['email'])->first();
            $style = style::where('user_id', $user->id)->first();

            if ($req->id == 6) {
                return view('card', ['user' => $user, 'font' => $style->font]);
            }

            return redirect('layouts');
        } else {
            return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
        }
    }
    
    public function mockpreview($id)
    {
        
        if (session()->has('user')) {

            $user = user::where('email', session('user')['email'])->first();
            $style = style::where('user_id', $user->id)->first();

            if ($id == 6) {
                return view('card', ['user' => $user, 'font' => $style->font]);
            }

            return redirect('layouts');
        } else {
            return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
        }
    }

    public function selectlayout($id)
    {
        if (session()->has('user')) {
            $user = user::where('email', session('user')['email'])->first();
            $style = style::where('user_id', $user->id)->first();
          
            if ($id == 6) {
                return view('profileLayout6', ['user' => $user, 'font' => $style->font]);
            }
        } else {
            return redirect()->route('login');
        }
    }

    // public function applylayout(Request $req)
    // {
    //     // dd($req->all());
    //     if (session()->has('user')) {
    //         $user = user::where('email', session('user')['email'])->first();
    //         $user->layout = $req->id;
    //         $user->save();
            
    //         $style = style::where('user_id', $user->id)->first();
          

    //         return redirect()->back()->with('message','Layouts Applied Successfully');
    //     } else {
    //         return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
    //     }
    // }
    public function setfont(Request $req)
    {
        // dd($req->all());
        if (session()->has('user')) {
            $user = user::where('email', session('user')['email'])->first();
            $style = style::where('user_id', $user->id)->first();
            if($style)
            {
                $style->font = $req->fontstyle;
                $style->save();
            }else{
                $style = new style();
                $style->user_id = $user->id;
                $style->font = $req->fontstyle;
                $style->save();
            }

            return redirect()->back()->with('message','Font Style Applied Successfully');
        } else {
            return redirect()->route('login');
        }
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactstore(Request $req)
    {
        $data = new contact();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->company = $req->company;
        $data->message = $req->message;
        $data->save();

        return redirect()->route('contact');
    }

    public function stripe(Request $req)
    {
       if (session()->has('user')) {
           
          $user = User::where('email', session('user')['email'])
            ->whereNotNull('address')
            ->whereNotNull('contact')
            ->whereNotNull('country')
            ->whereNotNull('city')
            ->first();
            
            if($user == null){
                return redirect()->back()->with('billing','Please Enter Billing Information.');
            }
        $totalPayment = $req->total;

        Stripe::setApiKey('sk_test_51Oad4rK9FJ9sxaqhsEvY59vJpSptxiw5BxSuYOzF608SkhQABn5lO90C8wnbxFvRETDC4l2n8f693ZKuJg9rCpiK00O6rFN1pU');
        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'gbp',
                    'unit_amount' => $totalPayment * 100,
                    'product_data' => [
                        'name' => 'Tapit',
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('cart.success'),
            'cancel_url' => route('cart.cancel'),
        ]);

        return redirect()->away($session->url);
       } else {
            return redirect()->back()->withErrors(['login' => 'Invalid email or password.']);
        }
    }

    public function store(Request $request)
    {
        $review = new reviews([
            'date' => $request->date,
            'user_id' => $request->user_id,
            'card_id' => $request->card_id,
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        $review->save();

        return redirect()->back()->with('success', 'Review created successfully.');
    }


}

