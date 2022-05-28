<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $usersId = User::pluck('id');
        $productsId = Product::pluck('id');
        
        return [
            'user_id' => $this->faker->randomElement($usersId),
            'product_id' => $this->faker->randomElement($productsId),
        ];
    }
}
