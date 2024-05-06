<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FoodR>
 */
class FoodRFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Poster' => fake()->text(50),
            'target' => fake()->text(50),
            'desk' => fake()->text(50),
            'nutrisi' => fake()->text(50),

        ];
    }
}
