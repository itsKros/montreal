@extends('layouts.frontend.master')
@section('css')
<style>
.nivo-directionNav {
    display: none;
}
</style>
@endsection
@section('content')
        <!-- slider-section-start -->
        <section class="slider-main-area">
            <div class="main-slider an-si">
                <div class="bend niceties preview-2 hm-ver-1">
                    <div id="ensign-nivoslider-2" class="slides">
                        <img src="{{asset('frontend/img/slider/1.png')}}" alt="" title="#slider-direction-3"  />
                        <!-- <img src="{{asset('frontend/img/slider/2.png')}}" alt="" title="#slider-direction-1"  /> -->
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-3" class="t-cn slider-direction Builder">
                        <div class="slide-all">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h2 class="title0">Meet</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Antoine</h2>
                            </div>

                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a class="min1" href="{{route('model.show',['id'=> '13'])}}">View Profile Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="slider-direction-1" class="t-cn slider-direction Builder">
                        <div class="slide-all slide2">
                             <!-- layer 1 -->
                             <!-- <div class="layer-1">
                                <h2 class="title0">Meet</h2>
                            </div> -->
                            <!-- layer 2 -->
                            <!-- <div class="layer-2">
                                <h2 class="title6">Vin Armani</h2>
                            </div> -->

                            <!-- layer 3 -->
                            <!-- <div class="layer-3">
                                <a class="min1" href="#">View Profile Now</a>
                            </div> -->
                        <!--</div>
                    </div> -->
			          </div>
            </div>
        </section>
		<!-- slider section end -->

        <!-- new-products section start -->
        <section class="new-products single-products section-padding-top section-padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title">
                                <h3>{{$homeinfo->welcometitle}}</h3>
                                <div class="section-icon">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                </div>
                                <div class="wpara">
                                        {!!$homeinfo->welcomecontent!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      @if(count($users)>=4)
                        <div id="new-products" class="owl-carousel product-slider owl-theme">
                            @if(count($users))
                                @foreach($users as $users => $user)
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <!-- <a href="/model/{{$user->id}}"> -->
                                                <a href="{{url('/model/'. $user->id)}}">
                                                    <img src="{{ asset('uploads/featuredimages/' . $user->featuredimage) }}" alt="{{$user->name}}" />
                                                </a>
                                            </div>
                                            <div class="product-dsc">
                                                <h3><a href="/model/{{$user->id}}">{{$user->name}}</a></h3>
                                                <div class="star-price">
                                                    <span class="price-left">View Profile</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <em>No Models</em>
                            @endif

                            <!-- <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>sale</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/2.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Jon Doe</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">View Profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                      @else
                      <div class="col-md-6">
                        <img class="img-responsive" src="{{asset('frontend/img/half-1.jpg')}}" />
                      </div>
                      <div class="col-md-6">
                        <img class="img-responsive" src="{{asset('frontend/img/half-2.jpg')}}" />
                      </div>
                      @endif
                    </div>
                </div>
        </section>
        <!-- new-products section end -->

        <!-- Edge to Edge section start -->
        <section class="sectione">
            <div class="container-fluid e2e" style="border-top: 1px solid #cecece;">
                <div class="row">
                    <div class="col-md-6 edi first"></div>
                    <div class="col-md-6 edc">
                        <div class="section-title">
                            <h3>{{$homeinfo->ete_first_title}}</h3>
                            <div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div  class="wpara nor">
                                {!! $homeinfo->ete_first_content !!}
                        </div>

                        <div class="btnw">
                            <a href="{{route('models')}}" class="btn btn-lg btn-primary kbtn">View All Montreal Gentleman</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Edge to Edge section end -->


        <!-- Edge to Edge section start -->
        <section class="sectione">
            <div class="container-fluid e2e">
                <div class="row">
                    <div class="col-md-6 edc">
                        <div class="section-title">
                            <h3>{{$homeinfo->ete_second_title}}</h3>
                            <div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div  class="wpara nor">
                                {!!$homeinfo->ete_second_content!!}

                        </div>

                        <div class="btnw">
                            <a href="{{route('services')}}" class="btn btn-lg btn-primary kbtn">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-6 edi second"></div>
                </div>
            </div>
        </section>
        <!-- Edge to Edge section end -->


        <!-- testimonials section start -->
        <section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="overlay"></div>
            <div class="re-testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title re-section-title">
                                <h3>TESTIMONIALS</h3>
                                <div class="section-icon re-section1">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-text-center text-center">
                            <div id="testimonials" class="re-owl-carousel2 owl-carousel product-slider owl-theme">
                                @if(count($testimonials))
                                    @foreach($testimonials as $testimonial)
                                        <div class="single-testimonial">
                                            <div class="testimonial-dsc">
                                                <p>{{$testimonial->desc}}</p>
                                            </div>
                                            <div class="testimonial-img">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/testimonials/' . $testimonial->author_img) }}" alt="{{$testimonial->author_name}}" class="userfeatured"/>
                                                </a>
                                                <h4><a href="#">{{$testimonial->author_name}}</a></h4>
                                                <span>{{$testimonial->author_desig}}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                    @else
                                        No Testimonials
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials section end -->


        <!-- Featured section start -->
        <section class="">
            <div class="brand-logo">
                <div class="barnd-bg">
                    <div class="container">

                            <div class="row">
                                    <div class="col-xs-12">
                                        <div class="section-title">
                                            <h3>Featured In</h3>
                                            <div class="section-icon">
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="row text-center">
                            <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/1.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/2.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/3.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/4.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/5.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/6.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/1.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/3.png')}}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand section end -->

@endsection
