@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5">Statuses</h1>
    <a class="btn btn-primary btn-icon-split mb-4 icon px-4 py-2" href="{{ route('admin.statuses.create') }}">
        <i class="fa fa-plus mr-2"></i> Add Status
    </a>

    <!-- Status List -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Status List</h6>
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
                        @foreach($statuses as $status)
                            <tr>
                                <td>{{ $status->id }}</td>
                                <td>{{ $status->name }}</td>
                                <td>
                                    <a href="{{ route('admin.statuses.edit', $status) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.statuses.destroy', $status) }}" method="POST" style="display:inline;">
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
