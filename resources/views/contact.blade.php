<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        *{

            font-family:DIN Next Normal;
        }
    </style>
</head>

<body class="bg-black">
    <x-header />
    {{-- Form --}}
    <section class="mt-5 " style="background-color: black; height:60vh;">
        <div class="container py-3">
            <div class="row d-flex justify-content-center align-items-center" style="height:60vh">
                <div class="col col-xl-10 card-tops" style="height:60vh">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img style="background-color: black; height: 60vh;" src="g2-01.png" alt="login form"
                            class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="card"
                        style="border-radius: 1rem;height:75vh;border: 0.1875rem solid #000000; box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);display:flex;justify-content:center;">
                        <div class="row g-0" style="width: 100%">
                            <div class="d-flex justify-content-center">
                                <div class="card-body p-4 text-black " >
                                    <form action="{{ route('storecontact') }}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <h3 class="fw-normal mb-0 text-center" style="letter-spacing: 1px;font-family: Futura Normal, sans-serif;">CONTACT US</h3>
                                        <div class="form-group">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email address</label>
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="company">Company Name</label>
                                            <input type="text" id="company" name="company" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="message">Message</label>
                                            <textarea name="message" class="form-control form-control-lg" minlength="20" id="message" cols="30" rows="2" required></textarea>
                                        </div>
                                
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-dark btn-lg">Submit</button>
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