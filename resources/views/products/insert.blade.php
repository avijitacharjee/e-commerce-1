@extends('template')
@section('content')
    <form id="form" action="{{URL::to('/products/insert')}}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name = "price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="name" name = "quantity" aria-describedby="name" placeholder="Quantity">
        </div>
        <div class="form-group">
            <label for="images">Image</label>
            <input type="file" class="form-control" id="images" name = "images[]" placeholder="images"  multiple>
        </div>
        <button type="button" id="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
        $("#submit").on("click", function(e) {
            console.log('fff');
            var form = $("#form");

            // // you can't pass Jquery form it has to be javascript form object
            // var formData = new FormData(form[0]);
            // console.log('b');
            e.preventDefault();    
            console.log('a');
            var formData = new FormData($('#form')[0]);
            
            console.log("Created FormData, " + [...formData.keys()].length + " keys in data");
            $.ajax({
                type: 'post',
                dataType: 'html',
                url: "http://127.0.0.1:8000/api/product/update/5",
                cache: false,
                data: formData,
                processData: false,
                success: function (result) {
                    console.log(result);
                }
            });
        });
    </script>
@endsection