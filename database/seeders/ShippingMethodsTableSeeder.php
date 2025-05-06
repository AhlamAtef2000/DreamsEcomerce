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
        // Get the country IDs based on the country code
        $amId = DB::table('countries')->where('code', 'AM')->value('id');
        $irId = DB::table('countries')->where('code', 'IR')->value('id');
        $zaId = DB::table('countries')->where('code', 'ZA')->value('id');
        $aqId = DB::table('countries')->where('code', 'AQ')->value('id');
        $maId = DB::table('countries')->where('code', 'MA')->value('id');
        $kaId = DB::table('countries')->where('code', 'KA')->value('id');
        $mdId = DB::table('countries')->where('code', 'MD')->value('id');
        $taId = DB::table('countries')->where('code', 'TA')->value('id');
        $mnId = DB::table('countries')->where('code', 'MN')->value('id');
        $baId = DB::table('countries')->where('code', 'BA')->value('id');
        $jaId = DB::table('countries')->where('code', 'JA')->value('id');
        $ajId = DB::table('countries')->where('code', 'AJ')->value('id');
        
        // Insert shipping methods for each country
        DB::table('shipping_methods')->insert([
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $amId],
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $irId],
            ['name' => 'standard', 'price' => 3.00, 'country_id' => $zaId],
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $aqId],
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $maId],
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $kaId],
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $mdId],
            ['name' => 'standard', 'price' => 5.00, 'country_id' => $taId],
            ['name' => 'standard', 'price' => 4.00, 'country_id' => $mnId],
            ['name' => 'standard', 'price' => 3.50, 'country_id' => $baId],
            ['name' => 'standard', 'price' => 3.50, 'country_id' => $jaId],
            ['name' => 'express', 'price' => 5.00, 'country_id' => $ajId]
        ]);
    }
}
