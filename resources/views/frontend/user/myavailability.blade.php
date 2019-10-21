@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>


.datepick-nav{background-color: #fff;}
.datepick-ctrl {
    background-color: #2eb8cb;
}
.datepick-month a {
    background-color: #ffffff;}
.datepick-month td .datepick-other-month {
    background-color: #ffffff;
}
.datepick {
    background-color: #ecf3f4;
    color: #000000;
    border: 1px solid #2eb8cb;}
.datepick-month-header, 
.datepick-month-header select, 
.datepick-month-header input { background-color: #2eb8cb;}

.datepick-month td .datepick-selected {background-color: #2eb8cb;border: 1px solid #2eb8cb;}
        .wrap-input {
            width: 100%;
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 2px;
            margin-bottom: 5px;
        }
        .wrap-input .input {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border-radius: 3px;
            border: none;
        }
        .wrap-input span {
            position: absolute;
            top: 50%;
            right: 15px;
            font-size: 20px; 
            transform: translateY(-50%);
        }
</style>
@endsection

@section('pagetitle')
        <!-- pages-title-start -->
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">My Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection

@section('content')
<div id="profile"class="container">
    <div class="row profile">
		<div class="col-md-3">
            @include('frontend.user.profilenav')
		</div>
		<div class="col-md-9 profile-content">
            @include('frontend.msgs.messages')
			<p class="pro-welcome">Hello <strong>{{$user->name}}</strong> (not <strong>{{$user->name}}</strong>? <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>)
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
            </p>

            <p>From here you can add <b>NOT AVAILABLE</b> dates which disable dates in booking form.</p>
            <form class="form-horizontal" action="{{route('engagedates')}}" method="POST">
					@csrf
				<div class="col-md-12">
					<div class="wrap-input">
                    <textarea name="engagedates" id="engagedates" type="text" placeholder="Select date" required class="input date">{{$user->engagedates}}</textarea>
                       <span><i class="fa fa-calendar"></i></span>
                    </div>
                    <div class="container-contact-form-btn">
                        <input type="submit" class="btn btn-primary kbtn" value="Submit" />
                    </div>
                </div>
            </form>
            
        </div>
    
	</div>
</div>
@endsection

@section('headjs')

@endsection
@section('js')

<script>
    $(function() {
        $('#engagedates').datepick({
            multiSelect: 999,
            monthsToShow: 3,
            prevText: 'Prev months',
            nextText: 'Next months'
        });
    });
</script>

@endsection
