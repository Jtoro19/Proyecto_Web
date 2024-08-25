<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Juan Camilo Toro Palacio',
            'nickname' => 'jutorop',
            'email' => 'jutorop@unal.edu.co',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3227162267',
        ]);

        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Gabi',
            'nickname' => 'suissigkeiten',
            'email' => 'gabgarciaga@unal.edu.co',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3235078245',
        ]);

        DB::table('users')->insert([
            'roleID' => '2',
            'userName' => 'Juan Perez',
            'nickname' => 'jperez',
            'email' => 'juan.perez@example.com',
            'password' => '$2y$10$A1b2C3d4E5f6G7h8I9J0K.L7n8O9Pq2w3R4t5U6v7W8X9Y0Z1A2B3C',
            'phoneNumber' => '3001234567',
        ]);
        
        DB::table('users')->insert([
            'roleID' => '3',
            'userName' => 'Maria Rodriguez',
            'nickname' => 'mariarod',
            'email' => 'maria.rodriguez@example.com',
            'password' => '$2y$10$X1y2Z3A4B5C6D7E8F9G0H.I7j8K9L0M1n2O3P4Q5R6S7T8U9V0W1X2Y',
            'phoneNumber' => '3157654321',
        ]);
    }
}
