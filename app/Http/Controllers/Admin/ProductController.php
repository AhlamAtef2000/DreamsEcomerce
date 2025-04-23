<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\ProductImage;
use App\Models\Material;
use App\Models\Status;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withoutTrashed()
            ->with(['category', 'sizes', 'colors', 'images','materials']) // eager load sizes, colors, and images
            ->get();


        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all(); // Fetch all sizes
        $colors = Color::all(); // Fetch all colors
        $materials  = Material::all(); // Fetch all colors
        $status = Status::all(); // Fetch all colors

        return view('admin.products.create', compact('categories', 'sizes', 'colors','materials','status'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'sizes' => 'required|array', // sizes should be an array
            'colors' => 'required|array', // colors should be an array
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // each image should be a valid image
            'discount_percentage' => 'nullable|numeric|min:0|max:100',
            'sale_end_date' => 'nullable|date|after:now',

        ]);



        // Create the product
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'is_on_sale' => $request->is_on_sale ? 1 : 0,
            'discount_percentage' => $request->discount_percentage,
            'sale_end_date' => $request->sale_end_date,

        ]);

        // Attach selected sizes and colors to the product
        $product->sizes()->attach($request->sizes);
        $product->colors()->attach($request->colors);
        $product->materials()->attach($request->materials);

        // Store multiple images
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $imagePath = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $sizes = Size::all(); // Fetch all sizes
        $colors = Color::all(); // Fetch all colors
        $materials  = Material::all(); // Fetch all colors
        $status = Status::all(); // Fetch all colors


        return view('admin.products.edit', compact('product', 'categories', 'sizes', 'colors','materials','status'));
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'sizes' => 'required|array',
            'colors' => 'required|array',
            'materials' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'discount_percentage' => 'nullable|numeric|min:0|max:100',
'            sale_end_date' => 'nullable|date|after:now',

        ]);

        // Update basic product info
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'is_on_sale' => $request->is_on_sale ? 1 : 0,
            'discount_percentage' => $request->discount_percentage,
            'sale_end_date' => $request->sale_end_date,

        ]);

        // Sync relationships
        $product->sizes()->sync($request->sizes);
        $product->colors()->sync($request->colors);
        $product->materials()->sync($request->materials);

        // Delete old images from storage and database
        if ($product->images) {
            foreach ($product->images as $image) {
                if (Storage::disk('public')->exists($image->image_path)) {
                    Storage::disk('public')->delete($image->image_path);
                }
                $image->delete();
            }
        }

        // Upload new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('products', 'public');
                $product->images()->create([
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy(Product $product)
    {
        // Delete product images before deleting the product itself
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product moved to trash.');
    }
}
