@extends('template')
@section('content')
    <form action="{{URL::to('/products/insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection