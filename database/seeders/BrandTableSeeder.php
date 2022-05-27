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
                'slug' => 'nike',
                'description' => $faker->text($maxNbChars = 500),
                'image' => '/nike-logo.png'
            ],
            [
                'id' => 2,
                'name' => 'Adidas',
                'slug' => 'adidas',
                'description' => $faker->text($maxNbChars = 500),
                'image' => '/adidas-logo.png'
            ],
            [
                'id' => 3,
                'name' => 'Puma',
                'slug' => 'puma',
                'description' => $faker->text($maxNbChars = 500),
                'image' => '/puma-logo.png'
            ],
            [
                'id' => 4,
                'name' => 'Asics',
                'slug' => 'asics',
                'description' => $faker->text($maxNbChars = 500),
                'image' => '/asics-logo.png'
            ],
            [
                'id' => 5,
                'name' => 'New Balance',
                'slug' => 'new-balance',
                'description' => $faker->text($maxNbChars = 500),
                'image' => '/new-balance-logo.png'
            ]
        ]);
    }
}
