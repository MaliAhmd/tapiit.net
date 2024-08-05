<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
<style>
.product-container{
    display:flex;
    flex-direction: row;
    width:100%;
}
    @media (max-width: 767px) {
        .product-card{
            display:flex;
            justify-content:center;
            margin:auto;
        }
        .product-card button{
            width:auto;
        }
    }
    @media (min-width: 992px){
        .product-container{
         justify-content:center;   
        }
    }
    @media (min-width: 1400px){
        .product-container{
         justify-content:flex-start;   
        }
    }
    
</style>
<body>

<div class="product-container container">
    @foreach ($card as $item)


    <div class="product-card" style="width: 300px !important; ">
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
                <div class="product-name medium">{{$item->cardname}}</div>
                <div class="product-name futura" style="font-weight:lighter; text-align:center;">{{$item->carddesc}}</div>
                <div class="price">Price <span class="discount-price">£{{$item->saleprice}}</span> <del class="old-price">£{{$item->cardprice}}</del>
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
        <div class="product-name medium">{{$item->cardname}}</div>
        <div class="product-name futura" style="font-weight:lighter; text-align:center;">{{$item->carddesc}}</div>
        <div class="price">Price<span class="discount-price"> £{{$item->cardprice}}</span>
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
    @endif
    </a>

</div>
@endforeach
</div>


</body>

</html>