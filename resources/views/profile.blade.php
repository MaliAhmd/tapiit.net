<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<body class="bg-black">
    <x-header />
    {{-- Form --}}
    <section class="mt-5 " style="background-color: black;">
        <div class="container py-3">
            <div class="card">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image">
                </div>
                <div class="form-container">
                    <div class="form-wrapper">

                        <div class="user-form">
                            <h4 class=" mb-0 pb-1 pt-3 text-center"
                                style="letter-spacing: 1px;  font-family: Futura normal ">
                                USER INFORMATION</h4>
                            <div class="fields">
                                <label for="" class="mt-4">Profile
                                    Picture</label>
                                <div id="imageContainer">
                                    @if ($user->img == null)
                                    <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
                                        style="width:100px;height:100px; object-fit:cover; border-radius:50%;">
                                    @else
                                    <img src="uploads/users/{{$user->img}}"
                                        style="width:100px;height:100px; object-fit:cover; border-radius:50%;">
                                    @endif
                                    
                                </div>

                            </div>

                            <div class="form-section">
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly type="text" placeholder="Full Name" class="input-field"
                                            value="{{$user->name}}" name="name" />
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly type="email" placeholder="Email" class="input-field"
                                            value="{{$user->email}}" name="email"  />
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->company}}" type="text" placeholder="Company"
                                            class="input-field" name="company" />
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->designation}}" type="text"
                                            placeholder="Designation" class="input-field" name="designation" maxlength="40" />
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->location}}" type="text" placeholder="Location"
                                            class="input-field" name="location" />
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->description}}" type="text"
                                            placeholder="Description" class="input-field" name="description"  maxlength="90"/>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                            </div>




                            <h4 class=" mb-0 pb-1 text-center" style="letter-spacing: 1px; font-family: Futura normal; text-transform: uppercase; ">
                                Social Information</h4>
                            <div class="fields">
                                <label for="" class="mt-4">Logo</label>
                                <div id="imageContainer1">
                                    @if ($user->logo == null)
                                    <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
                                        style="width:100px;height:100px; border-radius:50%;">
                                    {{-- <span style="width:100px;height:100px; border-radius:50%;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                          </svg></span> --}}
                                    @else
                                    <img src="uploads/users/{{$user->logo}}"
                                        style="width:100px;height:100px; border-radius:50%;">
                                    @endif
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input type="text" readonly placeholder="Website" name="website"
                                            value="{{$user->website}}" class="input-field" />
                                        <span class="logo"><img src="globe-solid.svg" alt="Website Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->fb}}" type="text" placeholder="Facebook"
                                            name="fb" class="input-field" />
                                        <span class="logo"><img src="facebook.svg" alt="Facebook Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->twitter}}" type="text" placeholder="Twitter"
                                            class="input-field" name="twitter" />
                                        <span class="logo"><img src="x-twitter.svg" alt="Twitter Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->insta}}" type="text" placeholder="Instagram"
                                            class="input-field" name="insta" />
                                        <span class="logo"><img src="instagram.svg" alt="Instagram Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->linkedin}}" type="text" placeholder="LinkedIn"
                                            class="input-field" name="linkedin" />
                                        <span class="logo"><img src="linkedin.svg" alt="LinkedIn Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->tiktok}}" type="text" placeholder="Tiktok"
                                            class="input-field" name="tiktok" />
                                        <span class="logo"><img src="tiktok.svg" alt="TikTok Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->youtube}}" type="text" placeholder="Youtube"
                                            class="input-field" name="youtube" />
                                        <span class="logo"><img src="youtube.svg" alt="YouTube Logo"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                            </div>

                            <h4 class=" mb-3 pb-1 text-center" style="letter-spacing: 1px; font-family: Futura normal; text-transform: uppercase; ">
                                Contact Information</h4>
                            <div class="form-section">
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->contact}}" type="text" placeholder="Contact Number" class="input-field" name="contact" />
                                        <span class="logo"><img src="phone-solid.svg" alt="Contact"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input type="text" readonly placeholder="Country" name="country " value="{{$user->country }}" class="input-field" />
                                        <span class="logo"><img src="earth-europe-solid.svg" alt="Country"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>
                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->city}}" type="text" placeholder="City" name="city" class="input-field" />
                                        <span class="logo"><img src="city-solid.svg" alt="City"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <input readonly value="{{$user->postal}}" type="text" placeholder="Postal Code" class="input-field" name="pcode" />
                                        <span class="logo"><img src="map-pin-solid.svg" alt="Postal code"></span>
                                        <!-- <i class="fas fa-times"></i> -->
                                    </div>
                                </div>

                                <div class="input-field-container">
                                    <div class="input-field-wrapper">
                                        <textarea readonly  placeholder="Address" class="input-field" name="address" cols="50" 
                                        style="width: 250%; align-self:center; padding:10px;">{{$user->address}}</textarea>
                                        <span class="logo"><img src="house-solid.svg" alt="Postal code"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function previewImage(event) {
            const input = event.target;
            const image = document.getElementById('userImage');
            const label = document.getElementById('uploadLabel');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    image.src = e.target.result;
                    label.style.display = 'block';
                    label.style.color = 'white';
                };
                reader.readAsDataURL(file);
            }
        }
        function previewImage1(event) {
            const input = event.target;
            const image = document.getElementById('logoImage');
            const label = document.getElementById('uploadLabel2');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    image.src = e.target.result;
                    label.style.display = 'block';
                    label.style.color = 'white';
                };
                reader.readAsDataURL(file);
            }
        }

    </script>


</body>

</html>