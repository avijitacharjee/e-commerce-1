@extends('template')

@section('content')

    <!-- Form -->
    <div class="content">
        <form action="{{URL::to('sign-up')}}" method="POST" name="registration">
        @csrf
        <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="name" name="name" class="form-control valid-input" placeholder="Enter fullname" id="name">
            </div>
            @if ($errors->has('name'))
                <li class="err">{{ $errors->first('name') }}</li>
            @endif
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control valid-input" placeholder="Enter email" id="email">
            </div>
            @if ($errors->has('email'))
                <li class="err">{{ $errors->first('email') }}</li>
            @endif
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" class="form-control valid-input" placeholder="Enter phone" id="phone">
            </div>
            <div class="phone-msg"></div>
            @if ($errors->has('phone'))
                <li class="err">{{ $errors->first('phone') }}</li>
            @endif
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control valid-input" placeholder="Enter password" id="password">
            </div>
            <div class="password-msg"></div>
            @if ($errors->has('password'))
                <li class="err">{{ $errors->first('password') }}</li>
            @endif

            <div class="form-group">
                <label for="confirm-password">Confirm password:</label>
                <input type="password" name="confirm-password" class="form-control valid-input" placeholder="Enter password" id="confirm-password">
            </div>
            <div class="confirm-password-msg"></div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br/>
        </form>
        <button onclick="window.location.href='{{URL::to('/')}}';" class="btn signup-button">Already Registered? Log in here..</button>
    </div>
    <script src="{{asset('js/signup.js')}}"></script>
    
@endsection