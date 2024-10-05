<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actions = [
            [
                // 'id' => 1,
                'en_name' => 'Litigation',
                'icon' => 'fa-bolt',
            ],
            [
                // 'id' => 2,
                'en_name' => 'Dunning letter (Standard letter)',
                'icon' => 'fa-bolt',
            ],
            [
                // 'id' => 3,
                'en_name' => 'Dunning letter with AR (Acknowledgment of Receipt)',
                'icon' => 'fa-bolt',
            ],
            [
                // 'id' => 4,
                'en_name' => 'Dunning letter via ERM (Electronic Registered Mail)',
                'icon' => 'fa-lock',
            ],
            [
                // 'id' => 5,
                'en_name' => 'E-mail',
                'icon' => 'fa-envelope',
            ],
            [
                // 'id' => 6,
                'en_name' => 'Fax',
                'icon' => 'fa-fax',
            ],
            [
                // 'id' => 7,
                'en_name' => 'SMS',
                'icon' => 'fa-mobile',
            ],
            [
                // 'id' => 8,
                'en_name' => 'Phone',
                'icon' => 'fa-phone',
            ],
        ];
        //DB::table('action_types')->truncate();
        DB::table('action_types')->insert($actions);
    }
}
