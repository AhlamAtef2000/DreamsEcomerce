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
                    'image_path' => 'product\Women Elegant Blouse.jpg',
                ],
                [
                    'product_id' => 4,
                    'image_path' => 'product\Women Leggings.jpg',
                ],

                [
                    'product_id' => 5,
                    'image_path' => 'product\kids pijamass.jpg',
                ],
                [
                    'product_id' => 2,
                    'image_path' => 'product\kidsshort.jpg',
                ],
                [
                    'product_id' =>6,
                    'image_path' => 'product\mensporttshirt.jpg',
                ],
                [
                    'product_id' => 7,
                    'image_path' => 'product\womn.jpg',
                ],
                [
                    'product_id' => 3,
                    'image_path' => 'product\Men Formal Shirt.jpg',
                ],


                [
                    'product_id' => 8,
                    'image_path' => 'product\Kids coats.jpg',
                ],

                [
                    'product_id' => 9,
                    'image_path' => 'product\Men Cargo Pants.jpg',
                ],
                [
                    'product_id' => 10,
                    'image_path' => 'product\Women Knit Sweater.jpg',
                ],
                [
                    'product_id' => 11,
                    'image_path' => 'product\Kids Raincoat.jpg',
                ],
                [
                    'product_id' => 12,
                    'image_path' => 'product\Men Wool Coat.jpg',
                ],

                [
                    'product_id' => 13,
                    'image_path' => 'product\Women Shorts.jpg',
                ],




        [
                    'product_id' => 14,
                    'image_path' => 'product\Kids Jumper.jpg',
                ],


                [
                    'product_id' => 15,
                    'image_path' => 'product\Men Swim Shorts.jpg',
                ],
                [
                    'product_id' => 16,
                    'image_path' => 'product\Women Tank Top.jpg',
                ],
                [
                    'product_id' => 17,
                    'image_path' => 'product\Kids tshirt.jpg',
                ],
                [
                    'product_id' => 18,
                    'image_path' => 'product\Men Hoodie.jpg',
                ],
                [
                    'product_id' => 19,
                    'image_path' => 'product\Women Crop Top.jpg',
                ],
                [
                    'product_id' => 20,
                    'image_path' => 'product\Kids Gloves.jpg',
                ],
                [
                    'product_id' => 21,
                    'image_path' => 'product\Men Classic Leather pants.jpg',
                ],

                [
                    'product_id' => 22,
                    'image_path' => 'product\Women Elegant Blouse.jpg',
                ],
                [
                    'product_id' => 23,
                    'image_path' => 'product\Kids Cartoon Hoodie.jpg',
                ],
                [
                    'product_id' => 24,
                    'image_path' => 'product\Kids Pajamas Set.jpg',
                ],
                [
                    'product_id' => 25,
                    'image_path' => 'product\A-Line Skirt.jpg',
                ],

                [
                    'product_id' => 26,
                    'image_path' => 'product\Women Denim Jacket.jpg',
                ],

                [
                    'product_id' => 27,
                    'image_path' => 'product\Men Slim Fit T-Shirt.jpg',
                ],

                [
                    'product_id' => 28,
                    'image_path' => 'product\kidsjeans.jpg',
                ],
                [
                    'product_id' => 29,
                    'image_path' => 'product\Sports Training Suitjpg.jpg',
                ],

                [
                    'product_id' => 30,
                    'image_path' => 'product\WomenSports Tracksuit.jpg',
                ],

                
                [
                    'product_id' => 31,
                    'image_path' => 'product\jeans.jpg',
                ],
                
                [
                    'product_id' => 32,
                    'image_path' => 'product\womenjeans.jpg',
                ],


            ]);
        }
    }

