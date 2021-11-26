@extends('layouts.adminlayout.master')


@section('content')
<div class="content-wrapper">

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All tickets</h4>
            

                  @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                          <p>{{ $message }}</p>
                      </div>
                  @endif 



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
                            Sujet
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Priorité
                          </th>
                          <th>
                            Date de création
                          </th>
                          <th>
                          Service providers 
                          </th>
                           
						              

						              <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                     

                     @foreach ($tickets as $ticket)
                      
                     @if ($ticket->status == "Open")
                     <form class="forms-sample" action="{{ url('/assignedticket') }}" method="POST">
                     {{ csrf_field() }}

                     @else  ($ticket->status == "Resolved")
                     <form class="forms-sample" action="{{ url('/closeticket') }}" method="POST">
                     {{ csrf_field() }}


                     @endif
                


                        <tr>
                          <td class="py-1">
                           #{{$ticket->ref}}
                          </td>
                          <td>

                          
                                               @foreach($nameclientsofticket as $nclient)
                                                    @if ($nclient->id == $ticket->user_id  && $nclient->ticketid == $ticket->id  )
                                                       {{$nclient->name}}

                                                    @endif
                                               @endforeach
                          </td>
                          <td>
                          {{$ticket->sujet}}
                          </td>
                          <td>
                            @if ($ticket->status =="Pending")
                          <label class="badge badge-warning">{{$ticket->status}}</label>
                            @elseif ($ticket->status =="Resolved")
                            <label class="badge badge-success">{{$ticket->status}}</label>
                            @elseif ($ticket->status =="Open")
                            <label class="badge badge-info">{{$ticket->status}}</label>
                            @elseif ($ticket->status =="Closed")
                            <label class="badge badge-danger">{{$ticket->status}}</label>
                            @endif

                          
                          </td>
                          <td>
                          {{$ticket->criticité}}
                          </td>
                          <td>
                          {{$ticket->created_at}}
                          </td>
                          <td>
                            @if ($ticket->assignedto == null )
                                  <div class="form-group">
                                        <select class="form-control" name="assignedto" id="assignedto">
                                                <option value="NULL" selected disabled>----Assigned to ----</option>
                                                @foreach($technicien as $tech)
                                                <option value="{{$tech->id}}">{{$tech->name}}</option> 
                                                @endforeach
                                        </select>
                                  </div>  


                                 


                            @else
                            
                              
                                               @foreach($sprovideraffected as $sprov)
                                                    @if ($sprov->id == $ticket->assignedto && $ticket->id == $sprov->ticketid )
                                                       {{$sprov->name}}

                                                    @endif
                                               @endforeach

                            @endif
                          </td>
                         
                          <td>

                          <input  name="id" class="form-control" value="{{$ticket->id}}"   style="display:none" ></input>
                                  <input  class="form-control" value="{{$ticket->user_id}}" name="user_id" style="display:none" ></input>
                                  <input  class="form-control" value="{{$ticket->ref}}" name="ref" style="display:none" > </input>
            
                          @if ($ticket->assignedto == null )

				                  <button type="submit" class="btn btn-success" >Order to S.provider</button>
                          @elseif ($ticket->status == "Resolved" )

                          <a href="{{ url('/reopenticket/'.$ticket->id)}}" class="btn btn-dark" >Reopen</a>
                          <button type="submit" class="btn btn-danger" >Close</button>

                          @endif
            <button type="button" class="btn btn-info">Details</button>

                        </td>

                          
                          </tr>
                          </form>

                           @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection
