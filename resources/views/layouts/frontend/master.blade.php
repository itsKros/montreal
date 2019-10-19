<!doctype html>
<html class="no-js" lang="">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Montreal Gentleman | 2019</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- all css here -->
        
        <!-- bootstrap v3.3.6 css -->
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
		<!-- pe-icon-7-stroke -->
		<link rel="stylesheet" href="{{asset('frontend/css/pe-icon-7-stroke.min.css')}}">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}">
        <!-- Image Zoom CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('frontend/css/img-zoom/jquery.simpleLens.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('frontend/lib/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('frontend/lib/css/preview.css')}}" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">-->
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('frontend/pignose/pignose.calendar.min.css')}}">
        
        <link rel="stylesheet" href="{{asset('frontend/datetimepicker/bootstrap-datetimepicker.min.css')}}">

        <!--Datatable CSS-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

        <!--Date CSS-->
        <link rel="stylesheet" href="{{asset('frontend/date/jquery.datepick.css')}}">

        

        @yield('headjs')
       


        <link rel="stylesheet" href="{{asset('frontend/css/c.css')}}">
        @yield('css')
    </head>
    <body>

@include('layouts.frontend.header')

@yield('pagetitle')
@yield('content')

@include('layouts.frontend.footer')

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/date/jquery.plugin.js')}}"></script> 
        <script type="text/javascript" src="{{asset('frontend/date/jquery.datepick.js')}}"></script> 
		<!-- bootstrap js -->
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <!-- parallax js -->
        <script src="{{asset('frontend/js/parallax.min.js')}}"></script>
		<!-- owl.carousel js -->
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <!-- Img Zoom js -->
		<script src="{{asset('frontend/js/img-zoom/jquery.simpleLens.min.js')}}"></script>
		<!-- meanmenu js -->
        <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
		<!-- jquery.countdown js -->
        <script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
		<!-- Nivo slider js
		============================================ --> 		
		<script src="{{asset('frontend/lib/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
		<script src="{{asset('frontend/lib/home.js')}}" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
		<!-- sticky js -->
        <script src="{{asset('frontend/js/sticky.js')}}"></script>
		<!-- plugins js -->
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('frontend/js/bootstrap-filestyle.min.js')}}"></script>
        <!-- main js -->

        <script src="{{asset('frontend/pignose/pignose.calendar.full.min.js')}}"></script>
        <script src="{{asset('frontend/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
        
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        
        

        <script src="{{asset('frontend/js/main.js')}}"></script>

        @yield('js')
    </body>
</html>
