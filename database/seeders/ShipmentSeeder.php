<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shipment;
use Faker\Factory as Faker;
use App\Models\Order;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 sample shipments
        for ($i = 0; $i < 10; $i++) {
            $order = Order::inRandomOrder()->first(); // Get a random order for each shipment

            Shipment::create([
                'order_id' => $order->id,  // Assign the order ID
                'shipment_status' => $faker->randomElement(['pending', 'shipped', 'delivered']),
                'tracking_number' => $faker->uuid,  // Generate a random tracking number
                'shipping_address' => $faker->address,
                'shipping_method' => $faker->randomElement(['standard', 'expedited']),
                'shipping_cost' => $faker->randomFloat(2, 5, 50),  // Random shipping cost between 5 and 50
                'shipped_at' => $faker->optional()->dateTimeThisYear,  // Optional, random shipping date
                'delivered_at' => $faker->optional()->dateTimeThisYear,  // Optional, random delivery date
            ]);
        }
    }
}
