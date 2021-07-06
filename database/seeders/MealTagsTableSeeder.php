<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\Tag;
use App\Models\MealTag;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MealTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            MealTag::create(array(
                   'meal_id' => Meal::all()->random()->id,
                   'tag_id' => Tag::all()->random()->id,
                ));
        }
    }
}
