<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ShopController extends Controller
{


    public function index(Request $request)
    {
    
    $perPage = $request->input('show', 24);
    $sortBy = $request->input('sort_by', 'default');
    $search = $request->input('search'); 

    $products = Product::with('images');

    if ($search) {
        $products = $products->where('name', 'like', '%' . $search . '%');
    }

    if ($sortBy == '1') {
        $products = $products->orderBy('created_at', 'desc');
    } elseif ($sortBy == '2') {
        $products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->selectRaw('products.id, products.name, products.description, products.price, products.category_id, AVG(reviews.rating) as avg_rating')
            ->groupBy('products.id', 'products.name', 'products.description', 'products.price', 'products.category_id')
            ->orderByDesc('avg_rating');
    } elseif ($sortBy == '3') {
        $products = $products->orderBy('created_at', 'desc');
    } elseif ($sortBy == '4') {
        $products = $products->orderBy('price', 'asc');
    } elseif ($sortBy == '5') {
        $products = $products->orderBy('price', 'desc');
    }

    $products = $products->paginate($perPage)->appends($request->query()); 

    return view('frontend.shop.index', compact('products'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
