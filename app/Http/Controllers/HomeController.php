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
        $newArrivals = Product::with(['reviews', 'images'])->whereNull('discount_percentage')  // Add the condition to check for null discount_percentage
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

            $dailyProducts = Product::with(['reviews', 'images'])
            ->whereNotNull('discount_percentage')  // Add the condition to check for not null discount_percentage
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();
            
            $bestSellers = Product::with('reviews')
            ->withCount(['orderItems as delivered_orders_count' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'delivered');
                });
            }])
            ->having('delivered_orders_count', '>', 0)
            ->orderBy('delivered_orders_count', 'desc')
            ->take(8)
            ->get();
        

            $saleItems = Product::with('reviews')
            ->where('is_on_sale', true) // or use ->where('is_on_sale', 1)
            ->take(8)
            ->get();
        

        $categoryWithProduct = Category::with(['products.images']) // nested eager loading
            ->take(8)
            ->get();


        return view('frontend.index', compact('newArrivals', 'bestSellers', 'saleItems', 'categoryWithProduct', 'cartItems','dailyProducts'));


    }



}
