<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Modules\User\Models\User;
use App\Enums\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role as SpatieRole;

class UserSeeder extends Seeder
{
    protected const USERS = [
        [
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'super@admin.com',
            'username' => 'super_admin',
            'password' => 'password',
            'role' => Role::SUPER_ADMIN->value,
        ],
        [
            'first_name' => 'Shop',
            'last_name' => 'Admin',
            'email' => 'shop@admin.com',
            'username' => 'shop_admin',
            'password' => 'password',
            'role' => Role::SHOP_ADMIN->value,
        ],
        [
            'first_name' => 'Shop',
            'last_name' => 'User',
            'email' => 'shop@user.com',
            'username' => 'shop_user',
            'password' => 'password',
            'role' => Role::SHOP_USER->value,
        ],
        [
            'first_name' => 'Guest',
            'last_name' => 'User',
            'email' => 'user@example.com',
            'username' => 'user',
            'password' => 'password',
            'role' => Role::USER->value,
        ],
    ];

    public function run()
    {
        foreach (self::USERS as $user_details) {
            $user = User::create([
                ...$user_details,
                'password' => Hash::make($user_details['password']),
            ]);
            $user->assignRole(SpatieRole::findByName($user_details['role']));
        }
    }
}
