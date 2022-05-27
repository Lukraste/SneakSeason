<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([

            [
                'id' => 1,
                'name' => 'rouge',
                'image' => 'storage/images/colors/red.png'
            ],
            [
                'id' => 2,
                'name'=> 'blanc',
                'image' => 'storage/images/colors/white.png'
            ],
            [
                'id' => 3,
                'name' => 'vert',
                'image' => 'storage/images/colors/green.png'
            ],
            [
                'id' => 4,
                'name' => 'noir',
                'image' => 'storage/images/colors/black.png'
            ],
            [
                'id' => 5,
                'name' => 'beige',
                'image' => 'storage/images/colors/brown.png'
            ],
            [
                'id' => 6,
                'name' => 'orange',
                'image' => 'storage/images/colors/orange.png'
            ],
            [
                'id' => 7,
                'name' => 'rose',
                'image' => 'storage/images/colors/purple.png'
            ],
            [
                'id' => 8,
                'name' => 'gris',
                'image' => 'storage/images/colors/grey.png'
            ],
            [
                'id' => 9,
                'name' => 'bleu',
                'image' => 'storage/images/colors/blue.png'
            ],
            [
                'id' => 10,
                'name' => 'jaune',
                'image' => 'storage/images/colors/yellow.png'
            ],
            [
                'id' => 11,
                'name' => 'multi',
                'image' => 'storage/images/colors/multi.png'
            ]
        ]);
    }
}
