<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MealsTableSeeder extends Seeder
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

            Meal::create(array(
                    'title' => $title,
                    'description' => $faker->text,
                    'description_cro' => $faker->text,
                    
                ));
        }
    }
}
