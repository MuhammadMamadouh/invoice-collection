<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DaySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ScenarioSeeder::class);
        $this->call(ActionTypesSeeder::class);
        $this->call(RoleSeeder::class);
        // User::factory(10)->create()

        // User::factory()->create([
        //     'first_name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}