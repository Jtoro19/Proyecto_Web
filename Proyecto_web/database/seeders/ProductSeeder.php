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
        // Productos asignados al usuario 4
        DB::table('products')->insert([
            'userID' => '4',
            'productName' => 'Lenovo x7',
            'price' => '2000000',
            'stock' => '100',
            'description' => 'Computador portátil',
            'categID' => '1',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '4',
            'productName' => 'HP Envy 15',
            'price' => '3800000',
            'stock' => '80',
            'description' => 'Laptop para profesionales',
            'categID' => '1',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '4',
            'productName' => 'Dell Inspiron 14',
            'price' => '2500000',
            'stock' => '150',
            'description' => 'Computador versátil para el día a día',
            'categID' => '1',
            'able'=> '1'
        ]);

        // Productos asignados al usuario 6
        DB::table('products')->insert([
            'userID' => '6',
            'productName' => 'Iphone 14',
            'price' => '5400000',
            'stock' => '130',
            'description' => 'Celular de última generación',
            'categID' => '2',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '6',
            'productName' => 'Samsung Galaxy S22',
            'price' => '4600000',
            'stock' => '95',
            'description' => 'Celular de alta gama',
            'categID' => '2',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '6',
            'productName' => 'Xiaomi Mi 12',
            'price' => '3700000',
            'stock' => '75',
            'description' => 'Celular con gran relación calidad-precio',
            'categID' => '2',
            'able'=> '1'
        ]);

        // Productos asignados al usuario 9
        DB::table('products')->insert([
            'userID' => '9',
            'productName' => 'Alexa',
            'price' => '300000',
            'stock' => '1200',
            'description' => 'Gadget de Amazon',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '9',
            'productName' => 'Google Home Mini',
            'price' => '250000',
            'stock' => '500',
            'description' => 'Asistente virtual inteligente',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '9',
            'productName' => 'Fitbit Versa 3',
            'price' => '800000',
            'stock' => '300',
            'description' => 'Reloj inteligente para fitness',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '9',
            'productName' => 'GoPro Hero 9',
            'price' => '2000000',
            'stock' => '70',
            'description' => 'Cámara de acción resistente',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '9',
            'productName' => 'DJI Mini 2',
            'price' => '2500000',
            'stock' => '50',
            'description' => 'Dron compacto con cámara 4K',
            'categID' => '3',
            'able'=> '1'
        ]);

        // Productos asignados al usuario 12
        DB::table('products')->insert([
            'userID' => '12',
            'productName' => 'Smartwatch Amazfit',
            'price' => '800000',
            'stock' => '300',
            'description' => 'Reloj inteligente con múltiples funciones',
            'categID' => '3',
            'able'=> '1'
        ]);

        // Completar los productos restantes con más asignaciones
        DB::table('products')->insert([
            'userID' => '4',
            'productName' => 'MSI Gaming Laptop',
            'price' => '4000000',
            'stock' => '60',
            'description' => 'Laptop para juegos',
            'categID' => '1',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '4',
            'productName' => 'MacBook Pro 16',
            'price' => '6000000',
            'stock' => '30',
            'description' => 'Laptop premium de Apple',
            'categID' => '1',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '6',
            'productName' => 'OnePlus 9',
            'price' => '3500000',
            'stock' => '100',
            'description' => 'Celular de alta gama',
            'categID' => '2',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '6',
            'productName' => 'Huawei P40 Pro',
            'price' => '4500000',
            'stock' => '80',
            'description' => 'Celular con gran rendimiento',
            'categID' => '2',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '6',
            'productName' => 'Sony WH-1000XM4',
            'price' => '1500000',
            'stock' => '90',
            'description' => 'Auriculares con cancelación de ruido',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '12',
            'productName' => 'Raspberry Pi 4',
            'price' => '700000',
            'stock' => '200',
            'description' => 'Mini ordenador para proyectos',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '12',
            'productName' => 'Echo Dot',
            'price' => '150000',
            'stock' => '400',
            'description' => 'Altavoz inteligente',
            'categID' => '3',
            'able'=> '1'
        ]);

        DB::table('products')->insert([
            'userID' => '12',
            'productName' => 'Samsung Galaxy Watch 4',
            'price' => '1200000',
            'stock' => '150',
            'description' => 'Reloj inteligente con monitoreo de salud',
            'categID' => '3',
            'able'=> '1'
        ]);
    }
}

