<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DfoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Dfood::factory(10)->create();
    }
}
