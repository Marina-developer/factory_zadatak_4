<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\Ingredient;
use App\Models\MealIngredient;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MealIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            MealIngredient::create(array(
                   'meal_id' => Meal::all()->random()->id,
                   'ingredient_id' => Ingredient::all()->random()->id,
                ));
        }
    }
}
