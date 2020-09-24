@extends('template')

@section('content')
    <!-- Form -->
    <div class="content">
        <form action="{{URL::to('sign-in')}}" method="POST" id="login-form">
            @csrf
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control valid-input" name="email" placeholder="Enter email" id="email">
            </div>
            <div class="email-msg"></div>
            @if ($errors->has('email'))
                <li class="err">{{ $errors->first('email') }}</li>
            @endif
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control valid-input" name="password" placeholder="Enter password" id="password">
            </div>
            <div class="password-msg"></div>
            @if ($errors->has('password'))
                <li class="err">{{ $errors->first('password') }}</li>
            @endif
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            <br/>
        </form>
        <button onclick="window.location.href='{{URL::to('sign-up')}}';" class="btn signup-button">New user? Sign up here.</button>
        </div>
        <script src="{{asset('js/login_validation.js')}}"></script>
@endsection