<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('notifications')) {

    
            $this->allnotofadminn = DB::table('notifications')
            ->select(
                'notifications.*',
                'users.id as userid',
                'users.name as username'
            )
            ->whereNull('notifications.receiver_id')
            ->leftJoin('users','users.id','=','notifications.sender_id')
            ->limit(5)

            ->get(); 

            view()->composer('layouts.adminlayout.master', function($view) {
                $view->with(['allnotofadmin' =>  $this->allnotofadminn]);
            });




            $this->allnotoftech = DB::table('notifications')
            ->select(
                'notifications.*',
                'users.id as userid',
                'users.name as username'
            )
            ->whereNull('notifications.sender_id')
            ->leftJoin('users','users.id','=','notifications.receiver_id')
            ->limit(5)

            ->get(); 

            view()->composer('layouts.techlayout.master', function($view) {
                $view->with(['allnotoftech' =>  $this->allnotoftech]);
            });


            $this->allnotofclient = DB::table('notifications')
            ->select(
                'notifications.*',
                'users.id as userid',
                'users.name as username'
            )
            ->whereNull('notifications.sender_id')
            ->leftJoin('users','users.id','=','notifications.receiver_id')
            ->limit(5)

            ->get(); 

            view()->composer('layouts.userlayout.master', function($view) {
                $view->with(['allnotofclient' =>  $this->allnotofclient]);
            });



        }

        
       
    }
}
