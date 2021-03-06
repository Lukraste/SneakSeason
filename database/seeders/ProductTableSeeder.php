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
                'name' => 'Air Force 1 Rouge',
                'slug' => 'air-force-1-rouge',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 50,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 1,
                'collection_id' => 2
            ],
            [
                'id' => 2,
                'name' => 'Air Force 1 Orange',
                'slug' => 'air-force-1-orange',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 50,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 6,
                'collection_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Air Force 1 Beige',
                'slug' => 'air-force-1-beige',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 50,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 5,
                'collection_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'Air Jordan Multi',
                'slug' => 'air-jordan-multi',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 11,
                'collection_id' => 3
            ],
            [
                'id' => 5,
                'name' => 'Air Jordan Gris',
                'slug' => 'air-jordan-gris',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 8,
                'collection_id' => 3
            ],
            [
                'id' => 6,
                'name' => 'Air Jordan Vert',
                'slug' => 'air-jordan-vert',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 3,
                'collection_id' => 3
            ],
            [
                'id' => 7,
                'name' => 'Air Jordan Bleu',
                'slug' => 'air-jordan-bleu',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 9,
                'collection_id' => 3
            ],
            [
                'id' => 8,
                'name' => 'Air Jordan Jaune',
                'slug' => 'air-jordan-jaune',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 10,
                'collection_id' => 3
            ],
            [
                'id' => 9,
                'name' => 'Air Max 90 Orange',
                'slug' => 'air-max-90-orange',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 6,
                'collection_id' => 4
            ],
            [
                'id' => 10,
                'name' => 'Air Max 90 Vert',
                'slug' => 'air-max-90-vert',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 3,
                'collection_id' => 4
            ],
            [
                'id' => 11,
                'name' => 'Air Max 90 Multi',
                'slug' => 'air-max-90-multi',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 11,
                'collection_id' => 4
            ],
            [
                'id' => 12,
                'name' => 'Air Max 90 Rose',
                'slug' => 'air-max-90-rose',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 1,
                'color_id' => 7,
                'collection_id' => 4
            ],
            [
                'id' => 13,
                'name' => 'Ultraboost 22 Vert',
                'slug' => 'ultraboost-22-vert',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 3,
                'collection_id' => 10
            ],
            [
                'id' => 14,
                'name' => 'Ultraboost 22 Gris',
                'slug' => 'ultraboost-22-gris',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 8,
                'collection_id' => 10
            ],
            [
                'id' => 15,
                'name' => 'Ultraboost 22 Bleu',
                'slug' => 'ultraboost-22-bleu',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 9,
                'collection_id' => 10
            ],
            [
                'id' => 16,
                'name' => 'Ultraboost 22 Noir',
                'slug' => 'ultraboost-22-noir',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 4,
                'collection_id' => 10
            ],
            [
                'id' => 17,
                'name' => 'Superstar Blanc',
                'slug' => 'superstar-blanc',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 30,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 2,
                'collection_id' => 9
            ],
            [
                'id' => 18,
                'name' => 'Superstar Orange',
                'slug' => 'superstar-orange',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 30,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 6,
                'collection_id' => 9
            ],
            [
                'id' => 19,
                'name' => 'Yeezy Boost 350 Gris',
                'slug' => 'yeezy-boost-350-gris',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 8,
                'collection_id' => 9
            ],
            [
                'id' => 20,
                'name' => 'Yeezy Boost 350 Blanc',
                'slug' => 'yeezy-boost-350-blanc',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 2,
                'collection_id' => 11
            ],
            [
                'id' => 21,
                'name' => 'Yeezy Boost 350 Noir',
                'slug' => 'yeezy-boost-350-noir',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 2,
                'color_id' => 4,
                'collection_id' => 11
            ],
            [
                'id' => 22,
                'name' => 'RS-X Dreamer Multi',
                'slug' => 'rs-x-dreamer-multi',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 3,
                'color_id' => 11,
                'collection_id' => 8
            ],
            [
                'id' => 23,
                'name' => 'RS-X Dreamer Noir',
                'slug' => 'rs-x-dreamer-noir',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 3,
                'color_id' => 4,
                'collection_id' => 8
            ],
            [
                'id' => 24,
                'name' => 'RS-X Dreamer Rose',
                'slug' => 'rs-x-dreamer-rose',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 3,
                'color_id' => 7,
                'collection_id' => 8
            ],
            [
                'id' => 25,
                'name' => 'RS-X Dreamer Rouge',
                'slug' => 'rs-x-dreamer-rouge',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 3,
                'color_id' => 1,
                'collection_id' => 8
            ],
            [
                'id' => 26,
                'name' => 'RS-X Dreamer Blanc',
                'slug' => 'rs-x-dreamer-blanc',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 3,
                'color_id' => 2,
                'collection_id' => 8
            ],
            [
                'id' => 27,
                'name' => 'Gel Cumulus Orange',
                'slug' => 'gel-cumulus-orange',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 4,
                'color_id' => 6,
                'collection_id' => 6
            ],
            [
                'id' => 28,
                'name' => 'Gel Cumulus Bleu',
                'slug' => 'gel-cumulus-bleu',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 4,
                'color_id' => 9,
                'collection_id' => 6
            ],
            [
                'id' => 29,
                'name' => 'Gel Cumulus Blanc',
                'slug' => 'gel-cumulus-blanc',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 4,
                'color_id' => 2,
                'collection_id' => 6
            ],
            [
                'id' => 30,
                'name' => 'Metaspeed Edge Bleu',
                'slug' => 'metaspeed-edge-bleu',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 4,
                'color_id' => 9,
                'collection_id' => 7
            ],
            [
                'id' => 31,
                'name' => 'Metaspeed Edge Rouge',
                'slug' => 'metaspeed-edge-rouge',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 4,
                'color_id' => 1,
                'collection_id' => 7
            ],
            [
                'id' => 32,
                'name' => 'Metaspeed Edge Beige',
                'slug' => 'metaspeed-edge-beige',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => null,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 4,
                'color_id' => 5,
                'collection_id' => 7
            ],
            [
                'id' => 33,
                'name' => '574 Core Beige',
                'slug' => '574-core-beige',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 20,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 5,
                'collection_id' => 1
            ],
            [
                'id' => 34,
                'name' => '574 Core Vert',
                'slug' => '574-core-vert',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 20,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 3,
                'collection_id' => 1
            ],
            [
                'id' => 35,
                'name' => '574 Core Rose',
                'slug' => '574-core-rose',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 20,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 7,
                'collection_id' => 1

            ],
            [
                'id' => 36,
                'name' => '574 Core Bleu',
                'slug' => '574-core-bleu',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 20,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 1,
                'collection_id' => 1
            ],
            [
                'id' => 37,
                'name' => '574 Core Orange',
                'slug' => '574-core-orange',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 20,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 1,
                'collection_id' => 1
            ],
            [
                'id' => 38,
                'name' => 'Foam X Hierro Rouge',
                'slug' => 'foam-x-hierro-rouge',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 5,
                'collection_id' => 5
            ],
            [
                'id' => 39,
                'name' => 'Foam X Hiero Blanc',
                'slug' => 'foam-x-hierro-blanc',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 5,
                'collection_id' => 5
            ],
            [
                'id' => 40,
                'name' => 'Foam X Hiero Orange',
                'slug' => 'foam-x-hierro-orange',
                'price_vat' => rand(50, 1000),
                'be_vat' => 21,
                'product_code' => $faker->unique()->ean13,
                'gender' => $faker->randomElement($array = array ('Femme', 'Homme')),
                'stock' => $faker->randomElement($array = array ('Disponible', 'Rupture')),
                'discount' => 10,
                'description' => $faker->text($maxNbChars = 250),
                'brand_id' => 5,
                'color_id' => 5,
                'collection_id' => 5
            ]
        ]);
    }
}
