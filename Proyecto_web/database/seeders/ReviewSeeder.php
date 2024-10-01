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

        DB::table('reviews')->insert([
            'userID' => '5',
            'productID' => '4',
            'text' => 'Producto regular',
            'stars' => '3',
        ]);

        DB::table('reviews')->insert([
            'userID' => '5',
            'productID' => '5',
            'text' => 'No cumplió mis expectativas',
            'stars' => '2',
        ]);

        DB::table('reviews')->insert([
            'userID' => '8',
            'productID' => '7',
            'text' => 'Me encantó este producto',
            'stars' => '5',
        ]);

        DB::table('reviews')->insert([
            'userID' => '8',
            'productID' => '7',
            'text' => 'Excelente relación calidad-precio',
            'stars' => '4',
        ]);

        DB::table('reviews')->insert([
            'userID' => '8',
            'productID' => '8',
            'text' => 'Muy buen rendimiento',
            'stars' => '4',
        ]);

        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '9',
            'text' => 'Mal servicio al cliente',
            'stars' => '1',
        ]);

        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '10',
            'text' => 'Recomiendo este producto',
            'stars' => '5',
        ]);

        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '11',
            'text' => 'No lo volvería a comprar',
            'stars' => '2',
        ]);

        DB::table('reviews')->insert([
            'userID' => '3',
            'productID' => '12',
            'text' => 'Funciona muy bien',
            'stars' => '4',
        ]);

        DB::table('reviews')->insert([
            'userID' => '5',
            'productID' => '12',
            'text' => 'Mejor de lo que esperaba',
            'stars' => '5',
        ]);

        DB::table('reviews')->insert([
            'userID' => '8',
            'productID' => '14',
            'text' => 'Satisfecho con la compra',
            'stars' => '4',
        ]);

        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '15',
            'text' => 'Regular, esperaba más',
            'stars' => '3',
        ]);

        DB::table('reviews')->insert([
            'userID' => '3',
            'productID' => '15',
            'text' => 'Muy útil',
            'stars' => '5',
        ]);

        DB::table('reviews')->insert([
            'userID' => '5',
            'productID' => '17',
            'text' => 'No lo recomendaría',
            'stars' => '2',
        ]);

        DB::table('reviews')->insert([
            'userID' => '8',
            'productID' => '18',
            'text' => 'Increíble, volveré a comprar',
            'stars' => '5',
        ]);

        DB::table('reviews')->insert([
            'userID' => '11',
            'productID' => '19',
            'text' => 'Aceptable, nada especial',
            'stars' => '3',
        ]);

        DB::table('reviews')->insert([
            'userID' => '3',
            'productID' => '19',
            'text' => 'Cumple su función',
            'stars' => '4',
        ]);
    }
}

