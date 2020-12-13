<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('companies')->insert([
            'name' => 'Master',
            'thumbnail' => '1607780104.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('companies')->insert([
            'name' => 'Sonex',
            'thumbnail' => '1607773434.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('companies')->insert([
            'name' => 'Asia',
            'thumbnail' => '1607773461.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('companies')->insert([
            'name' => 'Supper Marbles',
            'thumbnail' => '1607778216.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('companies')->insert([
            'name' => 'Supper Asia',
            'thumbnail' => '1607778216.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('companies')->insert([
            'name' => 'Mumbai Tile ',
            'thumbnail' => '1607779943.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('companies')->insert([
            'name' => 'Local Star',
            'thumbnail' => '1607780104.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
