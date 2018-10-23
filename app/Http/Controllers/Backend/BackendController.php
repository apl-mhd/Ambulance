<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class BackendController extends Controller
{


    public  function index(){



        return view('index');

    }

    public  function  showAddForm(){


        return view('addAmbulance');
    }

    public  function  showAll(){


        return view('addAmbulance');
    }


}
