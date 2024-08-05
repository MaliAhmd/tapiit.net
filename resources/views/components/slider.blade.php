<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider with Tabs</title>
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> --}}
</head>

<body>
    <div class="container" style="margin-top: 10%">
        <p class="text-center ">EASY AS 1 - 2 - 3</p>
        <p class="text-center ell">HOW TO GET YOUR CARD</p>
    </div>

    <div class="slider-container mains">
        <div class="slider sliderx">
            <div class="slide slidex active">
                <img src="{{asset('/V1CE-Shopify--7.webp')}}" alt="Image 2">
                <div style="width:40%">
                    <h2 class="main_h">1. ORDER YOUR CARD</h2>
                    <p class="main_p">Find a style and colour scheme that showcases your business's personality. Upon purchase, our
                        design team will send you an email to complete a design brief. They will then create your card
                        for your approval at no additional charge. Alternatively, you can upload a print-ready design
                        (design guidelines).</p>
                </div>
            </div>
            <div class="slide slidex">
                <img src="{{asset('/V1CE-Shopify-6321.webp')}}" alt="Image 2">
                <div style="width:40%">
                    <h2 class="main_h">2. CREATE YOUR PROFILE</h2>
                    <p class="main_p">Whilst we manufacture your card you can create your digital profile using our online platform.
                        Link your contact details, social profiles, website and more.</p>
                </div>
            </div>
            <div class="slide slidex">
                <img src="{{asset('/V1CE-Shopify-08190.webp')}}" alt="Image 2">
                <div style="width:40%">
                    <h2 class="main_h">3. TAP, SHARE, GO</h2>
                        <p class="main_p">When you receive your card, pair it with your account and step into the future of networking.
                        </p>
                </div>
            </div>
        </div>
        <div class="slider-controls">
            <button id="prevBtn"><span class="material-symbols-outlined">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                  </svg>
                </span></button>
                <!-- <hr> -->
            <button id="nextBtn"><span class="material-symbols-outlined">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg>
                </span></button>
        </div>
    </div>

    <div class="tabs-container">
        <div class="tabs">

            <div class="tab active">
                <div>1. ORDER YOUR CARD</div>
            </div>
            <div class="tab">
                <div>2. CREATE YOUR PROFILE</div>
            </div>
            <div class="tab">
                <div>3. TAP, SHARE, GO</div>
            </div>

        </div>
        <div class="active-tab-indicator"></div>
    </div>
    <script>
        console.log("Script connected");
const slides = document.querySelectorAll('.slide');
const tabs = document.querySelectorAll('.tab');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentIndex = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.add('active');
            
        } else {
            slide.classList.remove('active');
        }
    });
}

function showTab(index) {
    tabs.forEach((tab, i) => {
        if (i === index) {
            tab.classList.add('active');
            tab.style.color="black";
        } else {
            tab.classList.remove('active');
            tab.style.color="#b6b6b6";
        }
    });
}

function updateSlider() {
    showSlide(currentIndex);
    showTab(currentIndex);
    if (currentIndex === 0) {
        prevBtn.disabled = true;
    } else {
        prevBtn.disabled = false;
    }
    if (currentIndex === slides.length - 1) {
        nextBtn.disabled = true;
    } else {
        nextBtn.disabled = false;
    }
}

function goToSlide(index) {
    if (index < 0) {
        currentIndex = slides.length - 1;
    } else if (index >= slides.length) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }
    updateSlider();
}

prevBtn.addEventListener('click', () => {
    goToSlide(currentIndex - 1);
    slides[currentIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });
});

nextBtn.addEventListener('click', () => {
    goToSlide(currentIndex + 1);
    slides[currentIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });
});

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        goToSlide(index);
        slides[currentIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
});

updateSlider();

    </script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>  

</body>

</html>