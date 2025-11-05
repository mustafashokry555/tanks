<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date("Y-m-d H:i:s");
        $permissions = [
            'admin_create', 'admin_edit', 'admin_delete',
            'contact_control', 'setting_change',
            'slider_create', 'slider_edit', 'slider_delete',
            'social_create', 'social_edit', 'social_delete'
        ];

        $data = [];
        foreach($permissions as $permission) {
            array_push($data, [
                "name" => $permission,
                "created_at" => $date,
                "updated_at" => $date,
            ]);
        }

        Permission::insert($data);
    }
}
