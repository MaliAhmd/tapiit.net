<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}

    <title>E-Profile Layout 2</title>
    <style>
        @font-face {
            font-family: 'Core Sans C';
            src: url('/fonts/Fontspring-DEMO-coresansc85') format('otf'),
                 url('/fonts/Fontspring-DEMO-coresansc85') format('otf');
        }
    </style>
</head>

<body class="layout-body">
    <div class="container w-50 text-dark">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <!-- Background image -->
            <image href="profileLayout1.svg" x="0" y="0" width="100%" height="100%" />
            <image href="comsats.png" x="52" y="24" width="20" height="10" />
            <text x="51" y="45" font-size="5" fill="white" text-anchor="middle" font-weight="bold" font-family="Core Sans C">Saim Abbas</text>
            <defs>
                <clipPath id="circle-mask">
                    <circle cx="51" cy="18" r="14" stroke="red" fill="none"/>
                </clipPath>
            </defs>
            {{-- <rect x="15" y="0" width="48%" height="35%" fill="none" stroke="black"/> --}}
    
    <!-- Embed your image -->
    {{-- <rect x="50" y="50" width="20" height="30" fill="url(#imageFill)" stroke="black" transform="rotate(45 60 65)"/> --}}
    
    <!-- Embed your image -->
    {{-- <defs>
        <clipPath id="myClip">
            <polygon points="100,30 66.67,100 0,65 0,0 40,0"/>
        </clipPath>
        
    </defs> --}}
    <svg width="100" height="100" x="0" y="0" xmlns="http://www.w3.org/2000/svg">
        <!-- Modified image -->
        <image id="imageFill" href="man.jpeg" x="22" y="0" width="36" height="36" clip-path="polygon( 99.50% 18.00%, 47.50% 93.85%, 0.00% 63.00%, 0.00% 0.00%, 73.00% 0.00% )"/>
    </svg>
            <text x="51" y="50" font-size="3" fill="white" text-anchor="middle" font-weight="bold" font-family="Core Sans C">Full Stack Developer</text>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="37" y="64" width="26" height="5" fill="transparent" />
            </a>

            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="38" y="71" width="5" height="5" fill="transparent" />
            </a>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="47" y="71" width="5" height="5" fill="transparent" />
            </a>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="56" y="71" width="5" height="5" fill="transparent" />
            </a>

            <foreignObject x="32" y="71" width="35" height="100" text-anchor="middle">
                <div xmlns="http://www.w3.org/1999/xhtml" style="font-size: 2px; color: white; text-align:center; font-weight:bold; font-family:Core Sans C; font-weight:bold">
                    We develop projects with 100% authenticity, sincerity.
                </div>
            </foreignObject>

            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="29" y="89" width="5" height="5" fill="transparent" />
            </a>

            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="35" y="89" width="5" height="5" fill="transparent" />
            </a>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="41" y="89" width="5" height="5" fill="transparent" />
            </a>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="47" y="89" width="5" height="5" fill="transparent" />
            </a>

            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="53" y="89" width="5" height="5" fill="transparent" />
            </a>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="59" y="89" width="5" height="5" fill="transparent" />
            </a>
            <a xlink:href="https://example.com/facebook" target="_blank">
                <rect x="65" y="89" width="5" height="5" fill="transparent" />
            </a>
        </svg>
        
    </div>
    {{-- <div style="top:-5%; left:32%; transform: rotate(38deg); position: fixed;  width: 17%; height:100%;overflow: hidden;border-top: 1px solid red; border-bottom: 1px solid blue; border-right: 1px solid green; border-left: 1px solid yellow;">
        <img src="{{asset('/profile.jpeg')}}" style="position: relative; width: 150%; height:20%; transform: rotate(-38deg);" alt="">
    </div> --}}
    
    {{-- border-top: 1px solid red; border-bottom: 1px solid blue; border-right: 1px solid green; border-left: 1px solid yellow; --}}

    {{-- <div class="container">
        <img src="profileLayout2.svg"/>
        <button class="btn">Button</button>
      </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



</body>

</html>
