@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Order Details</h1>

        <!-- Display Success or Error Messages -->
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif

        <table class="table mt-3">
            <tr>
                <th>Order ID</th>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $order->status }}</td>
            </tr>
            <tr>
                <th>Total Amount</th>
                <td>JOD{{ number_format($order->total_price, 2) }}</td>
            </tr>
            <tr>
                <th>Shipping Address</th>
                <td>{{ $order->shipping_address }}</td>
            </tr>
            <tr>
                <th>Order Date</th>
                <td>{{ $order->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>

            <tr>
                <th>Tracking Number</th>
                <td>{{ $order->shipment->tracking_number }}</td>
            </tr>
        </table>

        <h3>Order Items</h3>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Material</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->products->colors->name ?? 'N/A' }}</td>
                        <td>{{ $item->products->sizes->name ?? 'N/A' }}</td>
                        <td>{{ $item->products->materials->name ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('user.orders.index') }}" class="btn btn-secondary mb-3">Back to Orders</a>
    </div>
@endsection
