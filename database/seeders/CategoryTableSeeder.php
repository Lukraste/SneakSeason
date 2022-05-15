<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            [
                'id' => 1,
                'name' => 'Sélection de saison'
            ],
            [
                'id' => 2,
                'name'=> 'Nouveautés'
            ],
            [
                'id' => 3,
                'name' => 'Populaires'
            ],
            [
                'id' => 4,
                'name' => 'Promotions'
            ],
        ]);
    }
}
