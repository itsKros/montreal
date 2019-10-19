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
                <h3 class="text-themecolor m-b-0 m-t-0">Models List</h3>
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
                        <h4 class="card-title">Models <a href="{{route('users.create')}}" class="btn btn-success" style="float:right;">Add Model</a></h4>
                        <h6 class="card-subtitle">Edit models account</h6>

                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Model Name</th>
                                        <th>Email</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @if(count($users))
                                        @foreach($users as $users => $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>


                                            <td class="action">
                                                <a href="{{route('users.show', ['id'=>$user->id])}}" class="btn btn-primary btn-sm">View</a>
                                                <form action="{{route('users.destroy', ['id'=>$user->id])}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr><em>No Models</em></tr>
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
