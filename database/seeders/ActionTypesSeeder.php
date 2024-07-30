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
        $actions =[
            ['en_name'=>'Litigation'],
            ['en_name'=>'Dunning letter (Standard letter)'],
            ['en_name'=>'Dunning letter with AR (Acknowledgment of Receipt)'],
            ['en_name'=>'Dunning letter via ERM (Electronic Registered Mail)'],
            ['en_name'=>'E-mail'],
            ['en_name'=>'Fax'],
            ['en_name'=>'SMS'],
            ['en_name'=>'Phone'],


        ];
        DB::table('action_types')->insert($actions);
    }
}
