
$(document).ready(function () {
    $('#email').on('input', function () {
        var email = $(this).val();
        var valEmail= re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (email.length == 0) {
            $('.email-msg').addClass('invalid-msg').text("Email is required");
            $(this).addClass('invalid-input').removeClass('valid-input');
        }else if(!valEmail.test(email)){
            $('.email-msg').addClass('invalid-msg').text("Please write a valid email");
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        
        else {
            $('.email-msg').empty();
            $(this).addClass('valid-input').removeClass('invalid-input');
        }
    });
    $('#phone').on('input', function () {
        var phone = $(this).val();
        var valPhone= re = /^\d+$/;
        if (phone.length == 0) {
            $('.phone-msg').addClass('invalid-msg').text("Phone is required");
            $(this).addClass('invalid-input').removeClass('valid-input');
        }else if(!valPhone.test(phone)){
            $('.phone-msg').addClass('invalid-msg').text("Please write a valid phone no.");
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else {
            $('.phone-msg').empty();
            $(this).addClass('valid-input').removeClass('invalid-input');
        }
    });
    $('#password').on('input', function () {
        var password = $(this).val();
        var uppercasePassword = /(?=.*?[A-Z])/;
        var lowercasePassword = /(?=.*?[a-z])/;
        var digitPassword = /(?=.*?[0-9])/;
        var spacesPassword = /^$|\s+/;
        var symbolPassword = /(?=.*?[#?!@$%^&*-])/;
        if (password.length == 0) {
            $('.password-msg').addClass('invalid-msg').text('Password is required');
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else if (!uppercasePassword.test(password)) {
            $('.password-msg').addClass('invalid-msg').text('At least one Uppercase');
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else if (!lowercasePassword.test(password)) {
            $('.password-msg').addClass('invalid-msg').text('At least one Lowercase');
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else if (!digitPassword.test(password)) {
            $('.password-msg').addClass('invalid-msg').text('At least one digit');
            $(this).addClass('invalid-input').removeClass('valid-input');
        } 
        else if (spacesPassword.test(password)) {
            $('.password-msg').addClass('invalid-msg').text('Whitespaces are not allowed');
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else if (password.length <5) {
            $('.password-msg').addClass('invalid-msg').text('Minumum 5 characters');
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else {
            $('.password-msg').empty();
            $(this).addClass('valid-input').removeClass('invalid-input');
        }
    });
    $('#confirm-password').on('input', function () {
        var password = $('#password').val();
        var confirm_password = $(this).val();
        console.log(password);
        console.log(confirm_password);
        if(password!=confirm_password){
            $('.confirm-password-msg').addClass('invalid-msg').text('Passwords didn\'t match');
            $(this).addClass('invalid-input').removeClass('valid-input');
        }
        else {
            $('.confirm-password-msg').empty();
            $(this).addClass('valid-input').removeClass('invalid-input');
        }
    });
});
$('input').on('input',function(e){
    console.log($('#login-form').find('.valid-input').length);
if($('#login-form').find('.valid-input').length==5){
    $('#submit').removeClass('allowed-submit');
    $('#submit').removeAttr('disabled');
}
else{
    e.preventDefault();
    $('#submit').attr('disabled','disabled')
}
});