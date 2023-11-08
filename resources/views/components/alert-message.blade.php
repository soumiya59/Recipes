@if(Session::has('alert-success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('alert-success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @elseif(Session::has('alert-danger'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('alert-danger') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif