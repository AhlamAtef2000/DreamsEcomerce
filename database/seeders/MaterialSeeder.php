<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create(['name' => 'Cotton']);
        Material::create(['name' => 'Polyester']);
        Material::create(['name' => 'Leather']);
        Material::create(['name' => 'Wool']);
        Material::create(['name' => 'Silk']);
    }
}
