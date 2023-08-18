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
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/sq2.jpg') }}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">MISS NEPAL NORTH AMERICA 2021</h1>
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
                                                <iframe  width="100%" height="400px" src="https://www.youtube.com/embed/LJ2DB4Bs9Zs">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/rpIKX_FZ-5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <iframe  width="100%" height="400px" src="https://www.youtube.com/embed/cOuvbbxzR0U">
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
                        <div class="row" style="align-items:flex-start">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/01-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/01-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/02-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/02-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/03-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/03-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/04-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/04-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/05-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/05-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/06-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/06-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/07-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/07-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/08-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/08-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/09-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/09-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/10-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/10-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/11-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/11-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/12-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/12-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/13-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/13-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/14-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/14-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/15-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/15-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/16-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/16-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 md-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/17-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/17-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/18-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/18-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/19-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/19-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/20-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/20-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/21-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/21-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/22-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/22-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/23-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/23-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/24-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/24-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/25-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/25-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/26-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/26-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/27-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/27-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/28-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/28-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/29-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/29-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/30-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/30-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                          
            
                            <div class="col-lg-3 col-md-6 sm-mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/31-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/31-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/Final/32-2021-360x240.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/Final/32-2021-360x240.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- About Section End -->













     @endsection