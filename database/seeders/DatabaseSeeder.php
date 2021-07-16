<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Role;
use App\Models\Permission;
use App\RolePermission;
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
         \App\Models\User::factory(10)->create();

        Product::create([
            'name' => 'iPhone 12 Pro Max',
            'brand' => 'Apple',
            'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
            'category' => 'smartphones',
            'price' => '5699',
            'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
            'image' => $faker->imageUrl($width = 400, $height = 400),
            'stock' => $faker->randomDigit,
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro Max',
            'brand' => 'Apple',
            'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
            'category' => 'smartphones',
            'price' => '4699',
            'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
            'image' => $faker->imageUrl($width = 400, $height = 400),
            'stock' => $faker->randomDigit,
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S20',
            'brand' => 'Samsung',
            'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
            'category' => 'smartphones',
            'price' => '4699',
            'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
            'image' => $faker->imageUrl($width = 400, $height = 400),
            'stock' => $faker->randomDigit,
        ]);

        Product::create([
            'name' => 'MacBook Pro 13 inch',
            'brand' => 'Apple',
            'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
            'category' => 'laptops',
            'price' => '4699',
            'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
            'image' => $faker->imageUrl($width = 400, $height = 400),
            'stock' => $faker->randomDigit,
        ]);

        Product::create([
            'name' => 'Lenovo Idea Pad',
            'brand' => 'Lenovo',
            'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
            'category' => 'laptops',
            'price' => '4699',
            'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
            'image' => $faker->imageUrl($width = 400, $height = 400),
            'stock' => $faker->randomDigit,
        ]);

        Role::create([
            'name' => 'Administrator',
            'slug' => 'admin'
        ]);

        Role::create([
            'name' => 'Client',
            'slug' => 'client'
        ]);

        Permission::create([
           'name' => 'Full control',
            'slug' => 'full_access',
        ]);


        Permission::create([
            'name' => 'Modify',
            'slug' => 'modify_files',
        ]);

        Permission::create([
            'name' => 'Read and Execute',
            'slug' => 'read_execute',
        ]);

        Permission::create([
            'name' => 'Read Files',
            'slug' => 'read',
        ]);

        Permission::create([
            'name' => 'Write Files',
            'slug' => 'write',
        ]);

        \App\Models\RolePermission::create([
           'role_slug' => 'admin',
            'permission_slug' => 'full_access'
        ]);

        \App\Models\RolePermission::create([
            'role_slug' => 'client',
            'permission_slug' => 'read'
        ]);
    }
}
