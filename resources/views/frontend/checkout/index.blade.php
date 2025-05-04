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
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('user.about') }}">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
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

            <!-- Contact Links/Social Links Start -->
            <div class="mt-auto">

                <!-- Contact Links Start -->
                <ul class="contact-links">
                    <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                    <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
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

    <!-- Offcanvas Search End -->


    <!-- Cart Offcanvas End -->

</div>


<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Checkout</h1>
                <ul>

                        <li><a href="{{ url('/') }}">Home</a></li>

                    <li class="active"> Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->



<!-- Checkout Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Coupon Accordion Start -->
                <div class="coupon-accordion">

                    <!-- Title Start -->
                    <!-- Title End -->

                    <!-- Checkout Login Start -->

                    <!-- Checkout Login End -->

                    <!-- Title Start -->
                    <!-- Title End -->

                    <!-- Checkout Coupon End -->

                </div>
                <!-- Coupon Accordion End -->
            </div>
        </div>

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


        <form action="{{ route('user.orders.store') }}" method="POST">
            @csrf
            <div class="row">

                <!-- Billing Details - Left Side -->
                <div class="col-md-6">
                    <div class="checkbox-form">
                        <h3 class="title">Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label>City <span class="required">*</span></label>
                                <select id="countrySelect" class="form-control" name="country" required>
                                    <option disabled selected>Loading countries...</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Shipping Method <span class="required">*</span></label>
                                <select id="shippingMethodSelect" class="form-control" name="shipping_method_id" required>
                                    <option disabled selected>Select a city first</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>First Name <span class="required">*</span></label>
                                <input type="text" name="first_name" value={{ Auth::user()->name }} class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Last Name <span class="required">*</span></label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" name="address" class="form-control" placeholder="Street address" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" name="apartment" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Town / City <span class="required">*</span></label>
                                <input type="text" name="town_city" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>State  <span class="required">*</span></label>
                                <input type="text" name="state_county" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Postcode / Zip <span class="required">*</span></label>
                                <input type="text" name="postcode_zip" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Email Address <span class="required">*</span></label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Phone <span class="required">*</span></label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Order Notes</label>
                                <textarea name="order_notes" class="form-control" rows="4" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Your Order - Right Side -->
                <div class="col-md-6">
                    <div class="your-order-area border p-3">
                        <h3 class="title">Your Order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="cart-product-head">
                                        <th class="text-start">Product</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr class="cart_item">
                                            <td class="text-start ps-0">
                                                {{ $item->product->name }} × {{ $item->quantity }}
                                            </td>
                                            <td class="text-end pe-0">
                                                JOD{{ number_format($item->product->price * $item->quantity, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @php
            $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
            $discount = 0;

            if (session()->has('coupon')) {
                $coupon = session('coupon');
                $discount = $coupon['discount_type'] === 'fixed'
                    ? $coupon['amount']
                    : $subtotal * ($coupon['amount'] / 100);
            }

            $total = max(0, $subtotal - $discount); // prevent negative total
            session(['discount' => $discount, 'total' => $total]);

@endphp
<tfoot>
    <tr>
        <th class="text-start">Cart Subtotal</th>
        <td class="text-end">JOD{{ number_format($subtotal, 2) }}</td>
        <input type="hidden" id="finalTotal" name="total_price"/>
    </tr>

    <tr id="discount-row" style="display: {{ session('coupon') ? 'flex' : 'none' }}; align-items: center;">
        <th class="text-start" style="flex-shrink: 0; margin-right: 10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            Coupon (<span id="coupon-code">{{ session('coupon.code') ?? 'none' }}</span>)
        </th>
        <td class="text-end text-success" style="flex-grow: 1;">
            - JOD<strong id="discount-amount">{{ number_format($discount ?? 0, 2) }}</strong>
        </td>
    </tr>

    <tr class="shipping-row">
        <th class="text-start">Shipping</th>
        <td class="text-end" id="shipping-cost">JOD0.00</td>
    </tr>



    <tr>
        <th class="text-start">Order Total</th>
        <td class="text-end"><strong id="order-total">JOD{{ number_format($total, 2) }}</strong></td>
    </tr>
</tfoot>



                            </table>
                        </div>

                        <!-- Payment Methods -->
                        <div class="payment-accordion-order-button mt-4">
                            <div class="payment-accordion">
                                @php
                                    $methods = [
                                        // 'bank' => 'Direct Bank Transfer',
                                        // 'cheque' => 'Cheque Payment',
                                        // 'paypal' => 'PayPal',
                                        'cod' => 'Cash on Delivery',
                                    ];
                                @endphp

                                @foreach ($methods as $value => $label)
                                    <div class="single-payment mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_method" id="payment-{{ $value }}" value="{{ $value }}" >
                                            <label class="form-check-label fw-bold" for="payment-{{ $value }}">
                                                {{ $label }}
                                            </label>
                                        </div>
                                        @if ($value === 'cod')
                                            <div class="mt-2 small text-muted ps-4">
                                                We are awaiting your order. You can pay in cash upon delivery.
                                            </div>
                                        @endif
                                    </div>
                                @endforeach

                                <button type="submit" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-3">
                                    Place Order
                                </button>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </form>
        <div class="col-md-12 mt-4">
            <div id="checkout_coupon" class="coupon-checkout-content" style="display: block;">
                <div class="coupon-info">
                    <form id="coupon-form">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="coupon_code" class="form-control" placeholder="Enter coupon">
                            <input type="hidden" id="subtotal" name="subtotal" value="{{ $subtotal }}">
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </form>
                    <div id="coupon-message" class="mt-2"></div>


                    @if(session()->has('coupon'))
                    <button id="remove-coupon-btn" class="btn btn-danger btn-sm mt-2">Remove Coupon</button>
                @endif


                </div>
            </div>
        </div>




    </div>
</div>
<!-- Checkout Section End -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const countrySelect = document.getElementById('countrySelect');
        const shippingMethodSelect = document.getElementById('shippingMethodSelect');
        const shippingCostEl = document.getElementById('shipping-cost');
        const orderTotalEl = document.getElementById('order-total');

        const shippingPriceInput = document.getElementById('shipping_price');
        const shippingMethodIdInput = document.getElementById('shipping_method_id');

        // Grab subtotal and discount from Blade
        const subtotal = parseFloat({{ $subtotal }});
        const discount = parseFloat({{ $discount ?? 0 }});

        // Populate country select
        fetch('/api/countries')
            .then(res => res.json())
            .then(countries => {
                countrySelect.innerHTML = '<option disabled selected>Select a country</option>';
                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.id;
                    option.textContent = country.name;
                    countrySelect.appendChild(option);
                });
            });

        // On country change, fetch shipping methods
        countrySelect.addEventListener('change', function () {
            const countryId = this.value;
            shippingMethodSelect.innerHTML = '<option disabled selected>Loading shipping methods...</option>';

            fetch(`/shipping-methods/${countryId}`)
                .then(res => res.json())
                .then(methods => {
                    shippingMethodSelect.innerHTML = '<option disabled selected>Select a shipping method</option>';
                    methods.forEach(method => {
                        const option = document.createElement('option');
                        option.value = method.id;
                        option.setAttribute('data-price', method.price);
                        option.textContent = `${method.name} - JOD${parseFloat(method.price).toFixed(2)}`;
                        shippingMethodSelect.appendChild(option);
                    });
                });


        });

        // On shipping method change, update shipping and total
        shippingMethodSelect.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const shippingPrice = parseFloat(selectedOption.dataset.price || 0);

            // Update shipping row
            shippingCostEl.textContent = `JOD${shippingPrice.toFixed(2)}`;

            // Calculate total and update
            const newTotal = subtotal - discount + shippingPrice;
            orderTotalEl.textContent = `JOD${newTotal.toFixed(2)}`;

            // Update hidden inputs
            if (shippingPriceInput) shippingPriceInput.value = shippingPrice;
            if (shippingMethodIdInput) shippingMethodIdInput.value = this.value;

        });
    });
    </script>




<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('coupon-form');
        const messageEl = document.getElementById('coupon-message');

        const discountRow = document.getElementById('discount-row');
        const couponCodeEl = document.getElementById('coupon-code');
        const discountAmountEl = document.getElementById('discount-amount');
        const orderTotalEl = document.getElementById('order-total');
        const subtotalEl = document.getElementById('subtotal');
        const shippingMethodSelect = document.getElementById('shippingMethodSelect');
        const shippingCostEl = document.getElementById('shipping-cost');
        const shippingPriceInput = document.getElementById('shipping-price-input');
        const shippingMethodIdInput = document.getElementById('shipping-method-id-input');
        const finalTotalInput = document.getElementById("finalTotal"); // Add reference to finalTotal input

        // Set initial subtotal
        const subtotal = parseFloat(subtotalEl.value);
        let discount = 0; // Store discount globally
        let shippingPrice = 0;

        // Apply coupon
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(this);
                formData.append('subtotal', subtotal);

                fetch("{{ route('user.coupon.apply') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        messageEl.className = 'text-success';
                        messageEl.textContent = data.message;

                        // Store discount and update the DOM
                        discount = data.discountAmount;
                        couponCodeEl.textContent = data.coupon.code;
                        discountAmountEl.textContent = parseFloat(data.discountAmount).toFixed(2);
                        updateTotal(); // Recalculate total after applying coupon

                        // Show the discount row
                        discountRow.style.display = '';

                        // Show remove button dynamically
                        if (!document.getElementById('remove-coupon-btn')) {
                            const removeBtn = document.createElement('button');
                            removeBtn.id = 'remove-coupon-btn';
                            removeBtn.className = 'btn btn-danger btn-sm mt-2';
                            removeBtn.textContent = 'Remove Coupon';
                            form.parentNode.appendChild(removeBtn);
                            attachRemoveEvent(removeBtn); // attach event
                        }
                    } else {
                        messageEl.className = 'text-danger';
                        messageEl.textContent = data.message;
                    }
                })
                .catch(() => {
                    messageEl.className = 'text-danger';
                    messageEl.textContent = 'An error occurred.';
                });
            });
        }

        // Function to attach event for removing the coupon
        function attachRemoveEvent(button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                fetch("{{ route('user.coupon.remove') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        messageEl.className = 'text-info';
                        messageEl.textContent = data.message;

                        // Reset values
                        discountRow.style.display = 'none';
                        discountAmountEl.textContent = '0.00';
                        couponCodeEl.textContent = '';
                        discount = 0;
                        updateTotal(); // Recalculate total after removing coupon

                        // Remove button
                        button.remove();
                    }
                });
            });
        }

        // Function to update total after coupon or shipping method change
        function updateTotal() {
            const newTotal = subtotal - discount + shippingPrice;
            orderTotalEl.textContent = 'JOD' + newTotal.toFixed(2);
            if (finalTotalInput) {
            finalTotalInput.value = newTotal.toFixed(2);
        }
        }

        // On shipping method change, update shipping cost and total
        shippingMethodSelect.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            shippingPrice = parseFloat(selectedOption.dataset.price || 0);

            // Update shipping cost row
            shippingCostEl.textContent = `JOD${shippingPrice.toFixed(2)}`;

            // Recalculate total after changing shipping
            updateTotal();

            // Update hidden inputs
            if (shippingPriceInput) shippingPriceInput.value = shippingPrice;
            if (shippingMethodIdInput) shippingMethodIdInput.value = this.value;
        });

        // Attach to existing button if present
        const existingRemoveBtn = document.getElementById('remove-coupon-btn');
        if (existingRemoveBtn) {
            attachRemoveEvent(existingRemoveBtn);
        }


        

    });
</script>
