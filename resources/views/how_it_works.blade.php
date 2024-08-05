<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How it Works</title>
    <link rel="stylesheet" href="{{ asset('css/how_it_works.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">



</head>
<body>
    <x-header />
    <div class="container" style="margin-top:2%">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-white"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">How It Works</li>
            </ol>
        </nav>
    </div>
    {{-- How our technology works --}}
    <div class="container tech_div mt-4">
        <h1 class="mb-4 title text-center">HOW OUR TECHNOLOGY WORKS</h1>
        <div class="d-flex justify-content-center works_p">
            <p class="mt-4 how text-center" style="">Tapiit leverages a technology that's natively already a part of your daily routine, even if you're not aware of it. Many leading brands depend on this technology. Whether you're tapping your gym card for access or using your phone to pay for groceries, NFC powers these interactions. Powered by NFC Tapiit has created a industry leading software that supercharges your networking capabilities. Tap your Tapiit product against any Apple or Android phone, instantly sharing a unique link to your personal and fully customisable digital experience. Connect, share, and grow your network anytime, anywhere, with no need for additional apps.</p>
        </div>
    </div>


    {{-- --}}
    <div class="container mb-4" style="margin-top: 5%">
        <div class="row video_v">
            <!-- Content Column -->
            <div class="col-md-5 top-for-action" style="margin-top:2%;">
                <div class="v2-content-container mx-4">
                    <!-- Your content goes here -->
                    <h2 class="turn mb-4">Turn more interactions into sales &amp; protect the planet</h2>
                    <h2 class="text-center text-here-4" style="font-size:15px;line-height:0.6cm">Get the business card that makes a memorable impression. Instantly
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
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Connecting Made Easy --}}
    <div class="container">
        <div class="container" style="margin-top:15%;">
            <div class="row images_row">
                <div class="col-md-6 img_slid" style="width: 50%;height:50%">
                    <div class="image-container">
                        <img id="image1" class="active first_img" src="https://v1ce.co/cdn/shop/files/V1CE-Shopify--5_25f843bb-5299-455b-b8e4-26d0a401c060.jpg?v=1683397781&width=700" height="569" alt="">
                        <!--<img id="image2" src="https://v1ce.co/cdn/shop/files/V1CE-Shopify--7.jpg?v=1683398633&width=700" alt="" height="569">-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-container text-center c-easy" style="margin-top: 30%;width:100%;height:40%;margin-left:10%">
                        <div id="content1" class="content active ">
                            <p class="ello">CONNECTING MADE EASY</p>
                            <h3 class="futura" style="font-size: 36px;">THE MAGIC BEHIND TAPIIT</h3>
                            <p style="font-size: 15px">Your Tapiit hub boasts remarkable flexibility and a user-friendly design. With the ability to create multiple profiles for any business or purpose, update information in real-time, and swiftly transition between profiles to alter what appears on your card, Tapiit elevates networking to new heights of convenience.</p>
                        </div>
                        <!--<div id="content2" class="content">-->
                        <!--    <p class="ello">EFFORTLESS CONNECTIVITY</p>-->
                        <!--    <h3 class="futura" style="font-size: 36px;">THE TAPIIT APP</h3>-->
                        <!--    <div class="d-flex justify-content-center">-->
                        <!--        <p style="font-size: 15px">Shifting from a busy exhibition to a chill networking meal? Effortlessly adjust your Tapiit app to share content more appropriate for a laid-back atmosphere. Networking made easy and fun.</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <div class="row">
                        <div class="col-md-12 navi" style="margin-left:10%">
                            <ul class="list-container d-flex justify-content-center">
                                <li class="active me-3" style="font-size:13px" onclick="showContent(1)">ONLINE</li>
                                <!--<li onclick="showContent(2)" style="font-size:13px">TAPIIT APP</li>-->
                            </ul>
                        </div>
                    </div>
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
        var imgav1 = document.querySelectorAll('.first_img');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imgav1.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slideRightToLeft 0.5s forwards ${index * 0.1}s`;
                }
            });
        });
        var textElementss = document.querySelectorAll('.c-easy');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            textElementss.forEach(function(element, index) {
                if (isInViewport(element)) {
                    // Add 0.1s delay for each text element
                    element.style.animation = `slide-up 0.5s forwards ${index * 0.1}s`;
                }
            });
        });

    </script>

    {{-- Valuable Insights --}}
    <div class="container " style="margin-top: 10%">
        <div class="row insight_container">
            <div class="col-md-6 text-center insight" style="margin-top: 8%;padding-left:5%">
                <h2 class="ello">VALUABLE INSIGHTS</h2>
                <h2 class="turn mb-4">DATA IS KING</h2>
                <p class="mt-4 text-center" style="font-size:15px;line-height:0.8cm;">Why leave networking to chance when everything else is data-driven? Harness your analytics dashboard to track performance at every level - be it individual, team, or organization. Instantly see real-time data, discover what interests your profile viewers, and use this knowledge to create an engaging, optimized profile.</p>

            </div>
            <div class="col-md-6 insight_too">
                <div class="insight_img" style="margin-left:20%">
                    <img src="https://v1ce.co/cdn/shop/files/v3_app_5.jpg?v=1683483400&width=1000" width="446.6" height="446.6" class="img-fluid king" alt="">
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
        var imgav = document.querySelectorAll('.king');

        // Add a scroll event listener to check for animations
        window.addEventListener('scroll', function() {
            imgav.forEach(function(image, index) {
                if (isInViewport(image)) {
                    // Add 0.1s delay for each image
                    image.style.animation = `slideRightToLeft 0.5s forwards ${index * 0.1}s`;
                }
            });
        });
        var textElements = document.querySelectorAll('.insight');

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

    {{-- READY TO NETWORK THE MODERN WAY? --}}

    <div class="conatiner" style="margin-top:10%">
        <h2 class="text-center now">READY TO NETWORK THE MODERN WAY?</h2>
        <h1 class="text-center mt-4 futura" style="font-size: 48px;">CHOOSE YOUR CARD</h1>
    </div>
    <div class="container" style="margin-top: 5%;">
        @include('components/products')
    </div>
    <script>
        document.getElementById('increase1').addEventListener('click', function() {
            // Increment the value when + button is clicked
            var quantityInput = document.getElementById('quantity1');
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });

        document.getElementById('decrease1').addEventListener('click', function() {
            // Decrement the value when - button is clicked, but not below 1
            var quantityInput = document.getElementById('quantity1');
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

    </script>


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
        <a class="more" style="text-decoration: none" href="/faq">SEE OUR FAQ PAGE FOR MORE INFORMATION</a>
    </div>
    </div>

    <x-footer />

    <script>
        function showContent(contentId) {
            // Hide all content and remove active class
            let contents = document.querySelectorAll('.content');
            contents.forEach(content => {
                content.classList.remove('active');
            });

            // Show the selected content and add active class
            let selectedContent = document.getElementById('content' + contentId);
            selectedContent.classList.add('active');
            selectedContent.style.animation = `slide-up 0.5s forwards `;


            // Hide all images and remove active class
            let images = document.querySelectorAll('.image-container img');
            images.forEach(image => {
                image.classList.remove('active');
                image.style.animation = `slideRightToLeft 0.5s forwards `;
            });

            // Show the selected image and add active class
            let selectedImage = document.getElementById('image' + contentId);
            selectedImage.classList.add('active');

            // Remove active class from all list items
            let listItems = document.querySelectorAll('.list-container li');
            listItems.forEach(item => {
                item.classList.remove('active');
            });

            // Add active class to the clicked list item
            let clickedItem = document.querySelector('.list-container li:nth-child(' + contentId + ')');
            clickedItem.classList.add('active');
        }

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