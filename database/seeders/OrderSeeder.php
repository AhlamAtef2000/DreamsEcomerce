<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\ShippingMethod;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // Or create one if you have none
        $shippingMethod = ShippingMethod::first(); // get a valid shipping method

        Order::create([
            'user_id' => $user->id,
            'total_price' => 99.99,
            'status' => 'pending',
            'shipping_address' => '123 Main St, Springfield, IL',
            'country' => 'USA',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'address' => '123 Main St',
            'apartment' => 'Apt 5C',
            'town_city' => 'Springfield',
            'state_county' => 'IL',
            'postcode_zip' => '62704',
            'email' => 'john.doe@example.com',
            'phone' => '555-123-4567',
            'order_notes' => 'Please deliver after 5 PM.',
            'payment_method' => 'cod',
            'shipping_method_id' => $shippingMethod->id,

        ]);
    }
}
