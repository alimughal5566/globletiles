<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
//            'id' => 1,
            'f_name' => 'Main',
            'l_name' => 'dash',
            'type' => 'admin',
            'city' => 'city',
            'age' => 'age',
            'address' => 'address',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
//            'id' => 1,
            'f_name' => 'Main',
            'l_name' => 'dash',
            'type' => 'staff',
            'city' => 'city',
            'age' => 'age',
            'address' => 'address',
            'email' => 'staff@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
//            'id' => 1,
            'f_name' => 'Main',
            'l_name' => 'dash',
            'type' => 'user',
            'city' => 'city',
            'age' => 'age',
            'address' => 'address',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
