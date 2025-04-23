@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Edit Accessory</h1>
    <a href="{{ route('admin.accessories.index') }}" class="btn btn-secondary mb-4"><i class="fa fa-arrow-left"></i> Back to Accessories</a>

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
            <h6 class="m-0 font-weight-bold text-primary">Edit Accessory</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.accessories.update', $accessory) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="product_id">Product</label>
                    <select name="product_id" class="form-control" required>
                        <option value="">Select Product</option>
                        @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $accessory->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" class="form-control" required>
                        <option value="brooch" {{ $accessory->type == 'brooch' ? 'selected' : '' }}>Brooch</option>
                        <option value="embroidery" {{ $accessory->type == 'embroidery' ? 'selected' : '' }}>Embroidery</option>
                        <option value="patch" {{ $accessory->type == 'patch' ? 'selected' : '' }}>Patch</option>
                        <option value="badge" {{ $accessory->type == 'badge' ? 'selected' : '' }}>Badge</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Accessory Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $accessory->name }}" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" step="0.01" value="{{ $accessory->price }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Accessory</button>
            </form>
        </div>
    </div>
</div>
@endsection
