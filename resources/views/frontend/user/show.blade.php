@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>

@font-face {
  font-family: pignose-calendar-icon;
  src: url({{asset('frontend/pignose/icon_navs.ttf')}});
}
@font-face {
    font-family: 'Glyphicons Halflings';
  src: url({{asset('frontend/datetimepicker/glyphicons-halflings-regular.ttf')}});
}

.datetimepicker thead tr:first-child th.next:after {
    content: "\f054";
    font-family: FontAwesome;
}
.datetimepicker thead tr:first-child th.prev:after {
    content: "\f053";
    font-family: FontAwesome;
}
.datetimepicker table {
    margin: 0;
    border-spacing: 3px 3px;
    border-collapse: separate;
}
.datetimepicker table tr td.disabled, .datetimepicker table tr td.disabled:hover {
    background: #eee;
}
.weekend .wrap-input {
    width: 25%;
    position: relative;
}
.weekend .wrap-input span{position: absolute;}


        .section {
            padding-top: 90px;
        }
        
        .pro-img-tab-slider .item a img {
            background: #f1f1f1 none repeat scroll 0 0;
            border-radius: 0;
            margin: 30px 0 0;
            width: 100%;
        }
        .pro-img-tab-slider.indicator-style2.owl-theme .owl-controls .owl-buttons div.owl-prev {
            right: 96%;
        }
        .pro-img-tab-slider.indicator-style2.owl-theme .owl-controls .owl-buttons div {
            color: #b7b7b7;
            font-size: 17px;
            padding: 4px 11px;
            right: 10px;
            top: 41%;
        }
        .owl-theme .owl-controls .owl-buttons .owl-prev {
            left: 15px;
            right: auto;
        }
        .owl-theme .owl-controls .owl-buttons div {
            background: transparent none repeat scroll 0 0; 
            border: 1px solid #23aaab;
            border-radius: 0;
            color: #23aaab;
            font-size: 18px;
            height: 35px;
            margin: 2px;
            opacity: 0;
            padding: 0;
            position: absolute;
            right: 15px;
            text-align: center;
            top: 36%;
            transition: all 0.3s ease 0s;
            width: 35px;
        }
        .section .item {
            padding: 5px;
        }
        /*request form*/
        .request-bg {
            padding: 90px 0;
            background-color: #E8EAE9;
        }
       .wrap-input {
            width: 100%;
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 2px;
            margin-bottom: 5px;
        }
        .wrap-input .input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 3px;
            border: none;
        }
        button.contact-form-btn {
            padding: 15px 20px;
            border-radius: 3px;
            border: none;
        }
        .kbtn {background: #272727;border: 0;padding: 15px 35px;}
        .kbtn:hover {background-color: #23aaab;}
        
        .wrap-input {
            display: inline-block;
            width: 49%;
            margin-bottom: 3px;
        }
        .wrap-input.ad {
            width: 98.8%;
        }
        .wrap-input.ad select {
            border: 1px solid #d3d3d3;
            padding: 15px 20px;
            width: 100%;
        }
        
        .wrap-input span {
            position: absolute;
            top: 50%;
            right: 15px;
            font-size: 20px;
            transform: translateY(-50%);
        }
        select.input {
            padding: 14px 30px !important;
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
                            <h2 class="page-title">Montreal Gentlemen</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection
@section('content')
    <!-- single peoduct content section start -->
    <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            @include('frontend.msgs.messages')
                        <div class="row">
                            <div class="col-md-6 col-sm-6 none-si-pro">
                                <div class="pro-img-tab-content tab-content">
                                    <div class="tab-pane active" id="image-1">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                                data-lens-image="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" href="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}">
                                                <img src="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" alt="" class="simpleLens-big-image">
                                            </a>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="image-main">
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                                    data-lens-image="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" href="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}">
                                                    <img src="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" alt="" class="simpleLens-big-image">
                                                </a>
                                            </div>
                                        </div>

                                    @foreach($galleryitems as $galleryitem)
                                        <div class="tab-pane" id="image-{{$galleryitem->id}}">
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                                    data-lens-image="{{ asset('uploads/galleries/' . $galleryitem->galleryitem) }}" href="{{ asset('uploads/galleries/' . $galleryitem->galleryitem) }}">
                                                    <img src="{{ asset('uploads/galleries/' . $galleryitem->galleryitem) }}" alt="" class="simpleLens-big-image">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <div class="pro-img-tab-slider indicator-style2">
                                        
                                        <div class="item">
                                            <a href="#image-main" data-toggle="tab">
                                                <img src="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" alt="" />
                                            </a>
                                        </div>
                                        @foreach($galleryitems as $galleryitem)
                                            <div class="item">
                                                <a href="#image-{{$galleryitem->id}}" data-toggle="tab">
                                                    <img src="{{ asset('uploads/galleries/' . $galleryitem->galleryitem) }}" alt="" />
                                                </a>
                                            </div>
                                        @endforeach
                                        
                                    </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="">
                                    <div class="single-product-sec-head">
                                        <h1>{{$user->name}}</h1>
                                    </div>
                                    <div class="short-description">
                                        {!! $user->modeldetail !!}
                                        
                                    </div>
                                    <div class="single-product-sec-head">
                                            
                                        </div>
                                    <div class="col-md-6 k">
                                        <h5>Model Assets</h5>
                                        <table class="table table-bordered ma">
                                            <tbody>
                                            <tr>
                                            <td><strong>Height</strong></td>
                                            <td>{{$user->height}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Weight</strong></td>
                                            <td>{{$user->weight}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Age</strong></td>
                                            <td>{{$user->age}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Hair Color</strong></td>
                                            <td>{{$user->hair_color}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Eyes Color</strong></td>
                                            <td>{{$user->eye_color}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 k">
                                            <h5>Model Price</h5>
                                            <table class="table table-bordered ma price">
                                                <tbody>
                                                @foreach($packages as $package)
                                                <tr>
                                                    <td><strong>1 hrs.</strong></td>
                                                    <td>$ {{$package->onehour}} CAD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>3 hrs</strong></td>
                                                    <td>$ {{$package->threehour}} CAD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>8 hrs.</strong></td>
                                                    <td>$ {{$package->eighthour}} CAD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>24 hrs.</strong></td>
                                                    <td>$ {{$package->twentyfourhour}} CAD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Weekend</strong></td>
                                                    <td>$ {{$package->weekend}} CAD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Week</strong></td>
                                                    <td>$ {{$package->week}} CAD</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                    {{-- <div class="col-md-6">
                                        @foreach ($bookings as $booking)
                                        {{$booking->date}}&nbsp;{{$booking->package}}<br>
                                        @endforeach
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- request section start -->
        <section class="section">
            <div class="request-logo">
                <div class="request-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-6">
                                <h2>Request An Encounter for {{$user->name}}</h2>
                                   {!!$service->ser_request_encounter!!}
                                </div>
                                
                                <div class="col-md-6">
                                       
                                    <div class="wrap-contact re">
                                        <form class="contact-form" action="{{route('booking.store')}}" method="POST">
                                            @csrf
                                            <div class="wrap-input">
                                                <input class="input" type="text" name="name" required placeholder="Full Name *" id="name"/>
                                            </div>
                                            <div class="wrap-input">
                                                <input class="input" type="text" name="email" required placeholder="Email *" id="email"/>
                                            </div>
                                            <div class="wrap-input">
                                                <input class="input" type="text" name="phone" required placeholder="Phone" id="phone"/>
                                            </div>
                                            <div class="wrap-input">
                                                <select class="email s-email s-wid input" required aria-required="true"  name="package" id="package">
                                                    <option value="">Select Package</option>
                                                    @foreach($packages as $package)
                                                    <option value="{{$package->onehour}}">One hour - $ {{$package->onehour}} CAD</option>
                                                    <option value="{{$package->threehour}}">Three Hours - $ {{$package->threehour}} CAD</option>
                                                    <option value="{{$package->eighthour}}">Eight Hours - $ {{$package->eighthour}} CAD</option>
                                                    <option value="{{$package->twentyfourhour}}">24 Hours - $ {{$package->twentyfourhour}} CAD</option>
                                                    <option value="{{$package->weekend}}">Weekend - $ {{$package->weekend}} CAD</option>
                                                    <option value="{{$package->week}}">Week - $ {{$package->week}} CAD</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @php
                                                $time = ['24:00'=>'12 AM', '01:00'=>'01 AM', '02:00'=>'02 AM', '03:00'=>'03 AM', '04:00'=>'04 AM', '05:00'=>'05 AM', '06:00'=>'06 AM', '07:00'=>'07 AM', '08:00'=>'08 AM', '09:00'=>'09 AM',
                                                            '10:00'=>'10 AM', '11:00'=>'11 AM', '12:00'=>'12 PM', '13:00'=>'01 PM', '14:00'=>'02 PM', '15:00'=>'03 PM', '16:00'=>'04 PM', '17:00'=>'05 PM', '18:00'=>'06 PM', '19:00'=>'07 PM',
                                                            '20:00'=>'08 PM', '21:00'=>'09 PM', '22:00'=>'10 PM', '23:00'=>'11 PM'];
                                            @endphp
                                           
                                                <div class="wrap-input">
                                                    <input id="date" name="date" type="text" placeholder="Select date" required class="input date" />
                                                    <span><i class="fa fa-calendar"></i></span>
                                                </div>
                                                <div class="wrap-input">
                                                    <select  name="time" required aria-required="true" class="input time" id="time" >
                                                        <option value="">Choose time</option>
                                                        
                                                        @foreach($time as $key=>$value)
                                                            <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span><i class="fa fa-clock-o"></i></span>
                                                </div>
                                            
                                            
                                            <div class="wrap-input ad">
                                                <textarea class="input" name="address" id="address" required placeholder="Place to meet"></textarea>
                                            </div>
                                            <input type="hidden" value="{{$user->id}}"  name="modelid">
                                            <input type="hidden" value="{{$user->name}}" name="modelname"> 
                                            <div class="container-contact-form-btn">
                                                <input type="submit" class="btn btn-primary kbtn" value="Submit" />
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- request section end -->
        
@endsection

<?php 

$ed = $user->engagedates;
$engagedates=explode(',',$ed);



?>



@section('js')
<script>

                            
    
    

    
    let date = new Date();
    date.setDate(date.getDate() + 90);
    $("#date").datetimepicker({
        format: 'mm/dd/yyyy',
        minView:'month',
        maxView: 'year',
        autoclose: true,
        startView:2,
        todayHighlight:true,
        datesDisabled: [
            
            @foreach ($engagedates as $engagedate)

                "{{$engagedate}}",

            @endforeach
            
            @foreach ($bookings as $booking)
                
                
                "{{$booking->date}}",

                @if($booking->package == "Weekend")
                    @php
                        $star_date = strtotime($booking->date);
                        $end_date = strtotime($booking->date. ' +1 day');  
                        $sd = date('m/d/Y', $star_date); 
                        $ed = date('m/d/Y', $end_date); 
                        echo 
                        "\"$sd\",
                        \"$ed\",";
                    @endphp
                @endif

                @if($booking->package == "Week")
                    @php
                        $first_day      = date('m/d/Y', strtotime($booking->date));
                        $second_day     = date('m/d/Y', strtotime($booking->date. ' +1 day'));
                        $third_day      = date('m/d/Y', strtotime($booking->date. ' +2 day')); 
                        $fourth_day     = date('m/d/Y', strtotime($booking->date. ' +3 day')); 
                        $fifth_day      = date('m/d/Y', strtotime($booking->date. ' +4 day')); 
                        $sixth_day      = date('m/d/Y', strtotime($booking->date. ' +5 day')); 
                        $seventh_day    = date('m/d/Y', strtotime($booking->date. ' +6 day'));   
                        echo 
                        "\"$first_day\",
                        \"$second_day\",
                        \"$third_day\",
                        \"$fourth_day\",
                        \"$fifth_day\",
                        \"$sixth_day\",
                        \"$seventh_day\",";
                    @endphp
                @endif
            @endforeach
        ],
        startDate:new Date(),
        endDate : date
    })
    

</script>
@endsection