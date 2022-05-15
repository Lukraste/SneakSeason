<?php

namespace Database\Factories;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ColorSizeProduct>
 */
class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $colorsId = Color::pluck('id');
        $sizesId = Size::pluck('id');
        $productsId = Product::pluck('id');

        return [
            'product_id' => $this->faker->randomElement($productsId),
            'size_id' => $this->faker->randomElement($sizesId),
            'color_id' => $this->faker->randomElement($colorsId),
            'quantity' => rand(1, 10)
        ];
    }
}
