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
        // Datos de ejemplo para los envíos
        DB::table('shipments')->insert([
            'userID' => 3, // ID de un usuario
            'addressID' => 1, // ID de una dirección
            'receiptID' => 1, // ID de recibo
            'departureDate' => '2021-10-01',
            'deliveryDate' => '2021-10-05',
            'status' => 'Entregado',
            'cost' => 50000,
            'recipientName' => 'Juan Pérez',
        ]);

        DB::table('shipments')->insert([
            'userID' => 5,
            'addressID' => 2,
            'receiptID' => 2,
            'departureDate' => '2024-10-02',
            'deliveryDate' => '2024-10-06',
            'status' => 'En tránsito',
            'cost' => 70000,
            'recipientName' => 'María Gómez',
        ]);

        DB::table('shipments')->insert([
            'userID' => 8,
            'addressID' => 3,
            'receiptID' => 3,
            'departureDate' => '2024-10-03',
            'deliveryDate' => '2024-10-07',
            'status' => 'Entregado',
            'cost' => 60000,
            'recipientName' => 'Carlos López',
        ]);

        DB::table('shipments')->insert([
            'userID' => 11,
            'addressID' => 4,
            'receiptID' => 4,
            'departureDate' => '2024-10-04',
            'deliveryDate' => '2024-10-08',
            'status' => 'Entregado',
            'cost' => 80000,
            'recipientName' => 'Ana Torres',
        ]);

        DB::table('shipments')->insert([
            'userID' => 3,
            'addressID' => 1,
            'receiptID' => 5,
            'departureDate' => '2024-10-05',
            'deliveryDate' => '2024-10-10',
            'status' => 'En tránsito',
            'cost' => 65000,
            'recipientName' => 'Juan Pérez',
        ]);

        DB::table('shipments')->insert([
            'userID' => 5,
            'addressID' => 2,
            'receiptID' => 6,
            'departureDate' => '2024-10-06',
            'deliveryDate' => '2024-10-11',
            'status' => 'Pendiente',
            'cost' => 75000,
            'recipientName' => 'María Gómez',
        ]);

        DB::table('shipments')->insert([
            'userID' => 8,
            'addressID' => 3,
            'receiptID' => 7,
            'departureDate' => '2024-10-07',
            'deliveryDate' => '2024-10-12',
            'status' => 'Entregado',
            'cost' => 55000,
            'recipientName' => 'Carlos López',
        ]);

        DB::table('shipments')->insert([
            'userID' => 11,
            'addressID' => 4,
            'receiptID' => 8,
            'departureDate' => '2024-10-08',
            'deliveryDate' => '2024-10-13',
            'status' => 'En tránsito',
            'cost' => 90000,
            'recipientName' => 'Ana Torres',
        ]);

        DB::table('shipments')->insert([
            'userID' => 3,
            'addressID' => 1,
            'receiptID' => 9, // ID del recibo para la cámara Nikon Z50
            'departureDate' => '2024-10-09',
            'deliveryDate' => '2024-10-14',
            'status' => 'Pendiente',
            'cost' => 65000,
            'recipientName' => 'Juan Pérez',
        ]);

        DB::table('shipments')->insert([
            'userID' => 5,
            'addressID' => 2,
            'receiptID' => 10, // ID del recibo para los auriculares Bose QC35 II
            'departureDate' => '2024-10-10',
            'deliveryDate' => '2024-10-15',
            'status' => 'Entregado',
            'cost' => 70000,
            'recipientName' => 'María Gómez',
        ]);

        DB::table('shipments')->insert([
            'userID' => 8,
            'addressID' => 3,
            'receiptID' => 11, // ID del recibo para la consola PS5
            'departureDate' => '2024-10-11',
            'deliveryDate' => '2024-10-16',
            'status' => 'En tránsito',
            'cost' => 80000,
            'recipientName' => 'Carlos López',
        ]);

        DB::table('shipments')->insert([
            'userID' => 11,
            'addressID' => 4,
            'receiptID' => 12, // ID del recibo para el Samsung Galaxy Watch 4
            'departureDate' => '2024-10-12',
            'deliveryDate' => '2024-10-17',
            'status' => 'Entregado',
            'cost' => 50000,
            'recipientName' => 'Ana Torres',
        ]);

        DB::table('shipments')->insert([
            'userID' => 3,
            'addressID' => 1,
            'receiptID' => 13, // ID del recibo para el GoPro Hero 9
            'departureDate' => '2024-10-13',
            'deliveryDate' => '2024-10-18',
            'status' => 'Pendiente',
            'cost' => 75000,
            'recipientName' => 'Juan Pérez',
        ]);
    }
}

