<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrackpaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Trackpase::factory(10)->create();
    }
}
