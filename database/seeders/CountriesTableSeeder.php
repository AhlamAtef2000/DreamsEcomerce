<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'Amman', 'code' => 'AM'],
            ['name' => 'Irbid', 'code' => 'IR'],
            ['name' => 'Zarqa', 'code' => 'ZA'],
            ['name' => 'Aqaba', 'code' => 'AQ'],
            ['name' => 'Mafraq', 'code' => 'MA'],
            ['name' => 'Karak', 'code' => 'KA'],
            ['name' => 'Madaba', 'code' => 'MD'],
            ['name' => 'Tafilah', 'code' => 'TA'],
            ['name' => 'Ma’an', 'code' => 'MN'],
            ['name' => 'Balqa', 'code' => 'BA'],
            ['name' => 'Jarash', 'code' => 'JA'],
            ['name' => 'Ajloun', 'code' => 'AJ']
        ]);
        
        
    }
}
