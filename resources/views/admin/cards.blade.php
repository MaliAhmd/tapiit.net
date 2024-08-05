<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <title>Admin - Cards</title>
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .inputfile {
            opacity: 0;
        }

        .inputfile+label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            cursor: pointer;
        }

        #file-preview {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .preview-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 5px;
            margin-bottom: 5px;
        }

        /*  */
        #image-modal {
            display: none;
            position: fixed;
            z-index: 999;
            padding-top: 20px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        #modal-content {
            margin: auto;
            margin-top: 2%;
            border-radius: 25px;
            box-shadow: rgb(0, 255, 0) !important;
            /* border: 5px solid black; */
            display: block;
            width: 80%;
            max-width: 800px;
        }

        .modal-image {
            width: 50%;
            height: auto;
        }

        .close {
            color: #aaa;
            float: right;
            margin-right: 5%;
            margin-top: 2%;
            font-size: 28px;
            font-weight: bold;
            padding-right: 10px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }
        @media screen and (min-width:768px)
        {
            .bi-cloud-upload-fill{
             width:100%;   
            }
            body{
                background-color:red;
            }
        }

    </style>
</head>
<body>
    @include('adminlayout.admin_header')
    <br>
    <br>
    <div class="container" style="width:50%;margin:auto;">
        <h3 class="text-center">Add New Card</h3>
        
         @if(session('success'))
         <div id="alertMessage" class="position-fixed top-0 w-100 mt-4" style="z-index:1000000;">
            <div  class="alert alert-success p-1 w-50 d-flex align-items-center text-center" >
                <p style="font-size:16px;">{{ session('success') }}</p>
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
        @elseif (session('message'))
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
        
        
    
   
        <form action="{{ route('admin.addcard') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto mt-4">
                    <label class="sr-only" for="productName">Name</label>
                    <input required type="text" class="form-control mb-2" id="productName" name="cardname" placeholder="Enter your Card Name">
                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only" for="productPrice">Price</label>
                    <input required type="text" class="form-control mb-2 neg" id="productPrice" name="cardprice" placeholder="Enter Card Price" min="0">
                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only">Description</label>
                    <textarea  required class="form-control mb-2" name="carddesc" placeholder="Enter Card Description"></textarea>
                </div>
                
                
                <div class="col-auto mt-4">
                    <label class="sr-only">Card Tag</label>
                    <input required type="text" class="form-control mb-2" name="tag" placeholder="BEST SELLER. ECO-FRIENDLY...">
                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only">Dimensions</label>
                    <input required type="text" class="form-control mb-2" name="dimension" placeholder="54mm x 86mm x 1mm...">
                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only">Weight</label>
                    <input required type="number" step="any" class="form-control mb-2" name="weight" placeholder="6.5">

                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only">Material</label>
                    <input required type="textarea" class="form-control mb-2" name="material" placeholder="PVC, Bamboo, Stainless Steel...">
                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only">Card Detail <span style="font-size:12px;">(part 1)</span></label>
                    <textarea required class="form-control mb-2" name="desc1" placeholder="Enter Card details"></textarea>
                </div>
                <div class="col-auto mt-4">
                    <label class="sr-only"><span style="font-size:12px;">(part 2)</span></label>
                    <textarea required class="form-control mb-2" name="desc2" placeholder="Enter Card details"></textarea>
                </div>
                
                <div class="col-auto mt-2">
                    <input required type="file" name="file[]" id="file" class="inputfile" style="width: 100%;" data-multiple-caption="{count} files selected" multiple />
                    <label for="file" style="width: 30%;text-align: center;padding:1%"><i style="margin-left: 0%;" class="bi bi-cloud-upload-fill"></i> Choose a file</label>
                    <div id="file-preview" style="cursor: pointer;"></div>
                </div>
                <!-- Image Modal -->
                <div id="image-modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img id="modal-content" class="modal-image">
                </div>

                <div class="col-auto mb-4 mt-4 text-center">
                    <button type="submit" class="btn btn-primary mb-2 w-50">Add</button>
                </div>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script>
            const input = document.getElementById('file');
            const previewContainer = document.getElementById('file-preview');
            const modal = document.getElementById('image-modal');
            const modalImg = document.getElementById('modal-content');

            input.addEventListener('change', function() {
                const files = this.files;
                previewContainer.innerHTML = '';

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const previewImage = document.createElement('img');
                        previewImage.setAttribute('src', e.target.result);
                        previewImage.setAttribute('class', 'preview-image');
                        previewImage.setAttribute('onclick', `openModal('${e.target.result}')`);
                        previewContainer.appendChild(previewImage);
                    }

                    reader.readAsDataURL(file);
                }
            });

            function openModal(imageSrc) {
                modal.style.display = "block";
                modalImg.src = imageSrc;
            }

            function closeModal() {
                modal.style.display = "none";
            }

        </script>
        <script>
            document.getElementById('productImage').addEventListener('change', handleFileSelect);

            function handleFileSelect(event) {
                const files = event.target.files;
                const fileList = document.createElement('ul');

                for (const file of files) {
                    const listItem = document.createElement('li');
                    listItem.textContent = file.name;
                    fileList.appendChild(listItem);
                }

                const fileInput = document.getElementById('productImage');
                fileInput.parentNode.insertBefore(fileList, fileInput.nextSibling);
            }

        </script>

    </div>

    <hr style="width:70%;margin:auto;">
    <h1 class="text-center mt-4">List Of Cards</h1>
    

    <fieldset class="my-5 container vc" style="width:70%;margin-left:20%">
        <table id="EmpTable" class="table table-striped table-responsive table-bordered my-4" style="">
            <thead>
                <tr>
                    <th class="bg-secondary bg-gradient">Id</th>
                    <th class="bg-secondary bg-gradient">Name</th>
                    <th class="bg-secondary bg-gradient">Price</th>
                    <th class="bg-secondary bg-gradient">Image</th>
                    <th class="bg-secondary bg-gradient">Action</th>
                </tr>
            </thead>
            <tbody style="color:black;">

                @php
                $i = 1;
                $item=0
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$i++}}</td>
                    <td class="">
                        <div style="display: inline-block;">{{$item->cardname}}</div>
                        <div style="display: inline-block;">
                            @if ($item->sale == 0)
                            <span data-bs-toggle="modal" data-bs-target="#orderModal{{$item->id}}" data-product="{{ json_encode($item) }}" class="btn btn-success btn-sm" id="openModalButton" style="font-size:12px; height:25px; padding:0 6px; margin-left:20px;">Sale</span>
                            @endif
                            <span data-bs-toggle="modal" data-bs-target="#offerModal{{$item->id}}" data-product="{{ json_encode($item) }}" class="btn btn-warning btn-sm" id="openOfferModalButton{{$item->id}}" style="font-size:12px; padding:0 6px; height:25px; margin-left:10px;">Offer</span>
                        </div>
                    </td>
                    <td>£ {{$item->cardprice}} </td>
                    <td class="text-center">
                        @php
                        $fileNames = explode(',', $item->files);
                        @endphp
                        @foreach($fileNames as $fileName)
                        <img src="/uploads/{{$fileName}}" style="max-width: 50px; height:50px; aspect-ratio: 3/2 !important;object-fit: contain !important;">
                        @endforeach
                    </td>
                    <td class="text-center">
                        <div class="btn-group " role="group" aria-label="Button Group">
                            <span data-bs-toggle="modal" data-bs-target="#update{{$item->id}}" data-product="{{ json_encode($item) }}" class="btn btn-success btn-sm me-2" id="update" style="font-size:18px; height:30px; width:30px; padding:0 6px; margin-left:20px; text-align:center; "><i class="bi bi-pencil-square"></i></span>
                            <form class="" action="{{route('admin.deletecard')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" style="display: none" value="{{$item->id}}">
                                <button class="btn btn-danger btn-sm mr-1"><i class="bi bi-trash"></i></button>
                            </form>
                            
                            {{-- <form action="{{route('admin.updatecard')}}" method="POST">
                            @csrf
                            <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                            <input type="hidden" name="id" style="display: none" value="{{$item->id}}">
                            </form> --}}
                        </div>
                    </td>
                </tr>


                <div class="modal fade" id="offerModal{{$item->id}}" tabindex="-1" aria-labelledby="offerModalLabel{{$item->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderModalLabel">Create Offer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="orderReceiptContent1">
                                <!-- Order receipt content will be loaded here -->
                                <form action="{{route('admin.createoffer')}}" method="POST">
                                    @csrf
                                    <div class="form-row align-items-center">
                                        <div class="col-auto mt-4" style="display: none;">
                                            <label class="sr-only" for="cardName">Card Name</label>
                                            <input type="text" class="form-control mb-2" name="id" value="{{$item->id}}" style="display: none;">
                                        </div>
                                        <!-- Add fields for each offer -->
                                        <div class="col-auto mt-4 d-flex" style="justify-content: center; align-item:center;">
                                            <label for="buyThis" class="mx-2">Buy</label>
                                            <input type="text" class="form-control mb-2 neg" style="width: 50px;font-size:12px; height:30px;" id="buyThis" name="buy" placeholder="Qty" min="1" required>
                                            <label for="getThis" class="mx-2">Get</label>
                                            <input type="text" class="form-control mb-2 neg" style="width: 50px; font-size:12px; height:30px;" id="getThis" name="get" placeholder="%" required>
                                            <label for="offThis" class="mx-2">Off</label>
                                        </div>
                                        <div class="col-auto mb-4 mt-4 text-center">
                                            <button type="submit" class="btn btn-primary mb-2 w-50">Add Offer</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="modal fade" id="orderModal{{$item->id}}" tabindex="-1" aria-labelledby="orderModalLabel{{$item->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderModalLabel">Create Sale</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="orderReceiptContent1">
                                <!-- Order receipt content will be loaded here -->
                                <form action="{{route('admin.createsale')}}" method="POST">
                                    @csrf
                                    <div class="form-row align-items-center">
                                        <div class="col-auto mt-4" style="display: none;">
                                            <label class="sr-only" for="cardName">Card Name</label>
                                            <input type="text" class="form-control mb-2" name="id" value="{{$item->id}}" style="display: none;">
                                        </div>
                                        <!-- Add fields for each offer -->
                                        <div class="col-auto mt-4 d-flex" style="justify-content: center">
                                            <label for="buyThis1" class="me-2">Sale Percent </label>
                                            <input type="text" class="form-control mb-2 neg" style="width: 30%;font-size:12px" id="buyThis" name="sale" placeholder="Enter Percent " min="0">
                                        </div>
                                        <div class="col-auto mb-4 mt-4 text-center">
                                            <button type="submit" class="btn btn-primary mb-2 w-50">Add Sale</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="update{{$item->id}}" tabindex="-1" aria-labelledby="update{{$item->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="update1">Update Card Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="orderReceiptContent11">
                                <form action="{{ route('admin.updatecard') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                                    @csrf
                                    <div class="form-row align-items-center">
                                            <input type="hidden" class="form-control mb-2" id="productName" name="card" placeholder="Enter your Card Name" value="{{ $item->id }}" >
                                        <div class="col-auto mt-4">
                                            <label class="sr-only" for="productName">Name</label>
                                            <input type="text" class="form-control mb-2 " id="productName" name="cardname" placeholder="Enter your Card Name" value="{{ $item->cardname }}">
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only" for="productPrice">Price</label>
                                            <input type="text" class="form-control mb-2 neg" id="productPrice" name="cardprice" placeholder="Enter Card Price" value="{{ $item->cardprice }}" min="1">
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only">Description</label>
                                            <input type="textarea" class="form-control mb-2" name="carddesc" placeholder="Enter Card details" value="{{ $item->carddesc }}">
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only">Card Tag</label>
                                            <input required type="text" class="form-control mb-2" name="tag" value="{{ $item->tag }}">
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only">Dimensions</label>
                                            <input required type="text" class="form-control mb-2" name="dimension" value="{{ $item->dimensions }}">
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only">Weight</label>
                                            <input required type="number" step="any" class="form-control mb-2" name="weight" value="{{ $item->weight }}">
                        
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only">Material</label>
                                            <input required type="textarea" class="form-control mb-2" name="material" value="{{ $item->material }}">
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only">Card Detail <span style="font-size:12px;">(part 1)</span></label>
                                            <textarea required class="form-control mb-2" name="desc1" placeholder="Enter Card details">{{ $item->detail1 }}</textarea>
                                        </div>
                                        <div class="col-auto mt-4">
                                            <label class="sr-only"><span style="font-size:12px;">(part 2)</span></label>
                                            <textarea required class="form-control mb-2" name="desc2" placeholder="Enter Card details">{{ $item->detail2 }}</textarea>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach

            </tbody>
        </table>
    </fieldset>
    <!-- Sale Modal -->

    <script>
        // Selecting elements by class name and adding event listener
        var elements = document.getElementsByClassName("neg");
        for (var i = 0; i < elements.length; i++) {
            elements[i].addEventListener("input", function() {
                let value = this.value.trim(); // Remove leading and trailing spaces
                if (value === "" || /^\d+$/.test(value)) {
                    // If the value is empty or consists of only digits
                    this.value = value; // Keep the value unchanged
                } else {
                    // If the value contains non-numeric characters, remove them
                    this.value = value.replace(/[^\d]/g, "");
                }
            });
        }
    </script>



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
            $("#openModalButton2").click(function() {
                var offerContent = "" +
                    $("#orderReceiptContent2").html(offerContent);

                $("#orderModal2").modal("show");
            });
        });

    </script>




</body>
</html>
