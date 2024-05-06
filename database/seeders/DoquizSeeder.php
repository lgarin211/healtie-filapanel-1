<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoquizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Doquiz::factory(10)->create();
    }
}
