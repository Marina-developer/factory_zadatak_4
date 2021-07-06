<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Meal;
use App\Models\Category;
use App\Models\MealCategory;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
class MealCategoriesTableSeeder extends Seeder
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
            MealCategory::create(array(
                   'meal_id' =>  Meal::all()->random()->id,
                   
                   'category_id' => Category::all()->random()->id,
                   ) );
        }
    }
}
