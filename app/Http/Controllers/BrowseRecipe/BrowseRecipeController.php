<?php

namespace App\Http\Controllers\BrowseRecipe;

use App\Http\Controllers\Controller;
use App\Models\ingredient;
use App\Models\procedure;
use App\Models\recipe;
use Illuminate\Http\Request;

class BrowseRecipeController extends Controller
{
    //

    public function index()
    {
        return view('BrowseRecipe.BrowseRecipe')->with('recipe_data', recipe::all(), 'ingredient_data', ingredient::all(), 'procedure_data', procedure::all());
        
    }

    public function search(Request $request)
    {
        $recipe_data = recipe::where('recipe' , 'LIKE' , '%'.$request->search.'%')->first();
        if($recipe_data){
            $ingredient_data = ingredient::where('recipe_id' , '=' , $recipe_data->id)->get();
            $procedure_data = procedure::where('recipe_id' , '=' , $recipe_data->id)->orderBy('number', 'asc')->get();
        }
        
        return view('BrowseRecipe.BrowseRecipe' , [
            'recipe_data' => $recipe_data , 
            'ingredient_data' => $ingredient_data , 
            'procedure_data' => $procedure_data
        ]);
    }

}