<?php

use App\Http\Controllers\BrowseRecipe\BrowseRecipeController;
use App\Http\Controllers\Ingredient\IngredientController;
use App\Http\Controllers\ManageRecipe\ManageRecipeController;
use App\Http\Controllers\Procedures\ProcedureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('Recipe')->as('recipe.')->controller(ManageRecipeController::class)->group(function (){

        Route::get('Manage' , 'index')->name('manage');
        Route::get('Add' , 'addRecipe')->name('add');
        Route::get('Edit' , 'edit')->name('edit');
        Route::post('Create' , 'create')->name('create');
        Route::put('Update' , 'update')->name('update');
        Route::delete('Destroy' , 'destroy')->name('destroy');

    });

    Route::prefix('Procedure')->as('procedure.')->controller(ProcedureController::class)->group(function() {

        Route::get('Index' , 'index')->name('index');
        Route::post('Create' , 'create')->name('create');
        Route::delete('Destroy' , 'destroy')->name('destroy');

    });

    Route::prefix('Ingredient')->as('ingredient.')->controller(IngredientController::class)->group(function(){

        Route::get('Index' , 'index')->name('index');
        Route::post('Create' , 'create')->name('create');
        Route::delete('Destroy' , 'destroy')->name('destroy');

    });

    //pass session
    Route::get('/Session/{id}/{route}' , [ManageRecipeController::class , 'passSession'])->name('pass.session');

    Route::prefix('Recipe')->as('recipe.')->controller(BrowseRecipeController::class)->group(function(){

        Route::get('Browse' , 'index')->name('browse');
        Route::post('Search' , 'search')->name('search');

    });

    

});

require __DIR__.'/auth.php';
