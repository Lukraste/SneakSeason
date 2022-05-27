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
                'path' => 'adidas-superstar/adidas-01.png',
                'product_id' => 17
            ],
            [
                'id' => 2,
                'path' => 'adidas-superstar/adidas-02.jpg',
                'product_id' => 17
            ],
            [
                'id' => 3,
                'path' => 'adidas-superstar/adidas-03.jpg',
                'product_id' => 18
            ],
            [
                'id' => 4,
                'path' => 'adidas-superstar/adidas-04.jpg',
                'product_id' => 17
            ],
            [
                'id' => 5,
                'path' => 'adidas-ultraboost-22/adidas-05.jpg',
                'product_id' => 13
            ],
            [
                'id' => 6,
                'path' => 'adidas-ultraboost-22/adidas-06.jpg',
                'product_id' => 14
            ],
            [
                'id' => 7,
                'path' => 'adidas-ultraboost-22/adidas-07.jpg',
                'product_id' => 15
            ],
            [
                'id' => 8,
                'path' => 'adidas-ultraboost-22/adidas-08.jpg',
                'product_id' => 16
            ],
            [
                'id' => 9,
                'path' => 'adidas-ultraboost-22/adidas-09.jpg',
                'product_id' => 15
            ],
            [
                'id' => 10,
                'path' => 'adidas-yeezy-boost-350/adidas-10.jpg',
                'product_id' => 19
            ],
            [
                'id' => 11,
                'path' => 'adidas-yeezy-boost-350/adidas-11.jpg',
                'product_id' => 19,
            ],
            [
                'id' => 12,
                'path' => 'adidas-yeezy-boost-350/adidas-12.jpg',
                'product_id' => 19,
            ],
            [
                'id' => 13,
                'path' => 'adidas-yeezy-boost-350/adidas-13.jpg',
                'product_id' => 20            
            ],
            [
                'id' => 14,
                'path' => 'adidas-yeezy-boost-350/adidas-14.jpg',
                'product_id' => 20
            ],
            [
                'id' => 15,
                'path' => 'adidas-yeezy-boost-350/adidas-15.jpg',
                'product_id' => 20
            ],
            [
                'id' => 16,
                'path' => 'adidas-yeezy-boost-350/adidas-16.jpg',
                'product_id' => 21
            ],
            [
                'id' => 17,
                'path' => 'asics-gel-cumulus/asics-01.jpg',
                'product_id' => 27
            ],
            [
                'id' => 18,
                'path' => 'asics-gel-cumulus/asics-02.jpg',
                'product_id' => 28
            ],
            [
                'id' => 19,
                'path' => 'asics-gel-cumulus/asics-03.jpg',
                'product_id' => 29
            ],
            [
                'id' =>20,
                'path' => 'asics-gel-cumulus/asics-04.jpg',
                'product_id' => 29
            ],
            [
                'id' => 21,
                'path' => 'asics-gel-cumulus/asics-05.jpg',
                'product_id' => 29
            ],
            [
                'id' => 22,
                'path' => 'asics-metaspeed-edge/asics-06.jpg',
                'product_id' => 30
            ],
            [
                'id' => 23,
                'path' => 'asics-metaspeed-edge/asics-07.jpg',
                'product_id' => 31
            ],
            [
                'id' => 24,
                'path' => 'asics-metaspeed-edge/asics-08.jpg',
                'product_id' => 31
            ],
            [
                'id' => 25,
                'path' => 'asics-metaspeed-edge/asics-09.jpg',
                'product_id' => 32
            ],
            [
                'id' => 26,
                'path' => 'new-balance-574-core/new-balance-01.jpg',
                'product_id' => 33
            ],
            [
                'id' => 27,
                'path' => 'new-balance-574-core/new-balance-02.jpg',
                'product_id' => 34
            ],
            [
                'id' => 28,
                'path' => 'new-balance-574-core/new-balance-03.jpg',
                'product_id' => 35
            ],
            [
                'id' => 29,
                'path' => 'new-balance-574-core/new-balance-04.jpg',
                'product_id' => 34
            ],
            [
                'id' => 30,
                'path' => 'new-balance-574-core/new-balance-05.jpg',
                'product_id' => 36
            ],
            [
                'id' => 31,
                'path' => 'new-balance-574-core/new-balance-06.jpg',
                'product_id' => 37
            ],
            [
                'id' => 32,
                'path' => 'new-balance-foam-x-hierro/new-balance-07.jpg',
                'product_id' => 38
            ],
            [
                'id' => 33,
                'path' => 'new-balance-foam-x-hierro/new-balance-08.jpg',
                'product_id' => 39            
            ],
            [
                'id' => 34,
                'path' => 'new-balance-foam-x-hierro/new-balance-09.jpg',
                'product_id' => 39
            ],
            [
                'id' => 35,
                'path' => 'new-balance-foam-x-hierro/new-balance-10.jpg',
                'product_id' => 40
            ],
            [
                'id' => 36,
                'path' => 'nike-air-force-1/nike-01.jpg',
                'product_id' => 1
            ],
            [
                'id' => 37,
                'path' => 'nike-air-force-1/nike-02.jpg',
                'product_id' => 2
            ],
            [
                'id' => 38,
                'path' => 'nike-air-force-1/nike-03.jpg',
                'product_id' => 2
            ],
            [
                'id' => 39,
                'path' => 'nike-air-force-1/nike-04.jpg',
                'product_id' => 3
            ],
            [
                'id' => 40,
                'path' => 'nike-air-force-1/nike-05.jpg',
                'product_id' => 3
            ],
            [
                'id' => 41,
                'path' => 'nike-air-force-1/nike-06.jpg',
                'product_id' => 3
            ],
            [
                'id' => 42,
                'path' => 'nike-air-jordan/nike-07.jpg',
                'product_id' => 4
            ],
            [
                'id' => 43,
                'path' => 'nike-air-jordan/nike-08.jpg',
                'product_id' => 5
            ],
            [
                'id' => 44,
                'path' => 'nike-air-jordan/nike-09.jpg',
                'product_id' => 6
            ],
            [
                'id' => 45,
                'path' => 'nike-air-jordan/nike-10.jpg',
                'product_id' => 6
            ],
            [
                'id' => 46,
                'path' => 'nike-air-jordan/nike-11.jpg',
                'product_id' => 7
            ],
            [
                'id' => 47,
                'path' => 'nike-air-jordan/nike-12.jpg',
                'product_id' => 8
            ],
            [
                'id' => 48,
                'path' => 'nike-air-jordan/nike-13.jpg',
                'product_id' => 8
            ],
            [
                'id' => 49,
                'path' => 'nike-air-max-90/nike-14.jpg',
                'product_id' => 9
            ],
            [
                'id' => 50,
                'path' => 'nike-air-max-90/nike-15.jpg',
                'product_id' => 10
            ],
            [
                'id' => 51,
                'path' => 'nike-air-max-90/nike-16.jpg',
                'product_id' => 10
            ],
            [
                'id' => 52,
                'path' => 'nike-air-max-90/nike-17.jpg',
                'product_id' => 11
            ],
            [
                'id' => 53,
                'path' => 'nike-air-max-90/nike-18.jpg',
                'product_id' => 11
            ],
            [
                'id' => 54,
                'path' => 'nike-air-max-90/nike-19.jpg',
                'product_id' => 12
            ],
            [
                'id' => 57,
                'path' => 'puma-rs-x/puma-01.jpg',
                'product_id' => 22
            ],
            [
                'id' => 58,
                'path' => 'puma-rs-x/puma-02.jpg',
                'product_id' => 23
            ],
            [
                'id' => 59,
                'path' => 'puma-rs-x/puma-03.jpg',
                'product_id' => 24
            ],
            [
                'id' => 60,
                'path' => 'puma-rs-x/puma-04.jpg',
                'product_id' => 25
            ],
            [
                'id' => 61,
                'path' => 'puma-rs-x/puma-05.png',
                'product_id' => 26
            ],
            [
                'id' => 62,
                'path' => 'puma-rs-x/puma-06.png',
                'product_id' => 26
            ],
            [
                'id' => 63,
                'path' => 'puma-rs-x/puma-07.jpg',
                'product_id' => 26
            ]
        ]);
    }
}
