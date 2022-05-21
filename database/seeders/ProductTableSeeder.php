<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        $faker = app(Generator::class);

        DB::table('products')->insert([ 
            [
                'id' => 1,
                'name' => 'Air Force 1',
                'slug' => 'air-force-1',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => 50,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Air Jordan',
                'slug' => 'air-jordan',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Air Max 90',
                'slug' => 'air-max-90',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Ultraboost 22',
                'slug' => 'ultraboost-22',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 2
            ],
            [
                'id' => 5,
                'name' => 'Superstar',
                'slug' => 'superstar',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => 30,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 2
            ],
            [
                'id' => 6,
                'name' => 'Yeezy Boost 350',
                'slug' => 'yeezy-boost-350',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 2
            ],
            [
                'id' => 7,
                'name' => 'RS-X Dreamer',
                'slug' => 'rs-x-dreamer',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 3
            ],
            [
                'id' => 8,
                'name' => 'Gel Cumulus',
                'slug' => 'gel-cumulus',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 4
            ],
            [
                'id' => 9,
                'name' => 'Metaspeed Edge',
                'slug' => 'metaspeed',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 4
            ],
            [
                'id' => 10,
                'name' => '574 Core',
                'slug' => '574-core',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => 20,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 5
            ],
            [
                'id' => 11,
                'name' => 'Foam X Hierro',
                'slug' => 'foam-x-hierro',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture', 'Prochainement')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 100),
                'brand_id' => 5
            ],
        ]);
    }
}
