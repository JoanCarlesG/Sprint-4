<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            'name' => 'Admin'
        ]);
        $role2 = Role::create([
            'name' => 'User'
        ]);
        
        Permission::create(['name' => 'user.index'])->assignRole($role1);
        Permission::create(['name' => 'user.edit'])->assignRole($role1);
        Permission::create(['name' => 'user.update'])->assignRole($role1);

        Permission::create(['name' => 'teams.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'teams.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'teams.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'teams.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'matches.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'matches.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'matches.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'matches.destroy'])->syncRoles([$role1, $role2]);
    } 
}
