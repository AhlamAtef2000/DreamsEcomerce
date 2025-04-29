@extends('frontend.layout')
@section('content')

<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper flex-column flex-md-row mb-10">

                    <!-- Shop Top Bar Left start -->
                    <div class="shop-top-bar-left mb-md-0 mb-2">
                        <div claass="shop-top-show">
                            <!-- Showing Dynamic Results -->
                            <span>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</span>
                        </div>
                    </div>
                    <!-- Shop Top Bar Left end -->

                    <!-- Shopt Top Bar Right Start -->
                    <div class="shop-top-bar-right">
                        <!-- Filter by Show -->
                        <form method="GET" action="{{ route('user.shop') }}">
                            <div class="shop-short-by mr-4">
                                <select class="nice-select" name="show" onchange="this.form.submit()">
                                    <option value="24" {{ request('show') == '24' ? 'selected' : '' }}>Show 24</option>
                                    <option value="12" {{ request('show') == '12' ? 'selected' : '' }}>Show 12</option>
                                    <option value="15" {{ request('show') == '15' ? 'selected' : '' }}>Show 15</option>
                                    <option value="30" {{ request('show') == '30' ? 'selected' : '' }}>Show 30</option>
                                </select>
                            </div>
                        </form>

                        <!-- Filter by Sort -->
                        <form method="GET" action="{{ route('user.shop') }}">
                            <div class="shop-short-by mr-4">
                                <select class="nice-select" name="sort_by" onchange="this.form.submit()">
                                    <option value="default" {{ request('sort_by') == 'default' ? 'selected' : '' }}>Sort by Default</option>
                                    <option value="1" {{ request('sort_by') == '1' ? 'selected' : '' }}>Sort by Popularity</option>
                                    <option value="2" {{ request('sort_by') == '2' ? 'selected' : '' }}>Sort by Rated</option>
                                    <option value="3" {{ request('sort_by') == '3' ? 'selected' : '' }}>Sort by Latest</option>
                                    <option value="4" {{ request('sort_by') == '4' ? 'selected' : '' }}>Sort by Price (Low to High)</option>
                                    <option value="5" {{ request('sort_by') == '5' ? 'selected' : '' }}>Sort by Price (High to Low)</option>
                                </select>
                            </div>
                        </form>

                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button" class="active btn-grid-4" title="Grid"><i class="fa fa-th"></i></button>
                            <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                        </div>
                    </div>

                    <!-- Search Form -->
<form method="GET" action="{{ route('user.shop') }}" class="me-2">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
                    <!-- Search Form End -->
                    <!-- Shopt Top Bar Right End -->

                </div>
                <!--shop toolbar end-->

                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_4">

                    <!-- Single Product Start -->
                    @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 product" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-inner">
                            <!-- Product Image & Actions -->
                            <div class="thumb">
                                <a href="{{ route('user.single-product', $product->id) }}" class="image">
                                    <a href="{{ route('user.single-product', $product->id) }}" class="image">
                                        @if(isset($product->images[0]))
                                            <img class="first-image" src="{{ asset('storage/' . $product->images[0]->image_path) }}" alt="{{ $product->name }}" />
                                        @else

                                            <img class="first-image" src="{{ asset('assets/images/default-product.jpg') }}" alt="{{ $product->name }}" />
                                        @endif
                                    </a>

                                </a>
                                <div class="actions">
                                    <form action="{{ route('user.favorites.store') }}" method="POST" style="display: inline;">
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
                                    <a href="{{ route('user.single-product', $product->id) }}">{{ $product->name }}</a>
                                </h4>
                                <h5 class="title">
                                    <a href="{{ route('user.single-product', $product->id) }}">{{ $product->description }}</a>
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
                                    <a href="#" class="btn btn-sm btn-outline-dark btn-hover-primary wishlist" title="Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <form method="POST" action="{{ route('user.cart.store') }}" class="variant-form mt-2">
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

@endsection
