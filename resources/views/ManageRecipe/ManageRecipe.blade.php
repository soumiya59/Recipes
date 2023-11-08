<x-app-layout>
    <div class="pagetitle">
        <h1>Manage Recipe</h1>
    </div>
  
    <section class="section">
        
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Manage Recipe</h5>
                
                <div class="row">

                            <div class="col-lg-12">
                                <a href="{{ route('recipe.add') }}" class="btn btn-outline-primary float-end mb-3">Create Recipe</a>
                            </div>

                            <x-alert-message />

                            <div class="col-lg-12 table-responsive">
                                
                                        <table class="table table-bordered table-striped table-hover" width="100%">
                                            <thead>
                                                    <tr>
                                                        <th scope="col">Recipe</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($recipes as $recipe)

                                                            <tr>
                                                                    <td>{{ $recipe->recipe }}</td>
                                                                    <td><textarea>{{ $recipe->description }}</textarea></td>
                                                                    <td><img src="{{ asset('storage/'.$recipe->imagepath) }}" class="img img-thumbnail" width="15%" height="15%"></td>
                                                                    <td>
                                                                        <a href="{{ route('pass.session', ['id' => $recipe->id , 'route' => 'recipe.edit']) }}" class="btn btn-sm btn-outline-success">Edit</a>
                                                                        <form action="{{route('recipe.destroy')}}" method="POST" 
                                                                        onsubmit="return confirm('Are you sure you want to delete?');" >
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <input type="hidden" name="recipe_id" value="{{$recipe->id}}">
                                                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                                                        </form>
                                                                    </td>
                                                            </tr>
                                                        
                                                    @endforeach
                                            </tbody>
                                        </table>
                                        
                            </div>

                </div>

              </div>
            </div>
  
         
    </section>

</x-app-layout>
