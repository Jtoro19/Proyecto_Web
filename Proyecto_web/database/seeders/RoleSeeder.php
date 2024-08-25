<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'roleName' => 'administrador',
            'label' => 'admin',
            'description' => 'admin',
            'able'=> '1'
        ]);

        DB::table('roles')->insert([
            'id' => '2',
            'roleName' => 'comprador',
            'label' => 'buyer',
            'description' => 'buyer',
            'able'=> '1'
        ]);

        DB::table('roles')->insert([
            'id' => '3',
            'roleName' => 'vendedor',
            'label' => 'seller',
            'description' => 'seller',
            'able'=> '1'
        ]);
    }
}
