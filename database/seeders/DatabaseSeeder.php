<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::factory()->create([
            'name'  => 'admin',
            'email' => 'admin@eduspark.com',
        ]);

        $roles = Role::factory()->createMany([
            ['name' => 'admin'],
            ['name' => 'user'],
        ]);

        $permissions = Permission::factory()->createMany([
            ['name' => 'read'],
            ['name' => 'write'],
        ]);
    }
}
