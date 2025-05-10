<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dreams - Fashion eCommerce  </title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/pe-icon-7-stroke.min.css')}}">


    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}" />
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Main Style CSS -->


    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<div class="header section">

    <!-- Header Top Start -->
    <div class="header-top" style="background-color: #f3ebe2 !important;">
             <div class="container">
            <div class="row row-cols-xl-2 align-items-center">

                <!-- Header Top Language, Currency & Link Start -->
                <div class="col d-none d-lg-block">
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-links" style="font-size: 15px; text-align: left; font-weight: bold; ">
                            <button class="btn" style="background-color: transparent; border: none; color: #333; font-size: inherit; margin right: -20PX">
                                Call Us: +962770717654
                            </button>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- Header Top Language, Currency & Link End -->

                <!-- Header Top Message Start -->
                <div class="col">
                    <p class="header-top-message" style="font-size: 13px; text-align: left; font-weight: bold; padding:20px; display: flex; align-items: center; justify-content: space-between;">
                        @if($coupon)
                            <span>
                                Get
                                @if($coupon->discount_type === 'percentage')
                                    {{ $coupon->amount }}% off 
                                @else
                                    {{ $coupon->amount }} JOD off
                                @endif
                            with code <span>{{ $coupon->code }}</span>({{ \Carbon\Carbon::parse($coupon->valid_until)->format('M d, Y') }})
                            </span>
                        @endif
                        <a href="{{ route('user.shop') }}">Shop Now</a>                    </p>
                </div>
                

                <!-- Header Top Message End -->

            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Bottom Start -->
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-xl-2 col-6" style="margin-left:-100px; text-align:left;">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" style="width: 100px; height: auto;" />
                            </a>
                        </div>
                    </div>
                    
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-xl-8 d-none d-xl-block">
                        <div class="main-menu position-relative" style="margin-right:70px">
                            <ul>

                                <li><a href="{{ route('user.home') }}"> <span>Home</span></a></li>
                                <li >
                                    <a href="{{ route('user.shop') }}"><span>Shop</span></a>

                                </li>
                                <li><a href="{{ route('user.about') }}"> <span>About</span></a></li>

                                <li><a href="{{ route('user.contact') }}"> <span>Contact</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-xl-2 col-6 d-flex align-items-center"style="margin-left:90px;" >
                        <div class="header-actions d-flex align-items-center justify-content-end w-100" >

                            {{-- Search --}}

                            {{-- Authenticated User --}}
                            @if(Auth::check())
                            
                            <div class="dropdown me-2 d-none d-md-block">
                                <button class="btn dropdown-toggle header-action-btn" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: transparent; border: none; padding: 0;">
                                    <a class="nav-link dropdown-toggle d-flex align-items-center text-dark" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- User Name -->
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small me-2 text-dark" style="font-size: 15px; font-weight: bold; ">
                                            welcome back,
                                            {{ Auth::user()->name }}</span>
                                        
                                        <!-- Profile Image -->
                                        @if(Auth::user()->profile_image)
                                        <img class="img-profile rounded-circle" 
                                                src="{{ asset('storage/' . Auth::user()->profile_image) }}" 
                                                alt="Profile" 
                                                style="width: 40px; height: 40px; object-fit: cover;">
                                    @else

                                    @endif
                                    
                                                                    </a>
                                </button>
                                
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-light rounded" aria-labelledby="userDropdown">
                                    @if(Auth::user()->role == 'user')
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.profile') }}">
                                                <i class="fas fa-user me-2"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.shipments.index') }}">
                                                <i class="fas fa-box me-2"></i> My Shipments
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('user.orders.index') }}">
                                                <i class="fas fa-cart-arrow-down me-2"></i> My Orders
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger" style="border: none; background: none;">
                                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                            @else
                                <a href="{{ route('login') }}" class="header-action-btn d-none d-md-block me-2" title="login">
                                    <i class="pe-7s-user"></i>
                                </a>
                            @endif

                            {{-- Wishlist --}}
                            <a href="{{ route('user.favorites.index') }}" class="header-action-btn header-action-btn-wishlist d-none d-md-block me-2">
                                <i class="fa fa-heart"
                                @if(auth()->check() && auth()->user()->favoriteProducts()->count() > 0)
                                    style="color: red;"
                                @endif>
                                </i>
                            </a>

                            {{-- Shopping Cart --}}
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart me-2">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">
                                    @php
                                        $cart = App\Models\Cart::where('user_id', auth()->id())->first();
                                        $cartItemCount = $cart ? $cart->items()->count() : 0;
                                    @endphp
                                    {{ $cartItemCount }}
                                </span>
                            </a>


                            {{-- Mobile Menu --}}
                            <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                <i class="fa fa-bars"></i>
                            </a>

                        </div>
                    </div>

                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
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
                                <li><a href="index.html">Home One</a></li>

                            </ul>
                        </li>
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
                        <!-- <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Romanian</a></li>
                        </ul> -->
                    </div>
                    <div class="header-top-curr dropdown">
                        <button class="dropdown-toggle" data-bs-toggle="dropdown">Jod <i class="fa fa-angle-down"></i></button>
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

                <!-- Social Widget Start -->
                <div class="widget-social">
                    <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                    <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                </div>
                <!-- Social Widget Ende -->
            </div>
            <!-- Contact Links/Social Links End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

    <!-- Offcanvas Search Start -->
    <div class="offcanvas-search">
        <div class="offcanvas-search-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <!-- Offcanvas Search Form Start -->
            <form class="offcanvas-search-form" action="#">
                <input type="text" placeholder="Search Here..." class="offcanvas-search-input">
            </form>
            <!-- Offcanvas Search Form End -->

        </div>
    </div>
    <!-- Offcanvas Search End -->

    <!-- Cart Offcanvas Start -->
    <div class="cart-offcanvas-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Cart Offcanvas Inner Start -->
        <div class="cart-offcanvas-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="pe-7s-close"></i>
            </div>
            <!-- Button Close End -->

            <div class="offcanvas-cart-content">
                <!-- Offcanvas Cart Title Start -->

                <!-- Offcanvas Cart Title End -->

                <!-- Cart Product/Price Start -->
                @if ($cartItems->isNotEmpty())
                <h2 class="offcanvas-cart-title mb-4">Your Shopping Cart</h2>

                    <div class="cart-product-wrapper mb-6">
                        @foreach ($cartItems as $cartItem)
                            <div class="single-cart-product">
                                <!-- Product Image -->
                                <div class="cart-product-thumb">
                                    <a href="{{ route('user.single-product', $cartItem->product->id) }}">
                                        @if(isset($cartItem->product->images[0]))
                                        <img src="{{ asset('storage/'.$cartItem->product->images[0]->image_path) }}"
                                            alt="{{$cartItem->product->name}}" class="img-fluid"
                                            style="max-width: 70px; height: auto;">
                                            @endif
                                    </a>
                                </div>

                                <!-- Product Info -->
                                <div class="cart-product-content">
                                    <h3 class="title">
                                        <a href="{{ route('user.single-product', $cartItem->product->id) }}"
                                            class="text-dark">{{ $cartItem->product->name }}</a>
                                    </h3>
                                    <span class="price">
                                        <span class="new">JOD{{ number_format($cartItem->product->price, 2) }}</span>
                                        <div class="cart-product-remove" style="width: 100%; text-align: right;">
                                            <form action="{{ route('user.cart.destroy', $cartItem->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm text-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Cart Total -->
                    @if(isset($cartItems) && count($cartItems) > 0)

                    <div class="cart-product-total d-flex justify-content-between mb-4">
                        <span class="value fw-bold">Subtotal</span>
                        <span
                            class="price fw-bold text-dark">JOD{{ number_format($cartItems->sum(function ($cartItem) {return $cartItem->product->price * $cartItem->quantity;}),2) }}</span>
                    </div>
@endif
                    <!-- Cart Buttons -->
                    <div class="cart-product-btn d-grid gap-3">
                        <a href="{{ route('user.cart.index') }}" class="btn btn-dark btn-hover-primary rounded-0">View
                            Cart</a>
                        <a href="{{ route('user.checkout') }}" class="btn btn-dark btn-hover-primary rounded-0">Proceed to
                            Checkout</a>
                    </div>
                @else
                    <p class="text-center text-muted">Your cart is empty.</p>
                @endif
            </div>
            <!-- Offcanvas Cart Content End -->

        </div>
        <!-- Cart Offcanvas Inner End -->
    </div>
    <!-- Cart Offcanvas End -->

</div>
