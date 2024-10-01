<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Direcciones para el usuario Juan Camilo Toro Palacio
        DB::table('addresses')->insert([
            'userID' => 1,
            'addressName' => 'Calle 10 # 20-30',
            'information' => 'Apartamento 101',
            'able' => '1'
        ]);
        
        DB::table('addresses')->insert([
            'userID' => 1,
            'addressName' => 'Avenida 5 # 80-15',
            'information' => 'Casa en esquina',
            'able' => '1'
        ]);

        // Direcciones para el usuario Gabi
        DB::table('addresses')->insert([
            'userID' => 2,
            'addressName' => 'Calle 50 # 30-25',
            'information' => 'Casa familiar',
            'able' => '1'
        ]);

        // Direcciones para el usuario Juan Perez
        DB::table('addresses')->insert([
            'userID' => 3,
            'addressName' => 'Calle 123 # 45-67',
            'information' => 'Casa de dos pisos',
            'able' => '1'
        ]);

        // Direcciones para el usuario Maria Rodriguez
        DB::table('addresses')->insert([
            'userID' => 4,
            'addressName' => 'Calle 22 # 15-50',
            'information' => 'Apartamento 305',
            'able' => '1'
        ]);

        // Direcciones para el usuario Carlos Mendoza
        DB::table('addresses')->insert([
            'userID' => 5,
            'addressName' => 'Avenida 15 # 70-80',
            'information' => 'Casa con jardín',
            'able' => '1'
        ]);

        DB::table('addresses')->insert([
            'userID' => 5,
            'addressName' => 'Calle 88 # 25-55',
            'information' => 'Oficina en segundo piso',
            'able' => '1'
        ]);

        // Direcciones para el usuario Sofia Martinez
        DB::table('addresses')->insert([
            'userID' => 6,
            'addressName' => 'Carrera 7 # 30-10',
            'information' => 'Casa con balcón',
            'able' => '1'
        ]);

        // Direcciones para el usuario Andrés Torres
        DB::table('addresses')->insert([
            'userID' => 7,
            'addressName' => 'Calle 90 # 50-40',
            'information' => 'Apartamento 205',
            'able' => '1'
        ]);

        // Direcciones para el usuario Laura Gómez
        DB::table('addresses')->insert([
            'userID' => 8,
            'addressName' => 'Avenida 45 # 10-20',
            'information' => 'Casa en condominio',
            'able' => '1'
        ]);

        DB::table('addresses')->insert([
            'userID' => 8,
            'addressName' => 'Calle 18 # 40-50',
            'information' => 'Casa de un piso',
            'able' => '1'
        ]);

        // Direcciones para el usuario David Salazar
        DB::table('addresses')->insert([
            'userID' => 9,
            'addressName' => 'Calle 40 # 60-70',
            'information' => 'Casa en zona residencial',
            'able' => '1'
        ]);

        // Direcciones para el usuario Valentina López
        DB::table('addresses')->insert([
            'userID' => 10,
            'addressName' => 'Carrera 30 # 80-90',
            'information' => 'Apartamento en edificio',
            'able' => '1'
        ]);

        // Direcciones para el usuario Fernando Ruiz
        DB::table('addresses')->insert([
            'userID' => 11,
            'addressName' => 'Calle 77 # 33-11',
            'information' => 'Casa antigua',
            'able' => '1'
        ]);

        // Direcciones para el usuario Isabella Castro
        DB::table('addresses')->insert([
            'userID' => 12,
            'addressName' => 'Avenida 60 # 20-45',
            'information' => 'Casa moderna',
            'able' => '1'
        ]);
    }
}

