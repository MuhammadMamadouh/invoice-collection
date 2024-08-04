<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'first_name'        => 'sys admin',
            'email'             => 'admin@admin.com',
            'password'          => bcrypt('12345678'),
            'is_super_admin'    => 1,
        ]);
    }
}
