<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="link-fx font-w600 font-size-lg text-white" href="index.html">
                <span class="text-white-75">Dash</span><span class="text-white">mix</span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Toggle Sidebar Style -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </a>
                <!-- END Toggle Sidebar Style -->

                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link active" href="be_pages_dashboard.html">
                    <i class="nav-main-link-icon si si-cursor"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                    <span class="nav-main-link-badge badge badge-pill badge-success">5</span>
                </a>
            </li>
            <li class="nav-main-heading">Base</li>
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-grid"></i>
                    <span class="nav-main-link-name">Ambulance</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('ambulancelist')}}">
                            <span class="nav-main-link-name">Ambulance List</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('addAmbulance')}}">
                            <span class="nav-main-link-name">Add Ambulance</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_forms.html">
                            <span class="nav-main-link-name">Forms</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_blocks_themed.html">
                            <span class="nav-main-link-name">Themed</span>
                        </a>
                    </li>

                </ul>
            </li>


            @if(Auth::user()->user_type ==1)
            <li class="nav-main-item">

                <a class="fa-user nav-main-link nav-main-link-submenu"  aria-expanded="false" href="{{route('userslist')}}">
                    Users List
                </a>
            </li>

            @endif


        </ul>
    </div>
    <!-- END Side Navigation -->
</nav>
