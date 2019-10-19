@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>


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
				</form>From your account dashboard you can edit your account and profile details.
			</p>
			<form class="form-horizontal" enctype="multipart/form-data" action="{{route('accountdetailchange')}}" method="POST">
					@csrf
				<div class="col-md-6">
					<div class="form-group">
						<label for="avatar" class="control-label">Update Profile Image</label>
						<input type="file" class="form-control" id="avatar" name="avatar"">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="name" class="form-control" id="name" name="name" placeholder="Name" value="{{$user->name}}">
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$user->email}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="currentpassword" class="control-label">Current Password</label>
						<input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="Current Password" >
					</div>
					<div class="form-group">
						<label for="newpassword" class="control-label">New Password</label>
						<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password">
					</div>
					<div class="form-group">
						<label for="confirmnewpassword" class="control-label">Confirm New Password</label>
						<input type="password" class="form-control" id="confirmnewpassword" name="confirmnewpassword" placeholder="Confirm New Password">
					</div>
				</div>
				<hr>
				<div class="col-md-12">
					<div class="form-group">
						<input type="submit" class="btn btn-primary kbtn" value="Udpate">
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>
@endsection
@section('js')
<script>

</script>
@endsection