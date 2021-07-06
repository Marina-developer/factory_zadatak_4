<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            $faker = Faker::create();
            $title = $faker->word;
            $slug = Str::slug($title, '-');

            Ingredient::create(array(
                    'title' => $title,
                    'title_cro' => $faker->word,
                    'slug' => $slug,
                ));
        }
    }
}
