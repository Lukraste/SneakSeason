<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([ 
            [
                'id' => 1,
                'path' => 'storage/images/sneakers/adidas-superstar/adidas-01.png',
                'product_id' => 5,
                'color_id' => 2,
            ],
            [
                'id' => 2,
                'path' => 'storage/images/sneakers/adidas-superstar/adidas-02.jpg',
                'product_id' => 5 ,
                'color_id' => 4,
            ],
            [
                'id' => 3,
                'path' => 'storage/images/sneakers/adidas-superstar/adidas-03.jpg',
                'product_id' => 5,
                'color_id' => 6,
            ],
            [
                'id' => 4,
                'path' => 'storage/images/sneakers/adidas-superstar/adidas-04.png',
                'product_id' => 5,
                'color_id' => 4,
            ],
            [
                'id' => 5,
                'path' => 'storage/images/sneakers/adidas-ultraboost-22/adidas-05.jpg',
                'product_id' => 4,
                'color_id' => 3,
            ],
            [
                'id' => 6,
                'path' => 'storage/images/sneakers/adidas-ultraboost-22/adidas-06.jpg',
                'product_id' => 4,
                'color_id' => 8,
            ],
            [
                'id' => 7,
                'path' => 'storage/images/sneakers/adidas-ultraboost-22/adidas-07.jpg',
                'product_id' => 4,
                'color_id' => 9,
            ],
            [
                'id' => 8,
                'path' => 'storage/images/sneakers/adidas-ultraboost-22/adidas-08.jpg',
                'product_id' => 4,
                'color_id' => 1,
            ],
            [
                'id' => 9,
                'path' => 'storage/images/sneakers/adidas-ultraboost-22/adidas-09.jpg',
                'product_id' => 4,
                'color_id' => 9,
            ],
            [
                'id' => 10,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-10.jpg',
                'product_id' => 6,
                'color_id' => 9,
            ],
            [
                'id' => 11,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-11.jpg',
                'product_id' => 6,
                'color_id' => 9,
            ],
            [
                'id' => 12,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-12.jpg',
                'product_id' => 6,
                'color_id' => 9,
            ],
            [
                'id' => 13,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-13.jpg',
                'product_id' => 6,
                'color_id' => 2,
            ],
            [
                'id' => 14,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-14.jpg',
                'product_id' => 6,
                'color_id' => 2,
            ],
            [
                'id' => 15,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-15.jpg',
                'product_id' => 6,
                'color_id' => 2,
            ],
            [
                'id' => 16,
                'path' => 'storage/images/sneakers/adidas-yeezy-350/adidas-16.jpg',
                'product_id' => 6,
                'color_id' => 4,
            ],
            [
                'id' => 17,
                'path' => 'storage/images/sneakers/asics-gel-cumulus/asics-01.jpg',
                'product_id' => 8,
                'color_id' => 6,
            ],
            [
                'id' => 18,
                'path' => 'storage/images/sneakers/asics-gel-cumulus/asics-02.jpg',
                'product_id' => 8,
                'color_id' => 9,
            ],
            [
                'id' => 19,
                'path' => 'storage/images/sneakers/asics-gel-cumulus/asics-03.jpg',
                'product_id' => 8,
                'color_id' => 2,
            ],
            [
                'id' =>20,
                'path' => 'storage/images/sneakers/asics-gel-cumulus/asics-04.jpg',
                'product_id' => 8,
                'color_id' => 2,
            ],
            [
                'id' => 21,
                'path' => 'storage/images/sneakers/asics-gel-cumulus/asics-05.jpg',
                'product_id' => 8,
                'color_id' => 2,
            ],
            [
                'id' => 22,
                'path' => 'storage/images/sneakers/asics-metadspeed-edge/asics-06.jpg',
                'product_id' => 9,
                'color_id' => 9,
            ],
            [
                'id' => 23,
                'path' => 'storage/images/sneakers/asics-metadspeed-edge/asics-07.jpg',
                'product_id' => 9,
                'color_id' => 2,
            ],
            [
                'id' => 24,
                'path' => 'storage/images/sneakers/asics-metadspeed-edge/asics-08.jpg',
                'product_id' => 9,
                'color_id' => 2,
            ],
            [
                'id' => 25,
                'path' => 'storage/images/sneakers/asics-metadspeed-edge/asics-09.jpg',
                'product_id' => 9,
                'color_id' => 5,
            ],
            [
                'id' => 26,
                'path' => 'storage/images/sneakers/new-balance-574-core/new-balance-01.jpg',
                'product_id' => 10,
                'color_id' => 5,
            ],
            [
                'id' => 27,
                'path' => 'storage/images/sneakers/new-balance-574-core/new-balance-02.jpg',
                'product_id' => 10,
                'color_id' => 3,
            ],
            [
                'id' => 28,
                'path' => 'storage/images/sneakers/new-balance-574-core/new-balance-03.jpg',
                'product_id' => 10,
                'color_id' => 2,
            ],
            [
                'id' => 29,
                'path' => 'storage/images/sneakers/new-balance-574-core/new-balance-04.jpg',
                'product_id' => 10,
                'color_id' => 3,
            ],
            [
                'id' => 30,
                'path' => 'storage/images/sneakers/new-balance-574-core/new-balance-05.jpg',
                'product_id' => 10,
                'color_id' => 9,
            ],
            [
                'id' => 31,
                'path' => 'storage/images/sneakers/new-balance-574-core/new-balance-06.jpg',
                'product_id' => 10,
                'color_id' => 6,
            ],
            [
                'id' => 32,
                'path' => 'storage/images/sneakers/new-balance-foam-x-hierro/new-balance-07.jpg',
                'product_id' => 11,
                'color_id' => 1,
            ],
            [
                'id' => 33,
                'path' => 'storage/images/sneakers/new-balance-foam-x-hierro/new-balance-08.jpg',
                'product_id' => 11,
                'color_id' => 2,
            ],
            [
                'id' => 34,
                'path' => 'storage/images/sneakers/new-balance-foam-x-hierro/new-balance-09.jpg',
                'product_id' => 11,
                'color_id' => 2,
            ],
            [
                'id' => 35,
                'path' => 'storage/images/sneakers/new-balance-foam-x-hierro/new-balance-10.jpg',
                'product_id' => 11,
                'color_id' => 6,
            ],
            [
                'id' => 36,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-01.jpg',
                'product_id' => 1,
                'color_id' => 2,
            ],
            [
                'id' => 37,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-02.jpg',
                'product_id' => 1,
                'color_id' => 6,
            ],
            [
                'id' => 38,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-03.jpg',
                'product_id' => 1,
                'color_id' => 6,
            ],
            [
                'id' => 39,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-04.jpg',
                'product_id' => 1,
                'color_id' => 2,
            ],
            [
                'id' => 40,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-05.jpg',
                'product_id' => 1,
                'color_id' => 5,
            ],
            [
                'id' => 41,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-06.jpg',
                'product_id' => 1,
                'color_id' => 5,
            ],
            [
                'id' => 42,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-07.jpg',
                'product_id' => 1,
                'color_id' => 5,
            ],
            [
                'id' => 43,
                'path' => 'storage/images/sneakers/nike-air-force-1/nike-08.jpg',
                'product_id' => 1,
                'color_id' => 2,
            ],
            [
                'id' => 44,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-09.jpg',
                'product_id' => 2,
                'color_id' => 4,
            ],
            [
                'id' => 45,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-10.jpg',
                'product_id' => 2,
                'color_id' => 8,
            ],
            [
                'id' => 46,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-11.jpg',
                'product_id' => 2,
                'color_id' => 3,
            ],
            [
                'id' => 47,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-12.jpg',
                'product_id' => 2,
                'color_id' => 3,
            ],
            [
                'id' => 48,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-13.jpg',
                'product_id' => 2,
                'color_id' => 9,
            ],
            [
                'id' => 49,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-14.jpg',
                'product_id' => 2,
                'color_id' => 10,
            ],
            [
                'id' => 50,
                'path' => 'storage/images/sneakers/nike-air-jordan/nike-15.jpg',
                'product_id' => 2,
                'color_id' => 10,
            ],
            [
                'id' => 51,
                'path' => 'storage/images/sneakers/nike-air-max-90/nike-16.jpg',
                'product_id' => 3,
                'color_id' => 10,
            ],
            [
                'id' => 52,
                'path' => 'storage/images/sneakers/nike-air-max-90/nike-17.jpg',
                'product_id' => 3,
                'color_id' => 3,
            ],
            [
                'id' => 53,
                'path' => 'storage/images/sneakers/nike-air-max-90/nike-18.jpg',
                'product_id' => 3,
                'color_id' => 7,
            ],
            [
                'id' => 54,
                'path' => 'storage/images/sneakers/nike-air-max-90/nike-19.jpg',
                'product_id' => 3,
                'color_id' => 2,
            ],
            [
                'id' => 55,
                'path' => 'storage/images/sneakers/nike-air-max-90/nike-20.jpg',
                'product_id' => 3,
                'color_id' => 2,
            ],
            [
                'id' => 56,
                'path' => 'storage/images/sneakers/nike-air-max-90/nike-21.jpg',
                'product_id' => 3,
                'color_id' => 7,
            ],
            [
                'id' => 57,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-01.jpg',
                'product_id' => 7,
                'color_id' => 9,
            ],
            [
                'id' => 58,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-02.jpg',
                'product_id' => 7,
                'color_id' => 4,
            ],
            [
                'id' => 59,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-03.jpg',
                'product_id' => 7,
                'color_id' => 2,
            ],
            [
                'id' => 60,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-04.jpg',
                'product_id' => 7,
                'color_id' => 1,
            ],
            [
                'id' => 61,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-05.jpg',
                'product_id' => 7,
                'color_id' => 2,
            ],
            [
                'id' => 62,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-06.jpg',
                'product_id' => 7,
                'color_id' => 2,
            ],
            [
                'id' => 63,
                'path' => 'storage/images/sneakers/puma-rs-x/puma-07.jpg',
                'product_id' => 7,
                'color_id' => 2,
            ]
        ]);
    }
}
