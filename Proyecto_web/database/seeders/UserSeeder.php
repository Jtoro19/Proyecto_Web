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
            'able'=> '1'
        ]);

        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Gabi',
            'nickname' => 'suissigkeiten',
            'email' => 'gabgarciaga@unal.edu.co',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3235078245',
            'able'=> '1'
        ]);

        DB::table('users')->insert([
            'roleID' => '2',
            'userName' => 'Juan Perez',
            'nickname' => 'jperez',
            'email' => 'juan.perez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3001234567',
            'able'=> '1'
        ]);
        
        DB::table('users')->insert([
            'roleID' => '3',
            'userName' => 'Maria Rodriguez',
            'nickname' => 'mariarod',
            'email' => 'maria.rodriguez@example.com',
            'password' => '$$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3157654321',
            'able'=> '1'
        ]);
    }
}
