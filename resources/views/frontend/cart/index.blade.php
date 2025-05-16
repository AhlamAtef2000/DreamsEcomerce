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
                    <form action="{{ route('user.cart.update') }}" method="POST">
                        @csrf
                    <table class="table table-bordered" >
                        <!-- Table Head Start -->
                        <thead>
                            <tr>
                                <th style="display:none"></th>
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
                                <td class="pro-quantity" style="display:none">
                                    <input
                                        type="hidden"
                                        min="1"
                                        class="cart-plus-minus-box hidden-quantity"

                                        name="cart_items[{{ $cartItem->id }}][quantity]"
                                        value="{{ $cartItem->quantity }}"
                                    >
                                    <input type="hidden" name="cart_items[{{ $cartItem->id }}][color_id]" value="{{ $cartItem->color_id }}">
                                    <input type="hidden" name="cart_items[{{ $cartItem->id }}][size_id]" value="{{ $cartItem->size_id }}">
                                    <input type="hidden" name="cart_items[{{ $cartItem->id }}][material_id]" value="{{ $cartItem->material_id }}">
                                </td>
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
                                    <span>JOD{{ $cartItem->price }}</span>
                                </td>
                                <td class="pro-quantity">
                                    <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box visible-quantity" value="{{ $cartItem->quantity }}" type="number" min="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="pro-subtotal">
                                    <span class="subtotal">JOD{{ $cartItem->quantity * $cartItem->price }}</span>
                                </td>
                                <td class="pro-remove">
                                    <button type="button"  class="btn btn-danger btn-sm btn-remove-cart-item" data-id="{{ $cartItem->id }}">
                                        <i class="pe-7s-trash"></i>
                                    </button>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- Table Body End -->
                        <tfoot>
                            <tr>
                              <td colspan="10" style="padding: 20px;">
                                <div style="max-width: 300px; margin: 0 auto; text-align: center;">
                                  
                                  @if(!$cartItems->isEmpty())
                                    <div class="cart-calculator-wrapper" style="background-color: #F6EBE3; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                                      <h3 class="title mb-3">Cart Totals</h3>
                                      <div class="table-responsive">
                                        <table class="table mb-0">
                                          <tr>
                                            <td>Total</td>
                                            <td id="cart-total" style="font-weight: bold;">JOD{{ number_format($subtotal + $shipping, 2) }}</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                  @endif
                          
                                  <button type="submit" class="btn btn-dark btn-hover-primary rounded-0 w-100" style="font-size: 1.1rem; padding: 12px 0;">
                                    Proceed To Checkout
                                  </button>
                                </div>
                              </td>
                            </tr>
                          </tfoot>
                          
                    </form>
                    
                    </table>
                    
                </div>

                <!-- Cart Table End -->
                @endif

            </div>
        </div>

        <!-- Cart Total Section -->
      

    </div>
</div>
<!-- Shopping Cart Section End -->

@endsection

@section('incrementScript')
<script>
document.addEventListener('DOMContentLoaded', () => {

const updateItemSubtotal = (itemRow) => {
    const price = parseFloat(itemRow.dataset.price);
    const quantityInput = itemRow.querySelector('input.visible-quantity');
    const quantity = parseInt(quantityInput.value);
    const subtotalElement = itemRow.querySelector('.pro-subtotal .subtotal');
    subtotalElement.textContent = `JOD${(price * quantity).toFixed(2)}`;

    // مزامنة الحقل المخفي مع الحقل الظاهر
    const hiddenQuantityInput = itemRow.querySelector('input.cart-plus-minus-box.hidden-quantity');
    if(hiddenQuantityInput){
        hiddenQuantityInput.value = quantity;
    }
};

const updateCartTotal = () => {
    let total = 0;
    document.querySelectorAll('[data-cart-item-id]').forEach(row => {
        const price = parseFloat(row.dataset.price);
        const quantityInput = row.querySelector('input.visible-quantity');
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

document.querySelector('.cart-table').addEventListener('click', (e) => {
    if (e.target.classList.contains('qtybutton')) {
        const button = e.target;
        const itemRow = button.closest('tr');
        const quantityInput = itemRow.querySelector('input.visible-quantity');
        let currentQuantity = parseInt(quantityInput.value);

        if (button.classList.contains('inc')) {
            currentQuantity += 1;
        } else if (button.classList.contains('dec') && currentQuantity > 1) {
            currentQuantity -= 1;
        }

        quantityInput.value = currentQuantity;

        updateItemSubtotal(itemRow);
        updateCartTotal();
    }
});

document.querySelector('.cart-table').addEventListener('input', (e) => {
    if (e.target.classList.contains('visible-quantity')) {
        const itemRow = e.target.closest('tr');
        updateItemSubtotal(itemRow);
        updateCartTotal();
    }
});

// تهيئة العرض عند تحميل الصفحة
document.querySelectorAll('[data-cart-item-id]').forEach(row => {
    updateItemSubtotal(row);
});
updateCartTotal();

});

</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        
    document.querySelectorAll('.btn-remove-cart-item').forEach(button => {
        button.addEventListener('click', function() {
            const cartItemId = this.dataset.id;
            console.log(cartItemId);

            if (!confirm('Are you sure you want to remove this item from the cart?')) {
                return;
            }

            fetch(`/user/cart/${cartItemId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
            })
            .then(response => {
                if (response.ok) {
                    // Optionally remove the item's row from the table or reload page
                    this.closest('tr').remove();
                    alert('Item removed successfully.');
                } else {
                    console.error('Failed to remove item:', response);
                    alert('Failed to remove item.');
                }
                location.reload();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error removing item.');
            });
        });
    });
});

</script>
@endsection



