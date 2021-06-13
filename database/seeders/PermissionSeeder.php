<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            'super admin' => [], // all
            'admin' => [
                'roles' => ['view roles', 'add roles', 'edit roles', 'delete roles'],
                'permissions' => ['view permissions', 'add permissions', 'edit permissions', 'delete permissions'],
                'dashboard' => ['view dashboard', 'view crud generator', 'view settings', 'edit settings',
                ],
            ]
        ];

        foreach ($roles as $roleName => $group) {

            $role = Role::firstOrCreate(['name' => $roleName]);

            if(! is_array($group)) continue;

            foreach ($group  as $name => $permissions) {

                foreach ($permissions as $permission) {

                    if(! is_array($group)) continue;

                    $role->permissions()->firstOrCreate(['name' => $permission, 'group' => $name]);
                }
            }
        }
    }
}
