<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = RoleEnum::ROLES;
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
