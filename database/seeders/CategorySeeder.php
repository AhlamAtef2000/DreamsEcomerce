<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        Category::create(['name' => 'Men', 'slug' => 'men', 'description' => 'Clothing for men']);
        Category::create(['name' => 'Women', 'slug' => 'women', 'description' => 'Clothing  for women']);
        Category::create(['name' => 'Kids', 'slug' => 'kids', 'description' => 'Clothing for kids']);
    }
}
