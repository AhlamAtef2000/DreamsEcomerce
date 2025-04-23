@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Shipment Details</h1>

        <table class="table mt-3">
            <tr>
                <th>ID</th>
                <td>{{ $shipment->id }}</td>
            </tr>
            <tr>
                <th>Order ID</th>
                <td>{{ $shipment->order_id }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $shipment->shipment_status }}</td>
            </tr>
            <tr>
                <th>Tracking Number</th>
                <td>{{ $shipment->tracking_number }}</td>
            </tr>
            <tr>
                <th>Shipping Method</th>
                <td>{{ $shipment->shipping_method }}</td>
            </tr>
            <tr>
                <th>Shipping Address</th>
                <td>{{ $shipment->shipping_address }}</td>
            </tr>
            <tr>
                <th>Shipping Cost</th>
                <td>JOD{{ $shipment->shipping_cost }}</td>
            </tr>
            <tr>
                <th>Shipped At</th>
                <td>{{ $shipment->shipped_at ? $shipment->shipped_at->format('Y-m-d H:i:s') : 'Not Shipped' }}</td>
            </tr>
            <tr>
                <th>Delivered At</th>
                <td>{{ $shipment->delivered_at ? $shipment->delivered_at->format('Y-m-d H:i:s') : 'Not Delivered' }}</td>
            </tr>
        </table>

        <a href="{{ route('user.shipments.index') }}" class="btn btn-secondary mt-3">Back to Shipments</a>
    </div>
@endsection
