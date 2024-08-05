<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <style>
        body {
            background: #000000 !important;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        p {
            font-size: 1rem;
            padding: 10px;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            margin-bottom: 20px;
            width: 15%;
        }

        .container {
            min-width: 5vw;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-sizing: border-box;
            text-align: center;
            display: flex;
            flex-direction: column;
            /* Align children vertically */
            align-items: center;
            /* Center horizontally */
        }

        .bgWhite {
            padding: 20px;
        }

        .title {
            font-weight: 400;
            margin-top: 20px;
            font-size: 24px;
        }

        .customBtn {
            border-radius: 10px;
            padding: 10px;
            color: #fff;
            background-color: rgb(0, 0, 0);
            text-decoration: none;
            margin-top: 20px;
            width: 80%;
        }

        form {
            /* margin-top: 10px; */
        }

        form input {
            width: 35px;
            height: 35px;
            text-align: center;
            margin-right: 5px;
            border-radius: 5px;
            font-size: 18px;
            border: 1px solid #ccc;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
        }

        p {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            text-decoration: underline;
            position: relative;
        }

        button:hover::after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 100%;
            height: 2px;
            transition: all 0.3s ease-in-out;
        }
           .container{
        width:90%  ; 
    
    }

        img {
            max-width: 100%;
            max-height: 100%;
            padding: 10px;
        }
            @media only screen and (max-width: 500px) {

            .wrapper {
                margin-top: 20px;
            }
        
            .logo {
                width: 30%;
                height: auto;
            }
        
            .container {
                padding: 10px;
                width:80%;
            }
             .bgWhite {
                    width:90%;
                }
        
            .title {
                font-size: 20px;
            }
        
            .customBtn {
                width: 90%;
            }
          
            form input {
                width: 30px;
                height: 30px;
                font-size: 16px;
            }
        
            p {
                font-size: 0.8rem;
            }
}
    </style>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="{{asset('logotr.png')}}" alt="Logo">
        </div>
        <div class="container w-75">
            <div class="title">Verify Code</div>
            @if(session('otp'))
        <div id="alertMessage" class="alert alert-danger p-1 w-50 mt-2" >
            {{ session('otp') }}
        </div>
    @endif
    <script>
        setTimeout(function(){
            var alertMessage = document.getElementById('alertMessage');
            if(alertMessage) {
                alertMessage.style.display = 'none';
            }
        }, 5000);
    </script>
            <p style="margin-bottom:1px;">Please enter the verification code sent to <u>{{$email}}</u></p>
            <p style="color:red; margin-top:-17px; font-size:14px;">Please check your spam folder if you haven't received the OTP in your inbox promptly.</p>
            <div class="bgWhite">
                <form action="{{route('inactiveUser')}}" method="POST">
                    @csrf
                    <input type="text" style="display: none;" name="email" value="{{$email}}">
                    {{-- <input type="text" style="display: none;" name="otp" value="{{$otp}}"> --}}
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 name="digit1">
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 name="digit2">
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 name="digit3">
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1 name="digit4">
                    <p>Didn't receive OTP? <a href="/resendotp">Resend OTP</a></p>
                    
                    <button class="customBtn">Verify</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let digitValidate = function (ele) {
            ele.value = ele.value.replace(/[^0-9]/g, '');
        }

        let tabChange = function (val) {
            let ele = document.querySelectorAll('.otp');
            if (ele[val - 1].value !== '' && val < ele.length) {
                ele[val].focus();
            } else if (ele[val - 1].value === '' && val > 1) {
                ele[val - 2].focus();
            }
        }
    </script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>