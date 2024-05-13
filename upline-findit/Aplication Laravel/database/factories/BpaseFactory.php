<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bpase>
 */
class BpaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'height' => fake()->text(50),
            'weight' => fake()->text(50),
            'bmi' => fake()->text(50),
            'goals' => fake()->text(50),
            'ushid' => fake()->randomNumber(),

        ];
    }
}
