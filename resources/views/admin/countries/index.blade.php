@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Countries</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('admin.countries.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Country
    </a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Country List</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Country Name</th>
                        <th>Country Code</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->code }}</td>

                        <td>
                            <a href="{{ route('admin.countries.edit', $country->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.countries.destroy', $country->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if($countries->isEmpty())
                    <tr>
                        <td colspan="2" class="text-center text-muted">No countries found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
