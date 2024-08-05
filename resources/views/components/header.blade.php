<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <style>
        

    </style>
</head>

<body>

    <div class="whatsapp">
        <a href='whatsapp://send?phone=+905338644570' id="whatsappLink"><svg viewBox="0 0 32 32" class="whatsapp-ico" fill="#25D366">
            <path d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
        </svg></a>
    </div>

    <div class="overlay" id="overlay" onmouseout="hideDrop()"></div>
    <div style="background:white; z-index:10;">
        <div class="text-slider-container d-flex" style="margin: 0px auto; height: 50px; justify-content: space-around; width: 500px; align-items: center; text-align: center; background:white;">
            <span class="btn mx-2" id="btn1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                </svg>
            </span>
                <div class="text active" id="text1" style="width: 350px; text-align: center; display: ;">Never Go Back Guarantee</div>
                <div class="text" id="text2" style="width: 350px; text-align: center; display: none;">Quality you can trust, prices you'll love</div>

            <span class="btn mx-2" id="btn2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                </svg>
            </span>
        </div>
    </div>

    <script>
        // Get the buttons and text elements
        const btn1 = document.getElementById('btn1');
        const btn2 = document.getElementById('btn2');
        const text1 = document.getElementById('text1');
        const text2 = document.getElementById('text2');


        // Function to toggle the display of text1 and text2
        function toggleText() {
            if (text1.style.display === 'none') {
                text1.style.display = 'block';
                text2.style.display = 'none';
            } else {
                text1.style.display = 'none';
                text2.style.display = 'block';
            }
        }

        // Add event listeners to the buttons
        btn1.addEventListener('click', toggleText);
        btn2.addEventListener('click', toggleText);
        timerInterval = setInterval(function() {
            if (text1.style.display === 'none') {
                text1.style.display = 'block';
                text2.style.display = 'none';
            } else {
                text1.style.display = 'none';
                text2.style.display = 'block';
            }
        }, 5000);

    </script>






    <div class="mainh">
        <div class="logo mhb d-flex align-items-center justify-content-center"><a href="/"><img class="" src="{{ asset('/logotr.png') }}" height="40" alt=""></a></div>
        <div class="contentx container-fluid px-md-5 py-md-3 px-sm-5 py-sm-3">
            <div class="leftd mhb">
                <ul class="web_li">
                    <li>
                        <a class="list_of_home" href="/" aria-current="page"><span style="font-family: DIN Next Medium, sans-serif">Home</span></a>
                    </li>
                    <li>
                        <a class="list_of_home" href="/products" aria-current="page"><span>Products</span></a>
                    </li>
                    <li>
                        <a class="list_of_home" href="/how_it_works" aria-current="page"><span>How it Works?</span></a>
                    </li>
                    <li>
                        <a class="list_of_home" href="/nfc" aria-current="page"><span>About NFC</span></a>
                    </li>
                    <li>
                        <a class="list_of_home" href="/design_guidelines" aria-current="page"><span>Design Guidlines</span></a>
                    </li>
                    <li>
                        <a class="list_of_home" href="/terms_conditions" aria-current="page"><span>T&C's</span></a>
                    </li>
                </ul>
                <div class="container mobile_navbar">
                    <div class="top-dropdwon" >
                        <svg id="menuIcon"  xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" onclick="toggleNavbar()">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                        {{-- <i id="menuIcon" class="bi bi-list text-white" style="font-size: 25px" onclick="toggleNavbar()"></i> --}}
                    </div>
                    <div class="open-from-left" id="navbar">
                        <div class="first_li mt-3">
                            <a class="linkfornextpage" href="/"><p>Home</p></a>
                            <a class="linkfornextpage" href="/products"><p>Products</p></a>
                            <a class="linkfornextpage" href="/how_it_works"><p>How It works?</p></a>
                            <a class="linkfornextpage" href="/nfc"><p>About NFC</p></a>
                            <a class="linkfornextpage" href="/design_guidelines"><p>Design Guidlines</p></a>
                            <!--<a class="linkfornextpage" href="/contact"><p>Contact Us</p></a>-->
                            <a class="linkfornextpage" href="/faq"><p>FAQs</p></a>
                            <a class="linkfornextpage" href="/terms_conditions"><p>T&C's</p></a>
                        </div>
                    </div>
                    <div class="overlay1" onclick="toggleNavbar()"></div>
                </div>
            </div>
            <div class="logo mhb d-flex align-items-center justify-content-center"><a href="/"><img class="" src="{{ asset('/logotr.png') }}" height="40" alt=""></a></div>
            <!--<div class="toCenter"></div>-->
            <div class="rightd mhb d-flex align-items-center" style="margin: 0">
                {{-- <span class="navbar-text navbar-brand "> --}}
                @if (session()->has('user'))
                <span class="navbar-text navbar-brand ">
                    <div class="dropdown" id="menubt">
                        <!--<svg class="me-3 mb-0 home_name" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person" viewBox="0 0 16 16">-->
                        <!--    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />-->
                        <!--</svg>-->
                        <img class="me-1 mb-0 tap" src="{{asset('uu.png')}}" style="color:white;" width="25" height="25">
                        <div class="dropdown-menu">
                            <a href="/profile" class="text-dark">My Profile</a>
                            <a href="/layouts" class="text-dark">Layouts</a>
                            <a href="/updateprofile" class="text-dark">Update Info</a>
                            <a href="/passwordpage" class="text-dark">Change Password</a>
                            <a href="/logout" class="text-dark">Logout</a>
                            <a href="/deletepage" style="padding: px; color:red; font-weight:500; text-align:center;">Delete Account</a>
                        </div>
                    </div>
                </span>
                <a href="/cart" class="" style="margin:0">
                    <div class="position-relative">
                        <img  class="me-1 mb-0 home_name tap" src="{{asset('cart.png')}}" style="color:white;"  width="25" height="25" alt="Cart">
                        {{-- @if(getCartSize() > 0) --}}
                        <span class="position-absolute counter-badge" style="">
                            {{ getCartSize() }}

                        </span>
                        {{-- @endif --}}
                    </div>
                </a>
                @else
                <span class="navbar-text navbar-brand d-flex align-items-center">
                    <a href="/login" class="me-4"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg></a>
                    <a href="/cart" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                    </a>
                </span>

                @endif



                {{-- </span> --}}
            </div>
        </div>
     <!--<div class="drop" id="" onmouseout="hideDrop()">-->
     <!--       <div style="justify-content: center; display: flex;" onmouseover="showDrop()">-->
     <!--           <div class="box">-->
     <!--               <div id="dimgc">-->
     <!--                   <a style="transition: transform .5s ease-in-out;text-decoration:none" href="/products" class="dropdown-link" style="text-decoration: none;">-->
     <!--                       <img src="//v1ce.co/cdn/shop/files/V1CE-Shopify-08410_4b58cf3d-ba22-4857-b8db-9228a8dc305e.webp?v=1693832398&amp;width=250" alt="" class="mega-menu__image dropdown-link" id="dimg">-->
     <!--                       <p class="header_headings" style="">ALL PRODUCTS</p>-->
     <!--                   </a>-->
     <!--               </div>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </div>-->
     <!--   <div class="drop1" onmouseout="hideDrop()">-->
     <!--       <div style="justify-content: center;display: flex;" onmouseover="showDrop1()">-->
     <!--           <div class="box">-->
     <!--               <a href="/design_guidelines" class="dropdown-link1" style="text-decoration: none;">-->
     <!--                   <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-5715.webp?v=1693846390&width=250" alt="" class="mega-menu__image dropdown-link1">-->
     <!--                   <p class="text-black text-center dropdown-link1 header_headings">Design Guidelines</p>-->
     <!--               </a>-->
     <!--           </div>-->
     <!--           <div class="box">-->
     <!--               <div class="pp">-->
     <!--                   <a href="/how_it_works" class="dropdown-link1" style="text-decoration: none;">-->
     <!--                       <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-5586_06cdbb8b-296d-4bbc-8b47-32d76be58279.webp?v=1693846343&width=250" alt="" class="mega-menu__image dropdown-link1">-->
     <!--                       <p class="text-center text-black dropdown-link1  header_headings">How it Works?</p>-->
     <!--                   </a>-->
     <!--               </div>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </div>-->
     <!--   <div class="drop2" onmouseout="hideDrop()">-->
     <!--       <div style="justify-content: center;display: flex;" onmouseover="showDrop2()">-->
     <!--           <div class="box">-->
     <!--               <div class="pp">-->
     <!--                   <a href="/nfc" class="dropdown-link2" style="text-decoration: none;">-->
     <!--                       <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-5715.webp?v=1693846390&width=250" alt="" class="mega-menu__image dropdown-link2">-->
     <!--                       <p class="text-black text-center dropdown-link2 header_headings">About NFC</p>-->
     <!--                   </a>-->
     <!--               </div>-->
     <!--           </div>-->
     <!--           <div class="box">-->
     <!--               <div class="pp">-->
     <!--                   <a href="/contact" class="dropdown-link2" style="text-decoration: none;">-->
     <!--                       <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-contact.webp?v=1693846418&width=250" alt="" class="mega-menu__image dropdown-link2">-->
     <!--                       <p class="text-center text-black dropdown-link2 header_headings">Contact Us</p>-->
     <!--                   </a>-->
     <!--               </div>-->
     <!--           </div>-->
     <!--           <div class="box">-->
     <!--               <div class="pp">-->
     <!--                   <a href="/faq" class="dropdown-link2" style="text-decoration: none;">-->
     <!--                       <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify_1e83cce6-3e2c-462f-8859-c9b3378c06e9.webp?v=1693846409&width=250" alt="" class="mega-menu__image dropdown-link2">-->
     <!--                       <p class="text-center text-black dropdown-link2 header_headings">FAQ</p>-->
     <!--                   </a>-->
     <!--               </div>-->
     <!--           </div>-->
     <!--       </div>-->
     <!--   </div>-->
    </div>
    <script>
        function showDrop() {
            document.querySelector('.drop').style.display = 'block';
            document.querySelector('.drop1').style.display = 'none';
            document.querySelector('.drop2').style.display = 'none';
            document.getElementById('overlay').classList.add('active'); // Add the 'active' class to show overlay
        }

        function showDrop1() {
            document.querySelector('.drop1').style.display = 'block';
            document.querySelector('.drop').style.display = 'none';
            document.querySelector('.drop2').style.display = 'none';
            document.getElementById('overlay').classList.add('active');
        }

        function showDrop2() {
            document.querySelector('.drop2').style.display = 'block';
            document.querySelector('.drop').style.display = 'none';
            document.querySelector('.drop1').style.display = 'none';
            document.getElementById('overlay').classList.add('active');
        }

        function hideDrop() {
            document.querySelector('.drop').style.display = 'none';
            document.querySelector('.drop1').style.display = 'none';
            document.querySelector('.drop2').style.display = 'none';
            document.getElementById('overlay').classList.remove('active');
        }
        document.addEventListener("DOMContentLoaded", function() {
            // Get all dropdown links
            const dropdownLinks = document.querySelectorAll('.dropdown-link');
            const dropdownLinks1 = document.querySelectorAll('.dropdown-link1');
            const dropdownLinks2 = document.querySelectorAll('.dropdown-link2');

            // Loop through each link and apply the animation
            dropdownLinks.forEach((link, index) => {
                link.style.animation = `slideFromBottom 0.3s ease ${index * 0.1}s forwards`;
            });
            dropdownLinks1.forEach((link, index) => {
                link.style.animation = `slideFromBottom 0.3s ease ${index * 0.03}s forwards`;
            });
            dropdownLinks2.forEach((link, index) => {
                link.style.animation = `slideFromBottom 0.3s ease ${index * 0.03}s forwards`;
            });


            // Optionally, you can add hover effect as well
            dropdownLinks.forEach(link => {
                link.addEventListener('mouseover', function() {
                    link.style.opacity = '1';
                });
                link.addEventListener('mouseout', function() {
                    link.style.opacity = '0.7'; // Adjust opacity as needed
                });
            });
        });
        //Mobile Navbar
        function toggleNavbar() {
    var navbar = document.getElementById("navbar");
    var overlay = document.querySelector(".overlay1");

    if (navbar.classList.contains("active")) {
        navbar.classList.remove("active");
        overlay.classList.remove("active");
    } else {
        navbar.classList.add("active");
        overlay.classList.add("active");
    }
}

// Close the sidebar when clicking outside of it
window.onclick = function(event) {
    var navbar = document.getElementById("navbar");
    var overlay = document.querySelector(".overlay1");

    if (!event.target.closest('#navbar') && !event.target.closest('#menuIcon')) {
        navbar.classList.remove("active");
        overlay.classList.remove("active");
    }
};


    </script>
</body>
</html>