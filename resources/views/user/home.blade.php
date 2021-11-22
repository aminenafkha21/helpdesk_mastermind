@extends('layouts.userlayout.master')


@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
              <p class="font-weight-normal mb-2 text-muted">USER 1, 2019</p>
            </div>
          </div>
                <div class="row mt-3">
                  <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Open Tickets</h4>
                                <h4 class="text-dark font-weight-bold mb-2">43</h4>
                            </div>
                          </div>
                      </div>
              
                    </div>
                  </div>
                  <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pending Tickets</h4>
                                <h4 class="text-dark font-weight-bold mb-2">43</h4>
                            </div>
                          </div>
                      </div>
              
                    </div>
                  </div>


                  <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                    <div class="row flex-grow">
                      <div class="col-sm-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Solved Tickets</h4>
                                <h4 class="text-dark font-weight-bold mb-2">43</h4>
                            </div>
                          </div>
                      </div>
              
                    </div>
                  </div>
                
                </div>
                
                
  
        </div>

@endsection
