<?php

namespace Database\Seeders;

use App\Enum\EmailData;
use App\Models\TypeTo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeTos = EmailData::TYPE_TO;
        foreach ($typeTos as $typeTo){
            TypeTo::create(['name' => $typeTo]);
        }
    }
}
