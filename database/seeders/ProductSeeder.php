<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //

        DB::table('products')->insert([
            'name' => 'Oversized T-Shirt',
            'description' => $faker->paragraph(3, true),
            'image_front' => '/img/product_oversized_t_shirt',
            'image_back' => NULL,
            'price' => $faker->numberBetween(1000, 1000000),
            'category' => $faker->randomElement(['men', 'women']),
        ]);

        DB::table('products')->insert([
            'name' => 'Linen Wide Pants',
            'description' => $faker->paragraph(3, true),
            'image_front' => '/img/product_linen_pants',
            'image_back' => NULL,
            'price' => $faker->numberBetween(1000, 1000000),
            'category' => $faker->randomElement(['men', 'women']),
        ]);

        DB::table('products')->insert([
            'name' => 'Council Hoodie',
            'description' => $faker->paragraph(3, true),
            'image_front' => '/img/product_council_hoodie',
            'image_back' => NULL,
            'price' => $faker->numberBetween(1000, 1000000),
            'category' => $faker->randomElement(['men', 'women']),
        ]);
    }
}
