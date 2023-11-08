<x-app-layout>
    <div class="pagetitle">
        <h1>Manage Procedure</h1>
    </div>
  
    <section class="section">
        
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Manage Procedure for {{ $recipe_data->recipe }}</h5>
                
                <div class="row">
                            <x-alert-message />

                            <div class="col-md-5">
                                <x-validation-error />                                
                                
                                <form class="row g-3" action="{{route('procedure.create')}}" method="POST">
                                    @csrf
                                        <input type="hidden" name="recipe_id" value="{{ $recipe_data->id }}">
                                        <div class="col-12">
                                                <label class="form-label">Number</label>
                                                <input type="text" class="form-control" name="number">
                                        </div>
                                        <div class="col-12">
                                                <label class="form-label">Procedure</label>
                                                <textarea name="procedure" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Save Procedure</button>
                                        
                                        
                                </form>
                            </div>


                            <div class="col-md-5 offset-md-2">
                                    <h3>Procedures</h3>
                                    
                                    <ul class="list-group">

                                        @foreach ($procedure_data as $data)
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                <div class="fw-light">{{$data->number}}. {{$data->procedure}}</div>
                                                </div>
    
                                                <form action="{{route('procedure.destroy')}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="procedure_id" value="{{$data->id}}">
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
  