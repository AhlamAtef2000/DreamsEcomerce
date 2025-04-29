@extends('frontend.layout')
@section('content')

<!-- Mobile Menu Start -->
<div class="mobile-menu-wrapper">
    <div class="offcanvas-overlay"></div>
    <div class="mobile-menu-inner">
        <div class="offcanvas-btn-close">
            <i class="pe-7s-close"></i>
        </div>
        <div class="mobile-navigation">
            <nav>
                <ul class="mobile-menu">
                    <!-- Menu items (skipping for brevity) -->
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->

<!-- Breadcrumb Section Start -->
<div class="section">
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
</div>
<!-- Breadcrumb Section End -->

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
        <div class="feature-wrap" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-between;">
            @foreach (App\Models\Feature::all() as $feature)
                <div class="col mb-5" data-aos="fade-up" data-aos-delay="300" style="flex: 1 1 22%; max-width: 22%; padding: 10px;">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            @if($feature->picture)
                                <img src="{{ asset('storage/features/' . $feature->picture) }}" alt="Feature Icon" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                <img src="{{ asset('storage/features/default.jpg') }}" alt="Default Feature Icon" style="width: 100%; height: 100%; object-fit: cover;">
                            @endif
                        </div>
                        <div class="content">
                            <h5 class="title">{{ $feature->title }}</h5>
                            <p>{{ $feature->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Example Images Section -->
            @foreach(['about1', 'about2', 'about3', 'about11'] as $image)
                <div class="about_thumb" style="width: 250px; height: 350px; margin: 10px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease-in-out;">
                    <img class="fit-image" src="{{ asset("storage/about/$image.jpg") }}" alt="About Image" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Service Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row mb-n6">
            <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="200">
                <div class="single-service">
                    <h2 class="title">What Do We Do</h2>
                    <p>We offer a wide range of trendy clothing that caters to all tastes. We provide a comfortable shopping experience at competitive prices for customers looking for style and quality. Our focus is on delivering the best options to keep up with the latest fashion trends.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="400">
                <div class="single-service">
                    <h2 class="title">Our Mission</h2>
                    <p>Our mission is to provide the best online shopping experience for our customers, offering fashion that suits every taste and follows the latest trends. We are always committed to customer satisfaction by delivering high-quality products and excellent customer service.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6" data-aos="fade-up" data-aos-delay="600">
                <div class="single-service">
                    <h2 class="title">History of Us</h2>
                    <p>We started our journey by selling clothing through an Instagram page, where we directly offered our products to customers. Over time, we grew from a social media page to a full-fledged online store offering a wide variety of clothing and accessories. Today, we aim to expand our services and provide an exceptional shopping experience for our customers.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section End -->

@endsection
