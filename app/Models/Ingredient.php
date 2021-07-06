<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Table;

class Ingredient extends Model
{
    protected $guarded = [];
    protected $table = 'ingredients';

    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
}
