@extends('template')
@section('content')
    <a href="{{URL::to('/products/insert')}}">Insert</a>
    <table class="table table-bordered table-colored table-responsive" id="product-table">
        <thead>
            <td>
                Name
            </td>
            <td>
                Price
            </td>
            <td>
                Quantity
            </td>
            <td>
                Image
            </td>
            <td>
            
            </td>
            <td>
            
            </td>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->quantity }}
                    </td>
                    <td>
                        <img src="{{$product->images}}" alt="" srcset="" height ="100" width ="100" >
                    </td>
                    <td>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$product->id}}">Delete</button>
                    </td>
                    <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{$product->id}}">Update</button>
                    </td>
                </tr>

                <!-- Modal  top-->
                <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            You are going to delete this item. Are you sure ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="location.href='{{URL::to('product/delete')}}/{{$product->id}}';">Delete</button>
                            <button type="button" class="btn btn-primary">close</button>
                        </div>
                        </div>
                    </div>
                </div>

            
                <!-- Modal Center-->
                <div class="modal fade" id="exampleModalCenter{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="data{{$product->id}}" action="{{URL::to('/products/insert')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name{{$product->id}}">Name</label>
                                <input type="text" class="form-control" id="name{{$product->id}}" name="name" aria-describedby="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="price{{$product->id}}">Price</label>
                                <input type="number" class="form-control" id="price{{$product->id}}" name = "price" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="quantity{{$product->id}}">Quantity</label>
                                <input type="number" class="form-control" id="quantity{{$product->id}}" name = "quantity" aria-describedby="name" placeholder="Quantity">
                            </div>
                            <div class="form-group{{$product->id}}">
                                <label for="images">Image</label>
                                <input type="file" class="form-control" id="images{{$product->id}}" name = "images[]" placeholder="images"  multiple>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit"  id="button{{$product->id}}" class="btn btn-primary">Submit</button>
                        <script>
                            $("#button{{$product->id}}").on("click", function(e) {
                                console.log('fff');
                                var form = $("#Form");

                                // you can't pass Jquery form it has to be javascript form object
                                var formData = new FormData(form[0]);
                                console.log('b');
                                e.preventDefault();    
                                var formData = new FormData(this);
                                console.log('a');
                                $.post("http://127.0.0.1:8000/products/update/{{$product->id}}",
                                    formData,
                                    function(data, status){
                                        alert("Data: " + data + "\nStatus: " + status);
                                        console.log("Data: " + data + "\nStatus: " + status);
                                });
                            });
                        </script>
                    </div>
                    </div>
                </div>
                </div>
                
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready( function () {
            $('#product-table').DataTable();
        } );

        
    </script>
    
@endsection