

<!-- Latest compiled and minified JavaScript -->

@extends('layouts.adminlayout.master')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Service</h4>


           




                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                 
                  <form class="forms-sample" action="{{route('services.store') }}" method="POST">
                  @csrf

                   
                    <div class="form-group">
                      <label for="sujet">service_name</label>
                      <input type="text"  name="service_name" class="form-control" id="service_name" placeholder="service_name">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="3"></textarea>  
                    </div>
                    <div class="form-group">
                      <label for="service">gallery</label>
                      <input type="text" name="gallery" class="form-control" id="gallery" placeholder="gallery">
                    </div>
                    
                    
                
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>

@endsection