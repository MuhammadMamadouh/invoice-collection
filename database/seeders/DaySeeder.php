<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = [
            ['en_name' => 'Sunday'],
            ['en_name' => 'Monday'],
            ['en_name' => 'Tuesday'],
            ['en_name' => 'Wednesday'],
            ['en_name' => 'Thursday'],
            ['en_name' => 'Friday'],
            ['en_name' => 'Saturday'],
        ];

        DB::table('days')->insert($days);
    }
}