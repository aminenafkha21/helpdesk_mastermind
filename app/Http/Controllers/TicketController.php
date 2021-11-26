<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use App\Models\User;
use App\Models\notification;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TicketController extends Controller
{

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::user()->id;
        $usertype=Auth::user()->user_type;
        /** 
        $tickets = DB::table('ticket')
        ->where('ticket.user_id',$user_id)
        ->select('ticket.*','ticket.id as ticket_id')
        ->get();
        $ticket_admin=DB::table('ticket')
        ->where('ticket.status','=','en attente')
        ->select('ticket.*','ticket.status as ticket_status')
        ->get(); */
    
        
        //  $technicien=DB::table('users')
        //  ->select('*')
        //  ->where('users.user_type','=','1')
        //  ->whereNotIn('users.id',function($query) {
        //  $query->select('assignedto')->from('ticket');
        //  })
        //  ->get();
        // mysqli_query($technicien, "SELECT * FROM users WHERE user_type=1 and id NOT IN (SELECT assignedto FROM ticket)");

    


        if($usertype =="1") {


            $ticketstech = DB::table('ticket')
            
            ->where('ticket.assignedto',$user_id)
            ->select('ticket.*','ticket.id as ticket_id')
            ->get();



            $nameclientsoftickets = DB::table('users')
            ->select(
                'users.id',
                'users.name'
            )
            ->where('ticket.assignedto',$user_id)
            ->where('users.user_type','2')
            ->leftJoin('ticket','ticket.user_id','=','users.id')
            ->get();
            

            return view('technician.tickets', array('ticketstech'=>$ticketstech,'nameclientsoftickets'=>$nameclientsoftickets) ); 



        }
        elseif($usertype =="2") {
            $tickets = DB::table('ticket')
             ->where('ticket.user_id',$user_id)
             ->select('ticket.*','ticket.id as ticket_id')
             ->get();
            return view('user.tickets', compact('tickets'));


        }
        else {
            
            /** 
            $serviceprovidersdispo = DB::table('users')
            ->join(
                'ticket', 
                function ($join)
                {$join->on('users.id', '!=', 'ticket.assignedto');
      }
            )
            ->where('users.user_type','1')
            ->get(); */


            $serviceprovidersdispo = \DB::table('users')
            ->select(
                'users.id',
                'name'
            )
            ->where('users.user_type','1')
            ->leftJoin('ticket','ticket.dispotech','=','users.id')
            ->whereNull('ticket.dispotech')
            ->get();


            $serviceprovidersaffected = \DB::table('users')
            ->select(
                'users.id',
                'name',
                'ticket.id as ticketid',
            )
            ->where('users.user_type','1')
            ->leftJoin('ticket','ticket.assignedto','=','users.id')

            
            ->get();


            $nameclientsofticket = \DB::table('users')
            ->select(
                'users.id',
                'name',
                'ticket.id as ticketid',
            )
            ->where('users.user_type','2')
            ->leftJoin('ticket','ticket.user_id','=','users.id')
            ->get();
        

            
           

           
           $tickets = ticket::all();
           return view('admin.tickets', array('tickets'=>$tickets,'technicien'=>$serviceprovidersdispo,
           'sprovideraffected'=>$serviceprovidersaffected,'nameclientsofticket'=>$nameclientsofticket)); 

        }


       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            return view('technician.tickets');


        }
        elseif($usertype =="2") {
            return view('user.newticket');


        }
        elseif($usertype =="0")  {
            return view('admin.newticket');

        } 
        else {
            return view('404');

        } 
    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id=Auth::user()->id;
        $this->validate($request, [
            'ref' => 'required',
            'sujet' => 'required',
            'description' => 'required',
            'service' => 'required',
            'criticité' => 'required',
            

        ]);
        ticket::create([
            'description' => $request->input('description'),
            'ref' => $request->input('ref'),
            'sujet' => $request->input('sujet'),
            'service' => $request->input('sujet'),
            'criticité' => $request->input('criticité'),
            'status' => "Open",
            'user_id' => Auth::user()->id,
        ]);

        
        notification::create([
            'ref' => $request->input('ref'),
            'message' =>"New Ticket was opened ",
            'sender_id' => Auth::user()->id,
            

        ]);
     
        return redirect()->route('tickets.index')
                        ->with('success','Ticket created successfully.');

    }

    function removeTicket($id){
        ticket::destroy($id);
        return redirect()->route('tickets.index')->with('success','Ticket deleted successfully.');
    
    }    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function showTicket($id)
    {
        $data=ticket::find($id);
        return view('user.edit',['data'=>$data]);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function updateTicket(Request $request)
    {
  
        $this->validate($request, [
       
            'criticité' => 'required',
         
        ]);

        $data=ticket::find($request->id);
        $data->ref=$request->ref;
        $data->description=$request->description;
        $data->sujet=$request->sujet;
        $data->service=$request->service;
        $data->criticité=$request->criticité;
        $data->save();
        return redirect()->route('tickets.index')->with('success','Ticket edited successfully.'); ;  
    }


      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function assignedTicket(Request $request)
    {
        /** 
        $data=ticket::find($id);
        $data->assignedto=$request->assignedto;
        
        $data->save();  */

        $this->validate($request, [
            'assignedto' => 'required',
            

        ]);


        $data = Ticket::find($request->id);
        $data->assignedto = $request->assignedto;
        $data->dispotech = $request->assignedto;

        $data->status = "Pending";

        $data->save();


        notification::create([
            'ref' => $request->ref,
            'message' =>"New Ticket was assigned to you Mr  ",
            'receiver_id' => $request->assignedto,
            

        ]);

        notification::create([
            'ref' => $request->ref,
            'message' =>"Your ticket was assigned to  ",
            'receiver_id' => $request->user_id,
            

        ]);
        return redirect()->route('tickets.index') ->with('success','Service provider added successfully.'); ;       
    }


         /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
     public function confirmTicket(Request $request)
    {
        $data = Ticket::find($request->id);
     
        $data->status = 'Resolved';

        $data->save();
        return redirect()->route('tickets.index') ;
        
    }


             /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function closeTicket(Request $request)
    {
        $data = Ticket::find($request->id);
        $data->status = "Closed";
        $data->dispotech = NULL;
        $data->save();
        return redirect()->route('tickets.index') ;
        
    }

    public function reopenTicket($id)
    {
        $data = Ticket::find($id);
        $data->status = "Pending";
        $data->save();
        return redirect()->route('tickets.index') ;
        
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}
