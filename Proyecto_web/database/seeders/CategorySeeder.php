<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categoryName' => 'Computadores',
            'able'=> '1'
        ]);

        DB::table('categories')->insert([
            'categoryName' => 'Celulares',
            'able'=> '1'
        ]);

        DB::table('categories')->insert([
            'categoryName' => 'Gadgets',
            'able'=> '1'
        ]);
    }
}
