<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->truncate();
        Role::query()->insert([
            [
                'name' => 'Administrator',
                'slug' => 'admin'
            ], [
                'name' => 'Client',
                'slug' => 'client'
            ],
        ]);
    }
}
