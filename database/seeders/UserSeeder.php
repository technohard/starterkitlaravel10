<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles if not exist
        $roles = ['User', 'Seller', 'Admin', 'Super Admin'];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(
                ['name' => $roleName, 'guard_name' => 'web'],
                ['id' => Str::uuid()] // Ini penting: tetapkan UUID manual
            );
        }

        // Users data
        $users = [
            [
                'name' => 'Normal User',
                'username' => 'user',
                'email' => 'user@email.com',
                'role' => 'User'
            ],
            [
                'name' => 'Seller User',
                'username' => 'seller',
                'email' => 'seller@email.com',
                'role' => 'Seller'
            ],
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@email.com',
                'role' => 'Admin'
            ],
            [
                'name' => 'Super Admin User',
                'username' => 'superadmin',
                'email' => 'superadmin@email.com',
                'role' => 'Super Admin'
            ],
        ];

        foreach ($users as $data) {
            $user = User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'id' => Str::uuid(),
                    'name' => $data['name'],
                    'username' => $data['username'],
                    'password' => bcrypt('password'), // default password
                    'status' => 'active'
                ]
            );

            $user->syncRoles([$data['role']]);
        }
    }
}
