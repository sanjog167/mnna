@extends('frontend.layouts.app')
<style type="text/css">
    header{
       
        background: rgba(0,0,0,0.8);
    }

    .top-header{
        border-bottom: none !important;
    }
    
    .why{
        font-family: Montserrat, sans-serif;
        font-size: 16px;
    }



</style>
@section('content')
 <!-- Banner Section Start -->
            <div class="rs-banner rs-banner-style2">
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{asset('public/images/product/'.$abouts['abannerimage'])}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">ABOUT</h1>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
            

            <!-- About Section Start -->
            <div class="rs-about gray-bg main-home pt-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="sec-title mb-28 md-mb-10">
                                <div class="banner-border-line"></div>
                                <h2 class="title pb-13">
                                    {!!$abouts->missiontitle!!}
                                </h2>
                                <p class="margin-0">
                                     {!!$abouts->missiondescription!!}</p>

                            </div>
                           
                        </div>
                        <div class="col-lg-6 md-mt-60">
                            <div class="images-part">
                                <img src="{{asset('public/images/product/'.$abouts['abannerimage'])}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-animation">
                    <div class="animate one">
                        <img class="scale" src="{{ static_asset('assets/images/about/main-home/2.png') }}" alt="About">
                    </div>
                </div>
            </div>
            <!-- About Section End -->


            <!-- About Section Start -->
            <div class="rs-about gray-bg main-home pt-40 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">

                            <div class="sec-title md-mb-10">
                                <div class="banner-border-line"></div>
                                <h3 class="mb-30">The vision of Miss Nepal North America</h3>
                                    <p> {!!$abouts->whyus!!}</p>
                            </div>
                          
                        </div>
                        
                    </div>
                </div>
                <div class="rs-animation">
                    <div class="animate one">
                        <img class="scale" src="{{ static_asset('assets/images/about/main-home/2.png') }}" alt="About">
                    </div>
                    <div class="animate three">
                        <img class="scale" src="{{ static_asset('assets/images/about/main-home/3.png') }}" alt="About">
                    </div>
                </div>
            </div>
            <!-- About Section End -->



         @endsection



