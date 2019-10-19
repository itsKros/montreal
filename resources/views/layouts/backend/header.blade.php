<body class="fix-header fix-sidebar card-no-border">
    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('frontend/img/mglogot.png')}}" alt="homepage" class="light-logo" />
                        
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-power-off"></i></a> </li>
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{-- <img src="/uploads/avatars/default.png" alt="{{Auth::user()->name}}" class="profile-pic m-r-10" /> --}}
                              {{Auth::user()->name}}
                            </a> 
                            <a href="{{ route('logout') }}" class="nav-link dropdown-toggle text-muted waves-effect waves-dark link logout" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i></a> 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.home')}}" aria-expanded="false"><i class="fas fa-tachometer-alt"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('users.index')}}" aria-expanded="false"><i class="fas fa-user"></i><span class="hide-menu">Models</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('package.edit', ['package'=>1])}}" aria-expanded="false"><i class="far fa-list-alt"></i><span class="hide-menu">Packages</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('homeinfo.edit',['id'=>1])}}" aria-expanded="false"><i class="fas fa-home"></i><span class="hide-menu">Home Info</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('aboutinfo.edit',['id'=>1])}}" aria-expanded="false"><i class="far fa-file"></i><span class="hide-menu">About Info</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('servicesinfo.edit',['id'=>1])}}" aria-expanded="false"><i class="far fa-file"></i><span class="hide-menu">Services Info</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('testimonial.index')}}" aria-expanded="false"><i class="far fa-comments"></i><span class="hide-menu">Testimonials</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="{{route('footerinfo.edit',['id'=>1])}}" aria-expanded="false"><i class="far fa-file-alt"></i><span class="hide-menu">Footer Section</span></a></li>

                        
                        {{--<li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Icons</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Google Map</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Blank Page</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Error 404</span></a>
                        </li> --}}
                    </ul>
                   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
               <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i></a> 
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->