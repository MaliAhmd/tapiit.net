<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
            background-color: black;
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            padding-top: 5px;
            align-items: center;
            max-width: 150px;
            height: auto;
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
        <table class="header">
            <tr>
                <td><strong>Order Date:</strong> {{$order->date}}</td>
                {{-- <td><strong>Order Time:</strong> 10:30 AM</td> --}}
            </tr>
        </table>
        <div class="logo">
            <!--<img src="logotr.png" alt="Tapit">-->
            <h2 style="color:white; padding:10px;">Tapiit</h2>
        </div>
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
            {{-- <div><strong>Estimated Delivery:</strong> March 25, 2024</div> --}}
            <div><strong>Order ID:</strong>{{$order->orderno}}</div>
            <div class="terms">
                <h3>Terms and Conditions</h3>
                <p>Thank you for your order! By proceeding with this purchase, you agree to abide by our terms and conditions. Please review them carefully.</p>
            </div>
            <div>
                <a href="{{route('admin.order')}}" class="btn btn-warning">Go Back</a>
                <a href="/admin/pdf/{{$order->orderno}}" class="btn btn-info">Print</a>
            </div>
        </div>
    </div>
</body>

</html>
