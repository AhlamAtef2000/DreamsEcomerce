@extends('dashboard.layout')

@section('contentBody')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Product Details</h1>

        <div class="product-details">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm p-4">
                        <div class="d-flex flex-wrap justify-content-between">
                            <!-- Left Column: Product Details -->
                            <div class="product-info" style="flex: 0 0 48%; padding-right: 20px;">
                                <h3 class="text-primary">{{ $product->name }}</h3>
                                <p><strong>Description:</strong> {{ $product->description }}</p>
                                <p><strong>Price:</strong> <span class="text-success">JOD {{ number_format($product->price, 2) }}</span></p>
                                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                                <p><strong>Category:</strong> {{ $product->category->name }}</p>

                                <div class="mt-3">
                                    <p><strong>Sizes:</strong></p>
                                    <ul>
                                        @foreach($product->sizes as $size)
                                            <li>{{ $size->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mt-3">
                                    <p><strong>Colors:</strong></p>
                                    <ul>
                                        @foreach($product->colors as $color)
                                            <li>{{ $color->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mt-3">
                                    <p><strong>Materials:</strong></p>
                                    <ul>
                                        @foreach($product->materials as $material)
                                            <li>{{ $material->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <p><strong>Discount:</strong> <span class="text-danger">{{ $product->discount_percentage }}%</span></p>

                                @if($product->is_on_sale)
                                    <p><strong>Sale End Date:</strong> <span class="text-warning">{{ $product->sale_end_date }}</span></p>
                                @endif
                            </div>

                            <!-- Right Column: Product Images -->
                            <div class="product-images" style="flex: 0 0 48%; padding-left: 20px;">
                                <h4 class="text-center mb-3">Product Images</h4>
                                <div class="text-center">
                                    @foreach($product->images as $image)
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="img-fluid mb-3 shadow-sm rounded" width="200" />
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary btn-lg">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
