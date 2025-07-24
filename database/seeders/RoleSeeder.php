<?php

namespace Database\Seeders;

use DB;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles
        $roles = [
            ['name' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User', 'created_at' => now(), 'updated_at' => now()],
        ];

        Role::insert($roles);
    }
}
