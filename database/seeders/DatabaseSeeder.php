<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            UserTableSeeder::class,
            BrandTableSeeder::class,
            ModeleTableSeeder::class,
            ColorTableSeeder::class,
            SizeTableSeeder::class,
            CategoryTableSeeder::class,
            ProductTableSeeder::class,
            ImageTableSeeder::class,
            CategoryProductTableSeeder::class,
            InventoryTableSeeder::class,
            OrderTableSeeder::class,
            UserInventoryTableSeeder::class
        ]);
    }
}
