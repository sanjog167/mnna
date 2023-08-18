@extends('frontend.layouts.app')
<style type="text/css">
    header{
       
        background: rgba(0,0,0,0.8);
    }

    .top-header{
        border-bottom: none !important;
    }

    .rs-project.style1 .project-item {
        border-radius: 10px;
    }
    
    .archives .project-image img {
        border-radius: 10px;
    }

</style>
@section('content')


  <!-- Banner Section Start -->
            <div class="rs-banner rs-banner-style2">
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{asset('public/images/product/'.$abouts['archivebannerimage'])}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">ARCHIVE</h1>
                    </div>
                </div>
            </div>

             <!-- Project Section Start -->
            <div class="archives rs-project style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background: #f0f8ff">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title2 mb-28 md-mb-10">
                                <div class="banner-border-line new-line"></div>
                                <h2 class="sponsor-title pb-13">
                                MEDIA COVERAGE
                                </h2>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                    @foreach($medias as $media)

                       <div class="col-lg-4 col-md-6 mb-30">
                            <div class="project-item">
                                <div class="project-img">
                                    <iframe width="100%" height="300" src="{{ $media->embed_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                 
                                </div>
                            </div>
                        </div>
                     @endforeach

                    </div>
                </div>
            </div>
            
        <!-- Project Section End --> 

        <div class="archives rs-project style1 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title2 mb-28 md-mb-10">
                            <div class="banner-border-line new-line"></div>
                            <h2 class="sponsor-title pb-13">
                               SOCIAL INITIATIVE
                            </h2>
                            
                        </div>
                    </div>
                </div>

                @foreach($socialinitiatives as $socialinitiative)
                <div class="pb-60">
                     <p>{!!$socialinitiative->description!!}</p>
                    <div class="social-gallery">
                              @foreach(explode(',', $socialinitiative->images) as $image)
                                <div class="project-image">
                                    <a href="{{ uploaded_asset($image) }}" data-lightbox="example-set">
                                        <img src="{{ uploaded_asset($image) }}" alt="Services">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                </div>
                @endforeach
            </div>
        </div>


     @endsection