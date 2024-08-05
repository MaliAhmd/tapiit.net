<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About NFC</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .futura{
                font-family:Futura Normal;
                    }
        .upper{
                text-transform:uppercase;
        }
        @media (max-width: 767px) {
            .nfc_row{
                display: flex;
                flex-direction: column-reverse;
            }
            .nfc_div{
                width: 100% !important;
                margin: 0 !important;
            }
            .nfc_img{
                width: 300px !important;
                height: 300px !important;
            }
            .no_app{
                width: 100% !important;
                margin: auto !important; 
            }
            .no_app h1{
                font-size: 30px !important;
                text-transform: uppercase !important;
            }
            .near_head{
                font-size: 24px !important; 
            }
            .nfc_is{
                width: 90% !important;
            }
        }
    </style>
</head>
<body>
    <x-header/> 
    <div class="container text-center" style="margin-top:7%;">
        <h1 class="mt-2 near_head futura" style="font-size: 36px; ">NEAR FIELD COMMUNICATION (NFC)</h1>
        <p class="mt-4 nfc_is" style="color: rgb(63, 63, 63); font-size: 15px;width:80%;margin:auto;">NFC is an acronym for Near Field Communication. NFC is a wireless technology that uses radio frequency to communicate with devices within 4 cm or less. Therefore, NFC business cards are a type of business card that communicates with a device, often a smartphone, within proximity. These cards are used to direct clients to your business information like your website page of choice, portfolio, or registration forms, tap to call, text, and download an app.</p>
    </div>
    <div class="container mb-4" style="margin-top: 10%">
        <div class="row text-center nfc_row">
            <div class="col-md-6 " style="margin-top:4%">
                <div class="no_app" style="margin-top:10%">
                    <h1 class ="futura upper "style="font-size: 36px; ">No App Needed Sharing. Just Tap or Scan The QR Code</h1>
                    <p class="mt-4" style="color: rgb(63, 63, 63); font-size: 15px;">An NFC business card has a chip installed inside it to send information to the device within the range. At Tapiit Communications your NFC business card lets you control what information you want people to see. You can program it even after you have handed it out to people, and hence you don’t have to worry about recalling for changes or reprinting other cards with different information, and the best thing about it... No app is needed.</p>
                </div>
            </div>
            <div class="col-md-6 text-center nfc_div" style="width: 45%;margin:auto">
                <img src="{{ asset('/nfc1.jpg') }}" class="nfc_img" style="width:100%" alt="">
            </div>
        </div>
    </div>
    
    <x-footer/>
</body>
</html>