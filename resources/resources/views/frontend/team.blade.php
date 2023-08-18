@extends('frontend.layouts.app')
<style type="text/css">
    header{
       
        background: rgba(0,0,0,0.8);
    }

    .top-header{
        border-bottom: none !important;
    }
    
    .team-img{
        height: 250px;
    }



</style>
@section('content')


    <!-- Banner Section Start -->
            <div class="rs-banner rs-banner-style2">
                <img class="rs-html5-video" src="{{asset('public/images/product/'.$abouts['teambannerimage'])}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">MISS NEPAL NORTH AMERICA TEAM</h1>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

           

            <!-- Team Start -->
        <div id="rs-team" class="rs-team style2 pt-80 pb-50 md-pt-70 md-pb-70">
            <div class="container">
                <div class="col-lg-12">
                    <div class="sec-title2 mb-28 md-mb-10">
                        <div class="banner-border-line new-line"></div>
                        <h2 class="sponsor-title pb-13">
                           OUR TEAM
                        </h2>
                    </div>
                </div>
                <div class="row" style="align-items:flex-start">
                    @foreach($teams as $team)
                    <div class="col-lg-3 col-6 mb-30">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ uploaded_asset($team->thumbnail_img) }}" alt="" class="team-img">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="name">
                                        <li class="single">{!!$team->banner_link!!}</li>
                                    </div>
                                    <span class="post">{!!$team->position!!}</span>
                                </div>
                                
                            </div>
                        </div>
                    </div> 
                     @endforeach
                </div>

       
               

            </div>
        </div>
        <!-- Team end -->

        <!-- advisor Start -->
        <div id="rs-team" class="rs-team style3 gray-bg2 pb-50 md-pb-70">
            <div class="container">
                <div class="col-lg-12">
                    <div class="sec-title2 mb-28 md-mb-10">
                        <div class="banner-border-line new-line"></div>
                        <h2 class="sponsor-title pb-13">
                          ADVISORS
                        </h2>
                    </div>
                </div>
                <div class="row"  style="align-items:flex-start">
                    @foreach($advisors as $advisor)
                    <div class="col-lg-3 col-6 mb-30">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ uploaded_asset($advisor->thumbnail_img) }}" alt="" class="team-img">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="name">
                                        <li class="single">{!!$advisor->banner_link!!}</li>
                                    </div>
                                    <span class="post">{!!$advisor->position!!}</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>

        <div id="rs-team" class="rs-team style3 gray-bg2 pt-80 md-pt-70 md-pb-70">
            <div class="container">
                <div class="col-lg-12">
                    <div class="sec-title2 mb-28 md-mb-10">
                        <div class="banner-border-line new-line"></div>
                        <h2 class="sponsor-title pb-13">
                          AMBASSADOR
                        </h2>
                    </div>
                </div>
                <div class="row" style="align-items:flex-start">
                     @foreach($ambassadors as $ambassador)
                    <div class="col-lg-3 col-6 mb-30">
                        <div class="team-item">
                            <div class="team-img">
                                 <img src="{{ uploaded_asset($ambassador->thumbnail_img) }}" alt="" class="team-img">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="name">
                                        <li class="single">{!!$ambassador->banner_link!!}</li>
                                    </div>
                                    <span class="post">{!!$ambassador->position!!}</span>
                                </div>
                                
                            </div>
                        </div> 
                    </div>
                     @endforeach
                </div>
            </div>
        </div>


            
            
        </div> 

















     @endsection