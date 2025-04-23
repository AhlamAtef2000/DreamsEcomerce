@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Add New Color</h1>
    <a href="{{ route('admin.colors.index') }}" class="btn btn-secondary mb-4">
        <i class="fa fa-arrow-left"></i> Back to Colors
    </a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create New Color</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.colors.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Color Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Save Color</button>
            </form>
        </div>
    </div>
</div>
@endsection
