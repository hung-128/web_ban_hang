<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
</head>
<body>
    
</body>
</html>
<div class="login-page">
    <div class="form" >
        <form class="login-form" action="{{url('/login')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="email" placeholder="email"/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit">login</button>
        <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </div>
</div>
<script src="{{ asset('js/auth/login.js') }}" defer></script>

