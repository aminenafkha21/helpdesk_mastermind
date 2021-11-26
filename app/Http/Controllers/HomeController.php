<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User ;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            return view('technician.home');


        }
        elseif($usertype =="2") {
            return view('user.home');


        }
        else {
            return view('admin.home');

        }
    }

    public function error()
    {
        
        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            return view('technician.error');


        }
        elseif($usertype =="2") {
            return view('user.error');


        }
        else {
            return view('admin.error');

        }

    }


    public function users()
    {
        
        $usertype=Auth::user()->user_type;

        if($usertype =="0") {
            return view('admin.users');


        }

    }
    
    
   



 
}
