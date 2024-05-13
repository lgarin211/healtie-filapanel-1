<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SleepTrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SleepTrack::factory(10)->create();
    }
}
