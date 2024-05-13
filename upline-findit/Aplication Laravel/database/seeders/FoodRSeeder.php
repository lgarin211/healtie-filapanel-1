<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FoodRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\FoodR::factory(10)->create();
    }
}
