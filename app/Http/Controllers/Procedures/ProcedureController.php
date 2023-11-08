<?php

namespace App\Http\Controllers\Procedures;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcedureRequest;
use App\Models\procedure;
use App\Models\recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProcedureController extends Controller
{
    //
    public function index()
    {
        $recipe_id = Session::get('recipe_id');
        $recipe_data = recipe::find($recipe_id);
        $procedure_data = procedure::where('recipe_id' , '=' , $recipe_id)
                          ->orderBy('number' , 'asc')
                          ->get();
                          

        return view('Procedures.Procedures' , [
            'recipe_data' => $recipe_data , 
            'procedure_data' => $procedure_data
        ]);
    }

    public function create(ProcedureRequest $request)
    {
            try {
                $data = [
                    'number' => $request->number , 
                    'procedure' => $request->procedure , 
                    'recipe_id' => $request->recipe_id
                ];
    
                procedure::create($data);
    
                $request->session()->flash('alert-success' , 'Procedure saved!');
            } catch (\Exception $e) {
                $request->session()->flash('alert-danger' , $e->getMessage());
            }
            return redirect()->route('procedure.index');
    }

    public function destroy(Request $request)
    {
        try {
            $procedure_data = procedure::find($request->procedure_id);
        
            if(!$procedure_data){
                    $request->session()->flash('alert-danger' , 'Procedure do not exist!');
            }

            $procedure_data->delete();
            $request->session()->flash('alert-success' , 'Procedure removed successfully!');
        } catch (\Exception $e) {
            $request->session()->flash('alert-danger' , $e->getMessage());
        }
        return redirect()->route('procedure.index');
    }

}
