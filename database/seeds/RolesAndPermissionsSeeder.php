<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view projects']);
        Permission::create(['name' => 'view freelancers']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'freelancer']);
        $role->givePermissionTo('view projects');

        // // or may be done by chaining
        $role = Role::create(['name' => 'client'])
            ->givePermissionTo(['view freelancers']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}