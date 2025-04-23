@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 mt-4">Add Country</h1>
    <a href="{{ route('admin.countries.index') }}" class="btn btn-secondary mb-3">
        <i class="fa fa-arrow-left"></i> Back to Countries
    </a>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create New Country</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.countries.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Country Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter country name" required>
                </div>

                <div class="form-group">
                    <label for="code">Country Code</label>
                    <input type="text" name="code" class="form-control" placeholder="Enter country code" required>
                </div>

                <button type="submit" class="btn btn-success mt-3">
                    <i class="fas fa-save"></i> Save Country
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
