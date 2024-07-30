<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        // Define new roles
        $roles = [
            'Credit Manager',
            'Collector',
            'Sales Manager',
            'Sales Administration',
            'Financial Controller',
            'Executive Officer',
            'Guest'
        ];
       

        // Create new roles
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
