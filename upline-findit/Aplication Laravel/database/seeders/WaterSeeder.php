<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Water::factory(10)->create();
    }
}
