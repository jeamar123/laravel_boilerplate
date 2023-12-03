<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role as SpatieRole;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    protected const PERMISSIONS = [
        'user:view',
        'user:create',
        'user:update',
        'user:delete',
        'categories:view',
        'categories:create',
        'categories:update',
        'categories:delete',
        'shop:view',
        'shop:create',
        'shop:update',
        'shop:delete',
        'activity_log:view',
        'activity_log:create',
        'activity_log:update',
        'activity_log:delete'
    ];

    protected const ROLES = [
        Role::SUPER_ADMIN->value => [
            'user:view',
            'user:create',
            'user:update',
            'user:delete',
            'categories:view',
            'categories:create',
            'categories:update',
            'categories:delete',
            'shop:view',
            'shop:create',
            'shop:update',
            'shop:delete',
            'activity_log:view',
            'activity_log:create',
            'activity_log:update',
            'activity_log:delete',
        ],
        Role::SHOP_ADMIN->value => [
            'shop:view',
            'shop:create',
            'shop:update',
            'shop:delete',
            'categories:view',
            'categories:create',
            'activity_log:view',
        ],
        Role::SHOP_USER->value => [
            'shop:view',
            'shop:create',
            'shop:update',
        ],
        Role::USER->value => [
            'shop:view',
        ]
    ];

    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        foreach (self::PERMISSIONS as $permission) {
           Permission::findOrCreate($permission);
        }

        foreach (self::ROLES as $name => $permissions) {
            SpatieRole::create(['name' => $name])
                ->permissions()
                ->sync(Permission::whereIn('name', $permissions)->pluck('id'));
        }
    }
}
