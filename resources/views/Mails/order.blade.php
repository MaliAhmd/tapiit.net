
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
        }

        .logo {
            text-align: center;
            margin:0  auto;
            margin-bottom: 20px;
        }
        .logo h1{
            margin: 1px auto;
        }
        .logo p{
            max-width: 75%;
           margin: 1px auto;
           font-size: 14px;
           color: rgb(114, 112, 112);
        }


        .details {
            margin-bottom: 20px;
        }

        .details h3 {
            margin-bottom: 10px;
        }

        .footer {
            text-align: left;
        }

        .terms {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
        }

    </style>
</head>

<body>
    <div class="container">
        
        <div class="logo">
            <img src="https://tapiit.net/top.png" style="margin: auto;">
        </div>

        <div class="logo" style="padding: 0 10px;">
            <h1>Welcome To The Tapiit Family !</h1>
            <p>Thank you for your purchase, we are delighted 
               that you have choosen to be a part of our NFC family.</p>
        </div>
        <table class="header">
            <tr>
                <td><strong>Order Date:</strong> {{$order->date}}</td>
            </tr>
        </table>
        <div class="details">
            <h3>User Details</h3>
            <table>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{$order->user->name}}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{$order->user->email}}</td>
                </tr>
                <tr>
                    <td><strong>Address:</strong></td>
                    <td>{{$order->user->address}}, {{$order->user->city}}, {{$order->user->country}}</td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td>
                    <td>{{$order->user->contact}}</td>
                </tr>
            </table>
        </div>
        <table class="order-details">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            @php
                $finalBill = 0; // Initialize final bill variable
                $Qty = 0; // Initialize quantity variable
            @endphp
            @foreach ($records as $record)
                @php
                    $card = $record->card;
                    $offersExist = DB::table('offers')
                                    ->where('card_id', $card->id)
                                    ->where('buythis', $record->quantity)
                                    ->where('status', 1)
                                    ->exists();
                    
                    if (!$offersExist) {
                        $subBill = number_format($card->saleprice * $record->quantity, 0);
                        $finalBill += $subBill;
                        $Qty += $record->quantity;
                        $price = $subBill;
                    } else {
                        $offer = DB::table('offers')
                                    ->where('card_id', $card->id)
                                    ->where('buythis', $record->quantity)
                                    ->where('status', 1)
                                    ->first();
                        
                        $discountedPrice = $card->saleprice * $record->quantity;
                        $discountedPrice = ($offer->getoff / 100) * $discountedPrice;
                        $subBill = number_format(($card->saleprice * $record->quantity) - $discountedPrice, 0);
                        $finalBill += $subBill;
                        $Qty += $record->quantity;
                        $price = $subBill;
                    }
                @endphp
                <tr>
                    <td>{{$card->cardname}}</td>
                    <td>{{$record->quantity}}</td>
                    <td>£ {{ number_format($price, 0) }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2"><strong>Total:</strong></td>
                <td>£ {{ $finalBill }}</td>
            </tr>
        </table>
        <div class="footer">
            <div><strong>Order ID:</strong>{{$order->orderno}}</div>
            <div class="terms">
                <h3>Terms and Conditions</h3>
                <p>Thank you for your order! By proceeding with this purchase, you agree to abide by our terms and conditions. Please review them carefully.</p>
            </div>
           
        </div>
        <hr style="width: 70%;">
        <div class="logo" style="padding: 0 10px; max-width: 100% !important;">
            <h3 style="color: red; margin: 3px;">IMPORTANT NOTE:</h3>
            <p style="color: rgb(94, 93, 93);">Now all you have to do is send your company logo (original graphics required as a
                PDF or Vector) to us at hello@tapiit.com with your Order Number included.
                Then our design team will send you a mockup of your digital business card</p>
        </div>
    </div>
</body>

</html>
