<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <title>Tapiit - Layouts</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layouts.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-dark">
    <x-header />
    {{-- Form --}}
    @if(session('message'))
    <div id="alertMessage" class="alert alert-success" style="width: 40%; margin:auto;text-align:center;">
        {{ session('message') }}
    </div>
    @endif
    <script>
        setTimeout(function(){
            var alertMessage = document.getElementById('alertMessage');
            if(alertMessage) {
                alertMessage.style.display = 'none';
            }
        }, 5000);
    </script>
    <div class=" my-2 container d-flex layouts-container bg-white">
        <!-- <div class="layouts-menu  d-flex flex-row align-items-start"> -->
            <!-- <img src="{{asset('newlayoutt.jpg')}}" alt="" id="greenImage">
            <img src="{{asset('blue.jpg')}}" alt="" id="blueImage">
            <img src="{{asset('gold.jpg')}}" alt="" id="goldImage">
            <img src="{{asset('white.jpg')}}" alt="" id="whiteImage">
            <img src="{{asset('green.jpg')}}" alt="" id="greenimg"> -->
            <!-- <img src="{{asset('newlayout.png')}}" alt="" id="newlayout"> -->
        <!-- </div> -->
       <div class="d-flex flex-column align-items-center layouts-menu-right-side">
            <div class="check">
            <div class="w-100 d-flex flex-row justify-content-end align-items-center px-3">
            <!--<div id="editable-layout" style="flex-direction: row; display:none; cursor: pointer; ">-->
                 <button id="editable-layout" class="layout-btn-submit btn my-3" style="background: transparent;  border:1px solid #212529; margin-left:10px !important;">FontStyle</button>
            <!--</div>-->
            
            <div class="flex-column align-items-center p-2 justify-content-center layouts-options my-3">
                
                <div class="d-flex flex-column align-items-center mx-1 my-1">
                    <p style="font-size: 0.8rem; color:white; margin:0;">Font Familys</p>
                    
                    <form  action="/setFont" method="POST">
                        @csrf
                        <select id="font-family-selector" name="fontstyle" class="w-75" style="font-size: 0.8rem; border-radius:6px; border:1px solid gray;">
                            <option value="Arial" @if($font == 'Arial') selected @endif>Arial</option>
                            <option value="Times New Roman" @if($font == 'Times New Roman') selected @endif>Times New Roman</option>
                            <option value="Verdana" @if($font == 'Verdana') selected @endif>Verdana</option>
                            <option value="Helvetica" @if($font == 'Helvetica') selected @endif>Helvetica</option>
                            <option value="Georgia" @if($font == 'Georgia') selected @endif>Georgia</option>
                            <option value="Tahoma" @if($font == 'Tahoma') selected @endif>Tahoma</option>
                            <option value="Courier New" @if($font == 'Courier New') selected @endif>Courier New</option>
                        </select>
                        <input type="hidden" name="id" id="apply">
                        <button class="layout-btn-submit btn my-3 btn-success" style="font-size:0.8rem; margin-left:16px">Apply</button>
                    </form>

                </div>
            
            </div>
            </>
            <!--<div class="flex-row layout-buttons" style="display: none;" id="apply-btn-layout">-->
            
            <form action="/preview" method="POST">
                @csrf
                <input type="hidden" name="id" id="preview">
                <input type="hidden" name="fontstyle" id="fontStyles" value="Core Sans C">
                <button class="layout-btn-submit btn my-3" id="preview-btn" style="align-self: center; border:1px solid #212529; background: transparent;margin-left:10px !important;">
                    View
                </button>
            </form>
            <form action="/applylayout" method="POST">
                @csrf
                <input type="hidden" name="id" id="setlayout">
                <input type="hidden" name="fontStyle" id="fontStyle"> <!-- No hardcoded value here -->
                <!-- <button class="layout-btn-submit btn my-3" style="background: transparent; border:1px solid #212529;margin-left:10px !important;">Apply</button> -->
            </form>
            
        <!--</div>-->
        
        
    </div>
    
    <div class="botn" style="position: absolute; top: 162px; right: 125px; ">
        <button id="hide" style= "display: none; padding: 6px; border-radius: 6px; justify-content: center; background: none; border:none;"><img src="{{asset('close.png')}}" alt="" style="    width: 30px;
    height: 30px;">
        </button>
    </div>
    <div class="layout-previewer d-flex flex-column justify-content-center align-items-center" id="layout-previewer" style="width:100% !important; overflow:hidden !important">
        </div>
    </div>
</div>
</div>


<script>
    // const greenImage = document.getElementById('greenImage');
    // const blueImage = document.getElementById('blueImage');
    // const goldImage = document.getElementById('goldImage');
    // const whiteImage = document.getElementById('whiteImage');
    // const greenimg = document.getElementById('greenimg');
    const newlayout = document.getElementById('newlayout');
    const editLayout = document.getElementById('editable-layout');
    const layoutPreviewer = document.querySelector('.layout-previewer');
    const layoutOptions = document.querySelector('.layouts-options');
    const applyBtn = document.getElementById('apply-btn-layout');
    const fontStyleSelector = document.getElementById('font-family-selector');
    const hideBtn = document.getElementById('hide');

    const loadLayoutPreview = (layoutId, fontStyle) => {
        fetch(`/selectlayout/${layoutId}`)
            .then(response => response.text())
            .then(data => {
                console.log(data);
                layoutPreviewer.innerHTML = data;
                document.getElementById('setlayout').value = layoutId;
                document.getElementById('preview').value = layoutId;
                document.getElementById('fontStyle').value = fontStyle; // Set the font style here
            })
            .catch(error => console.error('Error fetching layout data:', error));
    };

    // greenImage.addEventListener('click', () => {
    //     loadLayoutPreview(1, fontStyleSelector.value);
    //     // showLayoutOptions();
    //     hideBtn.style.display = 'inline-block';
    // });
    
    // blueImage.addEventListener('click', () => {
    //     loadLayoutPreview(2, fontStyleSelector.value);
    //     hideBtn.style.display = 'inline-block';
    //     // showLayoutOptions();
    // });
    
    // goldImage.addEventListener('click', () => {
    //     loadLayoutPreview(3, fontStyleSelector.value);
    //     hideBtn.style.display = 'inline-block';
    //     // showLayoutOptions();
    // });

    // whiteImage.addEventListener('click', () => {
    //     loadLayoutPreview(4, fontStyleSelector.value);
    //     hideBtn.style.display = 'inline-block';
    //     // showLayoutOptions();
    // });

    // greenimg.addEventListener('click', () => {
    //     loadLayoutPreview(5, fontStyleSelector.value);
    //     hideBtn.style.display = 'inline-block';
    //     // showLayoutOptions();
    // });

    // newlayout.addEventListener('click', () => {
    //     loadLayoutPreview(6, fontStyleSelector.value);
    //     hideBtn.style.display = 'inline-block';
    //     // showLayoutOptions();
    // });

    editLayout.addEventListener('click', () => {
        toggleLayoutOptions();
    });

    hideBtn.addEventListener('click', () => {
        clearLayoutPreview();
        hideLayoutOptions();
    });

    function showLayoutOptions() {
        layoutOptions.style.display = 'flex';
        // hideBtn.style.display = 'inline-block';
    }

    function hideLayoutOptions() {
        layoutOptions.style.display = 'none';
        // hideBtn.style.display = 'inline-block';
    }

    function toggleLayoutOptions() {
        if (layoutOptions.style.display === 'flex') {
            hideLayoutOptions();
        } else {
            showLayoutOptions();
        }
    }

    function clearLayoutPreview() {
        layoutPreviewer.innerHTML = ''; // Clear the preview content
    }
    document.addEventListener('DOMContentLoaded', () => {
        loadLayoutPreview(6, fontStyleSelector.value);
    });
    
</script>

</body>

</html>
