@extends('layouts.techlayout.master')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">My Tickets</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Référence
                          </th>
                          <th>
                            From
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
                      @foreach ($ticketstech as $ticket)

                        <tr>
                                            <td class="py-1">
                                            #{{ $ticket->ref }}                                            

                                            </td>
                                            <td>
                                            
                          
                                               @foreach($nameclientsoftickets as $nclient)
                                                    @if ($nclient->id == $ticket->user_id  && $nclient->id  )
                                                       {{$nclient->name}}

                                                    @endif
                                                @endforeach
 
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
                                  @if ($ticket->status == 'Resolved' )

                                  <label class="badge badge-success">{{ $ticket->status }}  </label>
                                  @elseif ($ticket->status == 'Pending' )

                                  <label class="badge badge-warning">{{ $ticket->status }}  </label>
                                  @elseif ($ticket->status == 'Closed' )

                                  <label class="badge badge-danger">{{ $ticket->status }}  </label>

                                  @endif

                                
                                </td>
                                <td>
                                <form  class="forms-sample" action="{{ url('/confirmticket') }}" method="POST">
                                {{ csrf_field() }}

                                  <input name="id" class="form-control"  value="{{$ticket->id}}" style="display:none" ></input>


                                  @if   ($ticket->status == 'Closed' )

                                  @elseif ($ticket->status == 'Resolved' )

                                  @else
                                  <button type="submit" class="btn btn-success">Resolved</button>


                                  @endif 

                              <button  class="btn btn-info">Details</button>
                              </form>

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
