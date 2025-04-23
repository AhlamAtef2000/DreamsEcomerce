@extends('layouts.app')

@section('content')
    <div class="section section-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <!-- Confirm Password Wrapper Start -->
                    <div class="login-wrapper p-5 shadow-lg rounded-lg">

                        <!-- Confirm Password Title & Content Start -->
                        <div class="section-content text-center mb-4">
                            <h2 class="title mb-3 font-weight-bold">{{ __('Confirm Password') }}</h2>
                            <p class="desc-content text-muted">Please confirm your password before continuing.</p>
                        </div>
                        <!-- Confirm Password Title & Content End -->

                        <!-- Confirm Password Form Start -->
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-4">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Input Password End -->

                            <!-- Confirm Password Button Start -->
                            <div class="single-input-item mb-4 text-center">
                                <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                                    {{ __('Confirm Password') }}
                                </button>
                            </div>
                            <!-- Confirm Password Button End -->

                            <!-- Forgot Password Link Start -->
                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                            <!-- Forgot Password Link End -->
                        </form>
                        <!-- Confirm Password Form End -->

                    </div>
                    <!-- Confirm Password Wrapper End -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Custom styling for confirm password page */
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
