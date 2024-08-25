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
        DB::table('characteristics')->insert([
            'productID' => '1',
            'characteristicName' => 'Pantalla de 16 pulgadas',
        ]);

        DB::table('characteristics')->insert([
            'productID' => '2',
            'characteristicName' => 'Almacenamiento de 512 GB',
        ]);

        DB::table('characteristics')->insert([
            'productID' => '3',
            'characteristicName' => '1 x woofer de neodimio 3" 2 x tweeters de 0,8" Dolby Atmos Entrada/salida jack',
        ]);
    }
}
