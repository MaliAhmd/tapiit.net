<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<body class="bg-black">



    {{-- Form --}}
    <section class="mt-5 " style="background-color: black">
        <div class="container py-3">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image" style="width:65%;">
                </div>
                <div class="form-container">
                    <div class="form-wrapper">
                        <h4 class="form-title">Sign in your Admin Account</h4>

                        <form class="register-form" action="{{route('admin.auth')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label id="form2Example17" name="email" for="email">Admin Username*</label>
                                <input type="text" id="form2Example17" id="email" name="email" class="form-control" required>
                                @error('email')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="form2Example27" for="password">Admin Password*</label>
                                <input id="form2Example27" type="password" id="password" name="password" class="form-control"  required>
                                @error('password')
                                <div class="text-danger p-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="pt-1 mb-4 text-center">
                                <button class="btn btn-dark btn-lg btn-block" style="padding: 3px 30px;">Admin Login</button>
                            </div>
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
