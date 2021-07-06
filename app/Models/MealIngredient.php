<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Meal;
use App\Models\Ingredient;
class MealIngredient extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
}
