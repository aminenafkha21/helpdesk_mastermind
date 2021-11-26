@extends('layouts.adminlayout.master')


@section('content')



<div class="content-wrapper">
<main>
                 @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif 
            <div class="nav-item dropdown d-lg-flex d-none">
                <a href="{{ url('/' . $page='newservice') }}" class="btn btn-info font-weight-bold">+ Create Service</a>
             </div>
    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        @foreach ($services as $item)

            <div class="col mt-3">
                <div class="card h-100 shadow-sm"> <img src="{{ asset('assets/images/' . $item->gallery) }}" class="card-img-top" alt="...">
                    <div class="label-top shadow-sm">{{$item->service_name}}</div>
                    <div class="card-body">
                        <div class="clearfix mb-3"> <span class="float-start price-hp">12354.00€</span> <span class="float-end"><a class="text-muted small" href="#">Reviews</a></span> </div>
                        <h5 class="card-title">{{$item->description}}</h5>
                        

                    </div>

                    
                    
                        <div class="text-center my-4 "> <a href="{{ url('/deleteservice/'.$item->id)}}" class="btn btn-danger">Delete</a> 
                        <a href="#" class="btn btn-warning">Edit</a> 
                        <a href="#" class="btn btn-info">Details</a> </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</main>
                
  
</div>

@endsection