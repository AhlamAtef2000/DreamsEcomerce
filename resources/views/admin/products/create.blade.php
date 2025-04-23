@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mt-5">Add Product</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mb-4">
        <i class="fa fa-arrow-left"></i> Back to Products
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
            <h6 class="m-0 font-weight-bold text-primary">Create New Product</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>

                <!-- Multiple Image Upload -->
                <div class="form-group">
                    <label for="images">Product Images</label>
                    <input type="file" name="images[]" class="form-control-file" multiple>
                </div>

                <!-- Sizes: Searchable Dropdown with Multiple Selections -->
                <div class="form-group">
                    <label for="sizes">Sizes</label>
                    <select name="sizes[]" class="sizes form-control" id="sizes" multiple="multiple">
                        @foreach($sizes as $size)
                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Colors: Searchable Dropdown with Multiple Selections -->
                <div class="form-group">
                    <label for="colors">Colors</label>
                    <select name="colors[]" class="colors form-control" id="colors" multiple="multiple">
                        @foreach($colors as $color)
                            <option value="{{ $color->id }}">
                                {{ $color->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Materials: Searchable Dropdown with Multiple Selections -->
                <div class="form-group">
                    <label for="materials">Materials</label>
                    <select name="materials[]" class="materials form-control" id="materials" multiple="multiple">
                        @foreach($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check">
                    <input type="hidden" name="is_on_sale" value="0"> <!-- Ensures unchecked state is sent -->
                    <input class="form-check-input" type="checkbox" id="onSale" name="is_on_sale" value="1">
                    <label class="form-check-label" for="onSale">
                        On Sale
                    </label>
                </div>

                <div class="form-group mt-3">
                    <label for="discount_percentage">Discount Percentage (%)</label>
                    <input type="number" name="discount_percentage" class="form-control" step="0.01" min="0" max="100">
                </div>

                <div class="form-group">
                    <label for="sale_end_date">Sale Ends At</label>
                    <input type="datetime-local" name="sale_end_date" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Save Product</button>
            </form>
        </div>
    </div>
</div>

@endsection

