<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tapiit - Products</title>
    <link rel="stylesheet" href="{{ asset('css//guidelines.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">


</head>
<style>
    .product-card span{
            font-size: 13px;
    font-style: normal;
    font-weight: 400 !important;
    }
    
   
    @media (max-width: 320px) {
        .product-card{
            margin:auto !important;
        }
        .product-container{
            margin:auto !important;
            justify-content:space-between !important;
            display:flex;
            width:100%;
        }
        .tag-container {
            top:40px !important;
            
        }
    }
    
    @media (max-width: 375px) {
        .product-card button{
            width:80%;
        }
        .tag-container {
            top:40px !important;
            
        }
    }
    @media (max-width: 425px) {
        .product-card{
            margin:auto !important;
        }
        .product-container{
            margin:auto !important;
            justify-content:space-between !important;
            display:flex;
            width:100%;
        }
    }
    @media (min-width: 768px) {
        .product-card{
            display: flex;
    flex-direction: row !important;
    justify-content: space-between !important;
    margin: 0 !important;
    /* height: 500px; */
    width: 300px;
        }
        .product-container{
            margin:auto !important;
            justify-content:space-between !important;
            display:flex;
            width:100%;
        }
    }
     @media (max-width: 1024px) {
        .product-card{
            display:flex;
            /*margin:0 !important;*/
            width:350px;
        }
        .product-container{
            margin:auto !important;
            justify-content:center !important;
            display:flex;
        }
        .product-card button{
            width:80%;
        }
    }
    @media (max-width: 2560px) {
        .product-card button{
            width:80%;
        }
        .product-container{
            margin:auto !important;
            display:flex;
            width:100%;
        }
        .product-card{
            flex-basis: calc(40% - 10px); 
            margin: 10px; 
            text-align: center; 
            padding: 20px;
            box-sizing: border-box;
        }
        .tag-container {
         top:50px;
         left:40px;
        }
    }


    
    
    
    
    
</style>
<body>
    <x-header />


    <div class="preview-info mb-5">
        <div class="text">
            <h2>CARDS</h2>
            <p>Our tech-enabled Tapiit cards enable you to transfer your digital business card with a simple tap. Choose a
                card that suits your business's style, in both material and color.</p>
        </div>
        <img src="1.png" alt="Preview Image">
    </div>

    <div class="product-container container">
    @foreach ($cards as $item)


    <div class="product-card mb-4">
        <a href="{{route('product',$item->id)}}">
            @if ($item->sale != 0)
            
                <div class="tag-container">
                    <div class="tag luxury-tag">{{$item->tag}}</div>
                    <div class="tag sale-tag">SALE {{$item->sale}}%</div>
                </div>
            <div class="product-image-container">
                @php
                $fileNames = explode(',', $item->files);
                @endphp
                <img class="product-image" src="{{ asset('uploads/' . $fileNames[0]) }}" alt="Product Image">
            </div>
            <div class="product-details">
                <div class="product-name medium mt-4">{{$item->cardname}}</div>
                <div class="product-name futura" style="font-weight:lighter; text-align:center;">{{$item->carddesc}}</div>
                <div class="price"> 
                    <span class="discount-price">£ {{$item->saleprice}}</span>
                    <del class="old-price">£{{$item->cardprice}}</del>
                </div>
                <div class="rating">
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">★</span>
                    <span class="star">☆</span>
                    <span class="products-sold">(150)</span>
                </div>
                <button>Order Now</button>
            </div>
            @else

        <div class="tag-container">
                <div class="tag luxury-tag">{{$item->tag}}</div>
            </div>
    <div class="product-image-container">
        @php
        $fileNames = explode(',', $item->files);
        @endphp
        <img class="product-image" src="{{ asset('uploads/' . $fileNames[0]) }}" alt="Product Image">
    </div>
    <div class="product-details">
        <div class="product-name medium mt-4">{{$item->cardname}}</div>
        <div class="product-name futura" style="font-weight:lighter; text-align:center;">{{$item->carddesc}}</div>
        <div class="price"><span class="discount-price"> £{{$item->cardprice}}</span>
        </div>
        <div class="rating">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="products-sold">(150)</span>
        </div>
        <button>Order Now</button>
    </div>
    @endif
    </a>

</div>
@endforeach
</div>

    <x-footer />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Futura:wght@400&display=swap">

</body>

</html>