<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      
        .image-container {
            position: relative;
            width: 446px;
            height: 446px;
        }

        .image-container img {
            position: absolute;
            transition: visibility 0.6s linear;
            transform-origin: right center;
        }

        .image-container img.active {
            z-index: 1;
            visibility: visible;
            animation: openFromRight 0.6s ease-in-out forwards;
        }

        .image-container img.inactive {
            z-index: -1;
            visibility: hidden;
        } 

        @keyframes openFromRight {
            from {
                transform: scaleX(0);
            }
            to {
                transform: scaleX(1);
            }
        }
        .tapiit-features-div h1{
    font-size: 3vh;
    margin-top: 10vh;
    display: inline-block;
    font-weight:bold;
}

.how-to-order{
    height:80vh;
    justify-content:center;
    margin-top:3rem;
}

.how-to-order h2{
    font-size: 4vh;
    margin-top: 10vh;
    display: inline-block;
    font-weight:bold;
}

/*.how-to-order-child:hover{*/
/*    transform: scale(1.03);*/
/*}*/

.how-to-order-child img{
    margin-left: auto;
    margin-right: auto;
    height: 300px;
    width: 300px;
    margin-bottom:1.5rem;
}

.how-to-order-child h3{
    font-size: 3vh;
    padding: 2vh;
    text-align:center;
}

.how-to-order-child p{
    color: #696969;
    font-weight:lighter;
    line-height: 2.5vh;
    padding: 2vh;
    padding-bottom:0 !important;
    text-align:center;
    /*font-family:DIN Next Normal;*/
}

.tapiit-features-div h2{
    font-size: 4vh;
    margin-top: 1vh;
}

.how-to-order-child{
    width:350px !important;
    padding:0 !important;
    border:1px solid lightgray;
    display: flex;
    margin-left:1.5rem;
    border-radius: 25px;
    flex-direction: column;
    background-color: #f8f8f8;
    z-index:10;
    transition:0.4s ease;
}
.tapiit-features-child{
    width: 250px;
    min-height: 275px;
    max-height:500px;
    background-color: #f8f8f8;
    border-radius: 3vh;
    margin: 0 auto;
    padding: 3vh;
    text-align: center;
    text-align: left;
    margin: 2vh;
    transition: ease .4s;
}

.tapiit-features-child:hover{
    transform: scale(1.05);
    transition: transform .5s ease-in-out;
}

.tapiit-features-child img{
    width: 40%;
    padding-left: 2vh;
}

.tapiit-features-child h3{
    font-size: 2.5vh;
    padding-left: 2vh;
}

.tapiit-features-child p{
    color: #696969;
    line-height: 2.5vh;
    padding-left: 2vh;
}
.how-to-order-child{
    width:250px;
    height:550px;
}
@media (max-width: 769px) {
    .how-to-order{
        height:auto;
        margin-top:0;
    }
    .how-to-order-child:hover{
    transform: scale(1);
}
    .tapiit-features-child{
        display:flex;
        flex-direction: column;
        justify-content:center;
        align-items:center;
        
    }
    .tapiit-features-child h3{
        padding:0;
        text-align:center;
        justify-content:center;
        align-items:center;
    }
    .tapiit-features-child img{
        /*display:flex;*/
        /*flex-direction: column;*/
        text-align:center;
        justify-content:center;
        align-items:center;
        padding:0;
    }
    .how-to-order-child{
    width:350px !important;
    padding:0 !important;
    border:1px solid lightgray;
    display: flex;
    border-radius: 25px;
    flex-direction: column;
    background-color: #f8f8f8;
    color: #696969;
    transition:0.4s ease;
    margin-bottom:10px;
    margin-left:auto;
    margin-right:auto;
    
}
.tapiit-features-child p{
    color: #696969;
    line-height: 3.5vh;
    padding-left: 2vh;
}
}
/*Small*/
@media (max-width: 320px) {
    .how-to-order{
        display:flex;
        justify-content:center;
        margin:auto;
    }
    .how-to-order-child{
    width:300px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-bottom:10px;
    }
    .how-to-order-child img{
    height: 200px;
    width: 200px;
}
.how-to-order-child p{
    color: #696969;
    font-weight:lighter;
    /*line-height: 4.5vh;*/
    /*padding: 2vh;*/
    font-size:14px;
    text-align:center;
}
.tapiit-features-child p{
    color: #696969;
    line-height: 4.5vh;
    padding-left: 2vh;
}

    
}
/*1024*/
@media (max-width: 1024px) {
    .how-to-order-child{
    width:300px !important;
    height:100%;
    }
    .how-to-order-child img{
    height: 200px;
    width: 200px;
}
.how-to-order-child p{
    color: #696969;
    font-weight:lighter;
    line-height: 1;
    padding: 2vh;
    text-align:left;
}
    
}


/*1440px*/
@media (min-width: 1920px) and (max-width:2560px) {
    .how-to-order-child{
    width:500px !important;
    height:100%;
    }
    .how-to-order-child img{
    height: 400px;
    width: 400px;
}
}


    </style>
</head>

<body>
    
    <x-header />

    <div class="container-fluid container-content bg-black text-white d-flex fawad" onmouseout="hideDrop()">
        <div class="col-md-6 order-md-1 order-1">
            <div class="container text-left top_home" style="width:90%;margin:auto;margin-top:30%">
                <p class="small-text">CONNECT SMARTER, NOT HARDER</p>
                <p class="main-text">THE FUTURE OF NETWORKING</p>
                <p class="sub-text">THE SUSTAINABLE SOLUTION FOR NEXT-LEVEL NETWORKING</p>
                <div class="d-flex">
                    <a href="/products" class="hy mt-4 mr-2" style="margin-right: 24px;">SHOP CARDS</a>
                    <!--<a href="/how_it_works" class="hy  mt-4">HOW IT WORKS</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-6 order-md-2 order-2 d-md-flex align-items-md-end " style="width: 50%" onmouseout="hidedrop()">
            <img src="{{ asset('/woman.png') }}" alt="Woman" class="img-fluid woman_home">
        </div>
    </div>
    
     <div class="tapiit-features-div container-fluid d-flex flex-column align-items-center w-100">
        <h1 style="font-family:DIN Next Medium;font-weight:100">DON'T BLEND IN...STAND OUT!</h1>
        <div id="google_translate_element"></div>
        <h2 class="text-center" style="font-family:Futura Normal;text-transform:uppercase">It’s so much more than a regular business card</h2>
        <div class="d-flex flex-wrap justify-content-center align-items-center mt-2">
            <div class="tapiit-features-child">
                <img src="{{asset('icon1.png')}}" alt="Tapiit CONNECTIONS">
                <h3 class="futura upper mt-2">Flexible</h3>
                <p>Easily update and share your digital business cards to any device, perfect for today's mobile and remote work environment.</p>
            </div>
            <div class="tapiit-features-child">
                <img src="./icon2.png" alt="Tapiit CONNECTIONS">
                <h3 class="futura upper mt-2">Sustainable</h3>
                <p>Choose an eco-friendly option and make a difference for the environment. Switch to Tapiit CONNECTIONS for a sustainable future.</p>
            </div>
            <div class="tapiit-features-child">
                <img src="./icon3.png" alt="Tapiit CONNECTIONS">
                <h3 class="futura upper mt-2">Unique</h3>
                <p>Make a lasting impression with interactive features, and custom branding elements that will make your card unforgettable.</p>
            </div>
            <div class="tapiit-features-child">
                <img src="./icon4.png" alt="Tapiit CONNECTIONS">
                <h3 class="futura upper mt-2">Digital</h3>
                <p>Tap, scan, or click. Access your cards anytime with cloud-based storage and sharing options, making networking a breeze!</p>
            </div>
        </div>
    </div>
    
    {{--How to order--}}
    <div class="how-to-order container-fluid d-flex flex-column align-items-center  w-100">
        <p class="pt-2" style="font-family:Futura Normal;font-size:48px">HOW TO ORDER</p>
        <div class="d-flex flex-row flex-wrap justify-content-center align-items-center mt-5">
            <div class="how-to-order-child" >
                <h3 class="futura upper">Step 1</h3>
                <img src="{{asset('nfc1.jpg')}}" alt="Tapiit CONNECTIONS">
                <p>Create your free Tapiit account. Find a style and colour scheme that showcases your business's personality. Link your social information to generate your profile ready for sharing</p>
            </div>
            <div class="how-to-order-child " >
                <h3 class="futura upper">Step 2</h3>
                <img src="./nfc1.jpg" alt="Tapiit CONNECTIONS">
                <p>Choose your card, upon purchase our design team will work their magic and create your virtual digital business card at no additional charge.</p>
                <p > <span class="text-danger">NOTE: </span>Customer will be responsible for providing company logo via email.</p>
            </div>
            <div class="how-to-order-child" >
                <h3 class="futura upper">Step 3</h3>
                <img src="./nfc1.jpg" alt="Tapiit CONNECTIONS">
                <p>When you recieve your card. It's simple... Just Tap, Scan and Communicate!</p>
            </div>
        </div>
    </div>

   
    {{-- Reviews --}}
    {{-- @include('component.reviews') --}}
    <x-reviews />







    {{-- Turn more --}}
    <div class="container mb-4 top-turn" style="margin-top: 10%">
        <div class="row introducing">
            <!-- Content Column -->
            <div class="col-md-5 turn-more" style="margin-top:5%">
                <div class="v2-content-container mx-4">
                    <!-- Your content goes here -->
                    <h2 class="turn mb-4">Turn more interactions into sales &amp; protect the planet</h2>
                    <h2 class="text-center  mt-4" style="font-size:15px">Get the business card that makes a memorable impression. Instantly
                        share contact details, lead forms, links, and more with Tapiit enhanced NFC technology.</h2>
                </div>
            </div>

            <!-- Video Column -->
            <div class="col-md-7" style="justify-content: right">
                <div class="v2-video-container">
                    <div class="embed-container">
                        <div class="video-thumbnail">
                            <img style="border: none" src="//v1ce.co/cdn/shop/files/306d3c33-ab2c-4674-ad67-23925b83ed72.jpg?v=1689107002&amp;width=1600" alt="" class="img-fluid" loading="lazy">
                            <div class="play-button"></div>
                        </div>
                        {{-- <iframe class="video-iframe"
                                    src="https://cdn.shopify.com/videos/c/o/v/a7a98394f9af48c0a66ffa93d996b4df.mp4"
                                    frameborder="0" allowfullscreen="" data-gtm-yt-inspected-11="true"
                                    style="display: none;"></iframe> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- REDEFINING  --}}
    <div class="container  mb-4 mt-4">
        <div class="row align-items-center always_slider" style="margin-top: 10%">
            <div class="col-md-6 red_div" style="padding-left:5%;width: 50%;height:50%">
                <div class="image-container img_cnt">
                    <img class="redef active" src="//v1ce.co/cdn/shop/files/V1CE-Shopify-5592.jpg?v=1681992074&amp;width=1000" width="446" height="446">
                    <img class="redef inactive" src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-3808.jpg?v=1683046192&width=1000" width="446" height="446">
                    <img class="redef inactive" src="https://v1ce.co/cdn/shop/files/V1CE-Shopify--3_033ed0ba-4753-4327-99fb-dda6b15090cd.jpg?v=1683046017&width=1000" width="446" height="446">
                </div>
            </div>
            <div class="col-md-6 content_home" style="height: 50%;">
                <div id="content4" style="height:50%">
                    <span class="text-center" style="display: block;">FIRST IMPRESSIONS MATTER</span>
                    <h3 class="text-center mb-4 mt-4 top_heading_slider">REDEFINING NETWORKING EXCELLENCE</h3>
                    <h2 class="text-center x text-for-p mt-4" style="line-height:0.7cm">Forge unforgettable connections with a simple tap of your Tapiit card, instantly sharing your digital business card with their phone. Easily customise your Tapiit profile to fit any scenario.</h2>
                </div>
                <div id="content5" style="display: none;height:100%">
                    <span class="text-center" style="display: block;">ALWAYS WITH YOU</span>
                    <h3 class="text-center mb-4 mt-4 top_heading_slider">CONVENIENT TO CARRY</h3>
                    <h2 class="text-center x text-for-p mt-4" style="line-height:0.7cm">Leave paper behind and move to the modern day with Tapiit business cards; they always look as good as the first day you got them. With no limit on how many times you can use your card, you'll never run out of business cards when you need them most.</h2>
                </div>
                <div id="content6" style="display: none;height:100%">
                    <span class="text-center" style="display: block;">DURABLE DESIGN</span>
                    <h3 class="text-center mb-4 mt-4 top_heading_slider">A CARD TO LAST A LIFETIME</h3>
                    <h2 class="text-center x text-for-p mt-4" style="line-height:0.7cm">Tapiit software enables instant updates to your business card, storing countless pre-made profiles for your convenience. Your Tapiit card is the ultimate, evergreen solution for expanding your business. Eradicating the issue of wasted, outdated cards.</h2>
                </div>
                <div class="row">
                    <div class="col-md-8 ahm" style="margin-left:10%">
                        <ul class="list-inline text-center" style=" font-size: 12px;margin-top:10%">
                            <li id="listItem4" class="list-inline-item  pt-2" style="margin-left:5%" onclick="showContentx(4)">PROFESSIONAL</li>
                            <li id="listItem5" class="list-inline-item  pt-2" style="margin-left:5%" onclick="showContentx(5)">CONVENIENT</li>
                            <li id="listItem6" class="list-inline-item pt-2" style="margin-left:5%" onclick="showContentx(6)">SUSTAINABLE</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
         document.addEventListener("DOMContentLoaded", function () {
        const images = document.querySelectorAll(".image-container img");
        const contents = document.querySelectorAll("#content4, #content5, #content6");
        let currentIndex = 0;
        setTimeout(function () {
            document.getElementById("listItem4").classList.add("active");
        }, 500);

        function showNextImageAndContent() {
            images[currentIndex].classList.remove("active");
            images[currentIndex].classList.add("inactive");
            images[currentIndex].style.animation = 'none';
            contents[currentIndex].style.display = 'none';

            currentIndex = (currentIndex + 1) % images.length;

            images[currentIndex].classList.remove("inactive");
            images[currentIndex].classList.add("active");
            images[currentIndex].style.animation = 'openFromRight 0.6s ease-in-out forwards';
            contents[currentIndex].style.animation = 'Bottom 0.6s ease-in-out forwards'; //
            contents[currentIndex].style.display = 'block';

            updateActiveListItem(currentIndex + 4);
        }

        function showContentx(index) {
            for (let i = 0; i < images.length; i++) {
                if (i === index - 4) {
                    currentIndex = i;
                    images[i].classList.remove("inactive");
                    images[i].classList.add("active");
                    images[i].style.animation = 'openFromRight 0.6s ease-in-out forwards';
                    contents[i].style.animation = 'Bottom 0.6s ease-in-out forwards';
                    contents[i].style.display = 'block';
                } else {
                    images[i].classList.remove("active");
                    images[i].classList.add("inactive");
                    images[i].style.animation = 'none';
                    contents[i].style.display = 'none';
                }
            }

            updateActiveListItem(index);
        }

        function updateActiveListItem(index) {
            const listItems = document.querySelectorAll(".list-inline-item");
            listItems.forEach(item => {
                item.classList.remove("active");
            });

            const activeListItem = document.getElementById(`listItem${index}`);
            activeListItem.classList.add("active");
        }

        setInterval(showNextImageAndContent, 5000);

        // Click event for list items
        document.getElementById("listItem4").addEventListener("click", function () {
            showContentx(4);
        });

        document.getElementById("listItem5").addEventListener("click", function () {
            showContentx(5);
        });

        document.getElementById("listItem6").addEventListener("click", function () {
            showContentx(6);
        });
    });

    </script>
   
    {{-- Vice Vs Paper --}}
    <div class="container-fluid  slide-in1 comparison" style="margin-top: 10%">
        <div class="row">
            <div class="col-12">
                <img  src="lol.png" class="img-fluid " alt="Responsive image">
            </div>
        </div>
    </div>
    <script>
        // Add this JavaScript to your script file or within <script> tags

        // Function to check if an element is in the viewport
        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            var viewportHeight = (window.innerHeight || document.documentElement.clientHeight);
            var twentyPercentOfViewport = 100 * viewportHeight;

            return (
                rect.top <= (viewportHeight - twentyPercentOfViewport) &&
                rect.bottom >= 0 &&
                rect.left >= 0 &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }


        // Function to add the slide-in class when element is in view
        function addSlideInClass(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-in1');
                    observer.unobserve(entry.target);
                }
            });
        }

        // Create an intersection observer
        var observer = new IntersectionObserver(addSlideInClass, {
            threshold: 0.5
        });

        // Select the image element
        var image = document.querySelector('.slide-in1');

        // Observe the image
        if (image) {
            observer.observe(image);
        } else {
            // If no image is found, still start observing in case it gets added later
            observer.observe(document.body);
        }

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            if (isInViewport(image)) {
                image.style.animation = 'slideFromRight1 0.5s forwards';
            }
        });

    </script>
    {{-- NEXT GENERATION CONNECTIONS --}}
    <div class="container-fluid" style="margin-top: 5%">
        <p class="text-center ell" >NEXT GENERATION CONNECTIONS</p>
        <div class="container" style="margin-top: 2%;margin-bottom:10%">
            
            @include('components/products')
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
        var imga11 = document.querySelectorAll('.products');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imga11.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slide-up 0.5s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>

   
    <x-footer />

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
        var imagesBottom = document.querySelectorAll('.slide-in-bottom');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imagesBottom.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slideFromBottom1 0.1s forwards ${index * 0.1}s`;
                }
            });
        });

        // For Cards

    </script>



    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>