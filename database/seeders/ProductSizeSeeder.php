<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        //
        DB::table('product_sizes')->insert([
            'product_id' => 1,
            'size_id' => 1,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 1,
            'size_id' => 2,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 1,
            'size_id' => 3,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 2,
            'size_id' => 1,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 2,
            'size_id' => 2,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 2,
            'size_id' => 3,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 3,
            'size_id' => 1,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 3,
            'size_id' => 2,
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 3,
            'size_id' => 3,
            'quantity' => $faker->numberBetween(1, 20),
        ]);
    }
}
