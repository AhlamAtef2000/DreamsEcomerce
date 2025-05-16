<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
   

    public function index(Request $request)
{
    // Default values for pagination and sorting
    $perPage = $request->input('show', 24); // Set the number of items per page
    $sortBy = $request->input('sort_by', 'default'); // Default sorting
    $search = $request->input('search'); // Search term from input
    $categoryId = $request->input('category_id'); // Category ID
    $productId = $request->input('product_id'); // Product ID
    $colorId = $request->input('color_id'); // Color ID
    $sizeId = $request->input('size_id'); // Size ID
    $materialId = $request->input('material_id'); // Material ID

    // Initialize the query for products with related images and reviews
    $products = Product::with(['images', 'reviews']);
    
    // Filtering by search term (name)
    if ($search) {
        $products->where('name', 'like', '%' . $search . '%');
    }

    // Filtering by category
    if ($categoryId) {
        $products->where('category_id', $categoryId);
    }

    // Filtering by specific product
    if ($productId) {
        $products->where('id', $productId);
    }
 

    // Filter by relationships (color)
    if ($colorId) {
        $products->whereHas('colors', fn($q) => $q->where('colors.id', $colorId));
    }

    // Filter by relationships (size)
    if ($sizeId) {
        $products->whereHas('sizes', fn($q) => $q->where('sizes.id', $sizeId));
    }

    // Filter by relationships (material)
    if ($materialId) {
        $products->whereHas('materials', fn($q) => $q->where('materials.id', $materialId));
    }

    // Sorting options
    switch ($sortBy) {
        case '1': // Sort by newest
            $products->orderBy('created_at', 'desc');
            break;
        case '2': // Sort by average rating

            $products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->select('products.id', 'products.category_id', 'products.name', 'products.price', 'products.created_at', 'products.updated_at', DB::raw('AVG(reviews.rating) as avg_rating'))
            ->groupBy('products.id', 'products.category_id', 'products.name', 'products.price', 'products.created_at', 'products.updated_at')
            ->orderByDesc('avg_rating');


            break;
            case '3': // Sort by Latest (created_at desc)
                $products->orderBy('created_at', 'desc');
                break;
        
            case '4': // Sort by Price (Low to High)
                $products->orderBy('price', 'asc');
                break;
        
            case '5': // Sort by Price (High to Low)
                $products->orderBy('price', 'desc');
                break;
        
            default:

                break;
    }

    // Paginate the products with the requested perPage value
    $products = $products->paginate($perPage)->appends($request->query());

    // Get all categories for the filter dropdown
    $categories = Category::all();

    // Return the filtered products and categories to the view
    return view('frontend.shop.index', compact('products', 'categories'));
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

 
public function getCategoryProducts($categoryId)
{
    $products = Product::where('category_id', $categoryId)->get(['id', 'name']);
    return response()->json(['products' => $products]);
}

public function getProductDetails($id)
{
    $product = Product::findOrFail($id);

    return response()->json([
        'colors' => $product->colors, // assuming it's an array or relation
        'sizes' => $product->sizes,
        'materials' => $product->materials,
    ]);
}

}
