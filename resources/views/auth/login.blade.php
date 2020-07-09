@extends('layouts.blank')

@section('title', 'Sign In')

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">The world is yours <br>to explore</h1>
                <img src="{{ url('assets/images/mini-gallery.png') }}" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url('assets/images/logo.png') }}" alt="" class="w-50 mb-4">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-login btn-block mb-4">Sign In</button>
                            @if (Route::has('password.request'))
                                <p class="text-center forget m-0">
                                    <a href="{{ route('register') }}">
                                        <u>Don't Have an Account ?</u>
                                    </a>
                                </p>
                                <p class="text-center forget m-0">
                                    <a href="{{ route('password.request') }}" class="text-center forget">Forgot Your Password?</a>
                                </p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
