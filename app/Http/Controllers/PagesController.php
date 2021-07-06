<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Http\Requests;
use App;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function details()
    {
        return view('pages.details');
    }

    public function meals(Request $request)
    {
        $meals = Meal::orderBy('title')->paginate(10);
        $counter = count($meals);
        return view('pages.meals')->with(['meals'=> $meals, 'counter' => $counter]);
        // return response()->json(PagesResource::get(), 200);
    }

    public function ingredients()
    {
        $ingredients =  Ingredient::orderBy('title')->paginate(10);
        $counter = count($ingredients);
        return view('pages.ingredients') -> with(['ingredients' => $ingredients, 'counter' => $counter]);
    }

    public function categories()
    {
        $categories = Category::orderBy('title')->paginate(10);
        $counter = count($categories);
        return view('pages.categories') -> with(['categories' => $categories, 'counter' => $counter]);
    }

    public function tags()
    {
        $tags = Tag::orderBy('title')->paginate(10);
        $counter = count($tags);
        return view('pages.tags') -> with(['tags' => $tags, 'counter' => $counter]);
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function redirectTo()
    {
        return app()->getLocale() . '/';
    }
}
