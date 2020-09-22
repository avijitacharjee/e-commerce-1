@extends('template')

@section('content')
    <!-- Form -->
    <div class="content">
        <form action="{{URL::to('signin')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br/>
        </form>
        <button onclick="window.location.href='{{URL::to('sign-up')}}';" class="btn signup-button">New user? Sign up here.</button>
        </div>
@endsection