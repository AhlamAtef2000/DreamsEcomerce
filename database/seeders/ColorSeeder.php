<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create(['name' => 'Red']);
        Color::create(['name' => 'Green']);
        Color::create(['name' => 'Blue']);
        Color::create(['name' => 'Black']);
        Color::create(['name' => 'White']);

    }
}
