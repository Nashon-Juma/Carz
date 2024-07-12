<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Example: generate random rental start date within the last month
        $rentalStart = $this->faker->dateTimeBetween('-1 month', 'now');

        return [
            'user_id' => $this->faker->numberBetween(1, 150),
            'car_id' =>$this->faker->numberBetween(1, 100),
            'rental_start' => $rentalStart,
            'rental_end' => $this->faker->optional(0.7)->dateTimeBetween($rentalStart, '+1 month'),
        ];
    }
}
