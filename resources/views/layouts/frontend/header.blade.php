       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<header>
            @guest
            @else
			<div class="header-top">
				<div class="container">
					<div class="row">
						
                        <div class="col-md-6 col-md-offset-6">
                            <div class="right-header">
                                <ul>
                                    <li><a href="{{ route('my-account') }}"><i class="fa fa-user"></i>My account</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li> 
                                </ul>
                            </div>
                        </div>
					</div>
				</div>
            </div>
            @endguest

			<div class="header-bottom header-bottom-one" id="sticky-menu">
				<div class="container relative">
					<div class="row mna">
						<div class="col-sm-2 col-md-2 col-xs-4">
							<div class="logo">
								<a href="{{ url('/') }}"><img src="{{asset('frontend/img/mglogot.png')}}" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-10 col-md-10 col-xs-8 static mnav">
							<div class="all-manu-area">
							    <div class="mainmenu clearfix hidden-sm hidden-xs">
                                    <nav>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('models') }}">Book A Gentleman</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu start -->
                                <div class="mobile-menu-area hidden-lg hidden-md">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                    <li><a href="{{ env('ASSET_URL') }}">Home</a></li>
                                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                                    <li><a href="{{ route('services') }}">Services</a></li>
                                                    <li><a href="{{ route('models') }}">Book A Gentleman</a></li>
                                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- mobile menu end -->
                                <div class="right-header re-right-header">
                                    
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
        <!-- header section end -->