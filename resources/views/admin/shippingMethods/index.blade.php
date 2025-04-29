@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Shipping Methods</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.shippingMethods.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Shipping Method
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Shipping Methods List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Shipping Method</th>
                            <th>Country</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shippingMethods as $method)
                        <tr>
                            <td>{{ $method->name }}</td>
                            <td>{{ $method->country->name }}</td>
                            <td>JOD{{ $method->price }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.shippingMethods.edit', $method) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.shippingMethods.destroy', $method->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($shippingMethods->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center text-muted">No shipping methods found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
