<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
<link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<style>
.login-with-google-btn {
    display: block;
    text-decoration: none;
    color: #fff;
    background-color: #dd4b39;
    border: none;
    border-radius: 5px;
    padding: 5px 20px;
    margin-top: 10px;
    text-align: center;
    transition: background-color 0.3s ease;
}

.login-with-google-btn:hover {
    background-color: #c53727;
}

</style>

<body class="bg-black">
    <x-header />
    {{-- Form --}}
    <section class="mt-5 " style="background-color: black">
        <div class="container py-3 card-tops">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image" style="width:65%;">
                </div>
                <div class="form-container">
                    <div class="form-wrapper">
                        <h4 class="form-title">Sign in your account</h4>

                        <form class="register-form" action="/chkpass" method="post">
                            @csrf

                            <div class="form-group">
                                <label id="form2Example17" name="email" for="email" class="m-0">Email address*</label>
                                <input type="email" id="form2Example17" id="email" name="email" class="form-control m-0" required value="{{old('email')}}">
                                @error('email')
                                    <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="form2Example27" for="password" class="m-0">Password*</label>
                                <input id="form2Example27" type="password" id="password" name="password" class="form-control m-0" minlength="8" required>
                                @error('password')
                                    <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-1 mb-4 text-center d-flex flex-column">
                                <button class="btn btn-dark btn-lg btn-block" style="padding: 3px 30px;">Login</button>
                                <a href="/auth/google" class="login-with-google-btn">
                                    Sign in with Google
                                </a>
                                or
                                <p>Don't have an account? <a href="/signup">Register here</a></p>
                                <a class="small text-muted" href="{{route('forgetpassword')}}">Forgot password?</a>
                            </div>


                            @error('login')
                                <div class="text-danger p-1">{{ $message }}</div>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>
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
</html>
