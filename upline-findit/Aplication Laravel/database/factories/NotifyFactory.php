<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notify>
 */
class NotifyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->text(50),
            'desk' => fake()->text(50),
            'ushid' => fake()->text(50),
            'from_path' => fake()->text(50),

        ];
    }
}
