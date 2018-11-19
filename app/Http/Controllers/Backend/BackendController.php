<?php

namespace App\Http\Controllers\Backend;

use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use aaa;



use  Auth;


use  App\Models\AmbulanceInfo;
class BackendController extends Controller
{


    /*After login page*/
    public  function index(){
        //$data['ambulances'] = AmbulanceInfo::all();
       /* $data = [];
       $userType =   Auth::user()->user_type;
       $userId  = Auth::user()->id;

       if ($userType ==1) {
           $data['ambulances'] = AmbulanceInfo::all();
           return view('index', $data);
       }

        $data['ambulances'] = AmbulanceInfo::where('user_id', '=', $userId)->get();
        return view('index', $data);*/
       return view('index');

    }

    //show all ambulance list for admin

    public  function  ambulancelist1(){

        //$data['ambulances'] = AmbulanceInfo::all();
         $data = [];
       /* $userType =   Auth::user()->user_type;
        $userId  = Auth::user()->id;


        if ($userType == 1) {
            $data['ambulances'] = AmbulanceInfo::all();
            return view('ambulanceList', $data);
        }*/
        return view('ambulanceList');


      //  ambulanceList

        /* $data['ambulances'] = AmbulanceInfo::where('user_id', '=', $userId)->get();
         return view('index2', $data);*/

    }

    public  function  ajax(){

        $model = AmbulanceInfo::query();
        return DataTables::of($model)->make(true);

//        return DataTables::of($model)->toJson();

    }

    //Users List

    public  function  usesrsList(){

        return view('userlist');

    }

    public  function  usersListAjax(){
        $model = User::where('user_type', '=', '0');
        return DataTables::of($model)->make(true);

    }


    public  function ambulancelist($id){

        $data = [];
        $data['ambulances'] = AmbulanceInfo::where('user_id', '=', $id)->get();

        //return view('index', $data);
        return view('userambulancelist', $data);

    }



    /*Login page*/

    public  function  login(){

        if (!Auth::check())            /*Check already logged in or not*/
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

            if (Auth::user()->user_type == 0)
                return redirect()->intended('index');
            else
                return  redirect()->intended('ambulanceList');
        }

        else
            redirect()->back();   /*If failed to login redirect back */

    }


    /** logout */

    public  function  logout(){

        Auth::logout();


        return view('login');
    }


    /*Registration  page*/

    public  function  registration(){

        return view('registration');

    }


    /*Insert user data into users table*/

    public  function  registrationProcess(Request $request){

        User::create([
            'email' => strtolower( trim($request->input('email'))),
            'password'=> bcrypt($request->input('password')),

        ]);
        session()->flash('message','Registration success');
        return  redirect()->intended('login');
       // return $request;
    }




    public  function  addAmbulance(){
        return view('addAmbulance');

    }


        public  function  addAmbulanceProcess(Request $request){

            $userId  = Auth::user()->id;
            $photo = $request->file('photo');
            $fileName = uniqid('photo_',true).str_random(10). '.'. $photo->getClientOriginalExtension();

            $destinationPath = public_path('/uploads');
            $photo->move($destinationPath, $fileName);

            //$photo->storeAs('images',$fileName);


             AmbulanceInfo::create([

                 'user_id' => $userId,
                 'imglink' => $fileName,
             'email' => strtolower($request->input('email')),
             'drivername' =>  $request->input('driverName'),
             'drivermobile' => $request->input('driverPhone'),
             'ownername' => $request->input('ownerName'),
             'drivernid' => $request->input('nid'),
             'numberplate' => $request->input('numberplate'),

             'ownermobile' => $request->input('ownerPhone'),
             'ambulancename' => $request->input('ambulanceName'),
             'hospital' => $request->input('hospitalName'),
             'location' => $request->input('locationName'),
             'type' => $request->input('type'),
             'acstatus' => $request->input('acstatus'),



             ]);


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

    public  function  deleteAmbulanceInfo($id){

        $ambulance = AmbulanceInfo::find($id);
        $ambulance->delete();
        session()->flash('message',   ' Successfully  Deleted');
        return redirect()->back();


    }


    public  function  showAddForm(){
        return view('addAmbulance');
    }

    public  function  showAll(){
        return view('addAmbulance');
    }


}
