@extends('master')


@section('navbar')

    @include('partials.navbar')
@stop



@section('content')

<div class="row">



<div class="hero-static offset-md-2 col-md-6 d-flex align-items-center bg-white">
    <div class="p-3 w-100">
        <!-- Header -->
        <div class="mb-3 text-center">
            <a class="link-fx text-success font-w700 font-size-h1" href="index.html">
                <span class="text-dark">Dash</span><span class="text-success">mix</span>
            </a>
            <p class="text-uppercase font-w700 font-size-sm text-muted">Update Ambulance Information</p>
        </div>
        <!-- END Header -->

        <!-- Sign Up Form -->
        <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.js) -->
        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <div class="row no-gutters justify-content-center">
            <div class="col-sm-8 col-xl-6">

                <form class="js-validation-signup" action="{{route('update',$ambulance->id)}}" method="post">

                    @csrf
                    @method('PUT')

                    <div class="py-3">
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg form-control-alt" id="signup-username" name="email" value="{{$ambulance->email}}">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="driverName" value="{{$ambulance->drivername}}">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="driverPhone" value="{{$ambulance->drivermobile}}">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="ownerName" value="{{$ambulance->ownername}}">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="ownerPhone" value="{{$ambulance->ownermobile}}">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="nid" value="{{$ambulance->drivernid}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="ambulanceName" value="{{$ambulance->ambulancename}}">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="numberplate" name="numberplate" value="{{$ambulance->numberplate}}">
                        </div>



                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="hospitalName" value="{{$ambulance->hospital}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-drivername" name="locationName" value="{{$ambulance->location}}">
                        </div>

                        <div class="form-group">

                            <select name="type">
                                <option
                                        @if($ambulance->type == 'ICU')
                                        {{'selected'}}
                                        @endif

                                        value="icu">ICU</option>

                                <option @if($ambulance->type == 'NORMAL')
                                        {{'selected'}}
                                        @endif
                                        value="normal">Normal</option>
                            </select>
                        </div>


                        <div class="form-group">

                            <select name="acstatus">
                                <option
                                        @if($ambulance->acstatus == 0)
                                                {{'selected'}}
                                         @endif
                                        value="0">Non AC</option>

                                <option    @if($ambulance->acstatus == 1)
                                           {{'selected'}}
                                           @endif
                                           value="1">AC</option>
                            </select>
                        </div>



                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-hero-lg btn-hero-success">
                            <i class="fa fa-fw fa-user-edit mr-1"></i> Update
                        </button>

                    </div>
                </form>

            </div>
        </div>
        <!-- END Sign Up Form -->
    </div>
</div>
</div>


@stop