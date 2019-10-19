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
                        <h3 class="text-themecolor m-b-0 m-t-0">Edit Home Page Info</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <hr style="visibility:hidden; margin:2.5px 0;">
                        @include('frontend.msgs.messages')  
                        <hr style="visibility:hidden; margin:2.5px 0;">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{route('servicesinfo.update', ['servicesinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    

                                    
                                    <!--Services First Section Starts-->
                                    <div class="col-lg-6 col-xlg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="ser_first_content" class="col-md-12">First Section Content</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" name="ser_first_content" id="ser_first_content">{{$servicesinfo->ser_first_content}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Services First Section Ends-->
                                    
                                    <!--Services Second Section Starts-->
                                    <div class="col-lg-6 col-xlg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="ser_second_content" class="col-md-12">Second Section Content</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" name="ser_second_content" id="ser_second_content">{{$servicesinfo->ser_second_content}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Services Second Section Ends-->
                                    
                                    <!--Request an Encounter Section Starts-->
                                    <div class="col-lg-6 col-xlg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="ser_request_encounter" class="col-md-12">Request an Encounter</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" name="ser_request_encounter" id="ser_request_encounter">{{$servicesinfo->ser_request_encounter}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Request an Encounter Section Ends-->
                                    
                                    <div class="col-lg-12 col-xlg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-md btn-success">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
@section('js')
<script src="https://cdn.ckeditor.com/4.11.4/basic/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'ser_first_content' );
CKEDITOR.replace( 'ser_second_content' );
CKEDITOR.replace( 'ser_request_encounter' );
</script>

@endsection