@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5">Features</h1>
    <a target="_blank" class="btn btn-primary btn-icon-split mb-4 icon px-4 py-2" href="{{ route('admin.features.create') }}">
        <i class="fa fa-plus mr-2"></i> Add Feature
    </a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Feature List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($features as $feature)
                            <tr>
                                <td>{{ $feature->id }}</td>
                                <td>{{ $feature->title }}</td>
                                <td>{{ $feature->description }}</td>
                                <td>
                                    @if($feature->picture)
                                        <img src="{{ asset('storage/'.$feature->picture) }}" width="50" height="50" alt="{{ $feature->title }}">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.features.edit', $feature) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.features.destroy', $feature) }}" method="POST" style="display:inline;">
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
