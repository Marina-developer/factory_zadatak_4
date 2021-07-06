<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Table;

class Tag extends Model
{
    protected $guarded = [];
    protected $table = 'tags';

    public function meals()
    {
        return $this->belongsToMany('App\Models\Meal', 'meal_tags', 'meal_id', 'tag_id');
    }
}
