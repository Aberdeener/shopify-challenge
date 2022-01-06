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
            'name' => $this->faker->words(
                $this->faker->numberBetween(1, 2),
                true
            ),
            'collection' => $this->faker->numberBetween(1, 10),
        ];
    }
}
