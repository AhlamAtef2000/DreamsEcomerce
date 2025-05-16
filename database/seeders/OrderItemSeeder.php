<?php

namespace Database\Seeders;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::first(); // Get the first order
        $product = Product::first(); // Get the first product

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'color_id' => 1,       
            'size_id' => 1,        
            'material_id' => 1, 
            'quantity' => 1,
            'price' => $product->price,
        ]);
        
    }
}
