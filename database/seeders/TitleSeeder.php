<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('titles')->insert([
            'name' => 'Student',

        ]);
        DB::table('titles')->insert([
            'name' => 'Teacher',
            
        ]);
        DB::table('titles')->insert([
            'name' => 'Admin',
            
        ]);
    }
}
