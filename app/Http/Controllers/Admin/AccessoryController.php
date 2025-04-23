<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accessory;
use App\Models\Product;

class AccessoryController extends Controller
{
    public function index()
    {
        $accessories = Accessory::withoutTrashed()->get(); // You can apply pagination if necessary
        return view('admin.accessories.index', compact('accessories'));
    }

    // Show the form for creating a new accessory
    public function create()
    {
        $products = Product::all(); // Fetching products for the product_id dropdown
        return view('admin.accessories.create', compact('products'));
    }

    // Store a newly created accessory in storage
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:brooch,embroidery,patch,badge',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        Accessory::create($request->all());

        return redirect()->route('admin.accessories.index')->with('success', 'Accessory created successfully');
    }

    // Display the specified accessory
    public function show(Accessory $accessory)
    {
        return view('admin.accessories.show', compact('accessory'));
    }

    // Show the form for editing the specified accessory
    public function edit(Accessory $accessory)
    {
        $products = Product::all(); // Fetching products for the product_id dropdown
        return view('admin.accessories.edit', compact('accessory', 'products'));
    }

    // Update the specified accessory in storage
    public function update(Request $request, Accessory $accessory)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:brooch,embroidery,patch,badge',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $accessory->update($request->all());

        return redirect()->route('admin.accessories.index')->with('success', 'Accessory updated successfully');
    }

    // Remove the specified accessory from storage
    public function destroy(Accessory $accessory)
    {
        $accessory->delete();

        return redirect()->route('admin.accessories.index')->with('success', 'Accessory deleted successfully');
    }

}
