<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'player_id'=>'1',
            'name'=>'test1',
            'position'=>'1',
            'throw'=>'right',
            'hitting'=>'left',
            'created_at'=>'2021/01/01 11:11:11',
        ]);

        DB::table('players')->insert([
            'player_id'=>'2',
            'name'=>'test2',
            'position'=>'2',
            'throw'=>'right',
            'hitting'=>'left',
            'created_at'=>'2021/01/01 11:11:11',
        ]);

        DB::table('players')->insert([
            'player_id'=>'3',
            'name'=>'test3',
            'position'=>'3',
            'throw'=>'right',
            'hitting'=>'left',
            'created_at'=>'2021/01/01 11:11:11',
        ]);

    }
}
