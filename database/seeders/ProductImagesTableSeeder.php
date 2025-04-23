<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('product_images')->insert([
                [
                    'product_id' => 1,
                    'image_path' => 'product/men.jpg',
                ],
                [
                    'product_id' => 4,
                    'image_path' => 'product/jeans.jpg',
                ],

                [
                    'product_id' => 5,
                    'image_path' => 'product/dress.jpg',
                ],
                [
                    'product_id' => 2,
                    'image_path' => 'product/womn.jpg',
                ],
                [
                    'product_id' =>6,
                    'image_path' => 'product/kidsjeans.jpg',
                ],
                [
                    'product_id' => 7,
                    'image_path' => 'product/menja.jpg',
                ],
                [
                    'product_id' => 3,
                    'image_path' => 'product/kids.jpg',
                ],


                [
                    'product_id' => 8,
                    'image_path' => 'product/wommentop.jpg',
                ],

                [
                    'product_id' => 9,
                    'image_path' => 'product/1.jpg',
                ],
                [
                    'product_id' => 10,
                    'image_path' => 'product/3.jpg',
                ],
                [
                    'product_id' => 11,
                    'image_path' => 'product/4.jpg',
                ],
                [
                    'product_id' => 12,
                    'image_path' => 'product/2.jpg',
                ],

                [
                    'product_id' => 13,
                    'image_path' => 'product/men.jpg',
                ],




        [
                    'product_id' => 14,
                    'image_path' => 'product/womendress.jpg',
                ],



            ]);
        }
    }

