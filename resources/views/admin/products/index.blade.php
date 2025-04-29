@extends('dashboard.layout')

@section('contentBody')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5">Product</h1>
    <a target="_blank" class="btn btn-primary btn-icon-split mb-4 icon px-4 py-2"
        href="{{ route('admin.products.create') }}">
        <i class="fa fa-plus mr-2"></i> Add Product
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>On Sale</th>
                            {{-- <th>Sizes</th>
                            <th>Colors</th>
                            <th>Material</th> --}}
                            <th>Discount (%)</th>
                            <th>Sale Ends At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @foreach($product->images as $image)
                                        <img src="{{ asset('storage/'.$image->image_path) }}" width="50" class="rounded shadow-sm">
                                    @endforeach
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>JOD {{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    @if ($product->is_on_sale)
                                        <span class="badge bg-success text-white">Yes</span>
                                    @else
                                        <span class="badge bg-danger text-white">No</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    @foreach ($product->sizes as $size)
                                        <span class="badge bg-info text-white">{{ $size->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($product->colors as $color)
                                        <span class="badge" style="background-color: {{ $color->name }}; color: white;">{{ $color->name }}</span>
                                    @endforeach
                                </td>

                                <td>
                                    @foreach ($product->materials as $material)
                                        <span>{{ $material->name }} |</span>
                                    @endforeach
                                </td> --}}

                                <td>{{ $product->discount_percentage ?? '—' }}</td>
                                <td>{{ $product->sale_end_date ? \Carbon\Carbon::parse($product->sale_end_date)->format('Y-m-d H:i') : '—' }}</td>

                                <td>
                                    <!-- Edit Icon -->
                                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning btn-sm shadow-sm" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                
                                    <!-- View Icon -->
                                    <a href="{{ route('admin.products.show', $product) }}" class="btn btn-info btn-sm shadow-sm" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                
                                    <!-- Delete Icon -->
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm shadow-sm" onclick="return confirm('Are you sure?')" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

@push('styles')
<style>
    /* Style for table rows on hover */
    tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Style for badges */
    .badge {
        font-size: 14px;
        padding: 8px;
        border-radius: 10px;
    }

    /* Style for buttons */
    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Styling for images */
    img {
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Card styling */
    .card {
        border-radius: 15px;
    }

    .card-header {
        background-color: #f8f9fc;
        border-radius: 15px 15px 0 0;
    }

    .table-bordered {
        border: 1px solid #ddd;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    /* Styling for the icons */
    .fa {
        font-size: 18px;
    }

    .btn-warning .fa-edit {
        color: #fff;
    }

    .btn-danger .fa-trash {
        color: #fff;
    }
</style>
@endpush
