<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        
        foreach(Product::all() as $product) { 
            foreach($categories->random(rand(0, $categories->count())) as $category) {
                $product->categories()->attach($category);
            }
        }
    }
}
