<?php

namespace App\Http\Controllers\ManageRecipe;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecipeRequest;
use App\Models\recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManageRecipeController extends Controller
{
    //
    public function index()
    {
        $recipe = recipe::all();

        return view('ManageRecipe.ManageRecipe' , [
            'recipes' => $recipe
        ]);
    }

    public function addRecipe()
    {
        return view('ManageRecipe.AddRecipeForm');
    }

    public function create(RecipeRequest $request)
    {
        try {
            $data = [
                'recipe' => $request->recipe , 
                'description' => $request->description
            ];

            if($request->hasFile('imagepath'))
            {
                $image = $request->file('imagepath');
                $imagepath = $image->store('recipe' , 'public');
                $data['imagepath'] = $imagepath;
            }

            recipe::create($data);
            // dd($data['imagepath']);

            $request->session()->flash('alert-success' , 'Recipe successfully created!');

        } catch (\Exception $e) {
            
            $request->session()->flash('alert-danger' , $e->getMessage());
        }

        return redirect()->route('recipe.manage');
    }

    public function passSession($id,$route)
    {
            Session::put('recipe_id' , $id);
            return redirect()->route($route);
    }

    public function edit()
    {   
        // dd(Session::get('recipe_id'));
        $recipe_data = recipe::where('id' , "=" , Session::get('recipe_id'))->first();

        if(!$recipe_data){
                request()->session()->flash('alert-danger' , 'Recipe dont exist');
                return redirect()->route('recipe.manage');
        }

        return view('ManageRecipe.EditRecipe' , [
            'recipe_data' => $recipe_data
        ]);
    }

    public function update(RecipeRequest $request)
    {
        
        try {
            
            $data = [
                'recipe' => $request->recipe , 
                'description' => $request->description
            ];
    
            $recipe_update = recipe::where("id" , "=" , $request->id)->first();
    
            if(!$recipe_update){
                    $request->session()->flash('alert-danger' , 'Recipe do not exist!');
                    return redirect()->route('recipe.manage');
            }
    
            if($request->hasFile('imagepath')){
                $image = $request->file('imagepath');
                $imagepath = $image->store('recipe' , 'public');
                $data['imagepath'] = $imagepath;
            }
    
            $recipe_update->update($data);
            $request->session()->flash('alert-success' , 'Recipe updated successfully!');

        } catch (\Exception $e) {
            $request->session()->flash('alert-danger' , $e->getMessage());
        }

        return redirect()->route('recipe.manage');
    }

    public function destroy(Request $request)
    {
        
        try {
            $recipe_data = recipe::find($request->recipe_id);

            if(!$recipe_data){
                    $request->session()->flash('alert-danger' , 'recipe do not exist!');
            }

            $recipe_data->delete();
            $request->session()->flash('alert-success' , 'Recipe deleted successfully!');
        } catch (\Exception $e) {
            $request->session()->flash('alert-danger' , $e->getMessage());
        }

        return redirect()->route('recipe.manage');
    }

}
