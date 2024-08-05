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
<style>


</style>
<body class="bg-black">
    <x-header />
    {{-- Form --}}
    <section class="mt-5 " style="background-color: black; width: calc(100vh-100px);">
        <div class="container py-3 card-tops">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image"style="width:65%";>
                </div>
                <div class="form-container">
                    <div class="form-wrapper">
                        <form action="{{ route('updatepass') }}" method="post">
                            @csrf
                            <div class="d-flex justify-content-center flex-column mb-4">
                            <p class="fw-normal m-0 text-center form-title" style="letter-spacing: 1px;font-size:36px;  text-transform: uppercase;font-family:Futura Normal">Change Password</p>
                            <span style="color:red; font-size:14px; margin: 0 auto;">You are unable to change your password while logged in via Google.</span>
                            </div>
                            @if (session('message'))
                            <div id="alertMessage" class="alert alert-success">
                                <p>{{ session('message') }}</p>
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
                            <div class="form-outline mb-4">
                                <label class="form-label m-0" for="currentPassword"> Current Password*</label>
                                <input required type="password" id="currentPassword" name="currentpassword" class="form-control form-control-lg" />
                                @error('currentpassword')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label m-0" for="newPassword">New Password*</label>
                                <input type="password" id="password" name="password" class="form-control" minlength="8" required>
                                @error('password')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label m-0" for="confirmPassword">Confirm Password*</label>
                                <input id="cpassword" type="password" id="confirmPassword" name="password_confirmation" class="form-control">
                                <span id="passwordError" class="error"></span>
                                @error('password_confirmation')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-1 mb-4 text-center">
                                <button class="btn btn-dark btn-lg btn-block"> Change </button><br>
                                
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
