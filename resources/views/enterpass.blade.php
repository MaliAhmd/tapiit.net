<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{ asset('css/signup.css') }}"> 
     <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">

</head>

<body class="bg-black">
    <x-header />
    {{-- Form --}}
    <section class="mt-5 " style="background-color: black; width: calc(100vh-100px);">
        <div class="container py-3">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image">
                </div>
                <div class="form-container">
                    <div class="form-wrapper">
                        <form action="/changepassword" method="post">
                            @csrf
                            <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Change Password</h5>
                            <div class="form-outline mb-4" style="display: none;">
                                <input type="password" id="form2Example27" name="email" value="{{$email}}" class="form-control form-control-lg" />
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" id="password" name="password" class="form-control" minlength="8" required>
                                @error('password')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cpassword">Confirm Password*</label>
                                <input type="password" id="cpassword" name="password_confirmation" class="form-control">
                                <span id="passwordError" class="error"></span>
                                @error('password_confirmation')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-1 mb-4 text-center">
                                <button class="btn btn-dark btn-lg btn-block">Change Password</button>
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
    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('cpassword');
        const passwordError = document.getElementById('passwordError');
    
        function validatePassword() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                passwordError.textContent = 'Passwords do not match';
                confirmPasswordInput.setCustomValidity('Passwords do not match');
            } else {
                passwordError.textContent = '';
                confirmPasswordInput.setCustomValidity('');
            }
        }
    
        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);
    
    </script>


</body>

</html>

