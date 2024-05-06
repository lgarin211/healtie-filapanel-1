<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dfood>
 */
class DfoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barcode' => fake()->text(50),
            'name' => fake()->text(50),
            'natrium' => fake()->randomNumber(),
            'fat' => fake()->randomNumber(),
            'sugar' => fake()->randomNumber(),
            'kcal' => fake()->randomNumber(),
            'poster' => fake()->text(50),
            'etc' => fake()->text(50),

        ];
    }
}
