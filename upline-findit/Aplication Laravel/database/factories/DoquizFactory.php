<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doquiz>
 */
class DoquizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ushid' => fake()->text(50),
            'score' => fake()->text(50),
            'desk' => fake()->text(50),

        ];
    }
}
