<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;
class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Sample Coupons Data
         $coupons = [
            [
                'code' => 'DISCOUNT10',
                'discount_type' => 'fixed',
                'amount' => 10.00,
                'valid_from' => '2025-04-01',
                'valid_until' => '2025-04-30',
            ],
            [
                'code' => 'SUMMER20',
                'discount_type' => 'percentage',
                'amount' => 20.00,
                'valid_from' => '2025-06-01',
                'valid_until' => '2025-06-30',
            ],
            [
                'code' => 'BLACKFRIDAY50',
                'discount_type' => 'percentage',
                'amount' => 50.00,
                'valid_from' => '2025-11-25',
                'valid_until' => '2025-11-30',
            ],
            [
                'code' => 'WELCOME15',
                'discount_type' => 'fixed',
                'amount' => 15.00,
                'valid_from' => '2025-01-01',
                'valid_until' => '2025-12-31',
            ],
            [
                'code' => 'WINTER25',
                'discount_type' => 'percentage',
                'amount' => 25.00,
                'valid_from' => '2025-12-01',
                'valid_until' => '2025-12-31',
            ],
        ];


        // Insert coupons into the database
        foreach ($coupons as $coupon) {
            Coupon::create($coupon);
        }
    }
}
