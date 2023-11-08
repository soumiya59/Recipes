<?php

namespace App\Http\Controllers\Ingredient;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientRequest;
use App\Models\ingredient;
use App\Models\recipe;
use App\Models\unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IngredientController extends Controller
{
    //
    public function index()
    {
        $recipe_id = Session::get('recipe_id');
        $recipe_data = recipe::find($recipe_id);
        $unit_data = unit::all();
        $ingredient_data = ingredient::where('recipe_id' , '=' , $recipe_id)->get();
        // dd($ingredient_data);

        return view('Ingredients.Ingredients' , [
            'recipe_data' => $recipe_data , 
            'unit_data' => $unit_data , 
            'ingredient_data' => $ingredient_data
        ]);
    }

    public function create(IngredientRequest $request)
    {
        try {
            $data = [
                'ingredient' => $request->ingredient , 
                'unit_id' => $request->unit_id , 
                'recipe_id' => $request->recipe_id , 
                'quantity' => $request->quantity
            ];
    
            ingredient::create($data);
            $request->session()->flash('alert-success' , 'Ingredient saved successfully!');
        } catch (\Exception $e) {
            $request->session()->flash('alert-danger' , $e->getMessage());
        }
        return redirect()->route('ingredient.index');
    }

    public function destroy(Request $request)
    {
        try {
            $ingredient_data = ingredient::find($request->ingredient_id);

            if(!$ingredient_data){
                    $request->session()->flash('alert-danger' , 'Ingredient do not exist!');
            }

            $ingredient_data->delete();
            $request->session()->flash('alert-success' , 'Ingredient deleted successfully!');
        } catch (\Exception $e) {
            $request->session()->flash('alert-danger' , $e->getMessage());
        }

        return redirect()->route('ingredient.index');
    }

}
