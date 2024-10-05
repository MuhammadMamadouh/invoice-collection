<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $batchSize = 100;
            $totalRecords = 1000;

            for ($i = 0; $i < $totalRecords / $batchSize; $i++) {
                Item::factory()->count($batchSize)->create();
            }
        });
    }
}
