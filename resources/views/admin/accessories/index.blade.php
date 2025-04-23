@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Accessories</h1>
    <a href="{{ route('admin.accessories.create') }}" class="btn btn-primary mb-4">Add New Accessory</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Accessory List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accessories as $accessory)
                        <tr>
                            <td>{{ $accessory->id }}</td>
                            <td>{{ $accessory->product->name }}</td>
                            <td>{{ ucfirst($accessory->type) }}</td>
                            <td>{{ $accessory->name }}</td>
                            <td>${{ $accessory->price }}</td>
                            <td>
                                <a href="{{ route('admin.accessories.edit', $accessory) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.accessories.destroy', $accessory) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
