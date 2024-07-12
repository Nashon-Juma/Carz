<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'img' => \Faker\Factory::create()->unique()->imageUrl($width = 640, $height = 480, 'cars'),
            'make' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW']),
            'model' => $this->faker->word,
            'milage' => $this->faker->numberBetween(10000, 100000),
            'transmission' => $this->faker->randomElement(['Automatic', 'Manual']),
            'seats' => $this->faker->numberBetween(2, 7),
            'luggage' => $this->faker->numberBetween(1, 5),
            'fuel' => $this->faker->randomElement(['Petrol', 'Diesel', 'Electric', 'Hybrid']),
            'category' => $this->faker->randomElement(['Economy', 'Luxury', 'SUV', 'Van', 'Truck']),
            'description' => $this->faker->paragraph,
            'year' => $this->faker->year,
            'color' => $this->faker->safeColorName,
            'rated' => $this->faker->randomElement(['5', '4', '3']),
            'leasing' => $this->faker->randomElement([1 , 0]),
            'price_per_hour' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
