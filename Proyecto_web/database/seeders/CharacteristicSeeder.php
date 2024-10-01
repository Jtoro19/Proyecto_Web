<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Características para el producto 1
        DB::table('characteristics')->insert([
            'productID' => '1',
            'characteristicName' => 'Pantalla de 16 pulgadas',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '1',
            'characteristicName' => 'Procesador Intel i7',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '1',
            'characteristicName' => 'RAM de 16 GB',
        ]);

        // Características para el producto 2
        DB::table('characteristics')->insert([
            'productID' => '2',
            'characteristicName' => 'Almacenamiento de 512 GB',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '2',
            'characteristicName' => 'Procesador Intel i9',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '2',
            'characteristicName' => 'Teclado retroiluminado',
        ]);

        // Características para el producto 3
        DB::table('characteristics')->insert([
            'productID' => '3',
            'characteristicName' => '1 x woofer de neodimio 3" 2 x tweeters de 0,8" Dolby Atmos Entrada/salida jack',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '3',
            'characteristicName' => 'Bluetooth 5.0',
        ]);

        // Características para el producto 4
        DB::table('characteristics')->insert([
            'productID' => '4',
            'characteristicName' => 'Cámara de 12 MP',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '4',
            'characteristicName' => 'Pantalla Retina',
        ]);

        // Características para el producto 5
        DB::table('characteristics')->insert([
            'productID' => '5',
            'characteristicName' => 'Batería de 4500 mAh',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '5',
            'characteristicName' => 'Carga rápida de 50W',
        ]);

        // Características para el producto 6
        DB::table('characteristics')->insert([
            'productID' => '6',
            'characteristicName' => 'Pantalla AMOLED de 6.5 pulgadas',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '6',
            'characteristicName' => 'Procesador A15 Bionic',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '6',
            'characteristicName' => 'Almacenamiento de 128 GB',
        ]);

        // Sin características para el producto 7
        // DB::table('characteristics')->insert([
        //     'productID' => '7',
        //     'characteristicName' => '',
        // ]);

        // Características para el producto 8
        DB::table('characteristics')->insert([
            'productID' => '8',
            'characteristicName' => 'Audio estéreo con 8 altavoces',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '8',
            'characteristicName' => 'Conectividad Bluetooth y Wi-Fi',
        ]);

        // Características para el producto 9
        DB::table('characteristics')->insert([
            'productID' => '9',
            'characteristicName' => 'Almacenamiento de 128 GB',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '9',
            'characteristicName' => 'Conectividad Wi-Fi y Bluetooth',
        ]);

        // Sin características para el producto 10
        // DB::table('characteristics')->insert([
        //     'productID' => '10',
        //     'characteristicName' => '',
        // ]);

        // Características para el producto 11
        DB::table('characteristics')->insert([
            'productID' => '11',
            'characteristicName' => 'Batería de 5000 mAh',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '11',
            'characteristicName' => 'Pantalla de 6.8 pulgadas',
        ]);

        // Características para el producto 12
        DB::table('characteristics')->insert([
            'productID' => '12',
            'characteristicName' => 'Conectividad Bluetooth 5.0',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '12',
            'characteristicName' => 'Pantalla táctil',
        ]);

        // Características para el producto 13
        DB::table('characteristics')->insert([
            'productID' => '13',
            'characteristicName' => 'Cámara trasera de 108 MP',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '13',
            'characteristicName' => 'Grabación de video en 4K',
        ]);

        // Características para el producto 14
        DB::table('characteristics')->insert([
            'productID' => '14',
            'characteristicName' => 'Cámara de 48 MP',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '14',
            'characteristicName' => 'Pantalla AMOLED de 6.5 pulgadas',
        ]);

        // Características para el producto 15
        DB::table('characteristics')->insert([
            'productID' => '15',
            'characteristicName' => 'Pantalla de 6.4 pulgadas',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '15',
            'characteristicName' => 'Conectividad 5G',
        ]);

        // Características para el producto 16
        DB::table('characteristics')->insert([
            'productID' => '16',
            'characteristicName' => 'Sistema de sonido envolvente',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '16',
            'characteristicName' => 'Potencia de 100W',
        ]);

        // Características para el producto 17
        DB::table('characteristics')->insert([
            'productID' => '17',
            'characteristicName' => 'Cámara de seguridad 4K',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '17',
            'characteristicName' => 'Visión nocturna',
        ]);

        // Características para el producto 18
        DB::table('characteristics')->insert([
            'productID' => '18',
            'characteristicName' => 'Material resistente al agua',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '18',
            'characteristicName' => 'Hasta 10 horas de batería',
        ]);

        // Características para el producto 19
        DB::table('characteristics')->insert([
            'productID' => '19',
            'characteristicName' => 'Compatible con Android e iOS',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '19',
            'characteristicName' => 'Duración de batería de hasta 12 horas',
        ]);

        // Características para el producto 20
        DB::table('characteristics')->insert([
            'productID' => '20',
            'characteristicName' => 'Pantalla de 15.6 pulgadas',
        ]);
        DB::table('characteristics')->insert([
            'productID' => '20',
            'characteristicName' => 'Almacenamiento SSD de 1 TB',
        ]);
    }
}
