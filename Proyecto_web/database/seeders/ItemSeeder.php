<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Items asociados al recibo 1
        DB::table('items')->insert([
            'productID' => '1', // Lenovo x7
            'receiptID' => '1',
            'quantity' => '1',
        ]);

        DB::table('items')->insert([
            'productID' => '3', // Dell Inspiron 14
            'receiptID' => '1',
            'quantity' => '1',
        ]);

        // Items asociados al recibo 2
        DB::table('items')->insert([
            'productID' => '2', // HP Envy 15
            'receiptID' => '2',
            'quantity' => '1',
        ]);

        DB::table('items')->insert([
            'productID' => '6', // Samsung Galaxy S22
            'receiptID' => '2',
            'quantity' => '1',
        ]);

        // Items asociados al recibo 3
        DB::table('items')->insert([
            'productID' => '4', // Iphone 14
            'receiptID' => '3',
            'quantity' => '1',
        ]);

        // Nuevos recibos y sus items asociados

        // Recibo 4 - HP Envy 15
        DB::table('items')->insert([
            'productID' => '2', // HP Envy 15
            'receiptID' => '4',
            'quantity' => '1',
        ]);

        // Recibo 5 - Dell Inspiron 14
        DB::table('items')->insert([
            'productID' => '3', // Dell Inspiron 14
            'receiptID' => '5',
            'quantity' => '1',
        ]);

        // Recibo 6 - Samsung Galaxy S22
        DB::table('items')->insert([
            'productID' => '5', // Samsung Galaxy S22
            'receiptID' => '6',
            'quantity' => '1',
        ]);

        // Recibo 7 - Smartwatch Amazfit
        DB::table('items')->insert([
            'productID' => '11', // Smartwatch Amazfit
            'receiptID' => '7',
            'quantity' => '1',
        ]);

        // Recibo 8 - Sony WH-1000XM4
        DB::table('items')->insert([
            'productID' => '14', // Sony WH-1000XM4
            'receiptID' => '8',
            'quantity' => '1',
        ]);

        // Recibo 9 - GoPro Hero 9
        DB::table('items')->insert([
            'productID' => '8', // GoPro Hero 9
            'receiptID' => '9',
            'quantity' => '1',
        ]);

        // Recibo 10 - Samsung Galaxy Watch 4
        DB::table('items')->insert([
            'productID' => '15', // Samsung Galaxy Watch 4
            'receiptID' => '10',
            'quantity' => '1',
        ]);

        // Recibo 11 - Cámara Nikon Z50
        DB::table('items')->insert([
            'productID' => '16', // Cámara Nikon Z50
            'receiptID' => '11',
            'quantity' => '1',
        ]);

        // Recibo 12 - Auriculares Bose QC35 II
        DB::table('items')->insert([
            'productID' => '17', // Auriculares Bose QC35 II
            'receiptID' => '12',
            'quantity' => '1',
        ]);

        // Recibo 13 - Consola PS5
        DB::table('items')->insert([
            'productID' => '18', // Consola PS5
            'receiptID' => '12',
            'quantity' => '1',
        ]);
    }
}
