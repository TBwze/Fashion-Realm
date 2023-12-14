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
            'size' => 'small',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 1,
            'size' => 'medium',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 1,
            'size' => 'large',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 2,
            'size' => 'small',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 2,
            'size' => 'medium',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 2,
            'size' => 'large',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 3,
            'size' => 'small',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 3,
            'size' => 'medium',
            'quantity' => $faker->numberBetween(1, 20),
        ]);

        DB::table('product_sizes')->insert([
            'product_id' => 3,
            'size' => 'large',
            'quantity' => $faker->numberBetween(1, 20),
        ]);
    }
}
