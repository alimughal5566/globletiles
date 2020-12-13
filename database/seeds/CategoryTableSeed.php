<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '2x2',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => '1x1',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => '4x4',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => '1x2',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => '2x3',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => '3x3',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => '3x2',
            'thumbnail' => '1607777841.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
