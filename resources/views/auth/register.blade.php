@extends('layouts.app')

@section('content')
    <div class="section section-margin">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <!-- Register Wrapper Start -->
                    <div class="login-wrapper p-5 shadow-lg rounded-lg">

                        <!-- Register Title & Content Start -->
                        <div class="section-content text-center mb-4">
                            <h2 class="title mb-3 font-weight-bold">{{ __('Register') }}</h2>
                            <p class="desc-content text-muted">Create your account below and get started.</p>
                        </div>
                        <!-- Register Title & Content End -->

                        <!-- Form Action Start -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Input Name Start -->
                            <div class="single-input-item mb-4">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Input Name End -->

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your Password">
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
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                            <!-- Confirm Password End -->

                            <!-- Register Button Start -->
                            <div class="single-input-item mb-4">
                                <button type="submit" class="btn btn-dark w-100 py-2 rounded-pill">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <!-- Register Button End -->

                        </form>
                        <!-- Form Action End -->

                        <!-- Login Link Start -->
                        <div class="text-center">
                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="font-weight-bold">Login Here</a></p>
                        </div>
                        <!-- Login Link End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>
            </div>

        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Custom styling for register page */
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
