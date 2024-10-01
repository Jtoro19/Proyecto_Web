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
            'able'=> '1',
            'created_at' => '2024-09-15 10:00:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Gabi',
            'nickname' => 'suissigkeiten',
            'email' => 'gabgarciaga@unal.edu.co',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3235078245',
            'able'=> '1',
            'created_at' => '2024-03-22 14:30:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '2',
            'userName' => 'Juan Perez',
            'nickname' => 'jperez',
            'email' => 'juan.perez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3001234567',
            'able'=> '1',
            'created_at' => '2023-05-11 09:15:00'
        ]);
        
        DB::table('users')->insert([
            'roleID' => '3',
            'userName' => 'Maria Rodriguez',
            'nickname' => 'mariarod',
            'email' => 'maria.rodriguez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3157654321',
            'able'=> '1',
            'created_at' => '2015-12-01 16:45:00'
        ]);

        // Nuevos registros
        DB::table('users')->insert([
            'roleID' => '2',
            'userName' => 'Carlos Mendoza',
            'nickname' => 'cmendoza',
            'email' => 'carlos.mendoza@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3109876543',
            'able'=> '1',
            'created_at' => '2024-10-18 12:00:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '3',
            'userName' => 'Sofia Martinez',
            'nickname' => 'sofimart',
            'email' => 'sofia.martinez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3008765432',
            'able'=> '1',
            'created_at' => '2021-03-09 08:30:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Andrés Torres',
            'nickname' => 'atorres',
            'email' => 'andres.torres@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3152345678',
            'able'=> '1',
            'created_at' => '2024-10-25 11:00:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '2',
            'userName' => 'Laura Gómez',
            'nickname' => 'lgomez',
            'email' => 'laura.gomez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3184567890',
            'able'=> '1',
            'created_at' => '2024-08-10 15:45:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '3',
            'userName' => 'David Salazar',
            'nickname' => 'dsalazar',
            'email' => 'david.salazar@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3172345678',
            'able'=> '1',
            'created_at' => '2021-02-28 13:30:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Valentina López',
            'nickname' => 'vlopez',
            'email' => 'valentina.lopez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3111234567',
            'able'=> '1',
            'created_at' => '2024-09-19 10:15:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '2',
            'userName' => 'Fernando Ruiz',
            'nickname' => 'fruiz',
            'email' => 'fernando.ruiz@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3129876543',
            'able'=> '1',
            'created_at' => '2024-06-12 14:00:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '3',
            'userName' => 'Isabella Castro',
            'nickname' => 'icastr',
            'email' => 'isabella.castro@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3191234567',
            'able'=> '1',
            'created_at' => '2024-10-03 11:50:00'
        ]);

        DB::table('users')->insert([
            'roleID' => '1',
            'userName' => 'Gabriel Jiménez',
            'nickname' => 'gjimenez',
            'email' => 'gabriel.jimenez@example.com',
            'password' => '$2y$10$owTTG4BzFN9j72DbWaNHiufKKS.7aVXzAwYg/HrzjF3Xed4ZvXGV6',
            'phoneNumber' => '3204567890',
            'able'=> '1',
            'created_at' => '2024-10-21 09:05:00'
        ]);
    }
}


