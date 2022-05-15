<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryProductFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categoriesId = Category::pluck('id');
        $productsId = Product::pluck('id');
        
        return [
            'category_id' => $this->faker->randomElement($categoriesId),
            'product_id' => $this->faker->randomElement($productsId)
        ];
    }
}
