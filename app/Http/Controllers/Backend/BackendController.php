<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Auth;


use  App\Models\AmbulanceInfo;
class BackendController extends Controller
{


    public  function index(){



        //$data = [];
        //$data['ambulances'] = AmbulanceInfo::all();

        $data['ambulances'] = AmbulanceInfo::all();
        return view('index',$data);

    }

    public  function  login(){

        if (!Auth::check())
          return view('login');

       return  redirect('index');
    }


    public  function  loginProcess(Request $request){

        /* $this->validate($request, [
            'email'  => 'required|max:255|email',
            'password'  => 'required',
        ]);
*/

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...

            return redirect()->intended('index');
        }

        else
            redirect()->back();

    }



    public  function  logout(){



        Auth::logout();


        return view('login');
    }




    public  function  addAmbulance(){
        return view('addAmbulance');

    }


        public  function  addAmbulanceProcess(Request $request){


       // return $request;


            $photo = $request->file('photo');

            //dd($photo);
            $fileName = uniqid('photo_',true).str_random(10). '.'. $photo->getClientOriginalExtension();

            $destinationPath = public_path('/uploads');
            $photo->move($destinationPath, $fileName);


            //$photo->storeAs('images',$fileName);


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

            $ambulance->imglink = $fileName;


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


        session()->flash('message', 'ID# '. $id.' '. 'Successfully Updated');



        return redirect('index');

    }




    public  function  showAddForm(){


        return view('addAmbulance');
    }

    public  function  showAll(){


        return view('addAmbulance');
    }


}
