@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>
div#example_wrapper {
    margin-top: 50px;
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

			<p class="pro-welcome">Hello <strong>{{$user->name}}</strong> (not <strong>{{$user->name}}</strong>? <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>)
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>From your account dashboard you can edit your account and profile details.
            </p>

            <table id="bo" class="table table-striped table-responsive table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Package</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($bookings))
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{$booking->client_name}}</td>
                                    <td>{{$booking->client_email}}</td>
                                    <td>{{$booking->client_phone}}</td>
                                    <td>{{$booking->package}}</td>
                                    <td>
                                        @php
                                                $input = $booking->date;
                                                $date = strtotime($input);
                                                echo date('d M Y', $date);

                                        @endphp
                                    </td>
                                    <td>
                                        @php
                                            $input = $booking->time;
                                            $time = strtotime($input);
                                            echo date('h:00 A', $time);

                                        @endphp
                                    </td>
                                    <td>{{$booking->address}}</td>
                                </tr>
                            @endforeach
                            @else
                            <tr><td>No Bookings</td></tr>
                        @endif
                    </tbody>
                </table>
		</div>
	</div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#bo').DataTable({
          responsive: true
        });
    } );
</script>
@endsection
