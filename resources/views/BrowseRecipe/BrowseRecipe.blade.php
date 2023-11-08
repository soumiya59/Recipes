<x-app-layout>
    <div class="pagetitle">
        <h1>Browse Recipe</h1>
    </div>
  
    <section class="section">
        
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">@if(!empty($recipe_data)){{ $recipe_data->recipe }}@else Recipe @endif</h5>
                
                <div class="row">
  
                            <div class="col-lg-12">
                                    <form action="{{route('recipe.search')}}" method="POST" class="row">
                                        @csrf
                                        <div class="col-md-12">
                                                <label>Search</label>
                                                <input type="text" name="search" class="form-control" required>
                                                <button type="submit" class="btn btn-primary mt-3 float-end" >Search</button>
                                        </div>
                                    </form>
                            </div>

                            @if(!empty($recipe_data))

                                        {{-- image --}}
                                        <div class="col-lg-12 text-center mt-5">
                                            <img src="{{ asset('storage/'.$recipe_data->imagepath) }}" class="img img-fluid" width="80%">
                                        </div>
                                        {{-- ingredient --}}
                                        <div class="col-md-6 mt-3">
                                            <h3>List of Ingredients</h3>
                                            <ul class="list-group">

                                                @foreach ($ingredient_data as $data)
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                        <div class="fw-light">{{$data->quantity}} {{$data->unit->unit}} {{$data->ingredient}}</div>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                        {{-- procedure --}}
                                        <div class="col-md-6 mt-3">
                                            <h3>How to cook</h3>
                                            <ul class="list-group">

                                                @foreach ($procedure_data as $data)
                                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                        <div class="fw-light">{{$data->number}}. {{$data->procedure}}</div>
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>


                            @else

                                        <div class="col-lg-12 text-center mt-5">
                                            <h1>No Data Available</h1>
                                        </div>


                            @endif

                            
  
                </div>
  
              </div>
            </div>
  
         
    </section>
  
  </x-app-layout>
  