@extends('layouts.userlayout.master')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">My Tickets</h4>
                  <p class="card-description">
                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Référence
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Service
                          </th>
                          <th>
                            Created At
                          </th>
                          <th>
                              Criticité
                          </th>
                          <th>
                          Status
                          </th>
	            					  <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($tickets as $ticket)

                        <tr>
                                            <td class="py-1">
                                            {{ $ticket->ref }}                                            

                                            </td>
                                            <td>
                                            {{ $ticket->sujet }}                                            

                                           </td>
                                            <td>
                                            {{ $ticket->service }}                                            
                                          </td>
                                            <td>
                                            {{ $ticket->created_at }}                                            

                                            </td>
                                            <td>
                                            {{ $ticket->criticité }}                                            

                                            </td>
                                       
                                <td>
                                  @if ( $ticket->status == "Open" )
                                  <label class="badge badge-info">  {{ $ticket->status }}     </label>

                                  @elseif( $ticket->status == "Pending" )
                                  <label class="badge badge-warning">  {{ $ticket->status }}     </label>
                                  @elseif( $ticket->status == "Resolved" )
                                  <label class="badge badge-success">  {{ $ticket->status }}     </label>
                                  @elseif( $ticket->status == "Closed" )
                                  <label class="badge badge-danger">  {{ $ticket->status }}     </label>


                                  @endif
                              </td>
                                <td>
                                 @if ( $ticket->status == "Open" )
                                <a href="/removeticket/{{$ticket->id}}" class="btn btn-danger">Delete</a>
                                <a href="editticket/{{$ticket->id}}" class="btn btn-warning">Edit</a>
                                @endif

                                @if ( $ticket->status == "Resolved" )
                                <a href="" class="btn btn-danger">Close</a>
                                @endif
                              <button type="button" class="btn btn-info">Detailes</button>



                                            </td>
                         </tr>
                         @endforeach

                       
						
                 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
	
@endsection
