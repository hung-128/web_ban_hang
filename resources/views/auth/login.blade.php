@extends('layouts.app')
@section('content')
<div class="login-page">
    <div class="form" >
        <form class="login-form" action="{{url('/login')}}" method="POST">
        {{csrf_field()}}
            <input type="text" name="email" placeholder="email"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit">login</button>
            <a class="message" href="{{url('password/reset')}}">Forgot password</a>
            <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
        </form>
    </div>
</div>    
@endsection