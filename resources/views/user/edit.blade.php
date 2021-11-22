@extends('layouts.userlayout.master')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Ticket</h4>


                  
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
                   
                  <form class="forms-sample" action="/edit" method="POST">
                  @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="form-group">
                      <label for="ref">Ref.</label>
                      <input type="text"  name="ref" class="form-control" id="ref" placeholder="Reference" value="{{$data['ref']}}">
                    </div>
                    <div class="form-group">
                      <label for="sujet">Sujet</label>
                      <input type="text"  name="sujet" class="form-control" id="sujet" placeholder="Sujet" value="{{$data['sujet']}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea rows="20" name="description" class="form-control" id="description" > {{$data['description']}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="service">Service</label>
                      <input type="text" name="service" class="form-control" id="service" placeholder="Service" value="{{$data['service']}}">
                    </div>
                    <div class="form-group">


                      <div class="form-group">
                    <label for="crit">Priority</label>
                    <select class="form-control" name="criticité"  id="crit"  value="{{$data['criticité']}}"  >
                                        <option selected disabled value="{{$data['criticité']}}" >----Select priority----</option>
                                        <option value="urgent">Urgent</option>
                                        <option value="normal">Normal</option>
                                        <option value="low">Low</option>
                    </select>
                    </div>

                    <!-- <div class="form-group">
                    <label for="crit">Priorité</label>
                    <select class="form-control" name="criticité" id="criticité">
                                        <option selected disabled>----Select priorité----</option>
                                        <option value="urgente">urgente</option>
                                        <option value="normal">normal</option>
                                        <option value="basse">basse</option>
                    </select>
                    </div> -->
                 
                    <button type="submit" class="btn btn-primary mr-2">Edit</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
@endsection