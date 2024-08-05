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
            <image href="profileLayout3.svg" x="0" y="0" width="100%" height="100%" />
            <image href="comsats.png" x="40" y="1" width="20" height="10" />
            <text x="51" y="18" font-size="5" fill="black" text-anchor="middle" font-weight="bold" font-family="Core Sans C">Saim Abbas</text>
            <text x="51" y="22" font-size="3" fill="black" text-anchor="middle" font-weight="bold" font-family="Core Sans C">Tachyon Techs</text>
            <!-- Clickable areas -->
            <image href="profile.jpeg" x="38" y="27" width="24" height="29" />
            {{-- <foreignObject x="32" y="79">
                <img xmlns="http://www.w3.org/1999/xhtml" src="profile.jpeg" style="width: 200px;">
            </foreignObject> --}}
            <text x="46" y="57" font-size="2" fill="black" text-anchor="middle" font-weight="bold" font-family="Core Sans C">Full Stack Developer</text>
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

            <foreignObject x="32" y="79" width="35" height="100" text-anchor="middle">
                <div xmlns="http://www.w3.org/1999/xhtml" style="font-size: 2px; color: black; text-align:center; font-weight:bold; font-family:Core Sans C; font-weight:bold">
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
    

    {{-- <div class="container">
        <img src="profileLayout2.svg"/>
        <button class="btn">Button</button>
      </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



</body>

</html>
