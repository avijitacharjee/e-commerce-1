@extends('template')

@section('content')

    <!-- Form -->
    <div class="content">
        <form action="{{URL::to('sign-up')}}" method="POST" name="registration">
        @csrf
        <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="name" name="name" class="form-control" placeholder="Enter fullname" id="name">
            </div>
            @if ($errors->has('name'))
                <li class="err">{{ $errors->first('name') }}</li>
            @endif
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            @if ($errors->has('email'))
                <li class="err">{{ $errors->first('email') }}</li>
            @endif
            <div class="form-group">
                <label for="phone">Email address:</label>
                <input type="phone" name="phone" class="form-control" placeholder="Enter phone" id="phone">
            </div>
            @if ($errors->has('phone'))
                <li class="err">{{ $errors->first('phone') }}</li>
            @endif
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" id="password">
            </div>
            @if ($errors->has('password'))
                <li class="err">{{ $errors->first('password') }}</li>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
            <br/>
        </form>
        <button onclick="window.location.href='{{URL::to('/')}}';" class="btn signup-button">Already Registered? Log in here..</button>
        </div>
        <script>
            $(function() {
            $("form[name='registration']").validate({
                rules: {
                name: "required",
                email: {
                    required: true,
                    // Specify that email should be validated
                    // by the built-in "email" rule
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }
                },
                // Specify validation error messages
                messages: {
                name: "Please enter your fullname",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address"
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                form.submit();
                }
            });
            });

        </script>
@endsection