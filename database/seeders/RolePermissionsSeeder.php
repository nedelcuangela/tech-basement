<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::query()->insert([
            [
                'role_slug' => 'admin',
                'permission_slug' => 'full_access'
            ], [
                'role_slug' => 'client',
                'permission_slug' => 'read'
            ],
        ]);
    }
}
