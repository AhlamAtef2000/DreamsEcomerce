<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;
class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            Feature::insert([
                [
                    'picture' => 'image1.jpg',
                    'title' => 'Low Shipping Rates',
                    'description' => 'We offer low shipping rates for all orders',
                ],
                [
                    'picture' => 'image2.jpg',
                    'title' => 'Support 24/7',
                    'description' => 'Support 24 hours a day',
                ],
                [
                    'picture' => 'image3.jpg',
                    'title' => 'Money Return',
                    'description' => 'Back guarantee under 5 days',
                ],
                [
                    'picture' => 'image5.jpg',
                    'title' => 'Discount Coupons',
                'description' => 'Get discount coupons for orders',

                ],
            ]);
    }
}
