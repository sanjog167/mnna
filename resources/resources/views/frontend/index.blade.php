@extends('frontend.layouts.app')

<style>
    .rs-about .sec-title p:nth-child(4){display:none;}
    
    .rs-about .sec-title{
        height: 340px;
    overflow: hidden;
    }
    
    .priv{
        font-size: 18px;
        text-align: center;
        font-weight: 500;
        color: #3A3A3A;
    }

</style>

@section('content') 

@if($abouts->popupstatus == 1)
    <div id="startingPopup" class="starting-popup">
            <div class="popup-content">
                <button id="closeBtn"><i class="la la-close fs-20"></i></button>
                <h2>{!!$abouts->popuptitle!!}</h2>
                <img src="{{asset('public/images/product/'.$abouts['popupimage'])}}">
                        <p>{!!$abouts->popuptext!!}</p>
                        
            </div>
    </div>
@else
@endif




<!-- Main content Start --> 
<div class="main-content">
   <!--<div class="swiper indexSwiper d-none">-->
   <!--   <div class="swiper-wrapper">-->
   <!--      <div class="swiper-slide">-->
   <!--         <div class="rs-banner rs-banner-style2">-->
   <!--            <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/s1.jpg') }}">-->
   <!--            <div class="container">-->
   <!--               <div class="content-wrap text-center">-->
   <!--                  <div class="banner-border-line"></div>-->
   <!--                  <h1 class="title">WELCOME TO <br>MISS NEPAL <span class="primary-color"> NORTH AMERICA</span></h1>-->
   <!--                  <div class="btn-part">-->
   <!--                     <a class="readon started view md-none" href="{{ route('aboutus') }}">Discover More</a>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--      <div class="swiper-slide">-->
   <!--         <div class="rs-banner rs-banner-style2">-->
   <!--            <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/s2.jpg') }}">-->
   <!--            <div class="container">-->
   <!--               <div class="content-wrap text-center">-->
   <!--                  <div class="banner-border-line"></div>-->
   <!--                  <h1 class="title">WELCOME TO <br>MISS NEPAL <span class="primary-color"> NORTH AMERICA</span></h1>-->
   <!--                  <div class="btn-part">-->
   <!--                     <a class="readon started view md-none" href="{{route('aboutus')}}">Discover More</a>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--      <div class="swiper-slide">-->
   <!--         <div class="rs-banner rs-banner-style2">-->
   <!--            <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/s3.jpg') }}"></img>-->
   <!--            <div class="container">-->
   <!--               <div class="content-wrap text-center">-->
   <!--                  <div class="banner-border-line"></div>-->
   <!--                  <h1 class="title">WELCOME TO <br>MISS NEPAL <span class="primary-color"> NORTH AMERICA</span></h1>-->
   <!--                  <div class="btn-part">-->
   <!--                     <a class="readon started view md-none" href="{{route('aboutus')}}">Discover More</a>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--      <div class="swiper-slide">-->
   <!--         <div class="rs-banner rs-banner-style2">-->
   <!--            <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/s5.JPG') }}"></img>-->
   <!--            <div class="container">-->
   <!--               <div class="content-wrap text-center">-->
   <!--                  <div class="banner-border-line"></div>-->
   <!--                  <h1 class="title">WELCOME TO <br>MISS NEPAL <span class="primary-color"> NORTH AMERICA</span></h1>-->
   <!--                  <div class="btn-part">-->
   <!--                     <a class="readon started view md-none" href="{{route('aboutus')}}">Discover More</a>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--      <div class="swiper-slide">-->
   <!--         <div class="rs-banner rs-banner-style2">-->
   <!--            <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/s6.JPG') }}"></img>-->
   <!--            <div class="container">-->
   <!--               <div class="content-wrap text-center">-->
   <!--                  <div class="banner-border-line"></div>-->
   <!--                  <h1 class="title">WELCOME TO <br>MISS NEPAL <span class="primary-color"> NORTH AMERICA</span></h1>-->
   <!--                  <div class="btn-part">-->
   <!--                     <a class="readon started view md-none" href="{{route('aboutus')}}">Discover More</a>-->
   <!--                  </div>-->
   <!--               </div>-->
   <!--            </div>-->
   <!--         </div>-->
   <!--      </div>-->
   <!--   </div>-->
   <!--   <div class="swiper-button-next"></div>-->
   <!-- <div class="swiper-button-prev"></div>-->
   <!--</div>-->
   
   <div class="swiper indexSwiper ">
      <div class="swiper-wrapper">
          @foreach($hbanner as $banner)
         <div class="swiper-slide">
            <div class="rs-banner rs-banner-style2">
               <img class="rs-html5-video"  src="{{uploaded_asset($banner->thumbnail_img)}}">
               <div class="container">
                  <div class="content-wrap text-center">
                     <div class="banner-border-line"></div>
                     <h1 class="title"> {!!$banner->banner_link!!}</h1>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
    
      </div>
      <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
   </div>
   
   
   <!-- Banner Section End -->
   <!-- About Section Start -->
   <div class="rs-about gray-bg main-home pt-120 pb-120 md-pt-80 md-pb-80">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="sec-title mb-28 md-mb-10">
                  <div class="banner-border-line"></div>
                  <h2 class="title pb-13">
                         {!!$abouts->missiontitle!!}
                  </h2>
                  <p>
                     {!!$abouts->missiondescription!!}
                  </p>
               </div>
               <a class="readon started ser-btn mt-25 md-mt-0" href="{{route('aboutus')}}">Discover More</a>
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
         <div class="animate three">
            <img class="scale" src="{{ static_asset('assets/images/about/main-home/3.png') }}" alt="About">
         </div>
      </div>
   </div>
   <!-- About Section End -->
   
   <!-- Our past events start-->
   <div class="rs-project style1 pt-80 pb-50 md-pt-70 md-pb-70 privilege-section" >
      <div class="container">
         <div class="call">
            <div class="col-lg-12">
               <div class="sec-title2 mb-28 md-mb-10">
                  <div class="banner-border-line new-line"></div>
                  <h2 class="sponsor-title pb-13">
                    {!!$abouts->title!!}
                  </h2>
                  <div class="priv">
                    <p>{!!$abouts->description!!}</p>
                </div>
                
                  <div class="missnepal-logos">
                     <img src="{{asset('public/images/product/'.$abouts['gimage'])}}">
                     <img src="{{asset('public/images/product/'.$abouts['ad1'])}}">
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6 mb-30">
               <div class="project-item">
                  <div class="project-img">
                      <img src="{{asset('public/images/product/'.$abouts['ad2'])}}">
                    
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
               <div class="project-item">
                  <div class="project-img">
                     <img src="{{asset('public/images/product/'.$abouts['ad3'])}}">
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-30">
               <div class="project-item">
                  <div class="project-img">
                     <img src="{{asset('public/images/product/'.$abouts['o1image'])}}">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="rs-project gray-bg style1pb-50 pt-80 pb-80 md-pt-70 md-pb-70 past-event-section">
      <div class="container">
         <div class="call">
            <div class="col-lg-12">
               <div class="sec-title2 mb-28 md-mb-10">
                  <div class="banner-border-line new-line"></div>
                  <h2 class="sponsor-title pb-13">
                     PAST EVENTS
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
          @foreach($pastevents as $pastevent)
            <div class="col-lg-3 col-md-6 mb-30">
               <div class="project-item">
                  <div class="project-img">
                      
                      <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$pastevent->banner_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      
                     <p class="iframe-title">{{$pastevent->position}}</p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <!--past event end -->
   <!--Services Section Start -->
   <div class="rs-contact rs-mentor style2 md-pb-80" style="background:url({{ static_asset('assets/images/services-bg2.jpg')}});">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="sec-title2 mb-28 md-mb-10">
                  <div class="banner-border-line"></div>
                  <h2 class="title pb-13 white-color">
                     Our Mentors
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
            @foreach($mentors as $mentor)
                <div class="col-xl-4 col-md-6 mb-40" style="align-items:flex-start;">
                   <div class="services-item">
                      <div class="services-icon">
                         <img src="{{ uploaded_asset($mentor->thumbnail_img) }}" alt="Services">
                      </div>
                      <div class="services-content">
                         <div class="services-text">
                            <h3 class="title"><a href="#">{{$mentor->banner_link}}</a></h3>
                            <span class="model">{{$mentor->subtitle}}<br>
                            {{$mentor->designation}}</span>
                         </div>
                         <div class="services-desc">
                            <p>
                               {!!$mentor->description!!}
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
             @endforeach
            
         </div>
      </div>
   </div>
   <!--Services Section End-->
   <!-- Project Section Start -->
   <div class="rs-project style2 pt-120 pb-120 md-pt-70 md-pb-80">
      <div class="container">
         <div class="sec-title text-center mb-60 md-mb-40">
            <span class="sub-text">WINNERS</span>
            <h2 class="title pb-25">MISS NEPAL NORTH AMERICA WINNERS</h2>
            <div class="heading-border-line"></div>
         </div>
         <div class="row" style="align-items:flex-start;">
             @foreach($winners as $winner)
            <div class="col-lg-3 col-sm-6 mb-30">
               <div class="project-item">
                  <div class="project-img">
                     <img src="{{ uploaded_asset($winner->thumbnail_img) }}" alt="images">
                  </div>
                  <div class="project-content">
                     <div class="project-inner">
                        <h3 class="title"><a href="#">{{$winner->banner_link}}</a></h3>
                        <span class="category"><a href="#">{{$winner->year}}</a></span>
                     </div>
                  </div>
               </div>
               <div class="winner-data">
                  <h3 class="title">{{$winner->banner_link}}</h3>
                  <span class="category">{{$winner->year}}</span>
               </div>
            </div>
            @endforeach
      
         </div>
      </div>
   </div>
   <!-- Project Section End -->
   <!-- SPONSOR -->
   <div class="rs-project rs-sponsor-section style2 gray-bg pt-50 pb-50 md-pt-50 md-pb-50" style="display:none;">
      <div class="container">
         <div class="sec-title text-center mb-50 md-mb-40">
            <h2 class="title pb-25">SPONSORS</h2>
            <div class="heading-border-line"></div>
         </div>
         <div class="rs-patter-section">
            <div class="container custom">
               <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
                  data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="500" data-smart-speed="100"
                  data-dots="false" data-nav="false" data-nav-speed="false" data-md-device="5"
                  data-md-device-nav="false" data-md-device-dots="false" data-center-mode="false"
                  data-ipad-device2="4" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                  data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false"
                  data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false">
               </div>
               <div class="swiper sponsorSwiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="logo-img">
                           <a href="#">
                           <img class="hovers-logos rs-grid-img" src="{{ static_asset('assets/images/Sponsor/SPO_0001_sangrila-logo-plm0q3pqyo1qr20qqllt07bca96ezi59n56bklt7gg.jpg') }}" title=""
                              alt="">
                           <img class="mains-logos rs-grid-img " src="{{ static_asset('assets/images/Sponsor/SPO_0001_sangrila-logo-plm0q3pqyo1qr20qqllt07bca96ezi59n56bklt7gg.jpg') }}" title=""
                              alt="">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="logo-img">
                           <a href="#">
                           <img class="hovers-logos rs-grid-img" src="{{ static_asset('assets/images/Sponsor/SPO_0002_prime-america-real-state-logo-plm0q8ezdgr7qst92k9e5fqo1dg5x15d9rcjx4cypc.jpg') }}" title=""
                              alt="">
                           <img class="mains-logos rs-grid-img " src="{{ static_asset('assets/images/Sponsor/SPO_0002_prime-america-real-state-logo-plm0q8ezdgr7qst92k9e5fqo1dg5x15d9rcjx4cypc.jpg') }}" title=""
                              alt="">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="logo-img">
                           <a href="#">
                           <img class="hovers-logos rs-grid-img" src="{{ static_asset('assets/images/Sponsor/SPO_0003_oa-logo-plm0qc6ao6dbnjogd79g4n6hmq0pws2uob1ow3gnwg.jpg') }}" title=""
                              alt="">
                           <img class="mains-logos rs-grid-img " src="{{ static_asset('assets/images/Sponsor/SPO_0003_oa-logo-plm0qc6ao6dbnjogd79g4n6hmq0pws2uob1ow3gnwg.jpg') }}" title=""
                              alt="">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="logo-img">
                           <a href="#">
                           <img class="hovers-logos rs-grid-img" src="{{ static_asset('assets/images/Sponsor/SPO_0004_lama-accounting-logo-plm0qgvhmcjr9lhmlrakz3zslndjz9licyb4ah9p1c.jpg') }}" title=""
                              alt="">
                           <img class="mains-logos rs-grid-img " src="{{ static_asset('assets/images/Sponsor/SPO_0004_lama-accounting-logo-plm0qgvhmcjr9lhmlrakz3zslndjz9licyb4ah9p1c.jpg') }}" title=""
                              alt="">
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="logo-img">
                           <a href="#">
                           <img class="hovers-logos rs-grid-img" src="{{ static_asset('assets/images/Sponsor/SPO_0007_cobrador-logo-plm0qt3e370hgizvmekqdiwsbnpbrby0qmsfj2rksg.jpg') }}" title=""
                              alt="">
                           <img class="mains-logos rs-grid-img " src="{{ static_asset('assets/images/Sponsor/SPO_0007_cobrador-logo-plm0qt3e370hgizvmekqdiwsbnpbrby0qmsfj2rksg.jpg') }}" title=""
                              alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 text-center">
                  <div class="btn-part mt-50">
                     <a class="readon started view" href="{{route('sponsor')}}">View All Sponsors</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- sponsor end -->
   <!-- Contact Section Start -->
   <div class="rs-contact style2"  style="background:url({{ static_asset('assets/images/services-bg2.jpg')}});">
      <div class="bg-wrap">
         <div class="container">
            <div class="sec-title text-center mb-60">
               <span class="sub-text" style="color: white;">Let's Talk</span>
               <h2 class="title white-color pb-25">
                  Contact With Us
               </h2>
               <div class="heading-border-line"></div>
            </div>
            <div class="row">
               <div class="col-lg-6 md-mb-50">
                  <!-- Contact Faq Start -->
                  <div class="rs-faq">
                     <div class="faq-content">
                        <div class="accordion-div">
                             @foreach($faqs as $faq)
                                <button class="accordion">
                               <span class="faq__question-heading">{{$faq->question}}</span>
                               </button>
                               <div class="panel">
                                  <p>{!!$faq->answer!!}</p>
                               </div>
                             @endforeach
                            
                        </div>
                     </div>
                  </div>
                  <!-- Contact Faq Start -->
               </div>
               <div class="col-lg-6 pl-40 md-pl-15">
                  <div class="contact-wrap">
                     <div id="form-messages"></div>
                     <form id="contactForm" method="post" action="#">
                        <fieldset>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 mb-15">
                                 <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 mb-15">
                                 <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 mb-15">
                                 <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 mb-15">
                                 <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                              </div>
                              <div class="col-lg-12 mb-20">
                                 <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                              </div>
                           </div>
                           <div class="btn-part">
                              <div class="form-group mb-0">
                                 <input class="readon started submit" style="    background: #BD1D2C;" type="submit" value="Submit Now">
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact Section End -->
</div>
<!-- Main content End -->
    </div>
       <div id="footerCookie">
        <div class="footer-modal-content">
            <div class="modal-text">
                        <span>We use cookies to analyze website traffics and optimize your website experience. By accepting our use of cookies, your data will be aggregrated with all other user data.
                        <button onclick="closeFooterCookieFunction()">Accept</button>
                        <button onclick="closeFooterCookieFunction()">Decline</button>
                        </span>
                    </div>
                
        </div>
    </div>
@endsection