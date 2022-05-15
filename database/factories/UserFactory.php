<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('Soleil123'),
            'role' => 'user',
            'max_orders' => 5,
            'lastname' => $this->faker->lastName,
            'firstname' => $this->faker->firstName,
            'birthdate' => $this->faker->date($format = 'd-m-Y', $max = '01-01-2006'),
            'phone_number' => $this->faker->unique()->phoneNumber,
            'gender' => $this->faker->randomElement($array = array ('Femme','Homme')),
            'rgpd' => true,
            'newsletters' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'remember_token' => Str::random(50)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
