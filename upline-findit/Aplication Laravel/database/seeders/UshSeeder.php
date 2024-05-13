<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Ush::factory(10)->create();
    }
}
