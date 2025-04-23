@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Edit Feature</h1>
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
            <h6 class="m-0 font-weight-bold text-primary">Edit Feature</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.features.update', $feature->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Feature Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $feature->title) }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Feature Description</label>
                    <textarea name="description" class="form-control" required>{{ old('description', $feature->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="picture">Feature Picture</label>
                    <input type="file" name="picture" class="form-control" accept="image/*">
                    @if($feature->picture)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$feature->picture) }}" width="100" height="100" alt="{{ $feature->title }}">
                        </div>
                    @else
                        No picture available
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update Feature</button>
            </form>
        </div>
    </div>
</div>
@endsection
