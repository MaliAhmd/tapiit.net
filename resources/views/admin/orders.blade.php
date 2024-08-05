<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .header {
            display: flex;
            border-bottom: 1px solid black;
            flex-direction: row;
            justify-content: space-between;
            font-weight: bold;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .pro_data {
            display: flex;
            /* border-bottom: 1px solid black; */
            padding-top: 5px;
            padding-bottom: 5px;
            flex-direction: row;
            justify-content: space-between;
        }

        .total_price {
            font-size: 24px;
            display: flex;
            justify-content: flex-end;
            padding-top: 5px;
            padding-bottom: 5px;
            border-top: 1px solid black;
        }

   
    </style>

    <title>Admin - Orders</title>
    <link rel="stylesheet" href="{{ asset('/admin.css') }}">
</head>
<body>
    @include('adminlayout.admin_header')
    
    <h1 class="text-center mt-4">Orders</h1>
        @if (session('message'))
            <div id="alertMessage" class="position-fixed top-0 w-100 mt-4" style="z-index:1000000;">
            <div  class="alert alert-success p-1 w-50 d-flex align-items-center text-center" >
                <p style="font-size:16px;">{{ session('message') }}</p>
            </div>
        </div>
        <script>
        setTimeout(function(){
            var alertMessage = document.getElementById('alertMessage');
            if(alertMessage) {
                alertMessage.style.display = 'none';
            }
        }, 5000);
    </script>
        @endif
        
    <fieldset class="my-5 container vc" style="width:70%" style="margin-left:20%">
        <table id="EmpTable" class="table table-striped table-responsive table-bordered my-4" style="">
            <thead>
                <tr>
                    <th class="bg-secondary bg-gradient">date</th>
                    <th class="bg-secondary bg-gradient">Order Number</th>
                    <th class="bg-secondary bg-gradient">Cutomer Name</th>
                    <th class="bg-secondary bg-gradient">Cutomer Email</th>
                    <th class="bg-secondary bg-gradient">Total Price</th>
                    <th class="bg-secondary bg-gradient">Action</th>
                </tr>
            </thead>
            <tbody style="color:black;">
                @php
                $i = 1;
                $item=0
                @endphp
                @foreach ($orders as $order)

                <tr>
                    <td>{{$order->date}}</td>
                    <td>{{$order->orderno}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->user->email}}</td>
                    <td>£ {{$order->totalBill}}</td>
                    <td class="text-center" style="display:flex; justify-content:space-around;">
                        <form action="{{route('admin.orderdel')}}" method="POST">
                            @csrf
                            <input type="text" name="id" value="{{$order->id}}" style="display:none;">
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/admin/reciept/{{$order->orderno}}" class="btn btn-info" >View</a>
                        @php
                        $orderno = $order->orderno;
                        $record = DB::selectOne("SELECT user_id FROM records WHERE ordernumber = '$orderno'");
                        @endphp
                        <form action="/getorderedpdf" method="POST">
                            @csrf
                            <input type="email" name="email" value="{{$order->user->email}}" style="display: none;">
                            <input type="hidden" name="odr" value="{{$order->orderno}}" style="display: none;">
                            <button class="btn btn-primary">QR</button>
                        </form>
                    </td>
                </tr>
                <!--<div class="modal fade" id="orderModal1{{$order->id}}" tabindex="-1" aria-labelledby="orderModalLabel{{$order->id}}">-->
                <!--    <h1>{{$item}}</h1>-->
                <!--    <div class="modal-dialog">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <h5 class="modal-title" id="orderModalLabel{{$order->id}}">Order Receipt</h5>-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                <!--            </div>-->
                <!--            <div class="modal-body" id="orderReceiptContent{{$order->id}}">-->
                <!--                <div class="container">-->
                <!--                    <div class="modal fade" id="orderModal1{{$order->id}}" tabindex="-1" aria-labelledby="orderModalLabel{{$order->id}}">-->
                <!--    <h1>{{$item}}</h1>-->
                <!--    <div class="modal-dialog">-->
                <!--        <div class="modal-content">-->
                <!--            <div class="modal-header">-->
                <!--                <h5 class="modal-title" id="orderModalLabel{{$order->id}}">Order Receipt</h5>-->
                <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                <!--            </div>-->
                <!--            <div class="modal-body" id="orderReceiptContent{{$order->id}}">-->
                                
                <!--                </div>-->
                <!--                <div class="modal-footer">-->
                <!--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--                </div>-->
                <!--                <div class="modal-footer">-->
                <!--                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                @endforeach
            </tbody>
        </table>


        </tbody>
        </table>
    </fieldset>


    

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-
                                pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#EmpTable').DataTable({
                "pagingType": "full_numbers"
                , "lengthMenu": [
                    [10, 50, 100, -1]
                    , [10, 50, 100, "All"]
                ]
                , responsive: true
                , language: {
                    search: "_INPUT_"
                    , searchPlaceholder: "Search"
                , }
            });
        });


        $(document).ready(function() {
            $("#openModalButton").click(function() {
                // Here you can fetch the order details via AJAX or set static content
                var orderContent = "<p>Order ID: 123456</p>" +
                    "<p>Product: Example Product</p>" +
                    "<p>Quantity: 2</p>" +
                    "<p>Total: $50.00</p>";

                // Set the fetched or static content into the modal body
                $("#orderReceiptContent").html(orderContent);

                // Show the modal
                $("#orderModal").modal("show");
            });
        });

    </script>


</body>
</html>
