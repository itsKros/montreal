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
                    <hr style="visibility:hidden; margin:2.5px 0;">
                    @include('frontend.msgs.messages')  
                    <hr style="visibility:hidden; margin:2.5px 0;">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    
                                    <!--Welcome Section Starts-->
                                    <div class="col-lg-6 col-xlg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12" for="welcometitle">Welcome Title</label>
                                            <div class="col-md-12">
                                                <input type="text" id="welcometitle" name="welcometitle" value="{{$homeinfo->welcometitle}}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="welcomecontent" class="col-md-12">Welcome Content</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" name="welcomecontent" id="welcomecontent">{{$homeinfo->welcomecontent}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Welcome Section Ends-->
                                    
                                    <!--Ete First Section Starts-->
                                    <div class="col-lg-6 col-xlg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12" for="ete_first_title">First Section Title</label>
                                            <div class="col-md-12">
                                                <input type="text" id="ete_first_title" name="ete_first_title" value="{{$homeinfo->ete_first_title}}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="welcomecontent" class="col-md-12">First Section Content</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" name="ete_first_content" id="ete_first_content">{{$homeinfo->ete_first_content}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Ete First Section Ends-->
                                    
                                    <!--Ete Second Section Starts-->
                                    <div class="col-lg-6 col-xlg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-12" for="ete_second_title">Second Section Title</label>
                                            <div class="col-md-12">
                                                <input type="text" id="ete_second_title" name="ete_second_title" value="{{$homeinfo->ete_second_title}}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="welcomecontent" class="col-md-12">Second Section Content</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control form-control-line" name="ete_second_content" id="ete_second_content">{{$homeinfo->ete_second_content}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Ete Second Section Ends-->
                                    
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
CKEDITOR.replace( 'welcomecontent' );
CKEDITOR.replace( 'ete_first_content' );
CKEDITOR.replace( 'ete_second_content' );

</script>

@endsection