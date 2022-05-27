<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModeleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modeles')->insert([ 
            [
                'id' => 1,
                'name' => '547 Core',
                'brand_id' => 5
            ],
            [
                'id' => 2,
                'name' => 'Air Force 1',
                'brand_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Air Jordan',
                'brand_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Air Max 90',
                'brand_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Foam X Hierro',
                'brand_id' => 5
            ],
            [
                'id' => 6,
                'name' => 'Gel Cumulus',
                'brand_id' => 4
            ],
            [
                'id' => 7,
                'name' => 'Metaspeed Edge',
                'brand_id' => 4
            ],
            [
                'id' => 8,
                'name' => 'RS-X Dreamer',
                'brand_id' => 3
            ],
            [
                'id' => 9,
                'name' => 'Superstar',
                'brand_id' => 2
            ],
            [
                'id' => 10,
                'name' => 'Ultraboost 22',
                'brand_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Yeezy Boost 350',
                'brand_id' => 2
            ],
        ]);
    }
}
