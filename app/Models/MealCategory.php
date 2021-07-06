<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'meal_categories', 'meal_id', 'category_id');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'meal_categories', 'meal_id', 'category_id');
    }
}
