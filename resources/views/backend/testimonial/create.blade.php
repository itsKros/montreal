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
                    <h3 class="text-themecolor m-b-0 m-t-0">Add Model<a href="{{route('testimonial.index')}}" class="btn btn-danger" style="float:right;">Go Back</a></h3>
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
                                    <form action="{{route('testimonial.store')}}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="author_img">Author Image</label>
                                            <input type="file" class="form-control form-control-line" name="author_img" id="author_img">
                                        </div>
                                        <div class="form-group">
                                            <label for="author_name">Author Name</label>
                                            <input type="text" class="form-control form-control-line" name="author_name" id="author_name" placeholder="Enter Author Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="author_desig">Author Designation</label>
                                            <input type="text" class="form-control form-control-line" name="author_desig" id="author_desig" placeholder="Enter Author Designation">
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <textarea class="form-control form-control-line" name="desc" id="desc" placeholder="What they says.."></textarea>
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
