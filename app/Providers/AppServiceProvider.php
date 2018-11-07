<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\View;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        View::composer('partials.sidebar',function($view){


             $utype = Auth::user()->user_type;
            $id = Auth::user()->id;

             if($utype ==1)


                 $view->with('users', \App\User::all());
             else {
              //   dd(\App\User::where('user_id', $id));
                  $view->with('users', \App\User::where('user_id', $id));

             }
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
