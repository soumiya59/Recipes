<x-app-layout>
    <div class="pagetitle">
        <h1>Manage Recipe</h1>
    </div>
  
    <section class="section">
        
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Create Recipe</h5>
                
                <div class="row">
                    
                            <div class="col-lg-12">
                                
                                <x-validation-error />

                                <form class="row g-3" action="{{ route('recipe.create') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="col-12">
                                                <label>Recipe</label>
                                                <input type="text" class="form-control" name="recipe">
                                        </div>
                                        <div class="col-12">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                                <label>Choose Image</label>
                                                <input type="file" name="imagepath" class="form-control">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Create Recipe</button>
                                        </div>
                                  </form>

                            </div>

                </div>

              </div>
            </div>
  
         
    </section>

</x-app-layout>
