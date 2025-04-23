<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create(['name' => 'Sold']);
        Status::create(['name' => 'New']);
        Status::create(['name' => 'Available']);
        Status::create(['name' => 'Out of Stock']);
    }
}
