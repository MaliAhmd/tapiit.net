<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <title>Buy - {{$card->cardname}}</title>

</head>
<body>
    <x-header />
    <div class="container " style="margin-top:2%">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-white"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tapiit Original Cards</li>
            </ol>
        </nav>
    </div>

    {{-- Pic --}}
    <div class="container" style="margin-top:3%">
        <div class="row">
            <!-- Image Column -->
            <div class="col-md-6" style="padding-left:5% ">
                <!-- Main image container -->
                <div class="product-image-container">
                    @php
                    $fileNames = explode(',', $card->files);
                    @endphp
                    <img id="mainImage" src="{{ asset('uploads/' . $fileNames[0]) }}" alt="#Matt / Black" class="img-fluid visible" style="width: 100% !important;
                    height: 450px !important;
                    aspect-ratio: 3/2 !important;
                    object-fit: contain !important;">
                </div>
                

                <div class="mt-4">
                    <!-- Small Images -->
                    @foreach ($fileNames as $fileName)
                    <img src="{{ asset('uploads/' . $fileName) }}" alt="" width="64" class="small-image me-3 active" style="width: 50px !important;
                    height: 50px !important;
                    aspect-ratio: 3/2 !important;
                    object-fit: contain !important;">
                    @endforeach

                </div>
            </div>
            <!-- Context Column -->
            <div class="col-md-5" style="padding-left:2%">
                <div class="product-meta">
                    <div class="mt-2 stars">
                        {{-- @for ($i = 0; $i < $review; $i++)  --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" class="bi bi-star-half" viewBox="0 0 16 16">
                                <path d="M0.39,6.765 C0.06,6.451 0.23,5.977 0.67,5.915 L5.568,5.219 L7.538,0.792 C7.735,0.402 8.268,0.402 8.465,0.792 L10.649,5.119 L15.547,5.815 C15.987,5.877 16.157,6.351 15.827,6.765 L11.298,10.121 L11.931,14.85 C11.853,15.393 11.515,15.64 11.07,15.443 L8,13.187 L4.93,15.443 C4.485,15.64 4.147,15.393 4.069,14.85 L4.702,10.121 L0.39,6.765 Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFD700" class="bi bi-star-half" viewBox="0 0 16 16">
                                <path d="M0.39,6.765 C0.06,6.451 0.23,5.977 0.67,5.915 L5.568,5.219 L7.538,0.792 C7.735,0.402 8.268,0.402 8.465,0.792 L10.649,5.119 L15.547,5.815 C15.987,5.877 16.157,6.351 15.827,6.765 L11.298,10.121 L11.931,14.85 C11.853,15.393 11.515,15.64 11.07,15.443 L8,13.187 L4.93,15.443 C4.485,15.64 4.147,15.393 4.069,14.85 L4.702,10.121 L0.39,6.765 Z"/>
                            </svg>
                            {{-- @endfor --}}

                            <span class="mr-3"> ({{$review}})</span>
                    </div>
                    <p class="mt-4 mb-2 medium" style="font-size:24px">{{$card->cardname}}</p>
                    <h2 class=" mt-4 futura" style="font-size:22px">
                        {{$card->carddesc}}
                    </h2>
                    @if ($card->sale !=0)
                    <div class="price-list mt-4" data-product-price-list="">
                        <span class="price">£{{$card->saleprice}}</span>
                        <del class="price1"> £{{$card->cardprice}}</del>
                        <span class="badge discount-badge save">SAVE {{$card->sale}}%</span>
                    </div>
                    @else
                    <div class="price-list mt-4" data-product-price-list="">
                        <span class="price">£{{$card->cardprice}}</span>
                    </div>
                    @endif

                    <p class="mt-2 tax">
                        VAT / Tax &amp; <a href="" class="link link--accented">Shipping calculated</a> at checkout
                    </p>
                </div>
                <form action="{{route('add2cart')}}" method="POST">
                    @csrf
                    <div>
                        <p>Quantity</p>
                        <div class="">
                            <div class="row justify-content-center">
                                <div class="quantity">
                                    <p class="btn " id="decrease"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg></p>
                                    <input type="text" class="quantity-input mx-2" value="1" name="qty" id="quantity" readonly style="width: 10%; height:35px; text-align:center;padding:0%">
                                    <input type="hidden" class="form-control quantity-input mx-2" value="{{$card->id}}" name="id" id="quantity" readonly style="width: 20%">
                                    <p class="btn" id="increase"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg></p>
                                </div>
                                <div class="offers mt-4">
                                    @foreach ($offers as $offer)

                                    <p>Buy {{$offer->buythis}} get {{$offer->getoff}}% off</p>
                                    @endforeach
                                </div>
                                <button type="submit" class="mt-4 add">ADD TO CART</button>
                                <a href="" class="never mt-3 text-center"><i class="bi bi-award me-2" style="font-size: 25px"></i> Never Go Back Guarantee</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- section --}}
    <div class="container p-4">
        <div class="row justify-content-between p-4" style="margin-top: 5%;">
            <div class="col-auto" style="width:100vw">
                <ul class="list-inline">
                    <li class="list-inline-item  active" id="description" onclick="showContent('description')">DESCRIPTION</li>
                    <li class="list-inline-item   " id="faqs" style="margin-left:5%" onclick="showContent('faqs')">FAQS</li>
                    <li class="list-inline-item   " id="guidelines" style="margin-left:5%" onclick="showContent('guidelines')">DESIGN GUIDELINES</li>
                    <!--<li class="list-inline-item  " id="delivery" style="margin-left:5%" onclick="showContent('delivery')">DELIVERY ESTIMATOR</li>-->
                </ul>
                {{-- Description Content --}}
                <div id="descriptionContent" style="display: block;width:100%" class="content-div show-content">
                    <p><span style="font-weight:bold;">Level Up Your Networking Game with Tapiit, </span>  {{$card->detail1}}.</strong></p>
                    <p> {{$card->detail2}}</p>
                    <p><strong>Dimensions:</strong>  {{$card->dimensions}}</p>
                    <p><strong>Weight:</strong>  {{$card->weight}} gram</p>
                    <p><strong>Material:</strong>  {{$card->material}}</p>
                </div>
                {{-- FAQS content --}}

                <div class="accordion" id="faqsContent" style="display: none;margin:auto;width:100%;">
                    <div class="accordion-item">
                        <input type="checkbox" id="accordion40">
                        <label for="accordion40" class="accordion-item-title"><span class="icon"></span>Do I or the person I'm meeting need an app to use Tapiit?</label>
                        <div class="accordion-item-desc">Sharing information is as simple as a tap, no apps needed. We utilize the power of your phone's built-in NFC technology, making it effortless to share your information using any Tapiit product. Enjoy the convenience and innovation, all in one tap! </div>
                    </div>
                    <div class="accordion-item">
                        <input type="checkbox" id="accordion41">
                        <label for="accordion41" class="accordion-item-title"><span class="icon"></span>How do I create my profile and decide what information I share with others using Tapiit? </label>
                        <div class="accordion-item-desc">Once you've become part of the Tapiit family by purchasing a product, you'll be warmly welcomed with an email to set up your Tapiit account. Dive in, and create your contact card, profiles, social builders and design forms for capturing valuable leads. Even better? You can update all your information in real time, swiftly modifying what you wish to share, all within a click. </div>
                    </div>
                    <div class="accordion-item">
                        <input type="checkbox" id="accordion42">
                        <label for="accordion42" class="accordion-item-title"><span class="icon"></span>What is your "Never Go Back Guarantee"?</label>
                        <div class="accordion-item-desc">We're so confident in the efficiency and effectiveness of our Tapiit business cards that we make you this promise: If you ever find the need to print another paper business card or create a QR code for business networking purposes again, we will refund your Tapiit card purchase in full.
                        </div>
                        <div class="accordion-item-desc">Experience the future of networking with Tapiit and never waste a lead again.</div>
                    </div>
                    <div class="accordion-item">
                        <input type="checkbox" id="accordion43">
                        <label for="accordion43" class="accordion-item-title"><span class="icon"></span>Is there a subscription fee?</label>
                        <div class="accordion-item-desc">Buying a Tapiit product gets you access to our software at no additional cost, if you're interested in unlocking more capabilities like bulk edits, we have a fantastic Pro version! This upgraded experience is available for just Rs.3,656.32 PKR pm per five users.</div>
                    </div>
                </div>
                {{-- guidelines content --}}
                <div id="guidelinesContent" style="display: none;" class="content-div">
                    <p>At Tapiit, we often encounter the question, "Can I preview my design before purchasing?" we believe that no logo uploader or previewer matches our in-house designers. We are committed to ensuring that your design, paired with our products, stands unrivalled in the market.</p>
                    <p>So here's our effortless process - once you've selected and purchased your products, we'll email you a design brief to complete. Then, our skilled design team will create a stunning visual mockup that's sent your way for review. Feel free to request as many revisions as you need until you're completely satisfied. And remember, if you're not thrilled for any reason, we have a "<u> go back guarantee"</u>.</p>
                    <br>
                    <p>Alternatively, if you have an in-house design team, they're welcome to follow our clear and convenient design guidelines here. With Tapiit, it's always about simplicity, quality, and your satisfaction.</p>
                </div>
                {{-- delivery content --}}
                <!--<div id="deliveryContent" style="display: none;" class="content-div">-->
                <!--    <div class="row">-->
                <!--        <div class="col-md-6">-->
                <!--            <div class="form-group mb-3">-->
                <!--                <label for="country">Country</label>-->
                <!--                <div class="input-group">-->
                <!--                    <select class="form-select w-50" id="country" aria-label="Select Country">-->
                <!--                        <option selected>---</option>-->
                <!--                        <option value="1">Pakistan</option>-->
                <!--                        <option value="2">India</option>-->
                <!--                        <option value="3">UK</option>-->
                <!--                        <option value="3">USA</option>-->
                <!--                        <option value="3">UAE</option>-->
                <!--                        <option value="3">UKraine</option>-->
                <!--                        <option value="3">Rusia</option>-->
                                        <!-- Add more countries as needed -->
                <!--                    </select>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="col-md-6">-->
                <!--            <div class="form-group mb-3">-->
                <!--                <label for="zip">Zip Code</label>-->
                <!--                <input type="text" class="form-control" id="zip" placeholder="Enter Zip Code">-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <button class="more" style="width: 20%">ESTIMATE</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>


    {{-- Orignal Card --}}

    <!--<div class="container text-center">-->
    <!--    <h9 style="font-size:13px;font-family:DIN Next Medium">THE Tapiit ORIGINAL CARD - AS TRUSTED BY</h9>-->
    <!--    <div class="logo-list-container">-->
    <!--        <div class="logo-list logo-list--grid became-visible">-->
    <!--            <div class="logo-list__list p-4">-->
    <!--                <div class="logo-list__item" reveal="">-->
    <!--                    <img src="//v1ce.co/cdn/shop/files/Original_card_partner_logos-02.png?v=1679662013&amp;width=200" alt="" loading="lazy" class="logo-list__image" height="39.18" width="117.84" style="object-fit: contain">-->
    <!--                </div>-->
    <!--                <div class="logo-list__item" reveal="">-->
    <!--                    <img src="//v1ce.co/cdn/shop/files/Original_card_partner_logos-04.png?v=1679662012&amp;width=200" alt="" loading="lazy" class="logo-list__image" height="39.18" width="117.84">-->
    <!--                </div>-->
    <!--                <div class="logo-list__item" reveal="">-->
    <!--                    <img src="//v1ce.co/cdn/shop/files/Original_card_partner_logos-06.png?v=1679662013&amp;width=200" alt="" loading="lazy" class="logo-list__image" height="39.18" width="117.84">-->
    <!--                </div>-->
    <!--                <div class="logo-list__item" reveal="">-->
    <!--                    <img src="//v1ce.co/cdn/shop/files/Original_card_partner_logos-05.png?v=1679662013&amp;width=200" alt="" loading="lazy" class="logo-list__image" height="39.18" width="117.84">-->
    <!--                </div>-->
    <!--                <div class="logo-list__item" reveal="">-->
    <!--                    <img src="//v1ce.co/cdn/shop/files/Original_card_partner_logos-03.png?v=1679662012&amp;width=200" alt="" loading="lazy" class="logo-list__image" height="39.18" width="117.84">-->
    <!--                </div>-->
    <!--                <div class="logo-list__item" reveal="">-->
    <!--                    <img src="//v1ce.co/cdn/shop/files/Original_card_partner_logos-01.png?v=1679662012&amp;width=200" alt="" loading="lazy" class="logo-list__image" height="39.18" width="117.84">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <script>
        function isInViewport1(element) {
            var rect = element.getBoundingClientRect();
            var windowHeight = window.innerHeight || document.documentElement.clientHeight;
            var tenPercentHeight = 0.1 * windowHeight;

            return (
                rect.top >= -tenPercentHeight &&
                rect.left >= 0 &&
                rect.bottom <= (windowHeight + tenPercentHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }


        // Select all elements with the .slide-in-bottom class
        var img2 = document.querySelectorAll('.logo-list__item');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            img2.forEach(function(image, index) {
                if (isInViewport1(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slide-up 1s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>

    {{-- First Impresion matters --}}
    <div class="container-fluid  mb-4 mt-4">
        <div class="row align-items-center" style="margin-top: 10%">
            <div class="col-md-6 position-relative">
                <div style="position: absolute; top: 0; right: 15%; bottom: 0; left: 0; background-color: #051e38;width:70%;"></div>
                <img class="imi" src="//v1ce.co/cdn/shop/files/V1CE-Shopify-5592.jpg?v=1681992074&amp;width=1000" style="visibility: visible; position: relative; z-index: 1;margin-left:15%;margin-top:10%;margin-bottom:10%;max-width:80%;max-height:100%">
            </div>
            <div class="col-md-6">
                <div class="tx2">
                    <span class="text-center give-it-top medium" style="display: block;font-size:15px">FIRST IMPRESSIONS MATTER</span>
                    <p class="text-center hey mt-4">REDEFINING NETWORKING EXCELLENCE</p>
                    <p style="font-size: 15px;padding:0 60px 0 40px;" class="text-center mt-4 forge">Forge unforgettable connections with a simple
                        tap of your Tapiit card, instantly sharing your digital business card with their phone. Easily
                        customise your Tapiit profile to fit any scenario.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            var windowHeight = window.innerHeight || document.documentElement.clientHeight;
            var tenPercentHeight = 0.5 * windowHeight;

            return (
                rect.top >= -tenPercentHeight &&
                rect.left >= 0 &&
                rect.bottom <= (windowHeight + tenPercentHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }


        // Select all elements with the .slide-in-bottom class
        var imga = document.querySelectorAll('.imi');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imga.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slideRightToLeft 0.5s forwards ${index * 0.1}s`;
                }
            });
        });

        var textElements2 = document.querySelectorAll('.tx2');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            textElements2.forEach(function(element, index) {
                if (isInViewport(element)) {
                    // Add 0.1s delay for each text element
                    element.style.animation = `slide-up 0.5s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>


    {{-- Always with you --}}
    <div class="container-fluid mb-4 mt-4">
        <div class="row align-items-center always_row" style="margin-top: 10%">
            <div class="col-md-6">
                <div style="padding-left:15%" class="tx1">
                    <span class="text-center give-it-top medium" style="display: block;font-size:15px">ALWAYS WITH YOU</span>
                    <p class="text-center hey mt-4 give-it-top">CONVENIENT TO CARRY</p>
                    <p style="font-size: 15px;" class="text-center mt-4">Leave paper behind and move to the modern day with Tapiit business cards; they always look as good as the first day you got them. With no limit on how many times you can use your card, you'll never run out of business cards when you need them most.</p>
                </div>
            </div>
            <div class="col-md-6 container-fluid position-relative">
                <div style="position: absolute; top: 0;right: 15%;  bottom: 0; left: 0; background-color: #051e38;width:70%;margin-left:30%"></div>
                <img class="exe" src="//v1ce.co/cdn/shop/files/V1CE-Shopify-5462.jpg?v=1681929943&width=1000" style="visibility: visible; position: relative; z-index: 1;margin-left:15%;margin-top:10%;margin-bottom:10%;max-width:80%;max-height:100%">
            </div>
        </div>
    </div>

    <script>
        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            var windowHeight = window.innerHeight || document.documentElement.clientHeight;
            var tenPercentHeight = 0.5 * windowHeight;

            return (
                rect.top >= -tenPercentHeight &&
                rect.left >= 0 &&
                rect.bottom <= (windowHeight + tenPercentHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }


        // Select all elements with the .slide-in-bottom class
        var imga1 = document.querySelectorAll('.exe');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imga1.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slideRightToLeft 0.5s forwards ${index * 0.1}s`;
                }
            });
        });
        var textElements1 = document.querySelectorAll('.tx1');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            textElements1.forEach(function(element, index) {
                if (isInViewport(element)) {
                    // Add 0.1s delay for each text element
                    element.style.animation = `slide-up 0.5s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>

    {{-- DURABLE DESIGN --}}
    <div class="container-fluid mb-4 mt-4">
        <div class="row align-items-center " style="margin-top: 10%">
            <div class="col-md-6 position-relative">
                <div style="position: absolute; top: 0; right: 15%; bottom: 0; left: 0; background-color: #051e38;width:70%"></div>
                <img class="dub" src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-5536.jpg?v=1681992449&width=1000" style="visibility: visible; position: relative; z-index: 1;margin-left:15%;margin-top:10%;margin-bottom:10%;max-width:80%;max-height:100%">
            </div>
            <div class="col-md-6">
                <div class="tx">
                    <span class="text-center give-it-top medium" style="display: block;font-size:15px">DURABLE DESIGN</span>
                    <p class="text-center hey mt-4">A CARD TO LAST A LIFETIME</p>
                    <p style="font-size: 15px;padding-right:30px" class="text-center mt-4 forge">Tapiit software enables instant updates to your business card, storing countless pre-made profiles for your convenience. Your Tapiit card is the ultimate, evergreen solution for expanding your business. Eradicating the issue of wasted, outdated cards.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            var windowHeight = window.innerHeight || document.documentElement.clientHeight;
            var tenPercentHeight = 0.5 * windowHeight;

            return (
                rect.top >= -tenPercentHeight &&
                rect.left >= 0 &&
                rect.bottom <= (windowHeight + tenPercentHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }


        // Select all elements with the .slide-in-bottom class
        var imga11 = document.querySelectorAll('.dub');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imga11.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slideRightToLeft 0.5s forwards ${index * 0.1}s`;
                }
            });
        });
        var textElements = document.querySelectorAll('.tx');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            textElements.forEach(function(element, index) {
                if (isInViewport(element)) {
                    // Add 0.1s delay for each text element
                    element.style.animation = `slide-up 0.5s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>

  
    
    {{-- <x-slider></x-slider> --}}

    {{-- Vice Vs Paper --}}
    <div class="container-fluid  slide-in1" style="margin-top: 10%">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('/lol.png')}}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <h3 class="text-center futura" style="margin-top:5%;font-size:48px">FAQ</h3>
    <div class="accordion">
        <div class="accordion-item">
            <input type="checkbox" id="accordion30">
            <label for="accordion30" class="accordion-item-title"><span class="icon"></span>Do I or the person I'm meeting need an app to use Tapiit?</label>
            <div class="accordion-item-desc">Sharing information is as simple as a tap, no apps needed. We utilize the power of your phone's built-in NFC technology, making it effortless to share your information using any Tapiit product. Enjoy the convenience and innovation, all in one tap! </div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion31">
            <label for="accordion31" class="accordion-item-title"><span class="icon"></span>How can I add my logo or design to my Tapiit product?</label>
            <div class="accordion-item-desc">At Tapiit, we often encounter the question, "Can I preview my design before purchasing?" we believe that no logo uploader or previewer matches our in-house designers. We are committed to ensuring that your design, paired with our products, stands unrivalled in the market. </div>
            <div class="accordion-item-desc">So here's our effortless process - once you've selected and purchased your products, we'll email you a design brief to complete. Then, our skilled design team will create a stunning visual mockup that's sent your way for review. Feel free to request as many revisions as you need until you're completely satisfied. And remember, if you're not thrilled for any reason, we have a "never go back guarantee". </div>
            <div class="accordion-item-desc">Alternatively, if you have an in-house design team, they're welcome to follow our clear and convenient design guidelines here. With Tapiit, it's always about simplicity, quality, and your satisfaction.
            </div>
        </div>

        <div class="accordion-item">
            <input type="checkbox" id="accordion32">
            <label for="accordion32" class="accordion-item-title"><span class="icon"></span>How do I create my profile and decide what information I share with others using Tapiit? </label>
            <div class="accordion-item-desc">Once you've become part of the Tapiit family by purchasing a product, you'll be warmly welcomed with an email to set up your Tapiit account. Dive in, and create your contact card, profiles, social builders and design forms for capturing valuable leads. Even better? You can update all your information in real time, swiftly modifying what you wish to share, all within a click. </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion33">
            <label for="accordion33" class="accordion-item-title"><span class="icon"></span>Is my data safe?</label>
            <div class="accordion-item-desc">Tapiit is as secure as any new-age technology and is as safe as the information you choose to put on it. NFC only works within an inch of a compatible device, and can only share information, it cannot extract it. You are in control and can choose what information you put on the card, so make sure you're only sharing things you'd feel safe to share with everyone.
            </div>
            <div class="accordion-item-desc">If you want to be sure that no one can get your information (from not just your Tapiit card but also your debit and credit cards) then take a look at our RFID blocking wallets.
            </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion34">
            <label for="accordion34" class="accordion-item-title"><span class="icon"></span>What is an NFC business card?</label>
            <div class="accordion-item-desc">A physical business card with a small integrated circuit and a receiver for wireless communication for NFC-enabled devices; such as a smartphone or tablet </div>
            <div class="accordion-item-desc">NFC stands for Near Field Communication and is the same technology that powers your contactless payments via your debit or credit card. </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion35">
            <label for="accordion35" class="accordion-item-title"><span class="icon"></span>How do I use an NFC business card?</label>
            <div class="accordion-item-desc">To use an NFC business card, simply hover your Tapiit card over a smartphone and the information on the card will be transferred. No apps are needed for the sharing of information.
            </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion36">
            <label for="accordion36" class="accordion-item-title"><span class="icon"></span>What can I share with my Tapiit card?</label>
            <div class="accordion-item-desc">Share your personal or professional story without limitations. Share a simple contact card. Or use our profile feature that Includes bios, roles, contact information, websites, social profiles, videos, images, FAQs, lead forms, appointment links, menus, portfolios, and more for a complete showcase of you and your company.
            </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion37">
            <label for="accordion37" class="accordion-item-title"><span class="icon"></span>What are the benefits of using a Tapiit card?</label>
            <div class="accordion-item-desc">In the modern age, digital business cards are a valuable tool for networking and building connections as they boost online visibility; allow for personalised customisation with various multimedia content; The benefits of using an NFC business card include convenience, versatility, and efficiency. It allows for the seamless transfer of information; eliminating the need for manual data entry. It also enables businesses to track the usage of their cards and analyze their marketing efforts. </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion38">
            <label for="accordion38" class="accordion-item-title"><span class="icon"></span>Can I reuse an NFC business card?</label>
            <div class="accordion-item-desc">Yes, an NFC business card can be reused multiple times. The information on the card can be updated and reprogrammed as needed.
            </div>
        </div>
        <div class="accordion-item">
            <input type="checkbox" id="accordion39">
            <label for="accordion39" class="accordion-item-title"><span class="icon"></span>How long does production take?</label>
            <div class="accordion-item-desc">We take pride in being the only company to manufacture, design and produce all of our cards in house. This means our production lead time is 1-2 days depending on how large of an order. Majority of the time, we aim to dispatch your order on the very next day of you approving the digital mockup or proof.
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center" style="margin-top: 5%">
        <button class="more">SEE OUR FAQ PAGE FOR MORE INFORMATION</button>
    </div>
    </div>

    <x-footer />



    <script>
        document.getElementById('increase').addEventListener('click', function() {
            // Increment the value when + button is clicked
            var quantityInput = document.getElementById('quantity');
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });

        document.getElementById('decrease').addEventListener('click', function() {
            // Decrement the value when - button is clicked, but not below 1
            var quantityInput = document.getElementById('quantity');
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        // Section

        function showContent(contentId) {
            // Remove 'active' class from all list items
            var allListItems = document.querySelectorAll('.list-inline-item');
            allListItems.forEach(function(item) {
                item.classList.remove('active');
            });

            // Add 'active' class to the clicked item
            var clickedItem = document.getElementById(contentId);
            if (clickedItem) {
                clickedItem.classList.add('active');
            }

            // Hide all content divs
            var allContentDivs = document.querySelectorAll('.col-auto > div');
            allContentDivs.forEach(function(div) {
                div.style.display = 'none';
            });

            // Show the selected content
            var selectedContent = document.getElementById(contentId + 'Content');
            if (selectedContent) {
                selectedContent.style.display = 'block';
            }

        }

        document.addEventListener("DOMContentLoaded", function() {
            // Get all small images
            const smallImages = document.querySelectorAll('.small-image');


            const mainImage = document.getElementById('mainImage');


            smallImages.forEach(function(smallImage) {

                smallImage.addEventListener('click', function() {

                    smallImages.forEach(function(img) {
                        img.classList.remove('active');
                    });

                    smallImage.classList.add('active');

                    // Change main image src directly
                    mainImage.classList.remove('visible');
                    mainImage.classList.add('hidden');
                    setTimeout(function() {
                        mainImage.src = smallImage.src;
                        mainImage.classList.remove('hidden');
                        mainImage.classList.add('visible');
                    }, 100);

                    // Change main image width
                    mainImage.style.width = "1200px";
                });
            });
        });

    </script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>
</html>
