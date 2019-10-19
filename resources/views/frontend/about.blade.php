@extends('layouts.frontend.master')

@section('css')
<style>
    /*banner*/

    .single-service > p {
        line-height: 23px;
        padding: 0 25px;
    }
    .about-optima-text h1, .about-sec-head h2, h2.creative-member, .contact-content-area h2 {
        font-size: 32px;
        font-weight: 300;
        line-height: 40px;
        margin-bottom: 20px;
        margin-top: 0;
        text-transform: uppercase;
    }
    .about-optima-text h1 strong, .client-say h2 strong, h2.creative-member strong, .contact-content-area h2 strong {
        border-bottom: 1px solid #23aaab;
        color: #23aaab;
        font-weight: 300;
        line-height: 40px;
    }
    .about-optima-text h1{text-align: center; margin-bottom: 50px;}
    .row.creative-member-area {
        padding: 45px 0;
    }
    .about-sec-head {
        margin-bottom: 40px;
        text-align: center;
    }

    .about-us-all .col-md-6 {
        padding-bottom: 66px;
    }
    .single-creative-member {
        margin-bottom: 20px;
    }
    .member-image {
        overflow: hidden;
        position: relative;
    }
    .member-image img {
        width: 100%;
    }
    .member-title {
        background: rgba(35, 180, 202, 0.7) none repeat scroll 0 0;
        bottom: -70px;
        display: block;
        left: 0;
        overflow: hidden;
        padding: 5px 10px;
        position: absolute;
        transition: all 0.3s ease 0s;
        width: 100%;
    }
    .member-title h2 {
        color: #fff;
        font-size: 24px;
        font-weight: 300;
        line-height: 28px;
        margin: 0;
        text-transform: capitalize;
    }
    .member-title h3 {
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        line-height: 28px;
        margin: 0;
    }
    .single-creative-member:hover .member-title {
        bottom: 0;
    }
    strong {
        font-weight: bold;
        color: #23aaab;
    }
    </style>

@endsection

@section('pagetitle')
        <!-- pages-title-start -->
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection

@section('content')

<!-- about content section start -->
<section class="main_shop_area">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about-optima-text">
                        <h1>About <strong>Montreal Gents</strong>
                        </h1>
                    </div>
                </div>
                <div class="about-us-all">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-optima-img">
                            <img style="max-width: 100%;" class="primary-image" src="{{asset('frontend/img/about/about_1.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-optima-text">
                            <div  class="wpara nor">
                                {!! $aboutinfo->abt_first_content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-us-all">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      
                        <div class="about-optima-text">

                            <div  class="wpara nor">
                                {!! $aboutinfo->abt_second_content !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-optima-img">
                            <img style="max-width: 100%;" class="primary-image" src="{{asset('frontend/img/about/about_2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>


{{--            <div class="row creative-member-area">--}}
{{--                <div class="about-sec-head">--}}
{{--                    <h2 class="creative-member">--}}
{{--                        our creative--}}
{{--                        <strong>member</strong>--}}
{{--                    </h2>--}}
{{--                    <p>Our skill is really high quality and standard for build your project.</p>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6">--}}
{{--                    <div class="single-creative-member res2">--}}
{{--                        <div class="member-image">--}}
{{--                            <img alt="" src="frontend/img/about/member1.jpg">--}}
{{--                            <div class="member-title">--}}
{{--                                <h2>Jennifear lawrence</h2>--}}
{{--                                --}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6">--}}
{{--                    <div class="single-creative-member res2 res-mem">--}}
{{--                        <div class="member-image">--}}
{{--                            <img alt="" src="frontend/img/about/member2.jpg">--}}
{{--                            <div class="member-title">--}}
{{--                                <h2>Martin Jerry</h2>--}}
{{--                                --}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6">--}}
{{--                    <div class="single-creative-member res-mem2">--}}
{{--                        <div class="member-image">--}}
{{--                            <img alt="" src="frontend/img/about/member3.jpg">--}}
{{--                            <div class="member-title">--}}
{{--                                <h2>Danny Louis</h2>--}}
{{--                                --}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 col-sm-6">--}}
{{--                    <div class="single-creative-member">--}}
{{--                        <div class="member-image">--}}
{{--                            <img alt="" src="frontend/img/about/member4.jpg">--}}
{{--                            <div class="member-title">--}}
{{--                                <h2>Michael Johnson</h2>--}}
{{--                                --}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>
</section>
<!-- about  content section end -->

@endsection
