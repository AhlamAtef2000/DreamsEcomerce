@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Profile - My Orders</h2>

    @if($orders->isEmpty())
        <p>No orders available currently.</p>
    @else
        @foreach($orders as $order)
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Order ID: {{ $order->id }}</h5>
                    <p>Status: <strong>{{ $order->status }}</strong></p>
                    <p>Order Date: {{ $order->created_at->format('Y-m-d') }}</p>
                    <p>Total: {{ $order->total_price }} JOD</p>

                    <a href="{{ route('profile.orderDetails', $order->id) }}" class="btn btn-sm btn-primary">Order Details</a>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
