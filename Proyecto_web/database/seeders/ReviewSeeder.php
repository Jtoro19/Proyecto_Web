<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'userID' => '3',
            'productID' => '1',
            'text' => 'Excelente producto',
            'stars' => '5',
        ]);

        DB::table('reviews')->insert([
            'userID' => '3',
            'productID' => '2',
            'text' => 'Muy buen producto',
            'stars' => '4',
        ]);

        DB::table('reviews')->insert([
            'userID' => '3',
            'productID' => '3',
            'text' => 'Buen producto',
            'stars' => '3',
        ]);
    }
}
