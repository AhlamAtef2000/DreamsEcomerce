<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Size;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Assuming you already have products and sizes in your database.
        // You can associate a random size with each product.

        $products = Product::all();
        $sizes = Size::all();

        foreach ($products as $product) {
            // Attach a random size to each product
            foreach ($sizes as $size) {
                $product->sizes()->attach($size->id);
            }
        }
    }
}
