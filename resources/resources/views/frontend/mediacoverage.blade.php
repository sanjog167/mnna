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
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{asset('public/images/product/'.$abouts['mediacoveragebannerimage'])}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">MEDIA</h1>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

              @foreach($mediacoveragesc as $category) 
                 <div class="rs-about main-home pb-10 md-pt-80 md-pb-80">
                <div class="container pt-60">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title mb-28 md-mb-10">
                               
                               
                                    <div class="banner-border-line new-line"></div>
                                    <h3 class="media-title">{{$category->category_name}}</h3>
                                    <div class="row row2">
                                        
                                          @foreach($mediacoverages->where('category_id', $category->id) as $mediacoverage)

                                        <div class="media col-lg-3 col-md-4 col-6 ">
                                            <img src="{{ uploaded_asset($mediacoverage->banner) }}">
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