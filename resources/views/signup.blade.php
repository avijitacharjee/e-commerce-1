@extends('template')

@section('content')
    <!-- Form -->
    <div class="content">
        <form action="/action_page.php">
        <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="name" class="form-control" placeholder="Enter fullname" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Email address:</label>
                <input type="phone" class="form-control" placeholder="Enter phone" id="phone">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br/>
        </form>
        <button onclick="window.location.href='{{URL::to('/')}}';" class="btn signup-button">Already Registered? Log in here..</button>
        </div>
@endsection