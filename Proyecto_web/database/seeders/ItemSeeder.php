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
        DB::table('items')->insert([
            'productID' => '1',
            'receiptID' => '1',
            'quantity' => '2',
        ]);

        DB::table('items')->insert([
            'productID' => '2',
            'receiptID' => '2',
            'quantity' => '1',
        ]);

        DB::table('items')->insert([
            'productID' => '3',
            'receiptID' => '3',
            'quantity' => '3',
        ]);
    }
}
