<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      

        // 20 more products with different created_at days
        Product::create([
            'category_id' => 2,
            'name' => 'Women Elegant Blouse',
            'description' => 'Soft fabric blouse perfect for formal occasions.',
            'price' => 38.00,
            'stock' => 80,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 10,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(1),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Denim Shorts',
            'description' => 'Light and durable shorts for active kids.',
            'price' => 18.00,
            'stock' => 100,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 15,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(2),
        ]);
        
        Product::create([
            'category_id' => 1,
            'name' => 'Men Sport T-shirt',
            'description' => 'Breathable t-shirt for workout or casual wear.',
            'price' => 25.00,
            'stock' => 90,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 25,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(3),
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'Women Leggings',
            'description' => 'Stretchy and comfortable leggings.',
            'price' => 22.00,
            'stock' => 110,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 10,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(4),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Pajamas Set',
            'description' => 'Comfortable sleepwear for kids.',
            'price' => 21.00,
            'stock' => 95,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 15,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(5),
        ]);
        
        Product::create([
            'category_id' => 1,
            'name' => 'Men Formal Shirt',
            'description' => 'Classic shirt for office or business.',
            'price' => 45.00,
            'stock' => 85,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 10,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(6),
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'Women Maxi Dress',
            'description' => 'Elegant dress suitable for events and evenings.',
            'price' => 60.00,
            'stock' => 70,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 0,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(7),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Raincoat',
            'description' => 'Waterproof raincoat with hood.',
            'price' => 30.00,
            'stock' => 50,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 10,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(8),
        ]);
        
        Product::create([
            'category_id' => 1,
            'name' => 'Men Cargo Pants',
            'description' => 'Versatile and durable cargo pants.',
            'price' => 48.00,
            'stock' => 100,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 15,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(9),
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'Women Knit Sweater',
            'description' => 'Cozy knit sweater perfect for winter.',
            'price' => 42.00,
            'stock' => 65,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(10),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Sandals',
            'description' => 'Comfortable and breathable sandals.',
            'price' => 17.99,
            'stock' => 130,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 0,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(11),
        ]);
        
        Product::create([
            'category_id' => 1,
            'name' => 'Men Wool Coat',
            'description' => 'Stylish wool coat for cold weather.',
            'price' => 89.00,
            'stock' => 55,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 10,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(12),
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'Women Shorts',
            'description' => 'Comfortable summer shorts.',
            'price' => 24.99,
            'stock' => 100,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 5,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(13),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Jumper',
            'description' => 'Colorful jumper for toddlers.',
            'price' => 26.00,
            'stock' => 75,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 15,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(14),
        ]);
        
        Product::create([
            'category_id' => 1,
            'name' => 'Men Swim Shorts',
            'description' => 'Perfect for beach or pool.',
            'price' => 20.00,
            'stock' => 90,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 0,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(15),
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'Women Tank Top',
            'description' => 'Light and stylish for hot days.',
            'price' => 18.00,
            'stock' => 120,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 15,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(16),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Hat',
            'description' => 'Protective sun hat.',
            'price' => 9.99,
            'stock' => 200,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 0,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(17),
        ]);
        
        Product::create([
            'category_id' => 1,
            'name' => 'Men Hoodie',
            'description' => 'Warm hoodie for casual wear.',
            'price' => 32.00,
            'stock' => 100,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(18),
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'Women Crop Top',
            'description' => 'Trendy crop top for summer.',
            'price' => 19.00,
            'stock' => 110,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 10,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(19),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids Gloves',
            'description' => 'Warm gloves for winter.',
            'price' => 12.00,
            'stock' => 140,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 0,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(20),
        ]);

Product::create([
    'category_id' => 1,
    'name' => 'Men Classic Leather Shoes',
    'description' => 'Durable and stylish leather shoes for men.',
    'price' => 89.99,
    'stock' => 50,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(5),
    'created_at' => Carbon::now()->subDays(2),
]);

Product::create([
    'category_id' => 2,
    'name' => 'Women Elegant Blouse',
    'description' => 'Soft fabric blouse perfect for formal occasions.',
    'price' => 38.00,
    'stock' => 80,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(7),
    'created_at' => Carbon::now()->subDays(1),
]);

Product::create([
    'category_id' => 3,
    'name' => 'Kids Cartoon Hoodie',
    'description' => 'Warm and fun hoodie with cartoon prints.',
    'price' => 25.50,
    'stock' => 60,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(4),
    'created_at' => Carbon::now()->subDays(3),
]);

Product::create([
    'category_id' => 3,
    'name' => 'Smart Fitness Watch',
    'description' => 'Track your steps, heart rate, and sleep easily.',
    'price' => 59.99,
    'stock' => 120,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(6),
    'created_at' => Carbon::now()->subDays(4),
]);

Product::create([
    'category_id' => 2,
    'name' => 'Wireless Bluetooth Earbuds',
    'description' => 'Crystal clear sound with noise isolation.',
    'price' => 45.00,
    'stock' => 90,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(3),
    'created_at' => Carbon::now()->subDays(5),
]);

Product::create([
    'category_id' => 2,
    'name' => 'Women Denim Jacket',
    'description' => 'Trendy denim jacket perfect for casual wear.',
    'price' => 72.00,
    'stock' => 40,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(2),
    'created_at' => Carbon::now()->subDays(2),
]);

Product::create([
    'category_id' => 1,
    'name' => 'Men Slim Fit T-Shirt',
    'description' => 'Comfortable slim fit cotton t-shirt.',
    'price' => 22.00,
    'stock' => 100,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(5),
    'created_at' => Carbon::now()->subDays(3),
]);

Product::create([
    'category_id' => 3,
    'name' => 'Kids Sneakers',
    'description' => 'Comfortable sneakers designed for active kids.',
    'price' => 30.00,
    'stock' => 75,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(4),
    'created_at' => Carbon::now()->subDays(1),
]);

Product::create([
    'category_id' => 3,
    'name' => 'Noise Cancelling Headphones',
    'description' => 'Immersive audio experience with noise cancellation.',
    'price' => 110.00,
    'stock' => 35,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(6),
    'created_at' => Carbon::now()->subDays(2),
]);

Product::create([
    'category_id' => 2,
    'name' => 'Portable Laptop Stand',
    'description' => 'Ergonomic and adjustable laptop stand.',
    'price' => 28.99,
    'stock' => 60,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(3),
    'created_at' => Carbon::now()->subDays(1),
]);

    }

}
