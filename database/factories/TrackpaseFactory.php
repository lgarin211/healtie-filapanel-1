<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trackpase>
 */
class TrackpaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Ushid' => fake()->text(50),
            'Dfoodid' => fake()->text(50),
            'Paseline' => fake()->text(50),
            'poster' => fake()->text(50),

        ];
    }
}
