<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Size;
use App\Models\Material;
use App\Models\Color;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
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


        return view('frontend.cart.index');

    }


    public function ShowCart()
    {

    }

    public function remove($id)
{
    $cartItem = CartItem::findOrFail($id);
    $cartItem->delete();

    return redirect()->route('user.cart.index');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You need to log in to add items to your cart.');
        }

        // Get the authenticated user
        $user = auth()->user();

        // Get or create the cart for the user
        $cart = $user->carts()->firstOrCreate([
            'user_id' => $user->id
        ]);

        // Find the product by its ID
        $product = Product::findOrFail($request->product_id);

        // Check if the size, color, and material are provided in the request
        if (!$request->has('size_id') || !$request->has('color_id') || !$request->has('material_id')) {
            return redirect()->back()->with('error', 'Please select size, color, and material.');
        }

        // Find the selected size, color, and material by their IDs
        $size = Size::findOrFail($request->size_id);
        $color = Color::findOrFail($request->color_id);
        $material = Material::findOrFail($request->material_id);

        // Create the cart item with size, color, and material
        $cartItem = CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'size_id' => $size->id,
            'color_id' => $color->id,
            'material_id' => $material->id,
            'quantity' => $request->quantity ?? 1,
            'price' => $product->price,
        ]);

        // Redirect back to the cart with a success message
        return redirect()->route('user.cart.index')->with('success', 'Item added to your cart.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'cart_items' => 'required|array',
            'cart_items.*.quantity' => 'required|integer|min:1',
            'cart_items.*.color_id' => 'required|exists:colors,id',
            'cart_items.*.size_id' => 'required|exists:sizes,id',
            'cart_items.*.material_id' => 'required|exists:materials,id',
        ]);
    
        foreach ($request->cart_items as $id => $data) {
            $cartItem = CartItem::find($id);
            if ($cartItem) {
                $cartItem->quantity = $data['quantity'];
                $cartItem->color_id = $data['color_id'];
                $cartItem->size_id = $data['size_id'];
                $cartItem->material_id = $data['material_id'];
                $cartItem->save();
            }
        }
    
        return redirect()->route('user.checkout')->with('success', 'Cart updated successfully.');
    }
    



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        // Find the cart item by its ID
        $cartItem = CartItem::find($id);
    
        if ($cartItem) {
            // Delete the cart item
            $cartItem->delete();
    
            // If request expects JSON (AJAX), return JSON response
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Item removed from cart.']);
            }
    
            // Otherwise redirect back with success message
            return redirect()->route('user.cart.index')->with('success', 'Item removed from cart.');
        }
    
        // If cart item not found
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Item not found.'], 404);
        }
    
        return redirect()->route('user.cart.index')->with('error', 'Item not found.');
    }
    

}
