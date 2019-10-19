<div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
            <img src="{{ asset('uploads/avatars/' . $user->avatar) }}" alt="{{$user->name}}" class="img-responsive" />
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                {{$user->name}}
            </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="{{ $routename == 'my-account' ? 'active' : '' }}">
                    <a href="{{route('my-account')}}">
                    <i class="glyphicon glyphicon-pencil"></i>
                    Account Settings </a>
                </li>

                <li class="{{ $routename == 'my-profile' ? 'active' : '' }}">
                    <a href="{{route('my-profile')}}">
                    <i class="glyphicon glyphicon-user"></i>
                    Profile Detail</a>
                </li>
                <li class="{{ $routename == 'my-gallery' ? 'active' : '' }}">
                    <a href="{{route('my-gallery')}}">
                    <i class="glyphicon glyphicon-picture"></i>
                    Gallery</a>
                </li>	
                <li class="{{ $routename == 'my-booking' ? 'active' : '' }}">
                    <a href="{{route('my-booking')}}">
                    <i class="glyphicon glyphicon-file"></i>
                    Booking</a>
                </li>	
                <li class="{{ $routename == 'my-availability' ? 'active' : '' }}">
                    <a href="{{route('my-availability')}}">
                    <i class="glyphicon glyphicon-calendar"></i>
                    Availability</a>
                </li>					
                
            </ul>
        </div>
        <!-- END MENU -->
    </div>