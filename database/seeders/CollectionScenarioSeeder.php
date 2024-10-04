<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\CollectionScenario;
use Illuminate\Database\Seeder;

class CollectionScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CollectionScenario::factory(10)->create()->each(function ($collectionScenario) {
            $collectionScenario->actions()->saveMany(Action::factory(10)->make([
                'collection_scenario_id' => $collectionScenario->id,
                'created_by' => rand(1, 10),
            ]));
        });
    }
}
