<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Classic Shirt',
            'description' => 'Elegant and comfortable men\'s shirt.',
            'price' => 25.99,
            'stock' => 100,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Embroidered Dress',
            'description' => 'Stylish dress with beautiful embroidery.',
            'price' => 35.50,
            'stock' => 60,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Cartoon T-Shirt',
            'description' => 'Cute t-shirt with fun cartoon prints.',
            'price' => 12.99,
            'stock' => 80,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => null, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        // Additional products

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Casual Jeans',
            'description' => 'Comfortable and stylish jeans for men.',
            'price' => 40.99,
            'stock' => 150,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => null, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Summer Dress',
            'description' => 'Light and breezy summer dress.',
            'price' => 29.99,
            'stock' => 120,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => null, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Sports jeans',
            'description' => 'Comfortable and stylish jeans for kids  .',
            'price' => 19.99,
            'stock' => 200,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => null, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Leather Jacket',
            'description' => 'Stylish leather jacket for a trendy look.',
            'price' => 75.00,
            'stock' => 80,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Casual Top',
            'description' => 'Relaxed and stylish casual top for women.',
            'price' => 22.50,
            'stock' => 90,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => null, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Blouses',
            'description' => 'Fun blouses for kids.',
            'price' => 15.50,
            'stock' => 100,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men jeans',
            'description' => 'Comfortable jeans for men.',
            'price' => 50.00,
            'stock' => 130,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Skirt',
            'description' => 'Elegant and comfortable skirt suitable for all occasions.',
            'price' => 45.00,
            'stock' => 75,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Winter Coat',
            'description' => 'Warm winter coat for kids.',
            'price' => 40.00,
            'stock' => 150,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Polo Shirt',
            'description' => 'Comfortable and stylish polo shirt.',
            'price' => 29.99,
            'stock' => 110,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Jacket',
            'description' => 'Stylish and warm jacket perfect for the colder seasons.',
            'price' => 60.00,
            'stock' => 50,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Training Suit',
            'description' => 'Comfortable and breathable training suit for active kids.',
            'price' => 25.00,
            'stock' => 120,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Dress Pants',
            'description' => 'Classic dress pants for formal occasions.',
            'price' => 40.00,
            'stock' => 60,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Fabric Pants',
            'description' => 'Chic and breathable fabric pants designed for comfort and everyday elegance.',
            'price' => 28.00,
            'stock' => 100,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Hoodie',
            'description' => 'Cozy hoodie for kids.',
            'price' => 30.00,
            'stock' => 140,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Sweater',
            'description' => 'Warm and comfortable sweater for cold weather.',
            'price' => 35.00,
            'stock' => 90,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Blazer',
            'description' => 'Elegant and professional women\'s blazer perfect for formal occasions and office wear.',
            'price' => 55.00,
            'stock' => 80,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);


        // Additional products

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Beach Shorts',
            'description' => 'Stylish beach shorts for summer.',
            'price' => 22.99,
            'stock' => 200,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Winter Scarf',
            'description' => 'Warm and stylish scarf for winter.',
            'price' => 15.99,
            'stock' => 90,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Blouse',
            'description' => 'Soft and colorful blouses perfect for kids to wear daily.',
            'price' => 19.99,
            'stock' => 110,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men Chinos',
            'description' => 'Comfortable and stylish chinos for men.',
            'price' => 42.50,
            'stock' => 130,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women Wool Coat',
            'description' => 'Elegant wool coat for winter.',
            'price' => 99.00,
            'stock' => 60,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Tights',
            'description' => 'Comfortable tights for kids.',
            'price' => 10.00,
            'stock' => 140,
            'is_on_sale' => 1,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);


        Product::create([
            'category_id' => 1, // Assuming 1 is for Men
            'name' => 'Men\'s T-shirt',
            'description' => 'Comfortable and stylish t-shirt for casual wear.',
            'price' => 20.00,
            'stock' => 50,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men\'s Jeans',
            'description' => 'Durable and stylish jeans for everyday wear.',
            'price' => 35.00,
            'stock' => 70,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men\'s Jacket',
            'description' => 'Warm and cozy jacket for winter.',
            'price' => 50.00,
            'stock' => 30,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Blouse',
            'description' => 'Elegant and stylish blouse for office or evening wear.',
            'price' => 28.00,
            'stock' => 60,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Skirt',
            'description' => 'Trendy skirt for everyday use.',
            'price' => 22.00,
            'stock' => 80,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Dress',
            'description' => 'Chic and modern dress for special occasions.',
            'price' => 45.00,
            'stock' => 40,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids T-shirt',
            'description' => 'Comfortable and fun t-shirt for kids.',
            'price' => 15.00,
            'stock' => 100,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Sweatpants',
            'description' => 'Cozy and stylish sweatpants for active kids.',
            'price' => 18.00,
            'stock' => 90,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Hoodie',
            'description' => 'Warm and soft hoodie for kids.',
            'price' => 22.00,
            'stock' => 120,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men\'s Shorts',
            'description' => 'Perfect shorts for a casual day out.',
            'price' => 18.00,
            'stock' => 80,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men\'s Polo Shirt',
            'description' => 'Classic polo shirt for men, suitable for casual or semi-formal occasions.',
            'price' => 25.00,
            'stock' => 50,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Cardigan',
            'description' => 'Soft and stylish cardigan for layering.',
            'price' => 32.00,
            'stock' => 60,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Sweatshirt',
            'description' => 'Comfortable sweatshirt for everyday wear.',
            'price' => 30.00,
            'stock' => 45,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Leggings',
            'description' => 'Stretchy and breathable leggings for all-day comfort.',
            'price' => 20.00,
            'stock' => 80,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Pajamas',
            'description' => 'Cute and comfortable pajamas for kids.',
            'price' => 20.00,
            'stock' => 70,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Jeans',
            'description' => 'Durable and stylish jeans for kids.',
            'price' => 22.00,
            'stock' => 95,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 3, // Kids
            'name' => 'Kids Hoodie Set',
            'description' => 'Comfy hoodie set for the winter season.',
            'price' => 28.00,
            'stock' => 85,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 1, // Men
            'name' => 'Men\'s Tracksuit',
            'description' => 'Stylish and sporty tracksuit for men.',
            'price' => 50.00,
            'stock' => 40,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام
        ]);

        Product::create([
            'category_id' => 2, // Women
            'name' => 'Women\'s Coat',
            'description' => 'Warm and fashionable coat for women.',
            'price' => 60.00,
            'stock' => 30,
            'is_on_sale' => 0,
            'status_id' => 1,
            'discount_percentage' => 20, // خصم 20%
            'sale_end_date' => now()->addDays(7), // ينتهي بعد 7 أيام

        ]);

    }

}
