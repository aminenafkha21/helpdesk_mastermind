

<!-- Latest compiled and minified JavaScript -->

@extends('layouts.userlayout.master')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Ticket</h4>
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
                 
                  <form class="forms-sample" action="{{route('tickets.store') }}" method="POST">
                  @csrf

                    <div class="form-group">
                      <label for="ref">Ref.</label>
                      <input type="text"  name="ref" class="form-control" id="ref" placeholder="Reference">
                    </div>
                    <div class="form-group">
                      <label for="sujet">Subject</label>
                      <input type="text"  name="sujet" class="form-control" id="sujet" placeholder="Sujet">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="20"></textarea>  
                    </div>
                    <div class="form-group">
                      <label for="service">Service</label>
                      <input type="text" name="service" class="form-control" id="service" placeholder="Service">
                    </div>
                    
                    <div class="form-group">
                    <label for="crit">Priority</label>
                    <select class="form-control" name="criticité" id="criticité">
                                        <option selected disabled>----Select priority----</option>
                                        <option value="urgent">Urgent</option>
                                        <option value="normal">Normal</option>
                                        <option value="low">Low</option>
                    </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary mr-2">Add</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>

@endsection