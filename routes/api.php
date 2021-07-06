<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PagesResource as PagesResource;
use App\Models\Meal;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Table;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [App\Http\Controllers\PagesApiController::class, 'index']);
Route::get('/meals', [App\Http\Controllers\PagesApiController::class, 'meals'])->name('meals');
Route::post('/meals', [App\Http\Controllers\PagesApiController::class, 'meals_save'])->name('meals_save');
Route::get('/ingredients', [App\Http\Controllers\PagesApiController::class, 'ingredients'])->name('ingredients');
Route::post('/ingredients', [App\Http\Controllers\PagesApiController::class, 'ingredients_save'])->name('ingredients_save');
Route::get('/categories', [App\Http\Controllers\PagesApiController::class, 'categories'])->name('categories');
Route::post('/categories', [App\Http\Controllers\PagesApiController::class, 'categories_save'])->name('categories_save');
Route::get('/tags', [App\Http\Controllers\PagesApiController::class, 'tags'])->name('tags');
Route::post('/tags', [App\Http\Controllers\PagesApiController::class, 'tags_save'])->name('tags_save');
Route::post('/meal_tags', [App\Http\Controllers\PagesApiController::class, 'meal_tags_save'])->name('meal_tags_save');
Route::post('/meal_ingredients', [App\Http\Controllers\PagesApiController::class, 'meal_ingredients_save'])->name('meal_ingredients_save');



//Route::get('/meals', function (Request $request){
//$categories= Meal::with('categories')->get();
// return PagesResource::collection($categories);
//  return PagesResource::collection(Meal::all());
//});
