<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Inventory;
use App\Models\UserInventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserInventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserInventory::class;

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
            'notifiable' => $this->faker->boolean($chanceOfGettingTrue = 50),
        ];
    }
}
