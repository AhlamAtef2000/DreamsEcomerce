@extends('layouts.app')

@section('content')
<div class="section section-margin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h3 class="mb-0 text-white">{{ __('Dashboard') }}</h3>
                    </div>
                    <div class="card-body text-center p-4">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <p class="text-muted fs-5">{{ __('Welcome back! You are successfully logged in.') }}</p>
                        <div class="mt-4">
                            <a href="{{ route('cart.index') }}" class="btn btn-primary px-4 py-2 rounded-pill">Explore Features</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
