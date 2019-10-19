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
                    <h3 class="text-themecolor m-b-0 m-t-0">Edit Footer Info</h3>
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
                    <div class="card">
                        <div class="card-block">
                            <form action="{{route('footerinfo.update', ['footerinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                            {{csrf_field()}}
                            {{ method_field('PUT')}}

                                <!--About Montreal Gentlemen Section Starts-->
                                <div class="col-lg-6 col-xlg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="aboutmg" class="col-md-12">About Montreal Gentlemen</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control form-control-line" name="aboutmg" id="ete_second_content">{{$footerinfo->aboutmg}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--About Montreal Gentlemen Section Ends-->

                                <!--Join Us Section Starts-->
                                <div class="col-lg-6 col-xlg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="joinus" class="col-md-12">Join Us</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control form-control-line" name="joinus" id="joinus">{{$footerinfo->joinus}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Join Us Section Ends-->

                                <!--Contact Us Section Starts-->
                                <div class="col-lg-6 col-xlg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="email">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" id="email" name="email" value="{{$footerinfo->email}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="email_2">Second Email</label>
                                        <div class="col-md-12">
                                            <input type="text" id="email_2" name="email_2" value="{{$footerinfo->email_2}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xlg-6 col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-12" for="phone">Phone</label>
                                        <div class="col-md-12">
                                            <input type="text" id="phone" name="phone" value="{{$footerinfo->phone}}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                </div>
                                <!--Contact Us Section Ends-->



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
                CKEDITOR.replace( 'aboutmg' );
                CKEDITOR.replace( 'joinus' );
            </script>

@endsection