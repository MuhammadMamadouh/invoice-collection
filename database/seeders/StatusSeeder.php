<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses=[
            ['en_name'=>'dispute'],
            ['en_name'=>'dispute resolved'],
            ['en_name'=>'Litigation'],
            ['en_name'=>'on going'],
            ['en_name'=>'promise to pay'],

        ];
        DB::table('types_of_status')->insert($statuses);
    }
}