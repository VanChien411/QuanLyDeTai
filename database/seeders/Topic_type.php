<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Topic_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('topic_type')->insert([
            'name' => 'Nguyen cuu khoa hoc',

        ]);
        DB::table('topic_type')->insert([
            'name' => 'Do an',
            
        ]);
        DB::table('topic_type')->insert([
            'name' => 'Thuc tap tot nghiep',
            
        ]);
    }
}
