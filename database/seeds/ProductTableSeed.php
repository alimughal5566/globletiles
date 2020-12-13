<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('products')->insert([
            'name' => 'GT0001',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773434.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0002',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773461.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0003',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '16077778481.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0004',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607778216.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0005',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607779943.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0006',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607780104.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0007',
            'company_id' => 1,
            'category_id' => 1,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607777841.jpg',

            'created_at' => now(),
            'updated_at' => now()
        ]);
//        2nd
        DB::table('products')->insert([
            'name' => 'GT0001',
            'company_id' => 5,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773434.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0002',
            'company_id' => 5,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773461.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0003',
            'company_id' => 5,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '16077778481.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0004',
            'company_id' => 5,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607778216.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0005',
            'company_id' => 2,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607779943.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0006',
            'company_id' => 1,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607780104.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0007',
            'company_id' => 1,
            'category_id' => 5,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607777841.jpg',

            'created_at' => now(),
            'updated_at' => now()
        ]);
//        3rd

        DB::table('products')->insert([
            'name' => 'GT0001',
            'company_id' => 2,
            'category_id' => 2,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773434.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0002',
            'company_id' => 2,
            'category_id' => 2,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773461.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0003',
            'company_id' => 2,
            'category_id' => 2,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '16077778481.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0004',
            'company_id' => 2,
            'category_id' => 2,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607778216.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0005',
            'company_id' => 3,
            'category_id' => 3,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607779943.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0006',
            'company_id' => 3,
            'category_id' => 3,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607780104.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0007',
            'company_id' => 3,
            'category_id' => 3,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607777841.jpg',

            'created_at' => now(),
            'updated_at' => now()
        ]);
//        4th
        DB::table('products')->insert([
            'name' => 'GT0001',
            'company_id' => 3,
            'category_id' => 3,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773434.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0002',
            'company_id' => 3,
            'category_id' => 3,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607773461.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0003',
            'company_id' => 3,
            'category_id' => 3,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '16077778481.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0004',
            'company_id' => 4,
            'category_id' => 4,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607778216.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0005',
            'company_id' => 4,
            'category_id' => 4,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607779943.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0006',
            'company_id' => 4,
            'category_id' =>4,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607780104.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => 'GT0007',
            'company_id' => 4,
            'category_id' => 4,
            'description' => 'best tiles of the world. used local marble to make this strong and long lasting',
            'price' => 100,
            'thumbnail' => '1607777841.jpg',

            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

}
