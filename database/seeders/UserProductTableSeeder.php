<?php

namespace Database\Seeders;

use App\Models\UserProduct;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProduct::factory()
        ->times(100)
        ->create();
    }
}
