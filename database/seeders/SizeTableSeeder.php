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
                'value' => 37
            ],
            [
                'id' => 2,
                'value' => 38
            ],
            [
                'id' => 3,
                'value' => 39
            ],
            [
                'id' => 4,
                'value' => 40
            ],
            [
                'id' => 5,
                'value' => 41
            ],
            [
                'id' => 6,
                'value' => 42
            ],
            [
                'id' => 7,
                'value' => 43
            ],
            [
                'id' => 8,
                'value' => 44
            ],
            [
                'id' => 9,
                'value' => 45
            ],
            [
                'id' => 10,
                'value' => 46
            ],
            [
                'id' => 11,
                'value' => 47
            ],
            [
                'id' => 12,
                'value' => 48
            ]
        ]);
    }
}
