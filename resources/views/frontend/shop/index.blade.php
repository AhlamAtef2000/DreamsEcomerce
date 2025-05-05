@extends('frontend.layout')
@section('content')
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper bg-light rounded shadow-sm p-3 mb-4">
                        <div class="row gy-3 align-items-center">
                
                            <!-- Top Left: Showing results -->
                            <div class="col-12 col-md-auto">
                                <div class="shop-top-bar-left">
                                    <div class="shop-top-show text-muted fw-semibold">
                                        <span>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</span>
                                    </div>
                                </div>
                            </div>
                
                            <!-- Category Select -->

                
                            <!-- Show By -->
                            <div class="col-6 col-md-auto">
                                <form method="GET" action="{{ route('user.shop') }}">
                                    <select class="nice-select form-select shadow-sm w-auto" name="show" onchange="this.form.submit()">
                                        <option value="24" {{ request('show') == '24' ? 'selected' : '' }}>Show 24</option>
                                        <option value="12" {{ request('show') == '12' ? 'selected' : '' }}>Show 12</option>
                                        <option value="15" {{ request('show') == '15' ? 'selected' : '' }}>Show 15</option>
                                        <option value="30" {{ request('show') == '30' ? 'selected' : '' }}>Show 30</option>
                                    </select>
                                </form>
                            </div>
                
                            <!-- Sort By -->
                            <div class="col-6 col-md-auto">
                                <form method="GET" action="{{ route('user.shop') }}">
                                    <select class="nice-select form-select shadow-sm w-auto" name="sort_by" onchange="this.form.submit()">
                                        <option value="default" {{ request('sort_by') == 'default' ? 'selected' : '' }}>Sort by Default</option>
                                        <option value="1" {{ request('sort_by') == '1' ? 'selected' : '' }}>Sort by Popularity</option>
                                        <option value="2" {{ request('sort_by') == '2' ? 'selected' : '' }}>Sort by Rated</option>
                                        <option value="3" {{ request('sort_by') == '3' ? 'selected' : '' }}>Sort by Latest</option>
                                        <option value="4" {{ request('sort_by') == '4' ? 'selected' : '' }}>Sort by Price (Low to High)</option>
                                        <option value="5" {{ request('sort_by') == '5' ? 'selected' : '' }}>Sort by Price (High to Low)</option>
                                    </select>
                                </form>
                            </div>
                
                            <!-- View Buttons -->
                            <div class="col-12 col-md-auto d-flex gap-2 shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class="active btn-grid-4 btn btn-outline-secondary" title="Grid">
                                    <i class="fa fa-th"></i>
                                </button>
                                <button data-role="grid_list" type="button" class="btn-list btn btn-outline-secondary" title="List">
                                    <i class="fa fa-th-list"></i>
                                </button>
                            </div>
                
                        </div>
                    </div>
                    <!--shop toolbar end-->
                
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('user.shop') }}" class="mb-3">
                        <div class="col-12 col-md-auto">
                            <select id="categorySelect" class="custom-style form-select shadow-sm w-auto" name="category_id">
                                <option value="">All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" id="categoryIdInput" name="category_id" value="{{ request('category_id') }}">
                        </div>
                    
                        <div class="col-6 col-md-auto productSelect" style="display: none;">
                            <select id="productSelect" class="custom-style form-select shadow-sm w-auto" name="product_id"></select>
                            <input type="hidden" id="productIdInput" name="product_id" value="{{ request('product_id') }}">
                        </div>
                        <div class="col-6 col-md-auto colorSelect" style="display: none;">
                            <select id="colorSelect" class="custom-style form-select shadow-sm w-auto" name="color_id"></select>
                            <input type="hidden" id="colorIdInput" name="color_id" value="{{ request('color_id') }}">
                        </div>
                        <div class="col-6 col-md-auto sizeSelect" style="display: none;">
                            <select id="sizeSelect" class="custom-style form-select shadow-sm w-auto" name="size_id"></select>
                            <input type="hidden" id="sizeIdInput" name="size_id" value="{{ request('size_id') }}">
                        </div>
                        <div class="col-6 col-md-auto materialSelect" style="display: none;">
                            <select id="materialSelect" class="custom-style form-select shadow-sm w-auto" name="material_id"></select>
                            <input type="hidden" id="materialIdInput" name="material_id" value="{{ request('material_id') }}">
                        </div>
                    
                        <div class="input-group shadow-sm w-auto" style="max-width: 400px;">
                            <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
                            <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    
                

                    <!-- Search Form End -->
                
                </div>
                
                <!--shop toolbar end-->

                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_4">

                    <!-- Single Product Start -->
                    @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-inner">
                                <!-- Product Image & Actions -->
                                <div class="thumb">
                                    <a href="{{ route('user.single-product', $product->id) }}" class="image">
                                        <a href="{{ route('user.single-product', $product->id) }}" class="image">
                                            @if (isset($product->images[0]))
                                                <img class="first-image"
                                                    src="{{ asset('storage/' . $product->images[0]->image_path) }}"
                                                    alt="{{ $product->name }}" />
                                            @endif
                                        </a>

                                    </a>
                                    <div class="actions">
                                        <form action="{{ route('user.favorites.store') }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                            <button type="submit" class="action wishlist" style="border: none">
                                                <i class="pe-7s-like"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- Product Content -->
                                <div class="content">
                                    <h4 class="sub-title">
                                        <a
                                            href="{{ route('user.single-product', $product->id) }}">{{ $product->name }}</a>
                                    </h4>
                                    <h5 class="title">
                                        <a
                                            href="{{ route('user.single-product', $product->id) }}">{{ $product->description }}</a>
                                    </h5>

                                    <!-- Ratings -->
                                    @php
                                        $rating = optional($product->reviews->first())->rating ?? 0;
                                    @endphp
                                    <div class="ratings mb-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $rating)
                                                <i class="fas fa-star text-warning"></i>
                                            @else
                                                <i class="far fa-star text-muted"></i>
                                            @endif
                                        @endfor
                                        <span class="rating-num ms-1">({{ $product->reviews->count() }})</span>
                                    </div>

                                    <!-- Price -->
                                    <span class="price">
                                        <span class="new">JOD{{ number_format($product->price, 2) }}</span>
                                    </span>

                                    <!-- Action Buttons -->
                                    <div class="shop-list-btn mt-3">
                                        <a href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"
                                            title="Wishlist">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                        <form method="POST" action="{{ route('user.cart.store') }}"
                                            class="variant-form mt-2">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="color_id" class="selected-color">
                                            <input type="hidden" name="size_id" class="selected-size">
                                            <input type="hidden" name="material_id" class="selected-material">

                                            {{-- <button class="btn btn-sm btn-outline-dark btn-hover-primary" title="Add To Cart">
                                            Add To Cart
                                        </button> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Single Product End -->

                </div>
                <!-- Shop Wrapper End -->

                <!--shop toolbar start-->
                <!-- Pagination Start -->
                <div class="pagination-area mt-4 d-flex justify-content-center mt-4">
                    {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
                <!-- Pagination End -->

                <!--shop toolbar end-->

            </div>
        </div>
    </div>
    </div>

    <style>
        .custom-style {

            -webkit-tap-highlight-color: transparent;
            background-color: #fff;
            border-radius: 5px;
            border: solid 1px #e8e8e8;
            box-sizing: border-box;
            clear: both;
            cursor: pointer;
            display: block;
            float: left;
            font-family: inherit;
            font-size: 14px;
            font-weight: normal;
            height: 42px;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: auto;
        }
    </style>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {

// Hide all by default
$('.productSelect, .colorSelect, .sizeSelect, .materialSelect').hide();

// When category is selected
$('#categorySelect').on('change', function () {
    let categoryId = $(this).val();
    $('#categoryIdInput').val(categoryId);  // Set the category_id hidden input

    if (categoryId) {
        $.ajax({
            url: `/user/category-products/${categoryId}`,
            method: 'GET',
            success: function (data) {
                let productSelect = $('#productSelect');
                productSelect.empty();
                $('.productSelect').hide();

                if (data.products.length > 0) {
                    data.products.forEach(function (product) {
                        productSelect.append(`<option value="${product.id}">${product.name}</option>`);
                    });

                    $('.productSelect').show(); // Show if products found

                    // Load first product's details
                    loadProductDetails(data.products[0].id);
                } else {
                    $('#colorSelect, #sizeSelect, #materialSelect').empty();
                    $('.colorSelect, .sizeSelect, .materialSelect').hide();
                }
            }
        });
    } else {
        $('#productSelect, #colorSelect, #sizeSelect, #materialSelect').empty();
        $('.productSelect, .colorSelect, .sizeSelect, .materialSelect').hide();
    }
});

// When a product is selected
$('#productSelect').on('change', function () {
    let productId = $(this).val();
    $('#productIdInput').val(productId);  // Set the product_id hidden input
    loadProductDetails(productId);
});

// When color is selected
$('#colorSelect').on('change', function () {
    let colorId = $(this).val();
    $('#colorIdInput').val(colorId);  // Set the color_id hidden input
});

// When size is selected
$('#sizeSelect').on('change', function () {
    let sizeId = $(this).val();
    $('#sizeIdInput').val(sizeId);  // Set the size_id hidden input
});

// When material is selected
$('#materialSelect').on('change', function () {
    let materialId = $(this).val();
    $('#materialIdInput').val(materialId);  // Set the material_id hidden input
});

// Load details of selected product
function loadProductDetails(productId) {
    $.ajax({
        url: `/user/product-details/${productId}`,
        method: 'GET',
        success: function (data) {
            let colorSelect = $('#colorSelect');
            let sizeSelect = $('#sizeSelect');
            let materialSelect = $('#materialSelect');

            colorSelect.empty();
            sizeSelect.empty();
            materialSelect.empty();

            $('.colorSelect, .sizeSelect, .materialSelect').hide();

            if (data.colors.length > 0) {
                data.colors.forEach(color => {
                    colorSelect.append(`<option value="${color.id}">${color.name}</option>`);
                });
                $('.colorSelect').show();
            }

            if (data.sizes.length > 0) {
                data.sizes.forEach(size => {
                    sizeSelect.append(`<option value="${size.id}">${size.name}</option>`);
                });
                $('.sizeSelect').show();
            }

            if (data.materials.length > 0) {
                data.materials.forEach(material => {
                    materialSelect.append(`<option value="${material.id}">${material.name}</option>`);
                });
                $('.materialSelect').show();
            }
        }
    });
}

});

    </script>
    