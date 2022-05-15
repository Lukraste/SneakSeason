<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

USe Illuminate\Database\Console\Seeds\WithoutModelEvents;
USe Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([

            [
                'id' => 1,
                'size' => 37,
                'type' => 'EU'
            ],
            [
                'id' => 2,
                'size' => 38,
                'type' => 'EU'
            ],
            [
                'id' => 3,
                'size' => 39,
                'type' => 'EU'
            ],
            [
                'id' => 4,
                'size' => 40,
                'type' => 'EU'
            ],
            [
                'id' => 5,
                'size' => 41,
                'type' => 'EU'
            ],
            [
                'id' => 6,
                'size' => 42,
                'type' => 'EU'
            ],
            [
                'id' => 7,
                'size' => 43,
                'type' => 'EU'
            ],
            [
                'id' => 8,
                'size' => 44,
                'type' => 'EU'
            ],
            [
                'id' => 9,
                'size' => 45,
                'type' => 'EU'
            ],
            [
                'id' => 10,
                'size' => 46,
                'type' => 'EU'
            ],
            [
                'id' => 11,
                'size' => 47,
                'type' => 'EU'
            ],
            [
                'id' => 12,
                'size' => 48,
                'type' => 'EU'
            ],
            [
                'id' => 13,
                'size' => 5,
                'type' => 'US'
            ],
            [
                'id' => 14,
                'size' => 6,
                'type' => 'US'
            ],
            [
                'id' => 15,
                'size' => 7,
                'type' => 'US'
            ],
            [
                'id' => 16,
                'size' => 7.5,
                'type' => 'US'
            ],
            [
                'id' => 17,
                'size' => 8,
                'type' => 'US'
            ],
            [
                'id' => 18,
                'size' => 8.5,
                'type' => 'US'
            ],
            [
                'id' => 19,
                'size' => 9,
                'type' => 'US'
            ],
            [
                'id' => 20,
                'size' => 9.5,
                'type' => 'US'
            ],
            [
                'id' => 21,
                'size' => 10,
                'type' => 'US'
            ],
            [
                'id' => 22,
                'size' => 10.5,
                'type' => 'US'
            ],
            [
                'id' => 23,
                'size' => 11,
                'type' => 'US'
            ],
            [
                'id' => 24,
                'size' => 12,
                'type' => 'US'
            ],
            [
                'id' => 25,
                'size' => 13,
                'type' => 'US'
            ],
            [
                'id' => 26,
                'size' => 13.5,
                'type' => 'US'
            ]
        ]);
    }
}
