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
                <div class="col-md-12 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Edit Testimonial<a href="{{route('testimonial.index')}}" class="btn btn-danger" style="float:right;">Go Back</a></h3>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">

                <div class="col-lg-12">
                    @include('frontend.msgs.messages')
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="{{route('testimonial.update', ['id' => $testimonial->id])}}" enctype="multipart/form-data" method="POST">
                                        {{csrf_field()}}
                                        {{ method_field('PUT')}}
                                        <img src="{{url('/uploads/testimonials/'. $testimonial->author_img)}}" alt="{{$testimonial->author_name}}" class="userfeatured"/>
                                        <br>
                                        <div class="form-group">
                                            <label for="author_img">Author Image</label>
                                            <input type="file" class="form-control form-control-line" name="author_img" id="author_img">
                                        </div>
                                        <div class="form-group">
                                            <label for="author_name">Author Name</label>
                                            <input type="text" class="form-control form-control-line" name="author_name" id="author_name" placeholder="Enter Author Name" value="{{$testimonial->author_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="author_desig">Author Designation</label>
                                            <input type="text" class="form-control form-control-line" name="author_desig" id="author_desig" placeholder="Enter Author Designation" value="{{$testimonial->author_desig}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <textarea class="form-control form-control-line" name="desc" id="desc" placeholder="What they says..">{{$testimonial->desc}}</textarea>
                                        </div>



                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
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
