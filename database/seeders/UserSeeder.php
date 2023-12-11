<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Darren',
            'email' => 'darren@test.com',
            'password' => 'test1234',
            'role' => 'admin',
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Sebas',
            'email' => 'sebas@test.com',
            'password' => 'test1234',
            'role' => 'member',
            'created_at' => now(),
        ]);
    }
}
