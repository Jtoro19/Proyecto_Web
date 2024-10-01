<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recibos existentes
        DB::table('receipts')->insert([
            'totalPrice' => '2000000',
            'date' => '2021-10-01',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '5400000',
            'date' => '2024-10-02',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '300000',
            'date' => '2020-10-03',
        ]);

        // Nuevos recibos
        DB::table('receipts')->insert([
            'totalPrice' => '3800000', // HP Envy 15
            'date' => '2024-10-04',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '2500000', // Dell Inspiron 14
            'date' => '2024-10-05',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '4600000', // Samsung Galaxy S22
            'date' => '2024-10-06',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '800000', // Smartwatch Amazfit
            'date' => '2024-10-07',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '1500000', // Sony WH-1000XM4
            'date' => '2024-10-08',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '2000000', // GoPro Hero 9
            'date' => '2024-10-09',
        ]);
        DB::table('receipts')->insert([
            'totalPrice' => '1200000', // Samsung Galaxy Watch 4
            'date' => '2024-10-10',
        ]);

        DB::table('receipts')->insert([
            'totalPrice' => '2500000', // Cámara Nikon Z50
            'date' => '2024-10-10',
        ]);
        
        DB::table('receipts')->insert([
            'totalPrice' => '1800000', // Auriculares Bose QC35 II
            'date' => '2024-10-11',
        ]);
        
        DB::table('receipts')->insert([
            'totalPrice' => '3200000', // Consola PS5
            'date' => '2024-10-12',
        ]);

    }
}

