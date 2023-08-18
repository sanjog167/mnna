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


<!-- Banner Section Start -->
            <div class="rs-banner rs-banner-style2">
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{asset('public/images/product/'.$abouts['sponsorbannerimage'])}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">SPONSORS</h1>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- About Section Start -->
            <div class="rs-about gray-bg main-home pt-80 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="sec-title mb-28 md-mb-10">
                                <p>As a sponsor of the Miss Nepal, sponsors will be provided valuable exposure to the community through marketing opportunities that will generate sales and or successful results towards sponsor business and company’s objectives. Pre & Post – event Promotions will reach over 200,000 people in NA and millions of people around the world with live broadcast through extensive media, online coverage and grassroots promotions. Sponsors will be recognized in the show’s program booklet, promotional materials, media, website, email blasts, banner signage and visibility on location. Our flexible sponsorship packages can be customized to best meet of sponsor marketing needs.</p>

                             

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

                
                @foreach($blogsc as $category) 
                 <div class="rs-about main-home pb-10 md-pt-80 md-pb-80">
                <div class="container pt-60">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title mb-28 md-mb-10">
                               
                               
                                    <div class="banner-border-line new-line"></div>
                                    <h3 class="media-title">{{$category->category_name}}</h3>
                                    <div class="row row2">
                                        
                                          @foreach($blogs->where('category_id', $category->id) as $blog)

                                        <div class="media col-lg-3 col-md-4 col-6 ">
                                            <a href="{{$blog->links}}" target="_blank">
                                             
                                                <img src="{{ uploaded_asset($blog->banner) }}">
                                            </a>
                                        </div>
                                
                                      @endforeach  

                                    </div>
                                    
                                    

                                </div>
                          
                            </div> 
                        </div> 
                    </div>

                    
                </div>
                   @endforeach  
         



     @endsection