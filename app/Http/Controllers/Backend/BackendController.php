<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use  App\Models\AmbulanceInfo;


class BackendController extends Controller
{


    public  function index(){

        $data = [];
        $data['ambulances'] = AmbulanceInfo::paginate(10);
        return view('index',$data);

    }

    public  function  addAmbulance(){


        return view('addAmbulance');
        }


        public  function  addAmbulanceProcess(Request $request){



            $ambulance = new \App\Models\AmbulanceInfo();

            $ambulance->email = strtolower($request->input('email'));
            $ambulance->drivername =  $request->input('driverName');
            $ambulance->drivermobile = $request->input('driverPhone');
            $ambulance->ownername = $request->input('ownerName');
            $ambulance->drivernid = $request->input('nid');
            $ambulance->numberplate = $request->input('numberplate');

            $ambulance->ownermobile = $request->input('ownerPhone');
            $ambulance->ambulancename = $request->input('ambulanceName');
            $ambulance->hospital = $request->input('hospitalName');
            $ambulance->location = $request->input('locationName');
            $ambulance->type = $request->input('type');
            $ambulance->acstatus = $request->input('acstatus');

            $ambulance->save();



        return redirect('index');


        }



    public  function  edit($id){

        $data['ambulance'] =   \App\Models\AmbulanceInfo::find($id);

        return view('edit',$data);
    }


    public  function update(Request $request, $id){


        $ambulance = \App\Models\AmbulanceInfo::find($id);

        $ambulance->email = strtolower($request->input('email'));
        $ambulance->drivername =  $request->input('driverName');
        $ambulance->drivermobile = $request->input('driverPhone');
        $ambulance->ownername = $request->input('ownerName');
        $ambulance->drivernid = $request->input('nid');
        $ambulance->numberplate = $request->input('numberplate');

        $ambulance->ownermobile = $request->input('ownerPhone');
        $ambulance->ambulancename = $request->input('ambulanceName');
        $ambulance->hospital = $request->input('hospitalName');
        $ambulance->location = $request->input('locationName');
        $ambulance->type = $request->input('type');
        $ambulance->acstatus = $request->input('acstatus');


        $ambulance->save();


        session()->flash('messege', $id.' '. 'Successfully Updated');



        return redirect('index');

    }




    public  function  showAddForm(){


        return view('addAmbulance');
    }

    public  function  showAll(){


        return view('addAmbulance');
    }


}
