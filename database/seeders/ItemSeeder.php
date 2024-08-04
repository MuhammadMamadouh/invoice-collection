<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['en_name'=>'Credit note'],
            ['en_name'=>'Downpayment request'],
            ['en_name'=>'Draft'],
            ['en_name'=>'Invoice'],
            ['en_name'=>'Miscellaneous transaction'],
            ['en_name'=>'Payment'],
        ];
        DB::table('item_types')->insert($items);
    }
}