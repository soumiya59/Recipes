<x-app-layout>
    <div class="pagetitle">
        <h1>Browse Recipe</h1>
    </div>
  
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('recipe.search') }}" method="POST" class="row">
                            @csrf
                            <div class="col-md-12">
                                <label for="search">Search</label>
                                <input type="text" id="search" name="search" class="form-control" required>
                                <button type="submit" class="btn btn-primary mt-3 float-end">Search</button>
                            </div>
                        </form>
                    </div>

                    @if(!empty($recipe_data))
                     
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
