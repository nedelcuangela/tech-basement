<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->truncate();
        Category::query()->insert([
            [
                'slug'=>'smartphones',
                'name'=>'Smartphones',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'slug'=>'laptops',
                'name'=>'Laptops',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
