<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $usersId = User::pluck('id');
        $inventoriesId = Inventory::pluck('id');

        return [
            'user_id' => $this->faker->randomElement($usersId),
            'inventory_id' => $this->faker->randomElement($inventoriesId),
            'quantity' => rand(1, 5),
            'status' => $this->faker->randomElement($array = array ('Disponible','Indisponible')),
            'date' => $this->faker->date($format = 'd-m-Y', $max = '31-12-2022'),
            'total_price_vat' => rand(50, 3000),
            'reference_code' => $this->faker->ean13
        ];
    }
}
