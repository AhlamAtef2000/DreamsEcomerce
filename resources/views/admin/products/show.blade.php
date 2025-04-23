@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>{{ $product->name }}</h2>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
            <p><strong>Category:</strong> {{ $product->category->name }}</p>

            <h4>Sizes</h4>
            <ul>
                @foreach($product->sizes as $size)
                    <li>{{ $size->name }}</li>
                @endforeach
            </ul>

            <h4>Colors</h4>
            <ul>
                @foreach($product->colors as $color)
                    <li>{{ $color->name }}</li>
                @endforeach
            </ul>

            <h4>Materials</h4>
            <ul>
                @foreach($product->materials as $material)
                    <li>{{ $material->name }}</li>
                @endforeach
            </ul>

            @if ($product->is_on_sale)
                <p><strong>Discount:</strong> {{ $product->discount_percentage }}% off</p>
                <p><strong>Sale End Date:</strong> {{ $product->sale_end_date->format('Y-m-d') }}</p>
            @endif
        </div>

        <div class="col-md-4">
            <h4>Product Images</h4>
            @foreach($product->images as $image)
                <img src="{{ Storage::url($image->image_path) }}" alt="{{ $product->name }}" class="img-fluid mb-2" />
            @endforeach
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back to Products</a>
    </div>
</div>
@endsection
