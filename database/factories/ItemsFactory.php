<?php

namespace Database\Factories;

use App\Models\Items;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemsFactory extends Factory
{
    protected $model = Items::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['available', 'sold', 'pending']),
        ];
    }
}

