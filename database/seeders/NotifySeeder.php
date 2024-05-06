<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotifySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Notify::factory(10)->create();
    }
}
