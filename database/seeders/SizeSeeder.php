<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create(['name' => 'Small']);
        Size::create(['name' => 'Medium']);
        Size::create(['name' => 'Large']);
        Size::create(['name' => 'XL']);
        Size::create(['name' => 'XXL']);

    }
}
