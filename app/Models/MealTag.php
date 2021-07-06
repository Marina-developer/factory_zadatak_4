<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\Meal;
use App\Models\Ingredient;
class MealTag extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'meal_tags', 'meal_id', 'tag_id');
    }
    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'meal_tags', 'meal_id', 'tag_id');
    }
}
