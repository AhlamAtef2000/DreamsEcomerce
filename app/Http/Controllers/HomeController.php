<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\CartItem;

class HomeController extends Controller
{



    public function index(Request $request) {
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

        // Fetch products for the homepage
        $newArrivals = Product::with(['reviews', 'images'])
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        $bestSellers = Product::with('reviews')
            ->withCount(['orderItems' => function($query) {
                $query->whereHas('order', function($query) {
                    $query->where('status', 'delivered');
                });
            }])
            ->orderBy('order_items_count', 'desc')
            ->take(8)
            ->get();

        $saleItems = Product::with('reviews')->where('is_on_sale', true)
            ->take(8)
            ->get();

        $categoryWithProduct = Category::with(['products.images']) // nested eager loading
            ->take(8)
            ->get();


        return view('frontend.index', compact('newArrivals', 'bestSellers', 'saleItems', 'categoryWithProduct', 'cartItems'));


    }



}
