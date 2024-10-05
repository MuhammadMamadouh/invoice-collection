<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use App\Models\CollectionScenario;
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

        CollectionScenario::create([
            'en_name' => 'Default',
        ]);
        $this->call(CurrencySeeder::class);
        $this->call(ItemStatusTypeSeeder::class);
        $this->call(ItemTypeSeeder::class);
        $this->call(ActionTypesSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        User::factory(50)->create(['is_super_admin' => 0, 'role_id' => RoleEnum::COLLECTOR,]);
        $this->call(ClientSeeder::class); // faker to remove in production
        $this->call(ItemSeeder::class);
        $this->call(ClientRolesSeeder::class);
        $this->call(EmailTypeSeeder::class);
        $this->call(TypeToSeeder::class);
        $this->call(CollectionScenarioSeeder::class);


    }
}
