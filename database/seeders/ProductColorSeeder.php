<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Color;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Assuming you already have products and colors in your database.
        // You can associate a random color with each product.

        $products = Product::all();
        $colors = Color::all();

        foreach ($products as $product) {
            // Attach a random color to each product
            foreach ($colors as $color) {
                $product->colors()->attach($color->id);
            }
        }
    }
}
