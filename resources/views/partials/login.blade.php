<div class="bg-image" style="background-image: url('assets/media/photos/photo22@2x.jpg');">



    <div class="row no-gutters bg-primary-op">
        <!-- Main Section -->
        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
            <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                    <a class="link-fx font-w700 font-size-h1" href="{{route('index')}}">
                        <span class="text-dark">LLC</span><span class="text-primary">Ambulance</span>
                    </a>
                    <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <div class="row no-gutters justify-content-center">

                    <div class="col-sm-8 col-xl-6">

                        @if(session()->has('message'))

                            <div class="alert alert-danger">
                                {{session('message')}}
                            </div>

                        @endif


                        <form class="js-validation-signin" action="{{route('loginProcess')}}" method="post">
                            @csrf
                            <div class="py-3">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg form-control-alt" id="login-username" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="op_auth_reminder.html">
                                        <i class="fa fa-exclamation-triangle text-muted mr-1"></i> Forgot password
                                    </a>
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{route('registration')}}">
                                        <i class="fa fa-plus text-muted mr-1"></i> New Account
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Sign In Form -->
            </div>
        </div>
        <!-- END Main Section -->

        <!-- Meta Info Section -->
        <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
            <div class="p-3">
                <p class="display-4 font-w700 text-white mb-3">
                    Welcome to the future
                </p>
                <p class="font-size-lg font-w600 text-white-75 mb-0">
                    Copyright &copy; <span class="js-year-copy">2018</span>
                </p>
            </div>
        </div>

        <div class="col-md-6">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- END Meta Info Section -->
    </div>
</div>
