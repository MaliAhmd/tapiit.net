<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Account</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .rndm-str{
         font-size:22px !important; letter-spacing:5px; font-weight:bold; background:linear-gradient(45deg, black, black); padding:5px 10px; border-radius:8px; color:white; font-family:consolas;   
        }
    </style>

</head>

<body class="bg-black">
    <x-header />

    {{-- Form --}}
    <section class="mt-5 " style="background-color: black; width: calc(100vh-100px);">
        <div class="container py-3">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-xl-10">
                    <div class=" card" style="border-radius: 1rem;height:75vh;border: 0.1875rem solid #000000; box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img style="background-color: black; height: 75vh;" src="g2-01.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:vh" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div id="errorContainer" style="position: absolte; top: 150px; right: 50px; z-index: 9000;">
                                        @if ($errors->any())
                                        <div class="alert alert-danger" style="text-align:center;">
                                            @foreach ($errors->all() as $error)
                                            <div>{{ $error }}</div>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                    <script>
                                        if (document.getElementById('errorContainer').innerHTML.trim() !== '') {
                                            setTimeout(function() {
                                                document.getElementById('errorContainer').style.display = 'none';
                                            }, 5000);
                                        }
                                
                                    </script>
                                    <form action="/delete" method="post">
                                        @csrf
                                        <h4 class="fw-normal mb-2 pb-2 text-center" style="letter-spacing: 1px;text-transform:uppercase">Delete Account</h4>
                                        <div class="form-outline mb-4">
                                            <!--<input type="password" id="form2Example27" name="password" class="form-control form-control-lg" required/>-->
                                            <!--<label class="form-label" for="form2Example27"> Current Password*</label>-->
                                        </div>
                                        @php
                                            $randomString = Str::random(4); 
                                            session(['random_string' => $randomString]); 
                                        @endphp
                                        
                                        <div class="form-outline mb-4">
                                            <input type="text" id="formRandomString" name="random_string" class="form-control form-control-lg" autocomplete="off" required/>
                                            <label class="form-label mt-3 " for="formRandomString" >Enter this Code: <span class="rndm-str">{{ $randomString }}</span></label>
                                        </div>
                                        <div class="pt-1 mb-4 text-center">
                                            <button type="submit" id="deleteButton" class="btn btn-danger btn-lg btn-block" style="padding: 3px 20px;" disabled>Delete</button>
                                        </div>
                                    </form>
                                    <script>
                                        document.getElementById("formRandomString").addEventListener("input", function() {
                                            var enteredString = this.value.trim();
                                            var randomString = "{{ $randomString }}";
                                            var deleteButton = document.getElementById("deleteButton");
                                    
                                            if (enteredString === randomString) {
                                                deleteButton.disabled = false;
                                            } else {
                                                deleteButton.disabled = true;
                                            }
                                        });
                                    </script>


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
