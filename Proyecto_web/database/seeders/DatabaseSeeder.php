<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ReceiptSeeder::class,
            AddressSeeder::class,
            ShipmentSeeder::class,
            ReviewSeeder::class,
            ItemSeeder::class,
            CategorySeeder::class,
            CharacteristicSeeder::class,
        ]);
    }
}
