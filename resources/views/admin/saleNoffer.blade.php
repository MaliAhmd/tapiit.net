<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <title>Admin - Sales&Offers</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    @include('adminlayout.admin_header')
    <h1 class="text-center mt-4">Sales</h1>
    @if(session('sale'))
        <div id="alertMessage" class="alert alert-success" style="width: 60%; 
        margin:auto;
        text-align:center;
         height:70px;
         display:flex;
         justify-content:center;
         align-item:center;
         ">
            <p style="font-size:16px;">{{ session('sale') }}</p>
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
    
    <fieldset class="my-5 container vc" style="width:70%;margin-left:20%">
      <table id="EmpTable" class="table table-striped table-responsive table-bordered my-4" style="">
            <thead>
                <tr>
                    <th class="bg-secondary bg-gradient">Id</th>
                    <th class="bg-secondary bg-gradient">Card Name</th>
                    <th class="bg-secondary bg-gradient">Percent</th>
                    <th class="bg-secondary bg-gradient">Discounted Price</th>
                    <th class="bg-secondary bg-gradient">Action</th>
                </tr>
            </thead>
            <tbody style="color:black;">
                @php
                $i = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->cardname}}</td>
                    <td>{{$item->sale}}%</td>
                    <td>£ {{$item->saleprice}}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Button Group">
                            {{-- <form action="{{route('admin.salestatus')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" style="display: none" value="{{$item->id}}">
                               
                                <button class="btn btn-primary btn-sm mr-1"><i class="bi bi-hr"></i></button>
                            </form> --}}
                            <form action="{{route('admin.saledel')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" style="display: none" value="{{$item->id}}">
                                <button class="btn btn-danger btn-sm mr-1"><i class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </fieldset>
    <br>
    <hr style="width: 67%; margin-left:400px;">
    <br>
    <h1 class="text-center mt-4">Offers</h1>
    @if(session('offer'))
        <div id="alertMessage" class="alert alert-success" style="width: 60%; 
        margin:auto;
        text-align:center;
         height:70px;
         display:flex;
         justify-content:center;
         align-item:center;
         ">
            <p style="font-size:16px;">{{ session('offer') }}</p>
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

    <fieldset class="my-5 container vc" style="width:70%;margin-left:20%">
      <table id="EmpTable1" class="table table-striped table-responsive table-bordered my-4" style="">
            <thead>
                <tr>
                    <th class="bg-secondary bg-gradient">Id</th>
                    {{-- <th class="bg-secondary bg-gradient">Date</th> --}}
                    {{-- <th class="bg-secondary bg-gradient">User Name</th> --}}
                    <th class="bg-secondary bg-gradient">Card Name</th>
                    <th class="bg-secondary bg-gradient">Buy</th>
                    <th class="bg-secondary bg-gradient">Get</th>
                    <th class="bg-secondary bg-gradient">Status</th>
                    <th class="bg-secondary bg-gradient">Action</th>
                </tr>
            </thead>
            <tbody style="color:black;">
                @php
                $i = 1;
                @endphp
                @foreach ($offers as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->card->cardname}}</td>
                    {{-- <td>{{$item->user->name}}</td> --}}
                    {{-- <td>{{$item->offername}}</td> --}}
                    <td>{{$item->buythis}} Qty</td>
                    <td>{{$item->getoff}}%</td>
                    <td>
                        @if ($item->status == 1)
                        <span style="color: green;">Active</span>
                        @else
                        <span style="color: red;">In-active</span>
                        @endif    
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Button Group">
                            <form action="{{route('admin.offerstatus')}}" method="POST" class="mx-3">
                                @csrf
                                <input type="hidden" name="id" style="display: none" value="{{$item->id}}">
                               
                                <button class="btn btn-primary btn-sm mr-1"><i class="bi bi-hr"></i></button>
                            </form>
                            <form action="{{route('admin.offerdel')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" style="display: none" value="{{$item->id}}">
                                <button class="btn btn-danger btn-sm mr-1"><i class="bi bi-trash"></i></button>
                            </form>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
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
            $('#EmpTable1').DataTable({
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

    </script>


</body>
</html>
