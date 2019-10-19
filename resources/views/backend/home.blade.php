@extends('layouts.backend.master')
@section('css')
<style>
    div#bookingAll_paginate .pagination > li {display:flex;justify-content: center;align-items: center;}
    div#bookingAll_paginate .pagination > .active {    background: #1e88e5;}
    div#bookingAll_paginate .pagination > .active > a{    color: #fff; }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
    cursor: default;
    padding: 5px 15px;
    color: #67757c;
    border: 1px solid #ddd;
    background: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
}
</style>
@endsection
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
                        <h3 class="m-b-0">All Bookings </h3>
                        <p class="text-muted m-t-0 font-12">
                            List of bookings
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="bookingAll" class="table table-bordered table-striped dataTable no-footer" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Model Name</th>
                                            <th>Client Name</th>
                                            <th>Client Email</th>
                                            <th>Client Phone</th>
                                            <th>Package</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($bookings))
                                            @foreach($bookings as $booking)
                                                <tr>
                                                    <td>{{$booking->model_name}}</td>
                                                    <td>{{$booking->client_name}}</td>
                                                    <td>{{$booking->client_email}}</td>
                                                    <td>{{$booking->client_phone}}</td>
                                                    <td>{{$booking->package}}</td>
                                                    <td>
                                                        @php 
                                                            $input = $booking->date; 
                                                            $date = strtotime($input); 
                                                            echo date('d M Y', $date); 
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        @php 
                                                            $input = $booking->time; 
                                                            $time = strtotime($input); 
                                                            echo date('h:00 A', $time); 
                                                        
                                                        @endphp
                                                    </td>
                                                    <td>{{$booking->address}}</td>
                                                </tr>
                                            @endforeach
                                            @else
                                            <tr><td>No Bookings</td></tr>
                                        @endif
                                    </tbody>
                                </table>
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
<script>

    $(document).ready(function() {

        $('#bookingAll').DataTable({
        "bLengthChange": false,
        "aaSorting": []
        });
    } );
</script>
@endsection