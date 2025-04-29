@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Shipments</h1>

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
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Tracking Number</th>
                    <th>Shipping Method</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shipments as $shipment)
                    <tr>
                        <td>{{ $shipment->id }}</td>
                        <td>{{ $shipment->order_id }}</td>
                        <td>{{ $shipment->shipment_status }}</td>
                        <td>{{ $shipment->tracking_number }}</td>
                        <td>{{ $shipment->shipping_method }}</td>
                        <td>
                            <!-- Delete Shipment Form -->
                          

                            <!-- Show Details Button -->
                            <a href="{{ route('user.shipments.show', $shipment->id) }}" class="btn btn-info btn-sm ms-2">Show Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
