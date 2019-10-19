@extends('layouts.frontend.master')

@section('css')


@endsection

@section('pagetitle')
        <!-- pages-title-start -->
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection

@section('content')
<!-- contact content section start -->
<section class="top-map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="map-area">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d357585.076521621!2d-74.01048414282262!3d45.557699585064015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C+QC%2C+Canada!5e0!3m2!1sen!2sin!4v1555140761447!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;width:100% !important;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4" style="display:none;">
                <div class="page-title">
                    
                    <h3>Our Location</h3>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <address> Address: 123 Main Street, Anytown,CA 12345 USA. </address>
                            </div>
                            <div class="col-sm-3">
                                <strong>Telephone</strong>
                                <br>
                                (800) 0123 456 789
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!---->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="page-title">
                    <h3>Get in touch with us</h3>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

                            <iframe name="lc_contact_form" frameborder="0" width="100%" height="600" src="https://548994.17hats.com/ruby/embed/lead/form/dhdprngwpnvbxkbcznhvpgbvszhxfffz"></iframe>
                            <script type="text/javascript" src="https://548994.17hats.com/vendor/iframeSizer.min.js"></script>
{{--                            <form class="cendo" action="" method="post">--}}
{{--                    --}}
{{--                                <div class="form-group required">--}}
{{--                                    <label class="col-md-3 control-label">Your Name</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input class="form-control" type="text" value="" name="name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group required">--}}
{{--                                    <label class="col-md-3 control-label">E-Mail Address</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <input class="form-control" type="text" value="" name="email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group required">--}}
{{--                                    <label class="col-md-3 control-label">Enquiry</label>--}}
{{--                                    <div class="col-md-9">--}}
{{--                                        <textarea class="form-control" rows="10" name="message"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="buttons">--}}
{{--                                        <div class="pull-right">--}}
{{--                                            <input class="btn btn-primary" type="submit" value="Submit">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
    </div>
</section>
<!-- contact content section end -->

@endsection
