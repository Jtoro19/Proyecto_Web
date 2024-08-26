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
            'categID' => '1',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Iphone 14',
            'price' => '5400000',
            'stock' => '130',
            'description' => 'Celular de ultima generacion',
            'categID' => '2',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Alexa',
            'price' => '300000',
            'stock' => '1200',
            'description' => 'Gadget de Amazon',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'HP Envy 15',
            'price' => '3800000',
            'stock' => '80',
            'description' => 'Laptop para profesionales',
            'categID' => '1',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Dell Inspiron 14',
            'price' => '2500000',
            'stock' => '150',
            'description' => 'Computador versátil para el día a día',
            'categID' => '1',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Samsung Galaxy S22',
            'price' => '4600000',
            'stock' => '95',
            'description' => 'Celular de alta gama',
            'categID' => '2',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Xiaomi Mi 12',
            'price' => '3700000',
            'stock' => '75',
            'description' => 'Celular con gran relación calidad-precio',
            'categID' => '2',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Google Home Mini',
            'price' => '250000',
            'stock' => '500',
            'description' => 'Asistente virtual inteligente',
            'categID' => '3',
            'able'=> '1'
        ]);
    
        DB::table('products')->insert([
            'userID' => '3',
            'productName' => 'Fitbit Versa 3',
            'price' => '800000',
            'stock' => '300',
            'description' => 'Reloj inteligente para fitness',
            'categID' => '3',
            'able'=> '1'
        ]);
    }
    
}
