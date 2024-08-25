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
    }
}
