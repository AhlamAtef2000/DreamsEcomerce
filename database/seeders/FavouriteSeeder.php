<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Favorite;

class FavouriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed some users (if not already seeded)
        $users = User::all();  // Assuming users are already in the DB

        // Seed some products (assuming products are already in the DB)
        $products = Product::all();  // Get all products from DB

        // If no products or users exist, stop the seeding
        if ($users->isEmpty() || $products->isEmpty()) {
            echo "No users or products found. Please seed users and products first.";
            return;
        }

        // Generate 5 random favourites for each user (or fewer if not enough products)
        foreach ($users as $user) {
            $favouriteProducts = $products->random(min(5, $products->count()));  // Use min to ensure no more than available products

            foreach ($favouriteProducts as $product) {
                Favorite::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                ]);
            }
        }

        echo "FavouriteSeeder has successfully added data to the favourites table.";
    }
}
