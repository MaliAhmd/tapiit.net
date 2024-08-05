<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tapiit - Signup</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-black">
    <x-header />

    <section class="mt-5 " style="background-color: black">
        <div class="container py-3  card-tops">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image" style="width:65%";>
                </div>
                <div class="form-container">
                    <div class="form-wrapper">
                        <h4 class="form-title" style= "margin-top: 30px;">Sign Up your account</h4>

                       

                        <form class="register-form" action="{{route('reg')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" id="name" name="name" class="form-control m-0">
                              @error('name')
                              <div class="text-danger p-1">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="email">Email address*</label>
                              <input type="email" id="email" name="email" class="form-control m-0" required>
                              @error('email')
                                  <div class="text-danger p-1">{{ $message }}</div>
                              @enderror
                          </div>
                      
                          <div class="form-group">
                              <label for="password">Password*</label>
                              <input type="password" id="password" name="password" class="form-control m-0" minlength="8" required>
                              @error('password')
                              <div class="text-danger p-1">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <label for="cpassword">Confirm Password*</label>
                              <input type="password" id="cpassword" name="password_confirmation" class="form-control m-0">
                              <span id="passwordError" class="error" style="color: red;"></span>
                              @error('password_confirmation')
                              <div class="text-danger p-1">{{ $message }}</div>
                              @enderror
                          </div>
                      
                          <div class="pt-1 mb-4 text-center">
                              <button class="btn btn-dark btn-lg btn-block mb-2" style="padding: 3px 30px;">Signup</button>
                              <p>Already have an account? <a href="/login">Login here</a></p>
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
