<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
{
    $this->middleware(['auth', 'verified']);
}

    public function index()
    {
        $user = auth()->user();

        // If authenticated, get the user's cart and cart items
        if ($user) {
            $cart = $user->carts()->first();

            // If the user has a cart, get the cart items
            $cartItems = $cart ? CartItem::where('cart_id', $cart->id)->with('product')->get() : [];
        } else {
            // If not authenticated, set cartItems to an empty array
            $cartItems = [];
        }

        return view('frontend.checkout.index',compact('cartItems'));
    }

}
