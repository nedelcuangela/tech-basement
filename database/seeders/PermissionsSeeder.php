<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->truncate();
        Permission::query()->insert([
            [
                'name' => 'Full control',
                'slug' => 'full_access',
            ],
            [
                'name' => 'Read Files',
                'slug' => 'read',
            ],
        ]);
    }
}
