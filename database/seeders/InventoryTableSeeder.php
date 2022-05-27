<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = Size::all();
        
        foreach(Product::all() as $product) { 
            foreach($sizes->random(rand(0, $sizes->count())) as $size) {
                $product->sizes()->attach($size);
            }
        }

    }
}
