<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Meal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Table;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function meals()
    {
        return $this->HasMany(Meal::class);
    }
}
