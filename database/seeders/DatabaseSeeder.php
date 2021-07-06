<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      $this->call(CategoriesTableSeeder::class);
      $this->call(MealsTableSeeder::class);
      $this->call(IngredientsTableSeeder::class);
      $this->call(TagsTableSeeder::class);
      $this->call(MealTagsTableSeeder::class);
      $this->call(MealIngredientsTableSeeder::class);
      $this->call(MealCategoriesTableSeeder::class);
      
    }
}
