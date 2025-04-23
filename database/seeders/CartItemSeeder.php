<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Material;
use App\Models\Color;
use App\Models\Size;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use the first cart and product for simplicity
        $cart = Cart::first();
        $product = Product::first();

        // Use the first size, color, and material for simplicity
        $size = Size::first(); // Ensure you have sizes available in your database
        $color = Color::first(); // Ensure you have colors available in your database
        $material = Material::first(); // Ensure you have materials available in your database

        // Create a CartItem with size, color, and material
        CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'size_id' => $size->id,         // Add size_id
            'color_id' => $color->id,       // Add color_id
            'material_id' => $material->id, // Add material_id
            'quantity' => 2,
            'price' => $product->price,
        ]);
    }
}
