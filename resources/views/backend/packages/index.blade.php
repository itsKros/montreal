@extends('layouts.backend.master')
@section('content')
<div class="page-wrapper" style="min-height: 294px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Welcome To Monteral Gentleman CMS</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row price">
                    <div class="col-12">
                        @include('frontend.msgs.messages')
                        <h3 class="m-b-0">Packages </h3>
                        <p class="text-muted m-t-0 font-12">
                            Edit packages rate
                        </p>
                    </div>
                    <form action="{{route('package.update', ['package' => 1])}}" method="POST" class="form-horizontal form-material row">
                        {{csrf_field()}}
                        {{ method_field('PUT')}}
                        <!--One Hour Start-->
                        <div class="col-md-4 package">
                            <div class="card card-outline-inverse">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">One Hour Rate</h4></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="onehour">Add Price <small>(in CAD)</small></label>
                                        <input type="text" id="onehour" name="onehour" value="{{$package->onehour}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--One Hour Ends-->


                        <!--For Hour Start-->
                        <div class="col-md-4 package">
                            <div class="card card-outline-inverse">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Three Hours Rate</h4></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="threehour">Add Price <small>(in CAD)</small></label>
                                        <input type="text" id="threehour" name="threehour" value="{{$package->threehour}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Four Hour Ends-->

                        <!--For Eight Start-->
                        <div class="col-md-4 package">
                            <div class="card card-outline-inverse">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Eight Hours Rate</h4></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="eighthour">Add Price <small>(in CAD)</small></label>
                                            <input type="text" id="eighthour" name="eighthour" value="{{$package->eighthour}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Four Eight Ends-->

                        <!--For twentyfour Start-->
                        <div class="col-md-4 package">
                            <div class="card card-outline-inverse">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">24 Hours Rate</h4></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="twentyfourhour">Add Price <small>(in CAD)</small></label>
                                            <input type="text" id="twentyfourhour" name="twentyfourhour" value="{{$package->twentyfourhour}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Four Eight Ends-->

                        <!--For Weekend Start-->
                        <div class="col-md-4 package">
                            <div class="card card-outline-inverse">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Weekend Rate</h4></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="weekend">Add Price <small>(in CAD)</small></label>
                                            <input type="text" id="weekend" name="weekend" value="{{$package->weekend}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Four Weekend Ends-->

                        <!--For Week Start-->
                        <div class="col-md-4 package">
                            <div class="card card-outline-inverse">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Week Rate</h4></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="week">Add Price <small>(in CAD)</small></label>
                                            <input type="text" id="week" name="week" value="{{$package->week}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Four Week Ends-->
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-inverse btn-md">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           
@endsection