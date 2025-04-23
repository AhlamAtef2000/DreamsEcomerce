@extends('layouts.app')

@section('content')
    <div class="section section-margin">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <!-- Login Wrapper Start -->
                    <div class="login-wrapper p-5 shadow-lg rounded-lg">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-4">
                            <h2 class="title mb-3 font-weight-bold">Welcome Back!</h2>
                            <p class="desc-content text-muted">Please login using your account details below.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-4">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox/Remember Me Start -->
                            <div class="single-input-item mb-4 d-flex justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                                    <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>

                                <a class="text-muted" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </div>
                            <!-- Checkbox/Remember Me End -->

                            <!-- Login Button Start -->
                            <div class="single-input-item mb-4">
                                <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <!-- Login Button End -->
                        </form>
                        <!-- Form Action End -->

                        <!-- Register Link Start -->
                        <div class="text-center">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="font-weight-bold">Register Here</a></p>
                        </div>
                        <!-- Register Link End -->

                    </div>
                    <!-- Login Wrapper End -->
                </div>
            </div>

        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Custom styling for login page */
        .login-wrapper {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .title {
            font-size: 32px;
            color: #333;
        }
        .desc-content {
            font-size: 14px;
            color: #6c757d;
        }
        .single-input-item input {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }
        .single-input-item input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
        }
        .btn-dark {
            background-color: #007bff;
            color: #fff;
        }
        .btn-dark:hover {
            background-color: #0056b3;
            color: #fff;
        }
        .invalid-feedback {
            font-size: 12px;
            color: #e74a3b;
        }
        .text-muted {
            font-size: 13px;
        }
    </style>
@endsection
