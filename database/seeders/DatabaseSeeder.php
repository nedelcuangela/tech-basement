<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Role;
use App\Models\Permission;
use App\Models\RolePermission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolePermissionsSeeder::class);

         User::factory(10)->create();
    }
}
