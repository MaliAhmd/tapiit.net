<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{ asset('css/signup.css') }}"> 
<link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
</head>

<body class="bg-black">
    <x-header />
    <section class="mt-5 " style="background-color: black; width: calc(100vh-100px);">
        <div class="container py-3">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image" style="width:65%";>
                </div>
                <div class="form-container">
                    <div class="form-wrapper">

                        <form action="/searchemail" method="post">
                            @csrf
                            <h5 class="form-title" style="letter-spacing: 1px;">Search Email</h5>
                            <div class="form-outline mb-4">
                                <label class="form-label m-0" for="form2Example17">Email address</label>
                                <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                                @error('email')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="pt-1 mb-4 text-center">
                                <button class="btn btn-dark btn-lg btn-block">Search Email</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>



</body>

</html>
