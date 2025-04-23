<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\CartItem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  // In your controller (e.g., FavoriteController)

  public function index()
  {
      // Check if the user is authenticated
      $user = auth()->user();

      // If user is authenticated, get their favorite products with additional information
      if ($user) {
          // Get the authenticated user's favorite products with eager loading for related models
          $favourites = $user->favoriteProducts()
              ->with(['colors', 'sizes', 'materials', 'images']) // Eager load additional relationships
              ->select('products.id', 'products.name', 'products.description', 'products.price', 'products.stock') // Select relevant columns
              ->paginate(10);

          // Retrieve the user's cart
          $cart = $user->carts()->first();

          // If the user has a cart, get the cart items
          $cartItems = $cart ? CartItem::where('cart_id', $cart->id)->with('product')->get() : [];
      } else {
          // If not authenticated, set both $favourites and $cartItems to empty arrays
          $favourites = collect(); // Empty collection for favorites
          $cartItems = []; // Empty array for cart items
      }

      // Return the view with the paginated favorite products and cart items
      return view('frontend.wishlist.index', compact('favourites', 'cartItems'));
  }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $user = auth()->user();

        if ($user->favoriteProducts()->where('product_id', $product->id)->exists()) {
            return back()->with('message', 'Already in favorites!');
        }

        $user->favoriteProducts()->attach($product->id);
        return back()->with('message', 'Added to favorites!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productId = $request->input('product_id');
        $user = Auth::user();
        if (!$user->favoriteProducts()->where('product_id', $productId)->exists()) {
            $user->favoriteProducts()->attach($productId);
        }
        return redirect()->back()->with('message', 'Added to favorites.');
    }

    /**
     * Display the specified resource.
     */
    public function show(favourite $favourite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favourite $favourite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, favourite $favourite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Auth::user()->favoriteProducts()->detach($id);
        return redirect()->back()->with('message', 'Removed from favorites.');

    }
}
