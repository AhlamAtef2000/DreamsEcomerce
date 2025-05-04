<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.products.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
   // In your controller method:
   public function show($id)
   {
       $product = Product::with(['category', 'sizes', 'colors', 'images', 'materials', 'reviews'])
           ->withoutTrashed()
           ->findOrFail($id);

           $hasDeliveredOrder = \DB::table('orders')
           ->join('order_items', 'orders.id', '=', 'order_items.order_id')
           ->where('orders.user_id', Auth::user()->id)
           ->where('orders.status', 'delivered')
           ->where('order_items.product_id', $product->id)
           ->exists();


       return view('frontend.product.show', compact('product','hasDeliveredOrder'));
   }






    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
