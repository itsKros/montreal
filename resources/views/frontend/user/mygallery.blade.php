@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>
.form-group.fe{margin-bottom: 10px !important;}
.btn-sm.kbtn{padding: 10px 15px;}
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
            <form method="post" class="form-horizontal" action="{{route('galleryfeatured')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group fe">
                        <label for="featuredimage" class="control-label">Add Featured Image</label>
                        <input type="file" class="form-control" id="featuredimage" name="featuredimage"">
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" alt="{{$user->name}}" class="userfeatured"/>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm kbtn" value="Udpate">
                    </div>
                </div>
            </form>
            
            <div class="col-md-6 ">
                <form method="post" class="form-horizontal" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="col-md-12" style="padding:0;">
                        <div class="form-group fe">
                            <label for="galleryitem" class="control-label">Gallery Image</label>
                            <input type="file" class="form-control" id="galleryitem" name="galleryitem"">
                        </div>
                    </div>
                    
                    <div class="col-md-12" style="padding:0;">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-sm kbtn" value="Add Gallery Item">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 ">
                @foreach($galleryitems as $galleryitem)
                <div class="col-md-4 gall-thumb">
                        <form action="{{route('gallery.destroy', ['id'=>$galleryitem->id])}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    <img src="{{ asset('uploads/galleries/' . $galleryitem->galleryitem) }}" alt="" class="img-responsive thumb"/>
                </div>
                @endforeach
            </div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script>

</script>
@endsection