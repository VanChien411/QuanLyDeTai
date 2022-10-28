<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         //
         DB::table('rank')->insert([
            'name' => 'Khoa',

        ]);
        DB::table('rank')->insert([
            'name' => 'Tinh',
            
        ]);
        DB::table('rank')->insert([
            'name' => 'Thanh Pho',
            
        ]);
    }
}
