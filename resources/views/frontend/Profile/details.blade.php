@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Order Details #{{ $order->id }}</h2>
    <p>Status: {{ $order->status }}</p>
    <p>Payment Method: {{ $order->payment_method }}</p>
    <p>Total: {{ $order->total_price }} JOD</p>

    <h4>Items:</h4>
    <ul>
        @foreach($order->orderItems as $item)
            <li>
                {{ $item->product->name }} - 
                Quantity: {{ $item->quantity }} - 
                Price: {{ $item->price }} JOD
            </li>
        @endforeach
    </ul>

    <a href="{{ route('profile') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
