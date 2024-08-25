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
            'productID' => '1',
            'categoryName' => 'Computadores',
        ]);

        DB::table('categories')->insert([
            'productID' => '2',
            'categoryName' => 'Celulares',
        ]);

        DB::table('categories')->insert([
            'productID' => '3',
            'categoryName' => 'Gadgets',
        ]);
    }
}
