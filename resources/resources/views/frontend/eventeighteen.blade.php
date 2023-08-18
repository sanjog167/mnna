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
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/e18.jpg') }}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">MISS NEPAL NORTH AMERICA 2018</h1>
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
                                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/xwMfsaQnOdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/Z1EkbQcxy8A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                              
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
                        <div class="row"  style="align-items:flex-start;">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/yoga/01-4-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/yoga/03-4-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/yoga/04-4-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/yoga/05-4-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/yoga/06-4-360x240.jpg') }}" alt=""></a>
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
                        <div class="row" style="align-items:flex-start;">
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/01-3-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/02-3-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/04-3-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 md-mb-30 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/05-3-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/06-3-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/07-2-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/08-1-360x240.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/13-2-360x540.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/14-th-360x242.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/15-1-1-360x540.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/16-1-360x540.jpg') }}" alt=""></a>
                                    </div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3 col-md-6">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="#"><img src="{{ static_asset('assets/images/mn/city/17-1-360x540.jpg') }}" alt=""></a>
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
                        <div class="row" style="align-items:flex-start;">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/01-5-e1647522489145-360x163.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/03-5-360x270.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/04-5-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/05-5-360x541.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/06-5-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/07-3-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/08-2-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/09-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/10-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/11-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/12-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/22-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/23-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/24-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/24-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/25-1-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/27-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/28-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/29-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/30-360x540.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/34-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/35-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/36-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/37-th-360x242.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/38-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/39-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/41-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/42-1-e1647009010520.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/42-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/43-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/44-e1647013226685-360x177.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/45-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                           

                            <div class="col-lg-3 col-md-6">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="#"><img src="{{ static_asset('assets/images/mn/final/46-360x240.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
             <!-- About Section End -->
            
            

    @endsection
                
                
                
                
                
                
                
                
                
                
                