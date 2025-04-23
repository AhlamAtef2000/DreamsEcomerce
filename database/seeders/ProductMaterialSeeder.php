<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Material;

class ProductMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Assuming you already have products and materials in your database.
        // You can associate a random material with each product.

        $products = Product::all();
        $materials = Material::all();

        foreach ($products as $product) {
            // Attach a random material to each product
            foreach ($materials as $material) {
                $product->materials()->attach($material->id);
            }
        }
    }
}
