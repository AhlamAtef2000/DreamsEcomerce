@extends('dashboard.layout')

@section('contentBody')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 mt-4">Edit Shipping Method</h1>
    <a href="{{ route('admin.shippingMethods.index') }}" class="btn btn-secondary mb-4">
        <i class="fa fa-arrow-left"></i> Back to Shipping Methods
    </a>

    {{-- Display Validation Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Card --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Shipping Method</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.shippingMethods.update', $shippingMethod->id) }}" method="POST">
                @csrf
                @method('PUT')



                <div class="form-group">
                    <label for="name">Shipping Method Name</label>
                    <select name="name" id="name" class="form-control" required>
                        <option value="standard" {{ old('name', $shippingMethod->type) == 'standard' ? 'selected' : '' }}>Standard</option>
                        <option value="express" {{ old('name', $shippingMethod->type) == 'express' ? 'selected' : '' }}>Express</option>
                        <option value="overnight" {{ old('name', $shippingMethod->type) == 'overnight' ? 'selected' : '' }}>Overnight</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="price">Price ($)</label>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter price"
                           value="{{ old('price', $shippingMethod->price) }}" required>
                </div>

                <div class="form-group">
                    <label for="country_id">Country</label>
                    <select name="country_id" class="form-control" required>
                        <option value="">Select a country</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}"
                                {{ $shippingMethod->country_id == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">
                    <i class="fas fa-save"></i> Update Shipping Method
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
