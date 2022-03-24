@extends('layouts.app')
@section('content')
    <div class="login-page">
        <div class="form">
            @error('email')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p>{{$message}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('password')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            <form class="register-form" action="{{ url('/register') }}" method="post">
                {{ csrf_field() }}
                <input type="text" placeholder="name" name="name" />
                <input type="password" name="password" placeholder="password" />
                <input type="text" name="email" placeholder="email address" />
                <button type="submit">create</button>
                <p class="message">Already registered? <a href="{{ url('/login') }}">Sign In</a></p>
            </form>
        </div>
    </div>    
@endsection

