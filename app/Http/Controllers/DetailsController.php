<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\MealIngredient;
use App\Models\MealCategory;
use App\Models\MealTag;
use App;
use App\Models\Category;
use\App\Models\Table;
use\App\Models\Tag;
use App\Models\Ingredient;

class DetailsController extends Controller
{
    public function create(Request $request)
    {
    }
    public function show($locale, $id)
    {
        $meal_id = Meal::find($id);

        $mealTitle =  Meal::join('meal_tags', 'meals.id', '=', 'meal_tags.meal_id')
                      ->join('meal_ingredients', 'meals.id', '=', 'meal_ingredients.meal_id')
                      ->join('meal_categories', 'meals.id', '=', 'meal_categories.meal_id')
                        ->select('meals.title', 'title')
                        ->where('meals.id', $meal_id->id)
                        ->limit(1)
                        ->get();

        $inTitle = MealIngredient::join('meals', 'meal_ingredients.meal_id', '=', 'meals.id')
                        ->join('ingredients', 'meal_ingredients.ingredient_id', '=', 'ingredients.id')
                        ->select('ingredients.title', 'ingredients.title_cro')
                        ->where('meal_ingredients.meal_id', $meal_id->id)
                        ->get();

        $categoryTitle = MealCategory::join('meals', 'meal_categories.meal_id', '=', 'meals.id')
                        ->join('categories', 'meal_categories.category_id', '=', 'categories.id')
                        ->select('categories.title', 'categories.title_cro')
                        ->where('meal_categories.meal_id', $meal_id->id)
                        ->get();
                        
        $tagsTitle = MealTag::join('meals', 'meal_tags.meal_id', '=', 'meals.id')
                        ->join('tags', 'meal_tags.tag_id', '=', 'tags.id')
                        ->select('tags.title', 'tags.title_cro')
                        ->where('meal_tags.meal_id', $meal_id->id)
                        ->get();


        /*

         $mealTitleE = DB::table('meals')
                         ->join('tables', 'meals.id', '=', 'tables.meals_id')
                         ->select('meals.title', 'title')
                         ->where('meals.id', $meal_id->id)
                         ->limit(1)
                         ->get();



         $inTitle = DB::table('tables')
                         ->join('meals', 'meals_id', '=', 'meals.id')
                        ->join('ingredients', 'ingredients_id', '=', 'ingredients.id')
                         ->select('ingredients.title', 'ingredients.title_cro')
                         ->where('meals.id', $meal_id->id)
                         ->get();

         $categoryTitle = DB::table('tables')
                         ->join('meals', 'meals_id', '=', 'meals.id')
                         ->join('categories', 'categories_id', '=', 'categories.id')
                        ->select('categories.title', 'categories.title_cro')
                         ->where('meals.id', $meal_id->id)
                         ->limit(1)
                         ->get();

         $tagsTitle = DB::table('tables')
                         ->join('meals', 'meals_id', '=', 'meals.id')
                         ->join('tags', 'tags_id', '=', 'tags.id')
                         ->select('tags.title', 'tags.title_cro')
                         ->where('meals.id', $meal_id->id)
                         ->get();*/

          

        return view('pages.details', compact('locale'))->with([
         'id'=> $id,
         'mealTitle'=> $mealTitle,
         'inTitle' => $inTitle,
         'categoryTitle' => $categoryTitle,
         'tagsTitle'=> $tagsTitle,
          ]);
    }
}
