<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Lenovo x7',
            'price' => '2000000',
            'stock' => '100',
            'description' => 'Computador portatil',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Iphone 14',
            'price' => '5400000',
            'stock' => '130',
            'description' => 'Celular de ultima generacion',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Alexa',
            'price' => '300000',
            'stock' => '1200',
            'description' => 'Gadget de Amazon',
            'able'=> '1'
        ]);
    }
}
