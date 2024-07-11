<?php

namespace Database\Factories;

use App\Models\Car;
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
            'img' => 'https://source.unsplash.com/random/640x480?car=' . $this->faker->unique()->numberBetween(1, 1000),
            'make' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW']),
            'model' => $this->faker->word,
            'milage' => $this->faker->numberBetween(10000, 100000) . ' km',
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
