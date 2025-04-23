@extends('layouts.app')

@section('content')
    <div class="section section-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <!-- Verify Email Wrapper Start -->
                    <div class="card shadow-lg rounded-lg">

                        <!-- Card Header Start -->
                        <div class="card-header text-center bg-primary text-white">
                            <h3>{{ __('Verify Your Email Address') }}</h3>
                        </div>
                        <!-- Card Header End -->

                        <!-- Card Body Start -->
                        <div class="card-body p-5">

                            @if (session('resent'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            <div class="text-center mb-4">
                                <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                                <p>{{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-decoration-none">{{ __('click here to request another') }}</button>.
                                    </form>
                                </p>
                            </div>

                            <!-- Button to Go Home -->
                            <div class="text-center">
                                <a href="{{ url('/') }}" class="btn btn-primary w-100 py-2 rounded-pill">
                                    {{ __('Go to Home') }}
                                </a>
                            </div>

                        </div>
                        <!-- Card Body End -->

                    </div>
                    <!-- Verify Email Wrapper End -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            border-radius: 10px;
        }
        .card-header {
            font-size: 1.5rem;
            font-weight: 700;
        }
        .card-body {
            background-color: #f8f9fa;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            color: #fff;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
@endsection
