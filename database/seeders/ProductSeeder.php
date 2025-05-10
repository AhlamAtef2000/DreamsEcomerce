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
            'price' => 18.00,
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
            'stock' => 10,
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
            'price' => 15.00,
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
            'price' => 20.00,
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
            'price' => 10.00,
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
            'price' => 18.00,
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
            'stock' => 15,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20,
            'sale_end_date' => now()->addDays(7),
            'created_at' => Carbon::now()->subDays(10),
        ]);
        
        Product::create([
            'category_id' => 3,
            'name' => 'Kids coats', 
            'description' => 'Comfortable and breathable coats.',
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
            'price' => 19.00,
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
            'name' => 'Kids tshirt',
            'description' => 'Protective tshirt.',
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
            'stock' => 10,
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
    'name' => 'Men Classic Leather pants',
    'description' => 'Durable and stylish leather pants for men.',
    'price' => 19.99,
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
    'price' => 18.00,
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
    'price' => 15.50,
    'stock' => 60,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(4),
    'created_at' => Carbon::now()->subDays(3),
]);

Product::create([
    'category_id' => 3,
    'name' => 'kids pijamass',
    'description' => 'Track your steps, heart rate, and sleep easily.',
    'price' => 19.99,
    'stock' => 120,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(6),
    'created_at' => Carbon::now()->subDays(4),
]);

Product::create([
    'category_id' => 2, 
    'name' => 'A-Line Skirt', 
    'description' => 'Elegant A-line skirt, perfect for any occasion.', 
    'price' => 15.00, 
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
    'price' => 12.00,
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
    'name' => 'Kids Jeans',
    'description' => 'Stylish and comfortable jeans designed for kids.',
    'price' => 40.00, 
    'stock' => 75,
    'is_on_sale' => 1, 
    'status_id' => 1, 
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(4),
    'created_at' => Carbon::now()->subDays(1), 
]);

Product::create([
    'category_id' => 1,
    'name' => 'Sports Training Suit', 
    'description' => 'High-performance training suit designed for athletes.', 
    'price' => 29.00, 
    'stock' => 15,
    'is_on_sale' => 1, 
    'status_id' => 1, 
    'discount_percentage' => null, 
    'sale_end_date' => now()->addDays(6), 
    'created_at' => Carbon::now()->subDays(2), 
]);
Product::create([
    'category_id' => 2, 
    'name' => 'Women\'s Sports Tracksuit', 
    'description' => 'Stylish and comfortable sports tracksuit designed for women.', 
    'price' => 18.99, 
    'stock' => 60, 
    'is_on_sale' => 1,
    'status_id' => 1, 
    'discount_percentage' => null,
    'sale_end_date' => now()->addDays(3), 
    'created_at' => Carbon::now()->subDays(1),

]);


// بنطلون رجالي
Product::create([
    'category_id' =>1,
    'name' => 'Men’s Slim Fit Jeans',
    'description' => 'Stylish slim fit jeans for men.',
    'price' => 15.00,
    'stock' => 150,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => 10, // إذا كان هناك خصم
    'sale_end_date' => now()->addDays(7),
    'created_at' => Carbon::now()->subDays(2),
]);

// بنطلون نسائي
Product::create([
    'category_id' => 2, 
    'name' => 'Women’s jeans pants',
    'description' => 'Elegant high waist trousers for women.',
    'price' => 10.00,
    'stock' => 120,
    'is_on_sale' => 1,
    'status_id' => 1,
    'discount_percentage' => 15, // إذا كان هناك خصم
    'sale_end_date' => now()->addDays(10),
    'created_at' => Carbon::now()->subDays(1),
]);

    }

}
