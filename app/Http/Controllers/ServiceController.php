<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    public function index()
    {
        // $user_id=Auth::user()->id;
        $usertype=Auth::user()->user_type;
        $services = DB::table('services')
        ->select('*')
        ->get();
       
        if($usertype =="1") {
            return view('technician.services', compact('services'));
        }
        elseif($usertype =="2") {
            return view('user.services', compact('services'));
        }
        else {
            return view('admin.services',compact('services'));
        }
    }
    public function create()
    {
        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            return view('technician.services');
        }
        elseif($usertype =="2") {
            return view('user.services');


        }
        elseif($usertype =="0")  {
            return view('admin.newservice');

        } 
        else {
            return view('404');

        } 

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'service_name' => 'required',
            'description' => 'required',
            'gallery' => 'required',
        ]);
        service::create([
            'description' => $request->input('description'),
            'service_name' => $request->input('service_name'),
            'gallery' => $request->input('gallery'),
        ]);
     
        return redirect()->route('services.index')
                        ->with('success','Service created successfully.');

    }

    function removeservice($id){
        service::destroy($id);
        return redirect()->route('services.index')->with('success','Service deleted successfully.');
    
    } 
}
