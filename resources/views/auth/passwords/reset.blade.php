@extends('layouts.app')

@section('content')
    <div class="section section-margin">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <!-- Reset Password Wrapper Start -->
                    <div class="login-wrapper p-5 shadow-lg rounded-lg">

                        <!-- Reset Password Title & Content Start -->
                        <div class="section-content text-center mb-4">
                            <h2 class="title mb-3 font-weight-bold">{{ __('Reset Password') }}</h2>
                            <p class="desc-content text-muted">Please enter your email and new password to reset your account password.</p>
                        </div>
                        <!-- Reset Password Title & Content End -->

                        <!-- Reset Password Form Start -->
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Input Password End -->

                            <!-- Confirm Password Start -->
                            <div class="single-input-item mb-4">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <!-- Confirm Password End -->

                            <!-- Reset Password Button Start -->
                            <div class="single-input-item mb-4">
                                <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                            <!-- Reset Password Button End -->

                        </form>
                        <!-- Reset Password Form End -->

                    </div>
                    <!-- Reset Password Wrapper End -->
                </div>
            </div>

        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Custom styling for reset password page */
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
    </style>
@endsection
