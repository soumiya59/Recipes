<x-app-layout>
    <div class="pagetitle">
        <h1>Manage Recipe</h1>
    </div>
  
    <section class="section">
        
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Manage Ingredients for {{$recipe_data->recipe}}</h5>
                
                <div class="row">
                            <x-alert-message />
                            <x-validation-error />

                            <div class="col-md-5">
                                                                
                                
                                <form class="row g-3" action="{{route('ingredient.create')}}" method="POST">
                                    @csrf
                                        <input type="hidden" name="recipe_id" value="{{ $recipe_data->id }}">
                                        <div class="col-12">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" class="form-control" name="quantity">
                                        </div>
                                        <div class="col-12">
                                                <label class="form-label">Select Unit</label>
                                                <select name="unit_id" class="form-control">
                                                      @foreach ($unit_data as $unit)
                                                            <option value="{{$unit->id}}">{{$unit->unit}}</option>
                                                      @endforeach
                                                </select>
                                        </div>
                                        <div class="col-12">
                                                <label class="form-label">Ingredient</label>
                                                <input type="text" class="form-control" name="ingredient">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Save Ingredient</button>
                                        
                                </form>
                            </div>


                            <div class="col-md-5 offset-md-2">
                                    <h3>List of Ingredients</h3>
                                    
                                    <ul class="list-group">

                                        @foreach ($ingredient_data as $data)
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                <div class="fw-light">{{$data->quantity}} {{$data->unit->unit}} {{$data->ingredient}}</div>
                                                </div>

                                                <form action="{{route('ingredient.destroy')}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="ingredient_id" value="{{$data->id}}">
                                                    <button type="submit" class="badge bg-primary rounded-pill">x</button>
                                                </form>

                                            </li>
                                        @endforeach

                                      </ul>
                            </div>

                </div>
  
              </div>
            </div>
  
         
    </section>
  
  </x-app-layout>
  