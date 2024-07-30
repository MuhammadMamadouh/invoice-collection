<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
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
            Permission::create(['name' => $role]);
        }
    }
}
