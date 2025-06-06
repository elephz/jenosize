<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock_quantity' => $this->faker->numberBetween(2, 99),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
