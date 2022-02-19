<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'test1',
            'email' => 'test1@mail.com',
            'password' => Hash::make('aaaassss'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@mail.com',
            'password' => Hash::make('aaaassss'),
            'created_at' => '2021/01/01 11:11:11'
        ]);

        DB::table('users')->insert([
            'name' => 'test3',
            'email' => 'test3@mail.com',
            'password' => Hash::make('aaaassss'),
            'created_at' => '2021/01/01 11:11:11'
        ]);
    }
}
