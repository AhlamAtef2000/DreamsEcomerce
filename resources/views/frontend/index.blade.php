@extends('frontend.layout')
@section('content')
    <!-- Header Menu End -->


    <!-- Header Bottom End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-navigation">
                <nav>
                    <ul class="mobile-menu">
                        <li class="has-children">

                            <a href="#">Home <i class="fa fa-angle-down"></i></a>

                            <ul class="dropdown">
                                <li><a href="{{ route('user.home') }}">Home </a></li>

                            </ul>
                        </li>
                        <li> <a href="{{ route('login') }}">Login <i class="fa fa-angle-down"></i></a></li>
                        <li> <a href="{{ route('register') }}">Register <i class="fa fa-angle-down"></i></a></li>

                        <li class="has-children">
                            <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('user.shop') }}">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>

                                <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>

                                <li><a href="{{ route('user.favorites.index') }}">Wishlist</a></li>
                                <li><a href="{{ route('user.cart.index') }}">Shopping Cart</a></li>
                                <li><a href="{{ route('user.checkout') }}">Checkout</a></li>

                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('user.single-product', 1) }}">Single Product</a></li>
                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('user.about') }}">About Us</a></li>
                                <li><a href="{{ route('user.contact') }}">Contact</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="404-error.html">Error 404</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="{{ route('login') }}">Loging | Register</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog</a></li>

                                <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('user.about') }}">About</a></li>
                        <li><a href="{{ route('user.contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->

            <!-- Language, Currency & Link Start -->
            <div class="offcanvas-lag-curr mb-6">
                <h2 class="title">Languages</h2>
                <div class="header-top-lan-curr-link">
                    <div class="header-top-lan dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i
                                class="fa fa-angle-down"></i></button>

                    </div>
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">Jod <i
                                class="fa fa-angle-down"></i></button>
                        <!-- <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                        <li><a class="dropdown-item" href="#">USD</a></li>
                                        <li><a class="dropdown-item" href="#">Pound</a></li>
                                    </ul> -->
                    </div>
                </div>
            </div>
            <!-- Language, Currency & Link End -->

            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="#"> +(962)770727654</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#"> khashashnehahlam@gmail.com</a></li>
                    <!-- <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li> -->
                </ul>
                <!-- Contact Links End -->


            </div>
            <!-- Contact Links/Social Links End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Offcanvas Search Start -->

    <!-- Offcanvas Search End -->

    <!-- Cart Offcanvas Start -->

    <!-- Cart Offcanvas End -->

    </div>


    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">
                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="{{ asset('assets/images/slider/slide-1.webp') }}" alt="Slider Image" />
                        </div>
                        <!-- Hero Slider Bg image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-slide-content">
                                <h2 class="title">
                                    Women New <br />
                                    Collection
                                </h2>
                                <p>chose your best products</p>
                                <a href="{{ route('user.shop') }}" class="btn btn-lg btn-primary btn-hover-dark">Shop
                                    Now</a>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->
                    </div>
                    <!-- Hero Slider Item End -->

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">

                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg">
                            <img src="{{ asset('assets/images/slider/slide-1-2.webp') }}" alt="Slider Image" />
                        </div>
                        <!-- Hero Slider Bg Image End -->

                        <!-- Hero Slider Content Start -->
                        <div class="container">
                            <div class="hero-slide-content">
                                <h2 class="title">
                                    Trend Fashion<br />
                                    Collection
                                </h2>
                                <p>have copuns off selected Product</p>
                                <a href="{{ route('user.shop') }}" class="btn btn-lg btn-primary btn-hover-dark">Shop
                                    Now</a>
                            </div>
                        </div>
                        <!-- Hero Slider Content End -->

                    </div>
                    <!-- Hero Slider Item End -->

                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i
                        class="pe-7s-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i
                        class="pe-7s-angle-right"></i></div>
                <!-- Swiper Navigation End -->

            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->



    <!-- Feature Section Start -->
 <!-- Product List Start -->
 <div class="section section-padding" style="padding-top:10px;">
    <div class="container" style="padding-left: 0; padding-right: 0; margin-bottom: 20px;">
        <div class="row mb-n8">
            @foreach ($categoryWithProduct as $categoryProduct)
                <div class="col-md-6 col-lg-4 col-12 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <!-- Product List Title Start -->
                    <div class="product-list-title text-center mb-4" style="text-align: center; margin-bottom: 15px;">
                        <h2 class="title pb-3 mb-0" style="font-size: 18px; font-weight: bold; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $categoryProduct->name }}</h2>
                        <span class="divider"></span>
                    </div>
                    <!-- Product List Title End -->

                    <!-- Product List Carousel Start -->
                    <div class="product-list-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" style="display: flex; gap: 10px; justify-content: space-between;">

                                @foreach ($categoryProduct->products as $product)
                                    <div class="swiper-slide product-list-wrapper" style="display: flex; flex-direction: column; justify-content: flex-start; padding: 10px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                                        <!-- Single Product List Start -->
                                        <div class="single-product-list product-hover mb-4" style="text-align: center;">
                                            <div class="thumb">
                                                <a href="{{ route('user.single-product', $product->id) }}" class="image">
                                                    @if (@isset($product->images[0]->image_path))
                                                        <img class="first-image"
                                                            src="{{ asset('storage/' . $product->images[0]->image_path) }}"
                                                            alt="{{ $product->name }}"
                                                            style="width: 100%; height: auto; object-fit: cover; border-radius: 8px;" />
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="content" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                                <h5 class="title" style="font-size: 16px; font-weight: bold; color: #444; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    <a href="{{ route('user.single-product', $product->id) }}" style="color: #444;">{{ $product->name }}</a>
                                                </h5>
                                                <span class="price" style="font-size: 18px; color: #e74c3c; font-weight: bold;">
                                                    <span class="new">JOD{{ number_format($product->price, 2) }}</span>
                                                </span>
                                                <div class="ratings" style="margin-top: 5px; display: flex; justify-content: center;">
                                                    @php
                                                        $rating = optional($product->reviews->first())->rating ?? 0;
                                                    @endphp

                                                    <!-- Ratings with Gold Stars -->
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $rating)
                                                            <i class="fas fa-star text-warning" style="font-size: 16px; margin-right: 2px;"></i>
                                                        @else
                                                            <i class="far fa-star text-muted" style="font-size: 16px; margin-right: 2px;"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product List End -->
                                    </div>
                                @endforeach

                            </div>

                            <!-- Swiper Navigation Buttons -->
                            <div class="swiper-product-list-next swiper-button-next" style="color: #333; font-size: 24px;">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                            <div class="swiper-product-list-prev swiper-button-prev" style="color: #333; font-size: 24px;">
                                <i class="pe-7s-angle-left"></i>
                            </div>

                        </div>
                    </div>
                    <!-- Product List Carousel End -->
                </div>
            @endforeach
        </div>
    </div>
</div>





<!-- Product List End -->



    <!-- Feature Section End -->

    <!-- Product Section Start -->
    <div class="section section-padding mt-0">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Tab Start -->
                <div class="col-12">
                    <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3"
                                data-bs-toggle="tab" href="#tab-new-arrivals">New Arrivals</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3"
                                data-bs-toggle="tab" href="#tab-product-best-sellers">Best Sellers</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3"
                                data-bs-toggle="tab" href="#tab-product-sale-items">Sale Items</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="tab-new-arrivals">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper mb-n10">
                                        @foreach ($newArrivals as $newArrival)
                                            <div class="swiper-slide product-wrapper{{ $newArrival->id }}">
                                                <div class="product product-border-left mb-10" data-aos="fade-up"
                                                    data-aos-delay="300">
                                                    <div class="thumb">
                                                        <a href="{{ route('user.single-product', $newArrival->id) }}"
                                                            class="image">
                                                            @if (isset($newArrival->images[0]->image_path))
                                                                <img class="first-image"
                                                                    src="{{ asset('storage/' . $newArrival->images[0]->image_path) }}"
                                                                    alt="Product" />
                                                            @endif
                                                        </a>

                                                        </a>
                                                      
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title">
                                                            <a
                                                                href="{{ route('user.single-product', $newArrival->id) }}">{{ $newArrival->name }}</a>
                                                        </h4>
                                                        <h5 class="title">
                                                            <a
                                                                href="{{ route('user.single-product', $newArrival->id) }}">{{ $newArrival->description }}</a>
                                                        </h5>

                                                        @php
                                                            $rating =
                                                                optional($newArrival->reviews->first())->rating ?? 0;
                                                        @endphp

                                                        <!-- Ratings -->
                                                        <span class="ratings">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $rating)
                                                                    <i class="fas fa-star text-warning"></i>
                                                                @else
                                                                    <i class="far fa-star text-muted"></i>
                                                                @endif
                                                            @endfor
                                                        </span>

                                                        <span class="price">
                                                            <span
                                                                class="new">{{ number_format($newArrival->price, 2) }}
                                                                JOD</span>
                                                        </span>

                                                        <!-- View Item Form -->
                                                        <form method="POST" action="{{ route('user.favorites.store',) }}"
                                                            class="variant-form mt-2">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $newArrival->id }}">
                                                             
                                                            <input type="hidden" name="color_id" class="selected-color">
                                                            <input type="hidden" name="size_id" class="selected-size">
                                                            <input type="hidden" name="material_id"
                                                                class="selected-material">

                                                          

                                                            <div class="shop-list-btn mt-3">
                                                                <button type="submit" href="{{ route('user.favorites.store',$newArrival->id) }}"
                                                                    class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"
                                                                    title="Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </button>
                                                                <a href="{{ route('user.single-product',$newArrival->id) }}" class="btn btn-sm btn-outline-dark btn-hover-primary"
                                                                    title="View Item">
                                                                    View Item
                                                            </a>


                                                                

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Swiper Pagination -->
                                    <div class="swiper-pagination d-md-none"></div>

                                    <!-- Navigation Buttons -->
                                    <div
                                        class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                    <div
                                        class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="tab-product-best-sellers">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper mb-n10">

                                        @foreach ($bestSellers as $bestSeller)
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper">

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10">
                                                    <div class="thumb">
                                                        <a href="{{ route('user.single-product', $bestSeller->id) }}"
                                                            class="image">
                                                            <!-- Display product images dynamically -->

                                                            @if (@isset($bestSeller->images[0]->image_path))
                                                                <img class="first-image"
                                                                    src="{{ asset('storage/' . $bestSeller->images[0]->image_path) }}"
                                                                    alt="Product" />
                                                            @endif

                                                        </a>

                                                    

                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a
                                                                href="">{{ $bestSeller->name }}</a></h4>
                                                        <h5 class="title"><a
                                                                href="">{{ $bestSeller->description }}</a></h5>

                                                        <!-- Ratings with Gold Stars -->
                                                        @php
                                                            $rating =
                                                                optional($bestSeller->reviews->first())->rating ?? 0;
                                                        @endphp

                                                        <!-- Ratings with Gold Stars -->
                                                        <span class="ratings">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $rating)
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <!-- Gold Star -->
                                                                @else
                                                                    <i class="far fa-star text-muted"></i>
                                                                    <!-- Gray Star -->
                                                                @endif
                                                            @endfor
                                                        </span>

                                                        <!-- Price -->
                                                        <span class="price">
                                                            <span
                                                                class="new">{{ number_format($bestSeller->price, 2) }}
                                                                JOD</span>
                                                        </span>



                                                        <div class="shop-list-btn mt-3">
                                                            <form action="{{ route('user.favorites.store') }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $bestSeller->id }}" />
                                                            <button type="submit" href="{{ route('user.favorites.store',$bestSeller->id) }}"
                                                                class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"
                                                                title="Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </button>
                                                            <a href="{{ route('user.single-product',$bestSeller->id) }}" class="btn btn-sm btn-outline-dark btn-hover-primary"
                                                                title="View Item">
                                                                View Item
                                                        </a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->

                                            </div>
                                            <!-- Product End -->
                                        @endforeach

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div
                                        class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                    <div
                                        class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="tab-product-sale-items">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper mb-n10">
                                        @foreach ($saleItems as $saleItem)
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper">
                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10">
                                                    <div class="thumb">
                                                        <a href="{{ route('user.single-product', $saleItem->id) }}"
                                                            class="image">
                                                            <!-- Display product images dynamically -->
                                                            @if (@isset($saleItem->images[0]->image_path))
                                                                <img class="first-image"
                                                                    src="{{ asset('storage/' . $saleItem->images[0]->image_path) }}"
                                                                    alt="Product" />
                                                            @endif

                                                        </a>

                                                       

                                                    </div>
                                                    <div class="content">
                                                        <h4 class="sub-title"><a href="">{{ $saleItem->name }}</a>
                                                        </h4>
                                                        <h5 class="title"><a
                                                                href="">{{ $saleItem->description }}</a></h5>

                                                        <!-- Ratings with Gold Stars -->
                                                        @php
                                                            $rating = ceil($saleItem->reviews->avg('rating') ?? 0);
                                                        @endphp

                                                        <span class="ratings">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $rating)
                                                                    <i class="fas fa-star text-warning"></i>
                                                                    <!-- Gold Star -->
                                                                @else
                                                                    <i class="far fa-star text-muted"></i>
                                                                    <!-- Gray Star -->
                                                                @endif
                                                            @endfor
                                                        </span>

                                                        <!-- Price -->
                                                        <span class="price">
                                                            <span class="new">{{ number_format($saleItem->price, 2) }}
                                                                JOD</span>
                                                        </span>

                                                        <div class="shop-list-btn mt-3">
                                                            <form action="{{ route('user.favorites.store') }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $saleItem->id }}" />
                                                            <button type="submit" href="{{ route('user.favorites.store',$saleItem->id) }}"
                                                                class="btn btn-sm btn-outline-dark btn-hover-primary wishlist"
                                                                title="Wishlist">
                                                                <i class="fa fa-heart"></i>
                                                            </button>
                                                            <a href="{{ route('user.single-product',$saleItem->id) }}" class="btn btn-sm btn-outline-dark btn-hover-primary"
                                                                title="View Item">
                                                                View Item
                                                        </a>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <!-- Product End -->
                                        @endforeach
                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div
                                        class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                    <div
                                        class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Section End -->



    <!-- Product Deal Section Start -->
    <div class="section section-padding mt-0 overflow-hidden" style=" padding-top: 2px;">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Tab Start -->
                <div class="col-12">
                    <div class="section-title-produt-tab-wrapper ">
                        <div class="section-title m-0" data-aos="fade-right" data-aos-delay="300">
                            <h1 class="title">Daily Deals</h1>
                        </div>
                        <ul class="product-tab-nav nav mt-n3" data-aos="fade-left" data-aos-delay="300">
                        </ul>
                    </div>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="product-deal-new-arrivals">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Product Start -->
                                        @foreach ($dailyProducts as $dailyProduct)
                                            <div class="swiper-slide product-wrapper" data-aos="fade-right" data-aos-delay="600">
                                                <!-- Single Product Deal Start -->
                                                <div class="product single-deal-product product-border-left">
                                                    <div class="thumb">
                                                        <a href="{{ route('user.single-product', $dailyProduct->id) }}" class="image">
                                                            @if (isset($dailyProduct->images[0]->image_path))
                                                                <img src="{{ asset('storage/' . $dailyProduct->images[0]->image_path) }}" alt="Product" class="img-fluid product-img" />
                                                            @endif
                                                        </a>
                                                        <span class="badges">
                                                            @if ($dailyProduct->discount_percentage)
                                                                <span class="sale">-{{ $dailyProduct->discount_percentage }}%</span>
                                                            @endif
                                                        </span>
                                                    </div>
                                                    <div class="content">
                                                        <p class="inner-desc">Hurry Up! Offer Ends In:</p>
                                                        @if ($dailyProduct->sale_end_date)
                                                            <div class="countdown-area">
                                                                <div class="countdown-wrapper d-flex" data-countdown="{{ $dailyProduct->sale_end_date }}"></div>
                                                            </div>
                                                        @endif
                                                        <h4 class="sub-title"><a href="{{ route('user.single-product', $dailyProduct->id) }}">{{ $dailyProduct->name }}</a></h4>
                                                        <h5 class="title"><a href="{{ route('user.single-product', $dailyProduct->id) }}">{{ $dailyProduct->description }}</a></h5>
            
                                                        @php
                                                            $rating = optional($dailyProduct->reviews->first())->rating ?? 0;
                                                        @endphp
            
                                                        <!-- Ratings with Gold Stars -->
                                                        <span class="ratings">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $rating)
                                                                    <i class="fas fa-star text-warning"></i> <!-- Gold Star -->
                                                                @else
                                                                    <i class="far fa-star text-muted"></i> <!-- Gray Star -->
                                                                @endif
                                                            @endfor
                                                        </span>
            
                                                        <span class="price">
                                                            <span class="old">{{ number_format($dailyProduct->price, 2) }} JOD</span>
                                                            @if ($dailyProduct->discount_percentage)
                                                                <span class="new">{{ number_format($dailyProduct->price * (1 - $dailyProduct->discount_percentage / 100), 2) }} JOD</span>
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Product Deal End -->
                                            </div>
                                        @endforeach
                                    </div>
            
                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->
            
                                    <!-- Next Previous Button Start -->
                                    <div class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                    <div class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <style>
                .product-img {
                    width: 100%;
                    height: 250px;
                    object-fit: cover; /* Make sure the images fill the container */
                }
            
                .product-wrapper {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin-bottom: 30px;
                    border: 1px solid #f1f1f1;
                    padding: 15px;
                    background-color: #fff;
                }
            
                .content {
                    text-align: center;
                }
            
                .inner-desc {
                    font-size: 14px;
                    color: #666;
                    margin-bottom: 10px;
                }
            
                .sub-title {
                    font-size: 18px;
                    font-weight: bold;
                }
            
                .title {
                    font-size: 16px;
                    color: #555;
                    margin: 10px 0;
                }
            
                .price {
                    font-size: 18px;
                    color: #333;
                    margin-bottom: 10px;
                }
            
                .price .new {
                    color: #000;
                }
            
                .price .old {
                    text-decoration: line-through;
                    color: #777;
                    margin-left: 5px;
                }
            
                .shop-list-btn a {
                    margin-right: 10px;
                }
            
                .btn {
                    font-size: 14px;
                    padding: 8px 12px;
                }
            </style>
            
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Deal Section End -->



   
    <!-- Feature Section Start -->

    <div class="section" style="margin-bottom: 50px; ">

        <div class="container">
            <div class="feature-wrap">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    @foreach (App\Models\Feature::all() as $feature)
                        <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature d-flex align-items-start" style="gap: 15px;">
                                <div class="icon text-primary" style="flex-shrink: 0;">
                                    @if ($feature->picture)
                                        <img src="{{ asset('storage/features/' . $feature->picture) }}"
                                            alt="Feature Icon" style="width: 50px; height: 50px;">
                                    @else
                                        <img src="{{ asset('images/default-image.jpg') }}"
                                            alt="Default Feature Icon" style="width: 50px; height: 50px;">
                                    @endif
                                </div>
                                <div>
                                    <h5 class="title mb-1">{{ $feature->title }}</h5>
                                    <p class="mb-0">{{ $feature->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <!-- Feature Section End -->

    <!-- Brand Logo Start -->

    <!-- Brand Logo End -->
@endsection


<style>
    img.first-image:hover {
        opacity: 1 !important;
    }

    img.first-image {
        opacity: 1 !important;
        width: 270px;
        height: 360px;
    }


    .select-option.active {
        background-color: #343a40 !important;
        color: #fff !important;
        border-color: #343a40 !important;
        box-shadow: 0 0 0 0.1rem rgba(0, 0, 0, 0.15);
        transition: 0.2s;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .content {
        height: 300px;
    }

    .feature {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        height: 100%;
    }

    

</style>
