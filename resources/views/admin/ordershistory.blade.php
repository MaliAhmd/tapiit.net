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

    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/admin.css') }}">
</head>
<body>
    @include('adminlayout.admin_header')
    <div id="successContainer" style="position: absolute; top: 50px; right: 50px; z-index: 9000;">
        @if (session('message'))
        <div class="alert alert-success mx-5">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <script>
        if (document.getElementById('successContainer').innerHTML.trim() !== '') {
            setTimeout(function() {
                document.getElementById('successContainer').style.display = 'none';
            }, 5000);
        }

    </script>
    <h1 class="text-center mt-4">Orders Record</h1>

    <fieldset class="my-5 container vc" style="width:70%" style="margin-left:20%">
        <table id="EmpTable" class="table table-striped table-responsive table-bordered my-4" style="">
            <thead>
                <tr>
                    <th class="bg-secondary bg-gradient">date</th>
                    <th class="bg-secondary bg-gradient">Order Number</th>
                    <th class="bg-secondary bg-gradient">Cutomer Email</th>
                    <th class="bg-secondary bg-gradient">Card Name</th>
                    <th class="bg-secondary bg-gradient">Cutomer Quantity</th>
                    <th class="bg-secondary bg-gradient">Total Price</th>
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
                    <td>{{$order->ordernumber}}</td>
                    <td>{{$order->user}}</td>
                    <td>{{$order->card}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>£ {{$order->totalBill}}</td>
                    
                </tr>
                
                @endforeach
            </tbody>
        </table>


        </tbody>
        </table>
    </fieldset>


    <button type="button" class="btn btn-primary">
        Open Order Receipt
    </button>

    <!-- Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Order Receipt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="orderReceiptContent">
                    <!-- Order receipt content will be loaded here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




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
