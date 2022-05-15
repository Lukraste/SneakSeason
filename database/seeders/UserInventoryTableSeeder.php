<?php

namespace Database\Seeders;

use App\Models\UserInventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserInventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserInventory::factory()
        ->times(100)
        ->create();
    }
}
