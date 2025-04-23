<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ColorSeeder::class,
            SizeSeeder::class,
            MaterialSeeder::class,
            StatusSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            CartItemSeeder::class,
            CountriesTableSeeder::class,
            ShippingMethodsTableSeeder::class,
            OrderSeeder::class,
            ShipmentSeeder::class,
            OrderItemSeeder::class,
            ReviewSeeder::class,
            FeatureSeeder::class,
            FavouriteSeeder::class,
            ProductImagesTableSeeder::class,
            ContactSeeder::class,
            ContactInfoSeeder::class,
            CouponsTableSeeder::class,
            ProductSizeSeeder::class,
            ProductColorSeeder::class,
            ProductMaterialSeeder::class,


        ]);
    }
}
