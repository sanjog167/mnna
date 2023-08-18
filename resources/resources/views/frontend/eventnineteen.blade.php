@extends('frontend.layouts.app')
<style type="text/css">
    header{
       
        background: rgba(0,0,0,0.8);
    }

    .top-header{
        border-bottom: none !important;
    }



</style>
@section('content')


 <div class="rs-banner rs-banner-style2">
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/e19.jpg') }}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">Miss Nepal North America 2019</h1>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div class="rs-about gray-bg main-home pt-80 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="sec-title mb-28 md-mb-10">
                                
                                
                                <p class="margin-0 hero">
                                    Miss Nepal North America is an annual international beauty pageant run by Dreams Universal LLC, USA. It is one of the largest pageants in North America in terms of Media coverage in many countries worldwide. 
                                    <br>
                                    <br>
                                    Miss Nepal North America is a beauty pageant for girls living in the USA and of Nepali origin. It was founded in 2017. The contest’s mission is to honor and recognize talented, cultural, and intelligent young women of Nepali descent in the USA and provide them with a platform to demonstrate their unique talents and passions through a competition that reflects the art, poise, and grace of beauty pageants. Sailes Shrestha, a Nepali-American, founded the contest the show.
                            </div>
                          
                        </div>
                    </div>

                    <div class="rs-project style1 pt-100 pb-60 md-pt-70 md-pb-70">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title2 mb-28 md-mb-10">
                                        <div class="banner-border-line new-line"></div>
                                        <h2 class="sponsor-title pb-13">
                                           VIDEO
                                        </h2>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-30">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <iframe  width="100%" height="400px" src="https://www.youtube.com/embed/xFGvtmZshm0">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/H_cvPYX7XTE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                </iframe>
                                            </div>
                                        </div>
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
                
                <div class="rs-project style1 pt-100 pb-80 md-pt-70 md-pb-70" style="background: #f0f8ff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title2 mb-28 md-mb-10">
                                    <div class="banner-border-line new-line"></div>
                                    <h2 class="sponsor-title pb-13">
                                      YOGA CLASS
                                    </h2>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row" stye="align-items: flex-start;">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/Yoga/01-1-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/Yoga/02-1-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/Yoga/03-1-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/Yoga/04-1-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 sm-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/Yoga/05-1-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/Yoga/06-1-360x240.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
                
                <div class="rs-project style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background: #f0f8ff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title2 mb-28 md-mb-10">
                                    <div class="banner-border-line new-line"></div>
                                    <h2 class="sponsor-title pb-13">
                                      CITY TOUR
                                    </h2>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row" stye="align-items: flex-start;">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/01-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/02-e1646917034178-360x340.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/03-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/04-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 sm-mb-30  mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/05-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 sm-mb-30  mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/06-e1646917163317-360x343.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6  mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/City/07-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                           
                        </div>
                    </div> 
                </div>
                
                 <div class="rs-project style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background: #f0f8ff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title2 mb-28 md-mb-10">
                                    <div class="banner-border-line new-line"></div>
                                    <h2 class="sponsor-title pb-13">
                                      FINAL SHOW
                                    </h2>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row" stye="align-items: flex-start;">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/01-2-360x541.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/02-2-360x541.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/03-2-360x539.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/04-2-360x543.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/05-2-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/07-1-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/08-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/09-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/11-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/14-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/15-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/16-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/17-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/18-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/21-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/22-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/25-1-1-e1647008803120.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/25-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 sm-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/MNAN/final/26-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/Final/06-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
                
            <!-- About Section End -->
            
            

    @endsection
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                