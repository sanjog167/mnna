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
                        <h1 class="title">{{ $detailedProduct->name }}</h1>
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
                                {!! $detailedProduct->description !!}
                                
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
                                 @if($detailedProduct->video_link)
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{$detailedProduct->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    @endif
                                    </div>
                                    </div>
                                
                                </div>
           
                                <div class="col-lg-6 mb-30">
                                    <div class="project-item">
                                            <div class="project-img">
                                @if($detailedProduct->video_link2)
                                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{$detailedProduct->video_link2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    @endif
                                    </div>
                                    </div>
                                
                                </div>
                                
                                
                                <div class="col-lg-6 mb-30">
                                    <div class="project-item">
                                            <div class="project-img">
                                @if($detailedProduct->video_link3)
                                    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{$detailedProduct->video_link3}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    @endif
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
                
                
                @if($detailedProduct->photos)
                @php
                    $photos = explode(',', $detailedProduct->photos);
                @endphp
            
                @if(count($photos) > 0)
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
                               @foreach ($photos as $key => $photo)
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ uploaded_asset($photo) }}" data-lightbox="example-set"><img src="{{ uploaded_asset($photo) }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                  
                          @endforeach
                            
                        </div>
                    </div> 
                </div>
                @endif
            @endif


                
                @if($detailedProduct->thumbnail_img)
                    @php
                        $photos = explode(',', $detailedProduct->thumbnail_img);
                    @endphp
                
                    @if(count($photos) > 0)
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
         
                        
                        <div class="row" style="align-items:flex-start">
                               @foreach ($photos as $key => $photo)
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ uploaded_asset($photo) }}" data-lightbox="example-set"><img src="{{ uploaded_asset($photo) }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                  
                          @endforeach
                            
                        </div>
                    </div> 
                </div>
                    @endif
                @endif

                @if($detailedProduct->cities)
                    @php
                        $photos = explode(',', $detailedProduct->cities);
                    @endphp
                
                    @if(count($photos) > 0)
                        <div class="rs-project style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background: #f0f8ff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title2 mb-28 md-mb-10">
                                    <div class="banner-border-line new-line"></div>
                                    <h2 class="sponsor-title pb-13">
                                      City Tour
                                    </h2>
                                </div>
                            </div>
                            
                        </div>
          
                        <div class="row" style="align-items:flex-start">
                               @foreach ($photos as $key => $photo)
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ uploaded_asset($photo) }}" data-lightbox="example-set"><img src="{{ uploaded_asset($photo) }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                  
                          @endforeach
                            
                        </div>
                    </div> 
                </div>
                    @endif
                @endif
                
                @if($detailedProduct->final)
                    @php
                        $photos = explode(',', $detailedProduct->final);
                    @endphp
                
                    @if(count($photos) > 0)
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
                               @foreach ($photos as $key => $photo)
                            <div class="col-lg-3 col-md-6 mb-30">
                                <div class="project-item">
                                    <div class="final-img">
                                        <a href="{{ uploaded_asset($photo) }}" data-lightbox="example-set"><img src="{{ uploaded_asset($photo) }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                  
                          @endforeach
                            
                        </div>
                    </div> 
                </div>
                    @endif
                @endif
                
            </div>
            <!-- About Section End -->













     @endsection