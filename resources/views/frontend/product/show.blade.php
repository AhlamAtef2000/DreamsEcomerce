@extends('frontend.layout')

@section('content')
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light py-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h1 class="title mb-3">Product Details</h1>
                <ul class="breadcrumb-list">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>

<div class="section section-margin">

    <div class="container">
        <div class="row">
            <!-- Product Images -->
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                <div class="product-details-img">
                    <!-- Main Image -->
                    <div class="single-product-img swiper-container gallery-top">
                        <div class="swiper-wrapper popup-gallery">
                            @foreach ($product->images as $image)
                                <a class="swiper-slide w-100" href="{{ asset('storage/'.$image->image_path) }}" role="group">
                                    <img class="w-100" src="{{ asset('storage/'.$image->image_path) }}" alt="{{ $product->name }}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Thumbnails -->
                    <div class="single-product-thumb swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach ($product->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/'.$image->image_path) }}" alt="Thumbnail">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-7 col-custom">
                <div class="product-summery position-relative">
                    <div class="product-head mb-3">
                        <h2 class="product-title">{{ $product->name }}</h2>
                    </div>

                    <!-- Price -->
                    <div class="price-box mb-2">
                        <span class="regular-price">JOD{{ number_format($product->price, 2) }}</span>
                    </div>

                    <!-- Rating -->
                    @php
                        $rating = optional($product->reviews->first())->rating ?? 0;
                    @endphp

                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $rating)
                                <i class="fas fa-star text-warning"></i> {{-- نجمة ذهبية --}}
                                @else
                                    <i class="far fa-star text-muted"></i> {{-- نجمة فارغة --}}

                                @endif
                            @endfor
                        <span class="rating-num ms-2">({{ $rating }})</span>
                    </div>

                    <!-- SKU -->


                    <!-- Description -->
                    <p class="desc-content mb-5">{{ $product->description }}</p>

                    <!-- Sizes -->

                    <!-- Quantity -->



                    <!-- Buttons -->
                    <div class="cart-wishlist-btn mb-4">
                        <!-- Add to Cart Form -->
                        <div class="add-to_cart mb-4">
                            <form method="POST" action="{{ route('user.cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <!-- Size Dropdown -->
                                <div class="form-group mb-3" style="max-width: 200px;">
                                    <label for="size" class="form-label">Size:</label>
                                    <select class="form-select" name="size_id" id="size" required>
                                        <option value="" disabled selected>Select Size</option>
                                        @foreach($product->sizes as $size)
                                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Color Dropdown -->
                                <div class="form-group mb-3" style="max-width: 200px;">
                                    <label for="color" class="form-label">Color:</label>
                                    <select class="form-select" name="color_id" id="color" required>
                                        <option value="" disabled selected>Select Color</option>
                                        @foreach($product->colors as $color)
                                            <option value="{{ $color->id }}">{{ ucfirst($color->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Material Dropdown -->
                                <div class="form-group mb-4" style="max-width: 200px;">
                                    <label for="material" class="form-label">Material:</label>
                                    <select class="form-select" name="material_id" id="material" required>
                                        <option value="" disabled selected>Select Material</option>
                                        @foreach($product->materials as $material)
                                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Buttons Row -->
                                <div class="d-flex gap-2">
                                    <!-- Add to Cart Button -->
                                    <button class="btn btn-outline-dark btn-hover-primary" type="submit">
                                        Add To Cart
                                    </button>

                                    <!-- Add to Wishlist Form/Button -->
                                    <form action="{{ route('user.favorites.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-outline-dark btn-hover-primary">
                                            Add to Wishlist
                                        </button>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>



                    <!-- Social Share -->
                    <div class="social-share">
                        <span>Share :</span>
                        <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                        <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                    </div>

                    <!-- Policies -->
                    <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                        <li><i class="fa fa-check-square"></i> Security Policy</li>
                        <li><i class="fa fa-truck"></i> Delivery Policy</li>
                        <li><i class="fa fa-refresh"></i> Return Policy</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <div class="section section-margin">
        <div class="container">
            <div class="product_tab_content border p-4 rounded shadow-sm">
                <h4 class="mb-4">Product Reviews</h4>

                {{-- All reviews --}}
                @foreach ($product->reviews as $review)
                    <div class="single-review d-flex mb-4 border-bottom pb-3">
                        <div class="review_thumb me-3">
                            <img alt="review images" src="https://i.pravatar.cc/50?img=1" style="width: 50px; height: 50px; border-radius: 50%;">
                        </div>

                        <div class="review_details">
                            <div class="review_info mb-2">
                                @php
                                    $normalizedRating = round($review->rating );
                                @endphp
                                <span class="rating-wrap me-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $normalizedRating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-muted"></i>
                                        @endif
                                    @endfor
                                </span>
                                <span class="rating-num text-muted">({{ $normalizedRating }})</span>

                                <div class="review-title-date d-flex">
                                    <h5 class="title me-2 fw-bold">{{ $review->user->name }}</h5>
                                    <span class="text-muted">{{ $review->created_at->format('F d, Y') }}</span>
                                </div>
                            </div>
                            <p>{{ $review->comment }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- Detect user review --}}
                @php
                    $userReview = $product->reviews->where('user_id', auth()->id())->first();
                    $editMode = isset($isEditing) && $isEditing && isset($review);
                @endphp

@if($hasDeliveredOrder)

                {{-- Rating Form or Info --}}
                <div class="rating_wrap mt-4">
                    <h5 class="rating-title mb-2">{{ $editMode ? 'Edit your review' : 'Add a review' }}</h5>
                    <p class="mb-3">Your email address will not be published. Required fields are marked *</p>

                    @if(!$userReview || $editMode)
                    <h6 class="rating-sub-title mb-3">Your Rating</h6>

                    <div class="rating-stars mb-3">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="star {{ $editMode && ($i <= round($review->rating )) ? 'text-warning' : 'text-muted' }}" data-value="{{ $i }}">&#9733;</span>
                        @endfor
                        <span class="rating-num">({{ $editMode ? round($review->rating ) : 0 }})</span>
                    </div>
                    @endif
                </div>

                {{-- Review Form --}}
                @if (!$userReview || $editMode)
                    <div class="comments-area comments-reply-area mt-4">
                        <div class="row">
                            <div class="col-lg-12 col-custom">
                                <form action="{{ $editMode ? route('user.review.update', $review->id) : route('user.review.store') }}"
                                      method="POST"
                                      class="comment-form-area"
                                      onsubmit="return validateReviewForm()">
                                    @csrf
                                    @if($editMode)
                                        @method('PUT')
                                    @endif

                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" id="ratingInput" name="rating" value="{{ $editMode ? $review->rating : 0 }}">

                                    <div class="row comment-input">
                                        <div class="col-md-6 col-custom comment-form-author mb-3">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" required name="Name" value="{{ auth()->user()->name }}" readonly class="form-control">
                                        </div>

                                        <div class="col-md-6 col-custom comment-form-email mb-3">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" required name="email" value="{{ auth()->user()->email }}" readonly class="form-control">
                                        </div>
                                    </div>

                                    <div class="comment-form-comment mb-3">
                                        <label>Comment</label>
                                        <textarea class="form-control" required name="comment" rows="4">{{ $editMode ? $review->comment : '' }}</textarea>
                                    </div>

                                    <div class="comment-form-submit">
                                        <button class="btn btn-dark btn-hover-primary">
                                            {{ $editMode ? 'Update Review' : 'Submit' }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @else

                    <a href="{{ route('user.review.edit', $userReview->id) }}" class="btn btn-sm btn-outline-primary mt-2">Edit Review</a>
                @endif


                @endif
            </div>
        </div>
    </div>

    {{-- Star rating script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star');
            const ratingInput = document.getElementById('ratingInput');
            const ratingNum = document.querySelector('.rating-num');

            const initialRating = parseInt(ratingInput.value);
            if (initialRating) {
                for (let i = 0; i < initialRating; i++) {
                    stars[i].classList.add('text-warning');
                    stars[i].classList.remove('text-muted');
                }
                ratingNum.textContent = `(${initialRating})`;
            }

            stars.forEach(star => {
                star.addEventListener('click', function () {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value ;
                    ratingNum.textContent = `(${value})`;

                    stars.forEach(s => {
                        s.classList.remove('text-warning');
                        s.classList.add('text-muted');
                    });

                    for (let i = 0; i < value; i++) {
                        stars[i].classList.add('text-warning');
                        stars[i].classList.remove('text-muted');
                    }
                });
            });
        });

        function validateReviewForm() {
            const rating = parseInt(document.getElementById('ratingInput').value);
            if (!rating) {
                alert("Please select a rating before submitting.");
                return false;
            }
            return true;
        }
    </script>







@endsection
