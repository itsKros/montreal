@extends('layouts.frontend.master')

@section('css')
<style>
    /*banner*/

    .contact-img-area {
        position: relative;
    }
    .contact-img-area::before {
        background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .contact-img-area a {
        color: #dedede;
    }
    .contact-img-area p {
        color: #fff;
    }
    /*banner-title*/
    h2.page-title {
        color: #fff;
        font-size: 40px;
        font-style: normal;
        font-weight: normal;
        line-height: 40px;
        margin: 0;
        opacity: 1;
        padding: 0;
        text-transform: uppercase;
    }
    .services{
        background-image: url(frontend/img/about/service-back.jpg);
        background-size: cover;
        background-position: center;
    }
    .services-content {
        padding: 90px 0 50px;
    }
    .services-content2 {
    padding: 0px 0 50px;
}
    .services .services-optima-text{
        padding: 54px  0;
    }
    .services .services-optima-text .buttons{
        padding-top: 20px;
    }
    .kbtn {background: #272727;border: 0;padding: 15px 35px;}
    .services-optima-text h1, .services-sec-head h2, h2.creative-member, .contact-content-area h2 {
        font-size: 32px;
        font-weight: 300;
        line-height: 40px;
        margin-bottom: 20px;
        margin-top: 0;
        text-transform: uppercase;
    }
    .services-optima-text h1 strong, .client-say h2 strong, h2.creative-member strong, .contact-content-area h2 strong {
        border-bottom: 1px solid #23aaab;
        color: #23aaab;
        font-weight: 300;
        line-height: 40px;
    }
    .kbtn:hover {background-color: #23aaab;}
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
                            <h2 class="page-title">Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection

@section('content')
<section class="services-content">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="services-optima-img">
                            <img style="max-width: 100%;" class="primary-image" src="{{asset('frontend/img/services/services_1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="services-optima-text">
                            <h1>
                                Our
                                <strong>Services</strong>
                            </h1>
                            <div  class="wpara nor">
                                {!! $servicesinfo->ser_first_content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="services-content2">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="services-optima-text">
                          <div  class="wpara nor">
                            {!! $servicesinfo->ser_second_content !!}
                            <div class="buttons">
                                <a class="btn btn-primary kbtn" href="{{route('models')}}">Request Encounter</a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="services-optima-img">
                            <img style="max-width: 100%;" class="primary-image" src="{{asset('frontend/img/services/services_2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
