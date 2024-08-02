<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scenarios = [
            ['en_name'=>'Clients publics (FR)'],
            ['en_name'=>'Clients risqués (FR)'],
            ['en_name'=>'Key accounts scenario (EN)'],
            ['en_name'=>'Modèles actions spécifiques'],
            ['en_name'=>'Risky clients (EN)'],
            ['en_name'=>'Scénario de relance standard (by default)'],
            ['en_name'=>'Standard Collection Scenario'],
            ['en_name'=>'Templates specific actions'],

        ];

        DB::table('scenarios')->insert($scenarios);
    }
}