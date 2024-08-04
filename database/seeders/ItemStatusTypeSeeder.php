<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemStatusTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses=[
            ['en_name'      =>  'dispute'],
            ['en_name'      =>  'dispute resolved'],
            ['en_name'      =>  'Litigation'],
            ['en_name'      =>  'on going'],
            ['en_name'      =>  'promise to pay'],
        ];
        DB::table('item_status_type')->insert($statuses);
    }
}
