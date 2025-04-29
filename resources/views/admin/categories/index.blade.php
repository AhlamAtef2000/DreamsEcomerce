@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5">Categories</h1>
    <a class="btn btn-primary btn-icon-split mb-4 icon px-4 py-2"
       href="{{ route('admin.categories.create') }}">
        <i class="fa fa-plus mr-2"></i> Add Category
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <!-- Edit and Delete Icons -->
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm shadow-sm" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm shadow-sm" onclick="return confirm('Are you sure?')" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
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

@push('styles')
<style>
    /* Style for table rows on hover */
    tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Style for badges */
    .badge {
        font-size: 14px;
        padding: 8px;
        border-radius: 10px;
    }

    /* Style for buttons */
    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Card styling */
    .card {
        border-radius: 15px;
    }

    .card-header {
        background-color: #f8f9fc;
        border-radius: 15px 15px 0 0;
    }

    .table-bordered {
        border: 1px solid #ddd;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    /* Styling for the icons */
    .fa {
        font-size: 18px;
    }

    .btn-warning .fa-edit {
        color: #fff;
    }

    .btn-danger .fa-trash {
        color: #fff;
    }
</style>
@endpush
