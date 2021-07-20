<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Product::query()->truncate();
        Product::query()->insert([
            [
                'name' => 'iPhone 12 Pro Max',
                'brand' => 'Apple',
                'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
                'category' => 'smartphones',
                'price' => '5699',
                'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.',
                'image' => $faker->imageUrl($width = 400, $height = 400),
                'stock' => $faker->randomDigit,
            ],
            [
                'name' => 'iPhone 11 Pro Max',
                'brand' => 'Apple',
                'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
                'category' => 'smartphones',
                'price' => '4699',
                'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
                'image' => $faker->imageUrl($width = 400, $height = 400),
                'stock' => $faker->randomDigit,
            ],
            [
                'name' => 'Samsung Galaxy S20',
                'brand' => 'Samsung',
                'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
                'category' => 'smartphones',
                'price' => '4699',
                'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
                'image' => $faker->imageUrl($width = 400, $height = 400),
                'stock' => $faker->randomDigit,
            ],
            [
                'name' => 'MacBook Pro 13 inch',
                'brand' => 'Apple',
                'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
                'category' => 'laptops',
                'price' => '4699',
                'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
                'image' => $faker->imageUrl($width = 400, $height = 400),
                'stock' => $faker->randomDigit,
            ],
            [
                'name' => 'Lenovo Idea Pad',
                'brand' => 'Lenovo',
                'specifications' => 'A14 Bionic depaseste cu mult orice alt cip de smartphone. Sistemul de camere Pro duce fotografia in mediile slab luminate la un nivel superior, cu un salt si mai senzational pe iPhone 12 Pro Max. Iar Ceramic Shield este de patru ori mai rezistenta la cadere. Prima impresie este excelenta. Stai sa vezi si restul.',
                'category' => 'laptops',
                'price' => '4699',
                'description' => 'Iti prezentam Ceramic Shield. Este fabricata prin introducerea in sticla a cristalelor nano-ceramice, care sunt mai dure decat majoritatea metalelor. Pare simplu, dar este incredibil de dificil, fiindca majoritatea materialelor ceramice nu sunt transparente. Prin controlarea tipului de cristale si a gradului de cristalinitate, am dezvoltat o formula exclusiva care maximizeaza rezistenta ceramicii, pastrandu-i, in acelasi timp, transparenta optica. Datorita acestei inovatii, Ceramic Shield a devenit optiunea ideala pentru ecran. Este o premiera pentru orice smartphone. Si e mai rezistenta decat sticla oricarui alt smartphone.

 ',
                'image' => $faker->imageUrl($width = 400, $height = 400),
                'stock' => $faker->randomDigit,
            ],
        ]);
    }
}
