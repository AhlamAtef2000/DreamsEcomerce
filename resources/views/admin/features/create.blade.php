@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Add New Feature</h1>
    <a href="{{ route('admin.features.index') }}" class="btn btn-secondary mb-4"><i class="fa fa-arrow-left"></i> Back to Features</a>

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
            <h6 class="m-0 font-weight-bold text-primary">Create New Feature</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.features.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Feature Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Feature Description</label>
                    <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="picture">Feature Picture</label>
                    <input type="file" name="picture" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Save Feature</button>
            </form>
        </div>
    </div>
</div>
@endsection
