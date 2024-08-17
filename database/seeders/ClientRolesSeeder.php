<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use App\Models\ClientRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientRoles = RoleEnum::CLIENTROLES;
        foreach ($clientRoles as $clientRole) {
            ClientRole::create(['name' => $clientRole]);
        }
    }
}
