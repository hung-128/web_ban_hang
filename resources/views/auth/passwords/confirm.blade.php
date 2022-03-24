@extends('layouts.app')

@section('content')
    <div class="login-page">
        <div class="form">
            <div class="">{{ __('Confirm Password') }}
                <p>
                    {{ __('Please confirm your password before continuing.') }}
                </p>
                <form class="login-form" method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <input id="password" type="password" placeholder="Password..."
                        class="@error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <button type="submit">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="message" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
