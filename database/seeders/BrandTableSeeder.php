<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        DB::table('brands')->insert([ 
            [
                'id' => 1,
                'name' => 'Nike',
                'description' => $faker->text($maxNbChars = 400),
                'image' => 'storage/images/brands/nike-logo.png'
            ],
            [
                'id' => 2,
                'name' => 'Adidas',
                'description' => $faker->text($maxNbChars = 400),
                'image' => 'storage/images/brands/adidas-logo.png'
            ],
            [
                'id' => 3,
                'name' => 'Puma',
                'description' => $faker->text($maxNbChars = 400),
                'image' => 'storage/images/brands/puma-logo.png'
            ],
            [
                'id' => 4,
                'name' => 'Asics',
                'description' => $faker->text($maxNbChars = 400),
                'image' => 'storage/images/brands/asics-logo.png'
            ],
            [
                'id' => 5,
                'name' => 'New Balance',
                'description' => $faker->text($maxNbChars = 400),
                'image' => 'storage/images/brands/new-balance-logo.png'
            ]
        ]);
    }
}
