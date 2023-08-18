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
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/sq1.jpg') }}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">MISS NEPAL NORTH AMERICA 2022</h1>
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
                                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/70bEiXq-Gnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <div class="project-item">
                                            <div class="project-img">
                                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/kTQsSGtIIP4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                                            </div>
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
                                      CROWN REVEAL
                                    </h2>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row" style="align-items:flex-start">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c1z.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c1z.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c2.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c2.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c3.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c3.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c4.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c4.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c5.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c5.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c6.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c6.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c7.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c7.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c8.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c8.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c9.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c9.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c10.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c10.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c11.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c11.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c12.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c12.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/c13.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/c13.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                     
                            
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
                                    <a href="{{ static_asset('assets/images/y1.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y1.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y2.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y2.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a  href="{{ static_asset('assets/images/y3.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y3.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a  href="{{ static_asset('assets/images/y4.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y4.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a  href="{{ static_asset('assets/images/y5.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y5.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a  href="{{ static_asset('assets/images/y6.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y6.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a  href="{{ static_asset('assets/images/y7.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y7.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a  href="{{ static_asset('assets/images/y8.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y8.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y9.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y9.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y10.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y10.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y11.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y11.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y12.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y12.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y13.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y13.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y14.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y14.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y15.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y15.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y16.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y16.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y17.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y17.jpg') }}" alt=""></a>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                    <a href="{{ static_asset('assets/images/y18.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/y18.jpg') }}" alt=""></a>
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
                        <div class="row" style="align-items:flex-start">
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f1.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f1.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-6 mb-30">
                                    <div class="project-item">
                                        <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f2.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f2.jpg') }}" alt=""></a>
                                        </div> 
                                    </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f3.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f3.jpg') }}" alt=""></a>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f4.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f4.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                 <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f5.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f5.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                 <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f6.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f6.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                             
                            
                            <div class="col-lg-3 col-md-6 mb-30">
                                 <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f7.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f7.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f8.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f8.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/f9.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/f9.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0592.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0592.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0600.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0600.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="col-lg-3 col-md-6 mb-30">
                                 <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0552.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0552.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0605.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0605.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0622.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0622.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0638.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0638.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0643.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0643.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0682.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0682.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A0684.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A0684.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A1286.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A1286.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ static_asset('assets/images/mnna2022/6N7A1291.jpg') }}" data-lightbox="example-set"><img src="{{ static_asset('assets/images/mnna2022/6N7A1291.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> 
                </div>
            </div>
            <!-- About Section End -->













     @endsection