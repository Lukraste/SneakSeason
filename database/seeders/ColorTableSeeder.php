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
                'name' => 'Rouge',
                'image' => 'storage/images/colors/red.png'
            ],
            [
                'id' => 2,
                'name'=> 'Blanc',
                'image' => 'storage/images/colors/white.png'
            ],
            [
                'id' => 3,
                'name' => 'Vert',
                'image' => 'storage/images/colors/green.png'
            ],
            [
                'id' => 4,
                'name' => 'Noir',
                'image' => 'storage/images/colors/black.png'
            ],
            [
                'id' => 5,
                'name' => 'Brun',
                'image' => 'storage/images/colors/brown.png'
            ],
            [
                'id' => 6,
                'name' => 'Orange',
                'image' => 'storage/images/colors/orange.png'
            ],
            [
                'id' => 7,
                'name' => 'Rose',
                'image' => 'storage/images/colors/purple.png'
            ],
            [
                'id' => 8,
                'name' => 'Gris',
                'image' => 'storage/images/colors/grey.png'
            ],
            [
                'id' => 9,
                'name' => 'Bleu',
                'image' => 'storage/images/colors/blue.png'
            ],
            [
                'id' => 10,
                'name' => 'Jaune',
                'image' => 'storage/images/colors/yellow.png'
            ]
        ]);
    }
}
