@extends('frontend.layout')

@section('content')

<!-- Breadcrumb Section Start -->
<div class="section">
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Shopping Cart</h1>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Start -->
<div class="section section-margin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Cart Table Start -->
                @if($cartItems->isEmpty())
                <div class="empty-cart-message text-center">
                    <h3>Your cart is empty!</h3>
                    <p>It seems like you don't have any items in your cart. Go ahead and add some products.</p>
                    <a href="{{ route('user.shop') }}" class="btn btn-primary">Continue Shopping</a>
                </div>
                @else

                <div class="cart-table table-responsive">
                    <table class="table table-bordered" >
                        <!-- Table Head Start -->
                        <thead>
                            <tr>
                                <th class="pro-id">#</th>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-size">Size</th>
                                <th class="pro-material">Material</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody>
                            @foreach($cartItems as $cartItem)
                            <tr data-cart-item-id="{{ $cartItem->id }}" data-price="{{ $cartItem->price }}">
                                <td class="pro-id">
                                    <a href="#">{{$cartItem->id}}</a>
                                </td>
                                <td class="pro-thumbnail">
                                    <a href="#">
                                        @if(isset($cartItem->product->images[0]->image_path))
                                            <img class="img-fluid" style="width:70px;height:70px;" src="{{ asset('storage/'.$cartItem->product->images[0]->image_path) }}" alt="Product" />
                                        @else
                                            <img class="img-fluid" style="width:70px;height:70px;" src="{{ asset('images/placeholder.png') }}" alt="No Image" />
                                        @endif
                                    </a>
                                                                    </td>
                                <td class="pro-title">
                                    <a href="{{ route('user.single-product',$cartItem->product->id) }}">{{ $cartItem->product->name }} / {{ $cartItem->color->name }}</a>
                                </td>
                                <td class="pro-size">
                                    <span>{{ $cartItem->size->name }}</span> <!-- Display selected size -->
                                </td>

                                <td class="pro-material">
                                    <span>{{ $cartItem->material->name }}</span> <!-- Display material -->
                                </td>
                                <td class="pro-price">
                                    <span>JOD{{ number_format($cartItem->price, 2) }}</span>
                                </td>
                                <td class="pro-quantity">
                                    <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="{{ $cartItem->quantity }}" type="number" min="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="pro-subtotal">
                                    <span class="subtotal">JOD{{ number_format($cartItem->quantity * $cartItem->price, 2) }}</span>
                                </td>
                                <td class="pro-remove">
                                    <form action="{{ route('user.cart.remove', $cartItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="pe-7s-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- Table Body End -->
                    </table>
                </div>

                <!-- Cart Table End -->
                @endif

            </div>
        </div>

        <!-- Cart Total Section -->
        @if(!$cartItems->isEmpty())

        <div class="row">
            <div class="col-lg-5 ms-auto col-custom">
                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                        <h3 class="title">Cart Totals</h3>
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <td>Total</td>
                                    <td id="cart-total">JOD{{ number_format($subtotal + $shipping, 2) }}</td>
                                </tr>
                            </table>

                        </div>
                    </div>

<form action="{{ route('user.cart.update') }}" method="POST">
    @csrf
    <input type="hidden" id="quantity_no" name="quantity_no" >
    <input type="hidden" id="cart_item_id" name="cart_item_id" >
    <input type="hidden" id="color_id" value="{{$cartItem->color_id}}" name="color_id" >
    <input type="hidden" id="size_id" value="{{$cartItem->size_id}}" name="size_id" >
    <input type="hidden" id="material_id" value="{{$cartItem->material_id}}" name="material_id" >
    <button type="submit" class="btn btn-dark btn-hover-primary rounded-0 w-100">
        Proceed To Checkout
    </button>
</form>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>
<!-- Shopping Cart Section End -->

@endsection

@section('incrementScript')
<script>
document.addEventListener('DOMContentLoaded', () => {
    let isProgrammaticChange = false;

    const updateItemSubtotal = (itemRow) => {
        const price = parseFloat(itemRow.dataset.price);
        const quantityInput = itemRow.querySelector('.cart-plus-minus-box');
        const quantity = parseInt(quantityInput.value);
        const subtotalElement = itemRow.querySelector('.pro-subtotal .subtotal');
        const newSubtotal = (price * quantity).toFixed(2);
        subtotalElement.textContent = `JOD${newSubtotal}`;
    };

    const updateCartTotal = () => {
        const itemRows = document.querySelectorAll('[data-cart-item-id]');
        let total = 0;
        itemRows.forEach(row => {
            const price = parseFloat(row.dataset.price);
            const quantityInput = row.querySelector('.cart-plus-minus-box');
            const quantity = parseInt(quantityInput.value);
            total += price * quantity;
        });

        const shipmentElement = document.getElementById('shipment');
        let shipping = 0;
        if (shipmentElement) {
            shipping = parseFloat(shipmentElement.textContent.replace('JOD', '')) || 0;
        }

        const cartTotalElement = document.getElementById('cart-total');
        if (cartTotalElement) {
            cartTotalElement.textContent = `JOD${(total + shipping).toFixed(2)}`;
        }
    };

    const updateHiddenFields = (itemRow) => {
        const cartItemId = itemRow.dataset.cartItemId;
        const quantityInput = itemRow.querySelector('.cart-plus-minus-box');
        const quantity = quantityInput ? quantityInput.value : 1;

        // Set the values of the hidden inputs using their id
        const hiddenQuantity = document.getElementById('quantity_no');
        const hiddenCartItemId = document.getElementById('cart_item_id');

        // Debugging: log to check if values are correct
        console.log('Updating hidden fields for Item:', cartItemId, 'Quantity:', quantity);

        if (hiddenQuantity) hiddenQuantity.value = quantity;
        if (hiddenCartItemId) hiddenCartItemId.value = cartItemId;
    };

    // Initialize hidden inputs on page load
    document.querySelectorAll('[data-cart-item-id]').forEach(itemRow => {
        updateItemSubtotal(itemRow);
        updateHiddenFields(itemRow);
    });

    // Handle + / - buttons
    document.querySelector('.cart-table').addEventListener('click', (e) => {
        if (e.target.classList.contains('qtybutton')) {
            const button = e.target;
            const itemRow = button.closest('tr');
            const quantityInput = itemRow.querySelector('.cart-plus-minus-box');
            let currentQuantity = parseInt(quantityInput.value);

            if (button.classList.contains('inc')) {
                currentQuantity += 1;
            } else if (button.classList.contains('dec') && currentQuantity > 1) {
                currentQuantity -= 1;
            }

            isProgrammaticChange = true;
            quantityInput.value = currentQuantity;

            updateItemSubtotal(itemRow);
            updateCartTotal();
            updateHiddenFields(itemRow);

            setTimeout(() => { isProgrammaticChange = false }, 100);
        }
    });

    // Handle manual input
    document.querySelector('.cart-table').addEventListener('input', (e) => {
        if (e.target.classList.contains('cart-plus-minus-box') && !isProgrammaticChange) {
            const itemRow = e.target.closest('tr');
            updateItemSubtotal(itemRow);
            updateCartTotal();
            updateHiddenFields(itemRow);
        }
    });

    // Final total update
    updateCartTotal();
});
</script>
@endsection



