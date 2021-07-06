<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', [App\Http\Controllers\PagesController::class, 'lang'])->name('lang');

 //your translation routes
Route::get('/', function () {
    return redirect('/en');
});
//Route::get('change/lang', 'LocalizationController@lang_change')->name('LangChange');
Route::group([
  'prefix' => '{locale}',
  'where' => ['locale' => '[a-zA-Z]{2}'],
  'middleware' => 'setlocale'], function () {
      Route::get('/', function () {
          return redirect(app()->getLocale());
      });
      //Route::get('/{locale}', [App\Http\Controllers\PagesController::class, 'lang'])->name('lang');
      Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
      Route::get('/meals', [App\Http\Controllers\PagesController::class, 'meals'])->name('meals');
      Route::get('/ingredients', [App\Http\Controllers\PagesController::class, 'ingredients'])->name('ingredients');
      Route::get('/categories', [App\Http\Controllers\PagesController::class, 'categories'])->name('categories');
      Route::get('/tags', [App\Http\Controllers\PagesController::class, 'tags'])->name('tags');
      Route::get('/details/{id}', [App\Http\Controllers\DetailsController::class, 'show'])->name('show');
      Route::get('/details/', [App\Http\Controllers\PagesController::class, 'details'])->name('details');
  });


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
