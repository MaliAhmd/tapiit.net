

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    <style>
    
        nav 
        {
            left: 0; 
            top: 0; 
            bottom: 0;
            width:12%;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            background-color:red;
        }
        @media screen and (max-width:768px)
        {
            .nav
            {
                width:100% !important;
                background-color:blue;
            }
            .navbar-brand img{
                height:100%;
                width:50%;
            }
        }
    </style>
</head>
<body>
    <nav class="bg-dark text-white position-fixed " style="">
        <div class="navbar-brand d-flex mx-auto mt-4">
            <a href="/"><img class="img-fluid w-75" style="margin-left: 10%;" src="{{ asset('/logotr.png') }}" height="50" alt=""></a>
        </div>
        <ul class="nav flex-column n w-100 text-nowrap" style="margin-top: 50%;">
            <li class="nav-item">
                <a class="nav-link text-white  text-center" href="{{route('admin.user')}}"><span>Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  text-center" href="{{route('admin.cardlist')}}"><span>Cards</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  text-center" href="{{route('admin.salenoffer')}}"><span>Sales And Offers</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  text-center" href="{{route('admin.order')}}"><span>Orders</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  text-center" href="{{route('admin.history')}}"><span>Orders History</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  text-center" href="{{route('admin.logout')}}"><span style="color: red;">Logout</span></a>
            </li>
        </ul>
    </nav>
</body>
</html>