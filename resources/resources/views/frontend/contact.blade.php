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
                <img class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="{{asset('public/images/product/'.$abouts['contactbannerimage'])}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">CONTACT</h1>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

            <!-- Contact Section Start -->
            
            <div class="r-contact contact-style2 bg-light pt-100 pb-30 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row margin-0">
                        <div class="col-lg-6 padding-0">
                            <div class="contact-address">
                                <div class="sec-title mb-46">
                                    <h2 class="title pb-20">
                                        Get in touch
                                    </h2>
                                    <p class="margin-0">Objectively innovate your empowered manufactured products whereas
                                        parallel platforms for your ideas.</p>
                                </div>
                                <div class="address-item mb-25">
                                    <div class="address-icon">
                                        <img src="{{ static_asset('assets/images/contact/icons/2.png') }}" alt="Address">
                                    </div>
                                    <div class="address-text">
                                       {!!$abouts->address!!}
                                    </div>
                                </div>
                                <div class="address-item mb-25">
                                    <div class="address-icon">
                                        <img src="{{ static_asset('assets/images/contact/icons/1.png') }}" alt="Address">
                                    </div>
                                    <div class="address-text">
                                        <a href="tel:+1 (845) 6828686">{!!$abouts->phone_number!!}</a><br>
                                    
                                    </div>
                                </div>
                                <div class="address-item mb-25">
                                    <div class="address-icon">
                                        <img src="{{ static_asset('assets/images/contact/icons/3.png') }}" alt="Address">
                                    </div>
                                    <div class="address-text">
                                        
                                        <a href="mailto:info@missnepalnorthamericapageant.com"> {!!$abouts->email!!}</a>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="contact-map">
                                <img src="{{static_asset('assets/images/contact-image.jpg') }}">
                                        </iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->

            <div class="r-contact main-home office-modify1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row margin-0" style="border:1px solid #f7f7f7;">
         
                        <div class="col-lg-12 padding-0">
                            <div class="contact-section contact-style2">
                                <div class="sec-title mb-60 contact-head">
                                    <img src="{{static_asset('assets/images/dreams-logo.png') }}">
                                    <div>
                                        <h2 class="title">
                                        Contact us
                                    </h2>
                                    <p>If you have any questions, comments, or feedback about us, please feel free to fill up the form below and send it to us. We will response to your query as soon as possible.</p>
                                    </div>
                                </div>
                                <div class="contact-wrap">
                                    
                                    <form id="contact-form" method="post" action="">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="name" name="name"
                                                        placeholder="Name" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="email" name="email"
                                                        placeholder="E-Mail" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="phone" name="phone"
                                                        placeholder="Phone Number" required="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" id="Website" name="subject"
                                                        placeholder="Your Website" required="">
                                                </div>

                                                <div class="col-lg-12 mb-35">
                                                    <textarea class="from-control" id="message" name="message"
                                                        placeholder="Your message Here" required=""></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="btn-part">
                                                <div class="form-group mb-0">
                                                    <input class="readon submit" type="submit" value="Submit Now">
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

     @endsection