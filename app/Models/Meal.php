<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Table;

class Meal extends Model
{
    protected $guarded = [];
    protected $table = 'meals';

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'meal_categories', 'meal_id', 'category_id');
                   
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient', 'meal_ingredients', 'meal_id', 'ingredient_id');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'meal_tags', 'meal_id', 'tag_id');
    } 
}
