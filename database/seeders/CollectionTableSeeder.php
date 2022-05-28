<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([ 
            [
                'id' => 1,
                'name' => '547 Core',
                'slug' => '547-core',
                'brand_id' => 5
            ],
            [
                'id' => 2,
                'name' => 'Air Force 1',
                'slug' => 'air-force-1',
                'brand_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Air Jordan',
                'slug' => 'air-jordan',
                'brand_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Air Max 90',
                'slug' => 'air-max-90',
                'brand_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Foam X Hierro',
                'slug' => 'Foam-x-hierro',
                'brand_id' => 5
            ],
            [
                'id' => 6,
                'name' => 'Gel Cumulus',
                'slug' => 'gel-cumulus',
                'brand_id' => 4
            ],
            [
                'id' => 7,
                'name' => 'Metaspeed Edge',
                'slug' => 'metaspeed-edge',
                'brand_id' => 4
            ],
            [
                'id' => 8,
                'name' => 'RS-X Dreamer',
                'slug' => 'rs-x-dreamer',
                'brand_id' => 3
            ],
            [
                'id' => 9,
                'name' => 'Superstar',
                'slug' => 'superstar',
                'brand_id' => 2
            ],
            [
                'id' => 10,
                'name' => 'Ultraboost 22',
                'slug' => 'ultraboost-22',
                'brand_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Yeezy Boost 350',
                'slug' => 'yeezy-boost-350',
                'brand_id' => 2
            ],
        ]);
    }
}
