<?php

namespace Database\Seeders;

use App\Enum\EmailData;
use App\Models\EmailType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emailTypes = EmailData::EMAIL_TYPE;
        foreach ($emailTypes as $emailType){
            EmailType::create(['name' => $emailType]);
        }
    }
}
