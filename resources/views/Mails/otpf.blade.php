<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            background: #000000;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            margin-bottom: 20px;
            width: 15%;
            height: 15%;
        }

        .container {
            min-width: 25vw;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            cursor: pointer;
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

        img {
            max-width: 100%;
            max-height: 100%;
            padding: 10px;
        }

    </style>
</head>

<body>
    {{-- <div class="wrapper">
        <div class="logo">
            <img src="logotr.png" alt="Logo">
        </div>
        <div class="container">
            <div class="title">Verify Code</div>
            <p>Your OTP Code Is </p>
            <div class="bgWhite"> --}}
                    @foreach(str_split($otp) as $digit)
                    <input class="otp" type="text" value="{{$digit}}" readonly>
                    @endforeach
                {{-- <button class='customBtn' onclick="copyOTP()">Copy</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.customBtn').addEventListener('click', function() {
                copyOTP();
            });
        });

        function copyOTP() {
            let otpInputs = document.querySelectorAll('.otp');

            let otpCode = Array.from(otpInputs)
                .map(input => input.values.trim())
                .join('');

            if (otpCode) {
                navigator.clipboard.writeText(otpCode).then(function() {}).catch(function(err) {
                    console.error('Unable to copy to clipboard', err);
                });
            } else {
                alert('No OTP available');
            }
        }

    </script> --}}

</body>

</html>
