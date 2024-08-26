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
        DB::table('addresses')->insert([
            'userID' => '3',
            'addressName' => 'Calle 123 # 45-67',
            'information' => 'Casa de dos pisos',
            'able' => '1'
        ]);
    }
}
