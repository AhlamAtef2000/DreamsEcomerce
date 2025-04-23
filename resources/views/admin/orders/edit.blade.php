@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Edit Order</h1>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary mb-4">Back to Orders</a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Order</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.orders.update', $order) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="user_id">User</label>
                    <select name="user_id" disabled class="form-control" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $user->id == $order->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="total_price">Total Price</label>
                    <input type="number" disabled name="total_price" class="form-control" required value="{{ $order->total_price }}" step="0.01">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status"  class="form-control" required>
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="shipping_address">Shipping Address</label>
                    <textarea name="shipping_address" disabled class="form-control" required>{{ $order->shipping_address }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
