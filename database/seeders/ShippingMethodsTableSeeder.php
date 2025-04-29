<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usId = DB::table('countries')->where('code', 'US')->value('id');
        $egId = DB::table('countries')->where('code', 'EG')->value('id');
        

        DB::table('shipping_methods')->insert([
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $usId],
            ['name' => 'standard', 'price' => 15.00, 'country_id' => $usId],
            ['name' => 'standard', 'price' => 3.00, 'country_id' => $egId],
            ['name' => 'standard', 'price' => 10.00, 'country_id' => $egId],
        ]);
    }
}
