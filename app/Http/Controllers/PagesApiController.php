<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Meal;
use App;
use Validator;
use App\Http\Resources\MealResource as MealResource;
use App\Http\Resources\CategoryResource as CategoryResource;
use App\Http\Resources\IngredientResource as IngredientResource;
use App\Http\Resources\TagResource as TagResource;
class PagesApiController extends Controller
{
    public function index()
    {
        return redirect('/api/meals');
    }
 
    public function meals(Request $request)
    {
        $meals = Meal::with('categories', 'tags', 'ingredients')->paginate(request()->all());;  
        return response()->json($meals,200);
    }

    public function ingredients()
    {
        return IngredientResource::collection(Ingredient::all());
    }

    public function categories()
    {
    //    $meals = Meal::with('tags')->get();
     //   $categories= Category::with('meals')->get();
       // return response()->json($categories,200);
    //    return response()->json(['meals' => $meals, 'categories' => $categories]);
       // return CategoryResource::collection($categories);
       return categoryResource::collection(Category::all());
    }

    public function tags()
    {
        return TagResource::collection(Tag::all());
    }

    public function meals_save(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'title' => 'required|string',
            'description' => 'required',
            'description_cro' => 'required',
            'category_id' => 'integer|required',
            
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['error'=>$validator->errors()],
                401
            );
        }
        $save=new Meal;
        $save->title=$request->title;
        $save->description=$request->description;
        $save->description_cro=$request->description_cro;
        $save->category_id=$request->category_id;
        $save->save();
    }

   
    public function categories_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'title_cro' => 'required|string',
            'title' => 'required|string',
            'slug' => 'required|string|unique',
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['error'=>$validator->errors()],
                401
            );
        }

        $save=new Category;
        $save->title=$request->title;
        $save->title_cro=$request->title_cro;
        $save->slug=$request->slug;
        $save->save();
    }

    public function ingredients_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'title_cro' => 'required|string',
            'title' => 'required|string',
            'slug' => 'required|string|unique',
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['error'=>$validator->errors()],
                401
            );
        }

        $save=new Ingredient;
        $save->title=$request->title;
        $save->title_cro=$request->title_cro;
        $save->slug=$request->slug;
        $save->save();
    }

    public function tags_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'title_cro' => 'required|string',
            'title' => 'required|string',
            'slug' => 'required|string|unique',
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['error'=>$validator->errors()],
                401
            );
        }

        $save=new Tag;
        $save->title=$request->title;
        $save->title_cro=$request->title_cro;
        $save->slug=$request->slug;
        $save->save();
    }

    public function meal_tags_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'meal_id' => 'required|integer|',
            'tag_id' => 'required|integer|',
            
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['error'=>$validator->errors()],
                401
            );
        }

        $save=new MealTag;
        $save->meal_id=$request->meal_tag;
        $save->tag_id=$request->tag_id;
       
        $save->save();
    }

    public function meal_ingredients_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'meal_id' => 'required|integer|',
            'ingredient_id' => 'required|integer|',
            
        ]);

        if ($validator->fails()) {
            return response()->json(
                ['error'=>$validator->errors()],
                401
            );
        }

        $save=new MealIngredient;
        $save->meal_id=$request->meal_id;
        $save->ingredient_id=$request->ingredient_id;
       
        $save->save();
    }
}
