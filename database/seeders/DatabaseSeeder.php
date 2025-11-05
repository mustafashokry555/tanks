<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'Super Admin',
            'phone' => '00000000',
            'password' => Hash::make('12345678'),
        ]);
    }
}
