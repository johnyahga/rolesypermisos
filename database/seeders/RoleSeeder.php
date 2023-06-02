<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\HasRoles;
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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'ver-tabla'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'crear-registro'])->syncRoles([$role1]);
        Permission::create(['name' => 'editar-registro'])->syncRoles([$role1]);
        Permission::create(['name' => 'eliminar-registro'])->syncRoles([$role1]);
    }
}
