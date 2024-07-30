<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies=[
            ['en_name' => 'AUD$A'],
            ['en_name' => 'BRL'],
            ['en_name' => 'CAD$C'],
            ['en_name' => 'CHF'],
            ['en_name' => 'EUR&euro'],
            ['en_name' => 'GBP&pound'],
            ['en_name' => 'USD$'],
            ['en_name' => 'ZAR'],
        ];
        DB::table('currencies')->insert($currencies);
    }
}