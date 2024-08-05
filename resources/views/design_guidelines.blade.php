<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Guidelines</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/guidelines.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

</head>
<body>
    <x-header />

    <div class="container " style="margin-top:2%">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-white"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Design Guidelines</li>
            </ol>
        </nav>
    </div>
    <div class="container  pi" style="width: 70%">
        <h3 class="text-center h3" style="font-size: 48px;font-weight:500;">TAPIIT DESIGN GUIDELINES</h3>
        <p class="text-center">Before jumping into designing everything yourself, remember that Tapiit have their own in-house design team who can help you with this, all for free. All you have to do is send us your logo or design and we'll get the rest done for you. A proof will be sent to you for your approval before we go ahead with production.</p>
        <p class="text-center">Pre-designing your cards before uploading to Tapiit requires comfort with graphic design applications. Some technical knowledge is required to use our templates and to save your work in the best format for printing. But if you're a design professional then you're all over this already.</p>
    </div>

    {{-- DOWNLOAD --}}



    {{-- Helpful Tips --}}
    <div class="container p-4 text-center" style="margin-top: 5%">
        <header class="section__header section__header--center">
            <div class="text-container">
                <h3 class="heading h3" style="font-size:48px;font-family:Futura Normal">HELPFUL TIPS</h3>
            </div>
        </header>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="d-flex flex-column align-items-center mx-2 p-4 sid" style="max-width: 200px;">
                <img src="//v1ce.co/cdn/shop/files/dims.png?v=1679503984&amp;width=300" alt="Dimensions" style="max-width: 100%;">
                <div class="text-center mt-3 ">
                    <h5 class="below">Dimensions</h5>
                    <p class="mt-4" style="font-size:15px">Our cards can be printed edge to edge and are 54mm x 86mm. <strong>Please don't include trim marks.</strong></p>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center mx-2 p-4 sid" style="max-width: 200px;">
                <img src="//v1ce.co/cdn/shop/files/File_9ddc7bcc-81e1-455e-b6df-40050d2e2a78.png?v=1679503779&amp;width=300" alt="File Format" style="max-width: 100%;">
                <div class="text-center mt-3 ">
                    <h5 class="below">File Format</h5>
                    <p class="mt-4" style="font-size:15px">We accept the following file types up to 50mb in size. <br><strong>PNG, JPEG, SVG, PDF, AI, PSD, INDD.</strong></p>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center mx-2 p-4 sid" style="max-width: 200px;">
                <img src="//v1ce.co/cdn/shop/files/CMYK_icon_ac3f80b8-bcce-41e8-a188-0d4f1c088743.png?v=1679503328&amp;width=300" alt="CMYK" style="max-width: 100%;">
                <div class="text-center mt-3 ">
                    <h5 class="below">CMYK</h5>
                    <p class="mt-4" style="font-size:15px">We can only print in CMYK, so no spot colours. <strong>Only Tapiit Bamboo and Original Cards can be printed in CMYK.</strong></p>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center mx-2 p-4 sid" style="max-width: 200px;">
                <img src="//v1ce.co/cdn/shop/files/mins.png?v=1679504561&amp;width=300" alt="Minimum sizes" style="max-width: 100%;">
                <div class="text-center mt-3 ">
                    <h5 class="below">Minimum Sizes</h5>
                    <p class="mt-4" style="font-size:15px">Thicker lines print better, we recommend a <strong>minimum line weight of 0.5pt and a minimum font size of 8pt.</strong></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Select all elements with the .slide-in-bottom class
        var img = document.querySelectorAll('.sid');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            img.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slide-up 1s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>

    {{-- 3 li --}}
    <div class="container text-center three_li mt-4">
        <div class="content-box lists ">
            <ol class="text-left">
                <li class="mt-3" style="font-size:15px">Make sure you've accounted for a <strong>2mm bleed</strong> in your design; this is where your background extends beyond the edge of the card edge.</li>
                <li class="mt-3" style="font-size:15px">Where possible designs featuring graphics or text should be submitted as <strong>vector-based PDFs</strong>. To keep your text in vector format, we recommend applications like Adobe Illustrator and Adobe InDesign. <em>Please note, saving text in JPEG format could result in 'fuzzy' edges.</em></li>
                <li class="mt-3" style="font-size:15px">When your design features a mix of photography and text, make sure your photographs are <strong>300 dpi</strong>, and that your final design is saved as a <strong>PDF</strong>.</li>
            </ol>
        </div>
    </div>

    {{-- FAQ --}}
    <h3 class="text-center h3" style="margin-top:5%;font-size:48px;font-family:Futura Normal">FAQ</h3>
    <div class="accordion">
        <div class="accordion-item">
            <input type="checkbox" id="accordion1">
            <label for="accordion1" class="accordion-item-title"><span class="icon"></span>Can I customise the back of the card?</label>
            <div class="accordion-item-desc">Tapiit do not offer customised backs at this moment in time. We only offer customised fronts. </div>
            <div class="accordion-item-desc">The backs hold a QR code that is used as a working method to link your card to your account, or as a way to share your details to a device that does not have NFC capabilities. </div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion2">
            <label for="accordion2" class="accordion-item-title"><span class="icon"></span>Why can't I print in full colour on the metal cards?</label>
            <div class="accordion-item-desc">The metal cards are made using a laser etching process rather than a traditional printing process and therefore can only be two tone. The base colour and the artwork colour. You can see the two colours on the metal cards colour selector.</div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion3">
            <label for="accordion3" class="accordion-item-title"><span class="icon"></span>Do I need to prepare my designs before I order?</label>
            <div class="accordion-item-desc">No you do not need to prepare your designs before you make your order, although it will of course speed up the process if they're ready to print. <br> Once you've made your purchase we will patiently wait until you're ready to send over your artwork. If you have any further questions relating to artwork then you can reach out to our customer services team.
            </div>
        </div>
    </div>

    {{-- Select your card --}}
    <div class="conatiner" style="margin-top:10%">
        <h2 class="text-center now">NOW ALL YOU NEED TO DO IS</h2>
        <h1 class="text-center mt-4 card_head" style="font-size: 48px;font-family: Futura Normal">SELECT YOUR CARD</h1>
    </div>
    {{-- NEXT GENERATION CONNECTIONS --}}
    <div class="container " style="margin-top: 5%">
        {{-- <p class="text-center ell">NEXT GENERATION CONNECTIONS</p> --}}
        <div class="container" style="margin-top: 2%;margin-bottom:10%">
            @include('components/products')


    </div>
    </div>
    {{-- <div class="container" style="margin-top: 5%;">
        <div class="row">
            <!-- Image Column -->
            <div class="col-md-6">
                <!-- Main image container -->
                <img id="mainImage" src="//v1ce.co/cdn/shop/files/MattBlack1.jpg?v=1682614366&amp;width=1200" alt="#Matt / Black" class="img-fluid visible ach" style="width: 1200px; height: 500px;">

                <div class="mt-4">
                    <!-- Small Images -->
                    <img src="//v1ce.co/cdn/shop/files/MattBlack1.jpg?v=1682614366&amp;width=1200" alt="" width="64" class="small-image me-3 active">
                    <img src="//v1ce.co/cdn/shop/products/V1CE-Shopify-07380.jpg?v=1695202043&width=1200" width="64" alt="" class="small-image me-3">
                    <img src="//v1ce.co/cdn/shop/products/Plastic-matt-black.jpg?v=1695202043&width=700" width="64" alt="" class="small-image me-3">
                    <img src="//v1ce.co/cdn/shop/files/Dillard_s-Black-PVC.png?v=1695202043&width=1200" width="64" alt="" class="small-image me-3">
                    <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify--5_25f843bb-5299-455b-b8e4-26d0a401c060.jpg?v=1683397781&width=700" width="64" alt="dfd" class="small-image me-3">
                </div>
            </div>
            <script>
                function isInViewport(element) {
                    var rect = element.getBoundingClientRect();
                    var windowHeight = window.innerHeight || document.documentElement.clientHeight;
                    var tenPercentHeight = 0.8 * windowHeight;

                    return (
                        rect.top >= -tenPercentHeight &&
                        rect.left >= 0 &&
                        rect.bottom <= (windowHeight + tenPercentHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }


                // Select all elements with the .slide-in-bottom class
                var img1 = document.querySelectorAll('.ach');

                // Add a scroll event listener to check for animations
                window.addEventListener('scroll', function() {
                    img1.forEach(function(image, index) {
                        if (isInViewport(image)) {
                            // Add 0.1s delay for each image
                            image.style.animation = `slide-up 1s forwards ${index * 0.1}s`;
                        }
                    });
                });

            </script>

            <!-- Context Column -->
            <div class="col-md-6" style="padding-left: 5%;">

                <div class="product-meta">
                    <div class="mt-2 rat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <span class="mr-3"> (1,083)</span>
                    </div>
                    <h1 class="mt-4 mb-2" style="font-size: 36px;font-family: Futura Normal,sans-serif;color:#ODODOD">Tapiit Original CARDS</h1>
                    <div class="price-list mt-4" data-product-price-list="">
                        <span class="price">Rs.14,451.83</span>
                        <del class="price1"> Rs.21,679.55</del>
                        <span class="badge discount-badge save1">SAVE 33%</span>
                    </div>
                    <hr>
                </div>
                <div>
                    <p>Quantity</p>
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="quantity">
                                <a class="btn " id="decrease"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                    </svg></i></a>
                                <input type="text" class="form-control quantity-input mx-2" value="1" id="quantity" readonly style="width: 20%">
                                <a class="btn" id="increase"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                    </svg></a>
                            </div>
                            <div class="offers mt-4">
                                <p>Buy 5 get 10% off</p>
                                <p>Buy 15 get 15% off</p>
                                <p>Buy 30+ get 20% off</p>
                            </div>
                            <button class="mt-4 add" style="font-size: 13px;font-family;DIN Next Medium">ADD TO CART</button>
                            <a href="" class="mt-3 text-center more_pay" style="font-size: 15px">More payment options</a>
                            <p class="mt-3" style="font-size: 15px">Shipped worldwide within 6 working days*</p>
                            <p class="social" style="font-size: 15px">Share
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <x-footer />

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get all small images
            const smallImages = document.querySelectorAll('.small-image');

            // Get the main image
            const mainImage = document.getElementById('mainImage');

            // Loop through each small image
            smallImages.forEach(function(smallImage) {
                // Add click event listener to each small image
                smallImage.addEventListener('click', function() {
                    // Remove border from all small images
                    smallImages.forEach(function(img) {
                        img.classList.remove('active');
                    });
                    // Add border to the clicked small image
                    smallImage.classList.add('active');

                    // Change main image src directly
                    mainImage.classList.remove('visible');
                    mainImage.classList.add('hidden');
                    setTimeout(function() {
                        mainImage.src = smallImage.src;
                        mainImage.classList.remove('hidden');
                        mainImage.classList.add('visible');
                    }, 100); // Change image after 500ms (same as CSS transition time)

                    // Change main image width
                    mainImage.style.width = "1200px"; // Change to the desired width
                });
            });
        });

    </script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>




</body>
</html>