<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BpaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Bpase::factory(10)->create();
    }
}
