<x-app-layout>
    <div class="pagetitle">
        <h1>Manage Recipe</h1>
    </div>
  
    <section class="section">
        
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Edit Recipe</h5>
                
                <div class="row">

                            <div class="col-lg-12">
                                <a href="{{route('pass.session' , ['id' => $recipe_data->id , 'route' => 'procedure.index'])}}" class="btn btn-outline-info float-end">Procedures</a>
                                <a href="{{route('pass.session' , ['id' => $recipe_data->id , 'route' => 'ingredient.index'])}}" class="btn btn-outline-success float-end ">Ingredients</a>
                            </div>

                            <div class="col-lg-12">
                                
                                

                                <x-validation-error />

                                

                                <form class="row g-3" action="{{ route('recipe.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <input type="hidden" name="id" value="{{ $recipe_data->id }}">
                                        <div class="col-md-12 text-center">
                                            <img src="{{ asset('storage/'.$recipe_data->imagepath) }}" class="img img-thumbnail" width="30%">
                                        </div>
                                        <div class="col-12">
                                                <label>Recipe</label>
                                                <input type="text" class="form-control" name="recipe" value="{{ $recipe_data->recipe }}">
                                        </div>
                                        <div class="col-12">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" cols="30" rows="10">{{ $recipe_data->description }}</textarea>
                                        </div>
                                        <div class="col-12">
                                                <label>Choose Image</label>
                                                <input type="file" name="imagepath" class="form-control">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Update Recipe</button>
                                        </div>
                                  </form>

                            </div>

                </div>

              </div>
            </div>
  
         
    </section>

</x-app-layout>
