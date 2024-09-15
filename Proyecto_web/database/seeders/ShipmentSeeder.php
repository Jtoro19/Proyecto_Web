<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipments')->insert([
            'userID' => '3',
            'addressID' => '1',
            'receiptID' => '1',
            'departureDate' => '2021-10-01',
            'deliveryDate' => '2021-10-02',
            'status' => 'En camino',
            'cost' => '9.99',
            'recipientName' => 'Juan Perez',
        ]);

        DB::table('shipments')->insert([
            'userID' => '3',
            'addressID' => '1',
            'receiptID' => '2',
            'departureDate' => '2024-10-02',
            'deliveryDate' => '2024-10-03',
            'status' => 'En camino',
            'cost' => '9.99',
            'recipientName' => 'Juan Perez',
        ]);
        
        DB::table('shipments')->insert([
            'userID' => '3',
            'addressID' => '1',
            'receiptID' => '3',
            'departureDate' => '2020-10-03',
            'deliveryDate' => '2020-10-04',
            'status' => 'En camino',
            'cost' => '9.99',
            'recipientName' => 'Juan Perez',
        ]);
    }
}
