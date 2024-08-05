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

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .container {
            max-width: 900px;
            /* width: 70%; */
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            text-align: center;
        }

        .logo {
            text-align: center;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .logo h1 {
            margin: 1px auto;
        }

        .logo p {
            max-width: 75%;
            margin: 1px auto;
            font-size: 14px;
            color: rgb(58, 58, 58);
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

        .code {
            border: 1px solid black;
            margin: 20px auto 30px auto;
            width: 150px;
            font-size: 26px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap !important;
            justify-content: center;
            width: 80%;
            margin: auto;
        }

        .cards .how-to-order-child {
            height: 300px;
            width: 200px;
            margin: 20px auto;
            border: 2px solid black;
            border-radius: 12px;
            display: flex;
            justify-content: baseline;
            align-items: center;
            flex-direction: column;
            padding: 0 10px;
        }

        .cards .how-to-order-child .img {
            height: 150px;
            width: 120px;
        }

        .cards .how-to-order-child p {
            font-size: 12px;
            text-align: center;
            color: rgb(45, 45, 45);

        }
        .box{
            margin: 5px;
        }
        .label{
            font-size: 12px;
        }
        @media screen and (max-width: 500px) {
            
            .cards {
                display: block;
            }
            .cards .how-to-order-child {
            display: block;
        }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="logo">
            <img src="https://tapiit.net/top.png" style="margin: auto;">
        </div>

        <div class="logo" style="padding: 0 10px;">
            <p>Thanks for choosing Tapiit!</p>
            <p>we hope you will be satisfied with our services and products!</p>
            <br>
            <br>
            <p>Please use the following OTP to complete your sign up procedures.</p>
            <div class="code" id="otpCode">
                @foreach(str_split($otp) as $digit)
                {{$digit}}
                @endforeach
            </div>
            <script>
                document.getElementById('otpCode').addEventListener('click', function() {
                    const tempInput = document.createElement('textarea');
                    const otpText = this.innerText;
                    tempInput.value = otpText;
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand('copy');
                    alert(otpText);
                    document.body.removeChild(tempInput);
                });
            </script>

            <p>After your account creation you can start to create your personalized digital business card.</p>
        </div>

        <p style="font-family:Futura Normal;font-size:22px; margin: 40px auto 5px auto;">HOW TO ORDER</p>
        <div class="cards">
            <div class="box">
                <div class="how-to-order-child">
                    <h3 class="futura upper">Step 1</h3>
                    <div class="img"></div>
                    <p>Create your free Tapiit account. Find a style and colour scheme that showcases your business's
                        personality. Link your social information to generate your profile ready for sharing</p>
                </div>
                <div class="label">
                    <hr style="width: 40px; height: 3px; background-color: black; border-color: black; border-radius: 12px;">
                    1. Create your profile
                </div>
            </div>
            <div class="box">
                <div class="how-to-order-child ">
                    <h3 class="futura upper">Step 2</h3>
                    <div class="img"></div>
                    <p>Choose your card, upon purchase our design team will work their magic and create your virtual
                        digital business card at no additional charge.</p>
                </div>
                <div class="label">
                    <hr style="width: 40px; height: 3px; background-color: black; border-color: black; border-radius: 12px;">
                    2. Order your card
                </div>
            </div>
            <div class="box">
                <div class="how-to-order-child">
                    <h3>Step 3</h3>
                    <div class="img"></div>
                    <p>When you recieve your card. It's simple... Just Tap, Scan and Communicate!</p>
                </div>
                <div class="label">
                    <hr style="width: 40px; height: 3px; background-color: black; border-color: black; border-radius: 12px;">
                    3. Tap, Scan, <br> Communicate
                </div>
            </div>
        </div>


    </div>
</body>

</html>
