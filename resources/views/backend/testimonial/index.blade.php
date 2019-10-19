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
                    <h3 class="text-themecolor m-b-0 m-t-0">Testimonials</h3>
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
                            <h4 class="card-title">Testimonials <a href="{{route('testimonial.create')}}" class="btn btn-success" style="float:right;">Add Testimonial</a></h4>


                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Author Name</th>
                                        <th>Author Designation</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($testimonials))
                                        @foreach($testimonials as $testimonial)
                                            <tr>
                                                <td>{{$testimonial->id}}</td>
                                                <td>{{$testimonial->author_name}}</td>
                                                <td>{{$testimonial->author_desig}}</td>


                                                <td class="action">
                                                    <a href="{{route('testimonial.edit',['id'=>$testimonial->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{route('testimonial.destroy', ['id'=>$testimonial->id])}}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="5"><em>No Testimonials</em></td></tr>
                                    @endif

                                    </tbody>
                                </table>
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