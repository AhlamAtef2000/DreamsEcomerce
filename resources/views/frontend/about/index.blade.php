@extends('frontend.layout')
@section('content')

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
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('user.shop') }}">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                <li><a href="{{ route('user.favorites.index') }}">Wishlist</a></li>
                                <li><a href="{{ route('user.cart.index') }}">Shopping Cart</a></li>
                                <li><a href="{{ route('user.checkout') }}">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="{{route('user.single-product',1)}}">Single Product</a></li>
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
                                <li><a href="404-error.html">Error 404</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="{{ route('login') }}">Loging | Register</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
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
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Romanian</a></li>
                        </ul>
                    </div>
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">USD</a></li>
                            <li><a class="dropdown-item" href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Language, Currency & Link End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Offcanvas Search Start -->

    <!-- Offcanvas Search End -->

    <!-- Cart Offcanvas Start -->

    <!-- Cart Offcanvas End -->

</div>


<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">About Us</h1>
                <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('user.about') }}">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- About Section Start -->
<div class="section section-margin overflow-hidden">
    <div class="container">
        <div class="row mb-n6">
            <div class="col-lg-6 align-self-center mb-6" data-aos="fade-right" data-aos-delay="600">
                <div class="about_content">
                <h2 class="title">About Dreams Boutique</h2>
                    <h3 class="sub-title">We provide the latest products at the best prices, offering a wide range of clothing for men, women, and children.</h3>
                        <p>For this reason, Dreams Boutique offers the latest styles and trends for men, women, and children. We believe that every piece of clothing tells a story and serves a purpose. We are proud to offer discount coupons and a variety of exciting features that make shopping with us an unforgettable experience. We ensure our prices are accessible to all, and we invite you to explore our store through our website and find us on the map. With new collections and updates just around the corner, we can’t wait to share them with you!</p>

                </div>
            </div>
            <div class="col-lg-6 mb-6" data-aos="fade-left" data-aos-delay="600">
                <div class="about_thumb">
               <img class="fit-image" src="{{ asset('storage/about/about.jpg') }}" alt="About Image">


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Feature Section Start -->

<div class="section" style="margin-top:1%">
    <div class="container">
        <div class="feature-wrap">
            <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1  mb-n5 ">
                <!-- Feature Start -->

                @foreach (App\Models\Feature::all() as $feature)
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            @if($feature->picture)
                            <img src="{{ asset('storage/features/' . $feature->picture) }}" alt="Feature Icon">
                        @else
                            <img src="{{ asset('storage/features/default.jpg') }}" alt="Default Feature Icon">
                        @endif
                        
                        </div>
                        <div class="content">
                            <h5 class="title">{{ $feature->title }}</h5> <!-- Changed 'name' to 'title' -->
                            <p>{{ $feature->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="about_thumb" style="width: 250px; height: 350px; margin: 10px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
    <img class="fit-image" src="{{ asset('storage/about/about1.jpg') }}" alt="About Image 1" style="width: 100%; height: 100%; object-fit: cover;">
</div>

<div class="about_thumb" style="width: 250px; height: 350px; margin: 10px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
    <img class="fit-image" src="{{ asset('storage/about/about2.jpg') }}" alt="About Image 2" style="width: 100%; height: 100%; object-fit: cover;">
</div>

<div class="about_thumb" style="width: 250px; height: 350px; margin: 10px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
    <img class="fit-image" src="{{ asset('storage/about/about3.jpg') }}" alt="About Image 3" style="width: 100%; height: 100%; object-fit: cover;">
</div>

<div class="about_thumb" style="width: 250px; height: 350px; margin: 10px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
    <img class="fit-image" src="{{ asset('storage/about/about11.jpg') }}" alt="About Image 4" style="width: 100%; height: 100%; object-fit: cover;">
</div>

            </div>
        </div>
    </div>
</div>
            <!-- Feature End -->
<!-- Service Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row mb-n6">
            <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="200">
                <!-- Single Service Start -->
                <div class="single-service">
                    <h2 class="title">What Do We Do</h2>
                    <p>We offer a wide range of trendy clothing that caters to all tastes. We provide a comfortable shopping experience at competitive prices for customers looking for style and quality. Our focus is on delivering the best options to keep up with the latest fashion trends.</p>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="400">
                <!-- Single Service Start -->
                <div class="single-service">
                    <h2 class="title">Our Mission</h2>
                    <p>Our mission is to provide the best online shopping experience for our customers, offering fashion that suits every taste and follows the latest trends. We are always committed to customer satisfaction by delivering high-quality products and excellent customer service.</p>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="600">
                <!-- Single Service Start -->
                <div class="single-service">
                    <h2 class="title">History of Us</h2>
                    <p>We started our journey by selling clothing through an Instagram page, where we directly offered our products to customers. Over time, we grew from a social media page to a full-fledged online store offering a wide variety of clothing and accessories. Today, we aim to expand our services and provide an exceptional shopping experience for our customers.</p>
                </div>
                <!-- Single Service End -->
            </div>
        </div>
    </div>
</div>

<!-- Service Section End -->


@endsection
