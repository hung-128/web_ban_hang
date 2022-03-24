@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-page">
        <div class="form">
            <div >{{ __('Reset Password') }}</div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form class="login-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" >
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
