<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date("Y-m-d H:i:s");
        $roles = ['super_admin', 'employee'];

        $data = [];
        foreach($roles as $role) {
            array_push($data, [
                "name" => $role,
                "created_at" => $date,
                "updated_at" => $date,
            ]);
        }

        Role::insert($data);
    }
}
