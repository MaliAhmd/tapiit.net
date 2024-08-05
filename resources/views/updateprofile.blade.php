<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Profile</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap');
.form-control {
    display: block;
    width: 100%;
    height: auto;
    padding: 15px 19px;
    font-size: 1rem;
    line-height: 1.4;
    color: #475F7B;
    background-color: #FFF;
    border: 1px solid #DFE3E7;
    border-radius: .267rem;
    -webkit-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus {
    color: #475F7B;
    background-color: #FFF;
    border-color: #5A8DEE;
    outline: 0;
    box-shadow: 0 3px 8px 0 rgb(0 0 0 / 10%);
}
.intl-tel-input,
.iti{
  width: 100%;
}
</style>

<body>
    <x-header />
    {{-- Form --}}
    <section class="" style="background-color: black;">
        <div class="d-flex justify-content-center">
        @if(session('message'))
    <div id="alertMessage" class="alert alert-success w-50 text-center " >
        <p style="font-size:16px;">{{ session('message') }}</p>
    </div>
    @endif
    </div>
    <script>
        setTimeout(function(){
            var alertMessage = document.getElementById('alertMessage');
            if(alertMessage) {
                alertMessage.style.display = 'none';
            }
        }, 5000);
    </script>
        <div class="container py-3">
            <div class="card mt-4">
                <div class="image-container">
                    <img src="g2-01.png" alt="Image">
                </div>
                <div class="form-container">
                    <div class="form-wrapper">
                        <form action="/updatecredential" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="user-form">
                                <h4 class=" my-4 pb-1 pt-3 text-center" style="letter-spacing: 1px;  font-family: Futura normal ">
                                    UPDATE INFORMATION</h4>
                                <div class="fields">
                                    <label for="" class="mt-4">Profile Picture</label>

                                    <div id="imageContainer">
                                         @if ($user->logo != null)
                                        <img id="userImage" src="./uploads/users/{{$user->img}}" alt="User Image">
                                        <label id="uploadLabel" for="uploadInput">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-camera-fill" viewBox="0 0 16 16" stroke="white" stroke-width="1">
                                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                                            </svg>
                                        </label>
                                        <input type="file" id="uploadInput" accept="image/*" name="img" onchange="previewImage(event)">
                                        @else
                                        
                                         <img id="userImage" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="User Image">
                                        <label id="uploadLabel" for="uploadInput">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-camera-fill" viewBox="0 0 16 16" stroke="white" stroke-width="1">
                                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                                            </svg>
                                        </label>
                                        <input type="file" id="uploadInput" accept="image/*" name="img" onchange="previewImage(event)">
                                        @endif
                                    </div>

                                </div>

                                <div class="form-section">
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Full Name" class="input-field" value="{{$user->name}}" name="name" />
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input readonly type="email" placeholder="Email" class="input-field" value="{{$user->email}}" name="email" />
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Company" class="input-field" name="company" value="{{$user->company}}" />
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Job Title" class="input-field" name="designation" value="{{$user->designation}}" />
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Location URL" class="input-field" name="location" value="{{$user->location}}" />
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Company Background/Info" class="input-field" name="description" maxlength="90" value="{{$user->description}}" />
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                </div>



                                <h4 class=" mb-0 pb-1 text-center text-uppercase" style="letter-spacing: 1px; font-family: Futura normal;text-transform: uppercase; ">
                                    Social Information</h4>
                                <div class="fields">
                                    <label for="" class="mt-4">Logo</label>
                                    <div id="imageContainer1">
                                        @if ($user->logo != null)

                                        <img id="logoImage" src="./uploads/users/{{$user->logo}}" alt="Logo Image">
                                        <label id="uploadLabel2" for="uploadInput2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                                            </svg>
                                        </label>
                                        <input type="file" id="uploadInput2" name="logo" accept="image/*" onchange="previewImage1(event)">
                                        @else


                                        <img id="logoImage"  src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
                                        style="width:100px;height:100px; border-radius:50%;">
                                        <label id="uploadLabel2" for="uploadInput2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                                            </svg>
                                        </label>
                                        <input type="file" id="uploadInput2" name="logo" accept="image/*" onchange="previewImage1(event)">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-section">
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Website URL" name="website" value="{{$user->website}}" class="input-field" />
                                            <span class="logo"><img src="globe-solid.svg" alt="Website Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input value="{{$user->fb}}" type="text" placeholder="Facebook URL" name="fb" class="input-field" />
                                            <span class="logo"><img src="facebook.svg" alt="Facebook Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>

                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input value="{{$user->twitter}}" type="text" placeholder="Twitter URL" class="input-field" name="twitter" />
                                            <span class="logo"><img src="x-twitter.svg" alt="Twitter Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>

                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input value="{{$user->insta}}" type="text" placeholder="Instagram URL" class="input-field" name="insta" />
                                            <span class="logo"><img src="instagram.svg" alt="Instagram Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>

                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input value="{{$user->linkedin}}" type="text" placeholder="LinkedIn URL" class="input-field" name="linkedin" />
                                            <span class="logo"><img src="linkedin.svg" alt="LinkedIn Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>

                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input value="{{$user->tiktok}}" type="text" placeholder="Tiktok URL" class="input-field" name="tiktok" />
                                            <span class="logo"><img src="tiktok.svg" alt="TikTok Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>

                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input value="{{$user->youtube}}" type="text" placeholder="Youtube URL" class="input-field" name="youtube" />
                                            <span class="logo"><img src="youtube.svg" alt="YouTube Logo"></span>
                                            <!-- <i class="fas fa-times"></i> -->
                                        </div>
                                    </div>
                                </div>
                                <h4 class=" mb-3 pb-1 text-center text-uppercase" style="letter-spacing: 1px; font-family: Futura normal; text-transform: uppercase;">
                                    Contact Information</h4>
                                <div class="form-section">
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            
                                            <div class="d-flex align-items-center justify-content-between">
                                                @php
                                                    $phoneNumber = $user->contact;
                                                    $countryCode = substr($phoneNumber, 0, 3); 
                                                    $number = substr($phoneNumber, 3);
                                                @endphp
                                                <div id="countryCode" >
                                                    <input placeholder="+00" value="{{ $countryCode }}" list="countryCodes" id="countryCodeInput" name="code" class="input-field border border-0" style="margin-top:10px;height:40px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1), -2px -2px 4px rgba(0, 0, 0, 0.1); border-radius: .267rem;" onkeypress="validateInput(event)">
                                                        <datalist id="countryCodes">
                                                            <option data-countryCode="92" value="+92">
                                                            <option data-countryCode="376" value="+376">
                                                            <option data-countryCode="244" value="+244">
                                                            <option data-countryCode="1264" value="+1264">
                                                            <option data-countryCode="1268" value="+1268">
                                                            <option data-countryCode="54" value="+54">
                                                            <option data-countryCode="374" value="+374">
                                                            <option data-countryCode="297" value="+297">
                                                            <option data-countryCode="61" value="+61">
                                                            <option data-countryCode="43" value="+43">
                                                            <option data-countryCode="994" value="+994">
                                                            <option data-countryCode="1242" value="+1242">
                                                            <option data-countryCode="973" value="+973">
                                                            <option data-countryCode="880" value="+880">
                                                            <option data-countryCode="1246" value="+1246">
                                                            <option data-countryCode="375" value="+375">
                                                            <option data-countryCode="32" value="+32">
                                                            <option data-countryCode="501" value="+501">
                                                            <option data-countryCode="229" value="+229">
                                                            <option data-countryCode="1441" value="+1441">
                                                            <option data-countryCode="975" value="+975">
                                                            <option data-countryCode="591" value="+591">
                                                            <option data-countryCode="387" value="+387">
                                                            <option data-countryCode="267" value="+267">
                                                            <option data-countryCode="55" value="+55">
                                                            <option data-countryCode="673" value="+673">
                                                            <option data-countryCode="359" value="+359">
                                                            <option data-countryCode="226" value="+226">
                                                            <option data-countryCode="257" value="+257">
                                                            <option data-countryCode="855" value="+855">
                                                            <option data-countryCode="237" value="+237">
                                                            <option data-countryCode="1" value="+1">
                                                            <option data-countryCode="238" value="+238">
                                                            <option data-countryCode="1345" value="+1345">
                                                            <option data-countryCode="236" value="+236">
                                                            <option data-countryCode="56" value="+56">
                                                            <option data-countryCode="86" value="+86">
                                                            <option data-countryCode="57" value="+57">
                                                            <option data-countryCode="269" value="+269">
                                                            <option data-countryCode="242" value="+242">
                                                            <option data-countryCode="682" value="+682">
                                                            <option data-countryCode="506" value="+506">
                                                            <option data-countryCode="385" value="+385">
                                                            <option data-countryCode="53" value="+53">
                                                            <option data-countryCode="90392" value="+90392">
                                                            <option data-countryCode="357" value="+357">
                                                            <option data-countryCode="42" value="+42">
                                                            <option data-countryCode="45" value="+45">
                                                            <option data-countryCode="253" value="+253">
                                                            <option data-countryCode="1809" value="+1809">
                                                            <option data-countryCode="593" value="+593">
                                                            <option data-countryCode="20" value="+20">
                                                            <option data-countryCode="503" value="+503">
                                                            <option data-countryCode="240" value="+240">
                                                            <option data-countryCode="291" value="+291">
                                                            <option data-countryCode="372" value="+372">
                                                            <option data-countryCode="251" value="+251">
                                                            <option data-countryCode="500" value="+500">
                                                            <option data-countryCode="298" value="+298">
                                                            <option data-countryCode="679" value="+679">
                                                            <option data-countryCode="358" value="+358">
                                                            <option data-countryCode="33" value="+33">
                                                            <option data-countryCode="594" value="+594">
                                                            <option data-countryCode="689" value="+689">
                                                            <option data-countryCode="241" value="+241">
                                                            <option data-countryCode="220" value="+220">
                                                            <option data-countryCode="7880" value="+7880">
                                                            <option data-countryCode="49" value="+49">
                                                            <option data-countryCode="233" value="+233">
                                                            <option data-countryCode="350" value="+350">
                                                            <option data-countryCode="30" value="+30">
                                                            <option data-countryCode="299" value="+299">
                                                            <option data-countryCode="1473" value="+1473">
                                                            <option data-countryCode="590" value="+590">
                                                            <option data-countryCode="671" value="+671">
                                                            <option data-countryCode="502" value="+502">
                                                            <option data-countryCode="224" value="+224">
                                                            <option data-countryCode="245" value="+245">
                                                            <option data-countryCode="592" value="+592">
                                                            <option data-countryCode="509" value="+509">
                                                            <option data-countryCode="504" value="+504">
                                                            <option data-countryCode="852" value="+852">
                                                            <option data-countryCode="36" value="+36">
                                                            <option data-countryCode="354" value="+354">
                                                            <option data-countryCode="91" value="+91">
                                                            <option data-countryCode="62" value="+62">
                                                            <option data-countryCode="98" value="+98">
                                                            <option data-countryCode="964" value="+964">
                                                            <option data-countryCode="353" value="+353">
                                                            <option data-countryCode="972" value="+972">
                                                            <option data-countryCode="39" value="+39">
                                                            <option data-countryCode="1876" value="+1876">
                                                        </datalist>

                                                </div>
                                                <div>
                                                    <input type="tel" class="input-field" id="phoneNumber" name="contact" value="{{ $number }}" placeholder="Phone Number" style=" margin-left: 10px;" onkeypress="validateInput(event)">
                                                </div>
                                            </div>
                                            <span class="logo"><img src="phone-solid.svg" alt="Contact"></span>
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" name="cc" class="input-field" placeholder="Country" value="{{$user->country}}" />
                                            <span class="logo"><img src="earth-europe-solid.svg" alt="Country"></span>
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="City" name="city" class="input-field" value="{{$user->city}}" />
                                            <span class="logo"><img src="city-solid.svg" alt="City"></span>
                                        </div>
                                    </div>

                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input type="text" placeholder="Postal Code" class="input-field" name="postal" value="{{$user->postal}}" onkeypress="validateInput(event)" />
                                            <span class="logo"><img src="map-pin-solid.svg" alt="Postal code"></span>
                                        </div>
                                    </div>
                                    <div class="input-field-container">
                                        <div class="input-field-wrapper">
                                            <input placeholder="Address" class="input-field" name="address" value="{{$user->address}}" cols="50" style="width: 250%; align-self:center; padding:10px;">
                                            <span class="logo"><img src="house-solid.svg" alt="Postal code"></span>
                                        </div>
                                    </div>


                                </div>

                                <div class="pt-1 mb-2 text-center">
                                    <button type="submit" class="btn btn-dark btn-lg btn-block" style="padding: 5px 30px; font-size:16px">Update Info</button>
                                </div>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
    <script>
        function previewImage(event) {
            const input = event.target;
            const image = document.getElementById('userImage');
            const label = document.getElementById('uploadLabel');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
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

                reader.onload = function(e) {
                    image.src = e.target.result;
                    label.style.display = 'block';
                    label.style.color = 'white';
                };
                reader.readAsDataURL(file);
            }
        }
        // Function to validate input and allow only integers
    function validateInput(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
    // Allow only numbers (48-57) and the plus symbol (43)
    if (charCode !== 43 && (charCode < 48 || charCode > 57)) {
        evt.preventDefault();
    }
    }
    </script>


</body>

</html>
