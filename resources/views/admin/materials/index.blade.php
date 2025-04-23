@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Materials</h1>
    <a href="{{ route('admin.materials.create') }}" class="btn btn-primary mb-4">Add Material</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Material List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materials as $material)
                            <tr>
                                <td>{{ $material->id }}</td>
                                <td>{{ $material->name }}</td>
                                <td>
                                    <a href="{{ route('admin.materials.edit', $material) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.materials.destroy', $material) }}" method="POST" style="display:inline;">
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
