<?php

namespace Database\Seeders;

use App\Models\CollectionScenario;
use Illuminate\Database\Seeder;

class CollectionScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CollectionScenario::factory(10)->create();
    }
}
