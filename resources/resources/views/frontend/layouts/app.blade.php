<!DOCTYPE html>
@if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif 
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">

    <title>Miss Nepal North America</title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" >
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">
    <meta property="og:image" content="https://missnepalnorthamerica.com/public/assets/images/fb-share-logo.jpeg">
<meta name="twitter:image" content="https://missnepalnorthamerica.com/public/assets/images/logo-v-01.svg">

    @yield('meta')

    @if(!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ get_setting('meta_title') }}">
        <meta itemprop="description" content="{{ get_setting('meta_description') }}">
        <meta itemprop="image" content="">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ get_setting('meta_title') }}">
        <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ get_setting('meta_title') }}" >
        <meta property="og:type" content="website" >
        <meta property="og:url" content="{{ route('home') }}" > 
        <meta property="og:description" content="{{ get_setting('meta_description') }}" > 
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" >
        <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
    @endif
    
    

    <!-- Favicon -->
    <link rel="icon" href="{{ static_asset('assets/images/fav-ico.png') }}"> 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
    @if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap-rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">


     <link rel="stylesheet" href="{{ static_asset('assets/css/app.css') }}">
     <link rel="stylesheet" href="{{ static_asset('assets/css/login.css') }}">
     <link rel="stylesheet" href="{{ static_asset('assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ static_asset('assets/usa/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/usa/css/animate.css') }}">
    <link href="{{ static_asset('assets/usa/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/usa/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ static_asset('assets/usa/css/off-canvas.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/usa/css/rs-spacing.css') }}">
        
    <link rel="stylesheet" href="{{ static_asset('assets/usa/css/rsmenu-main.css') }}">
 <link rel="stylesheet" href="{{ static_asset('assets/css/style.css') }}">
    

<link rel="stylesheet" href="{{ static_asset('assets/usa/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">
    <!-- YOUR CUSTOM CSS -->


       <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ translate('Nothing selected') }}',
            nothing_found: '{{ translate('Nothing found') }}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
    </script>



    <style>
        body{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }
        :root{
            --primary: {{ get_setting('base_color', '#e62d04') }};
            --hov-primary: {{ get_setting('base_hov_color', '#c52907') }};
            --soft-primary: {{ hex2rgba(get_setting('base_color','#e62d04'),.15) }};
        }

        #map{
            width: 100%;
            height: 250px;
        }
        #edit_map{
            width: 100%;
            height: 250px;
        }

        .pac-container { z-index: 100000; }
             background-color: #171F4E;
        }
    </style>

@if (get_setting('google_analytics') == 1)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('TRACKING_ID') }}');
    </script>
@endif

@if (get_setting('facebook_pixel') == 1)
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('FACEBOOK_PIXEL_ID') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
@endif

@php
    echo get_setting('header_script');
@endphp

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=412837070200547&autoLogAppEvents=1" nonce="zKxv1b98"></script>


        
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">

        <!-- Header -->
        @include('frontend.inc.nav')

        @yield('content')

        @include('frontend.inc.footer')


    
    

    @if (get_setting('show_cookies_agreement') == 'on')
        <div class="aiz-cookie-alert shadow-xl">
            <div class="p-3 bg-dark rounded">
                <div class="text-white mb-3">
                    @php
                        echo get_setting('cookies_agreement_text');
                    @endphp
                </div>
                <button class="btn btn-primary aiz-cookie-accept">
                    {{ translate('Ok. I Understood') }}
                </button>
            </div>
        </div>
    @endif

    @if (get_setting('show_website_popup') == 'on')
        <div class="modal website-popup removable-session d-none" data-key   <div id="footerCookie">
        <div class="footer-modal-content">
            <div class="modal-text">
                        <span>We use cookies to analyze website traffics and optimize your website experience. By accepting our use of cookies, your data will be aggregrated with all other user data.
                        <button onclick="closeFooterCookieFunction()">Accept</button>
                        <button onclick="closeFooterCookieFunction()">Decline</button>
                        </span>
                    </div>
                
        </div>
    </div>="website-popup" data-value="removed">
            <div class="absolute-full bg-black opacity-60"></div>
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
                <div class="modal-content position-relative border-0 rounded-0">
                    <div class="aiz-editor-data">
                        {!! get_setting('website_popup_content') !!}
                    </div>
                    @if (get_setting('show_subscribe_form') == 'on')
                        <div class="pb-5 pt-4 px-5">
                            <form class="" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" >
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    {{ translate('Subscribe Now') }}
                                </button>
                            </form>
                        </div>
                    @endif
                    <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

    @include('frontend.partials.modal')

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

    @yield('modal')

    <!-- SCRIPTS -->
    <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
    <script src="{{ static_asset('assets/js/aiz-core.js') }}"></script>
    <script src="{{ static_asset('assets/js/main.js') }}"></script> 
    <script src="{{ static_asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ static_asset('assets/js/custom.min.js') }}"></script>

    
    

       <script src="{{ static_asset('assets/js/owl.carousel.min.js') }}"></script>
       
           <script src="{{ static_asset('assets/usa/js/app.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/bootstrap.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/contact.form.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/imagesloaded.pkgd.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/isotope.pkgd.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/jquery.counterup.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/jquery.magnific-popup.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/jquery.magnific-popup.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/jquery.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/jquery.nav.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/main.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/modernizr-2.8.3.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/owl.carousel.min.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/pointer.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/skill.bars.jquery.js') }}"></script>
           <script src="{{ static_asset('assets/usa/js/wow.min.js') }}"></script>
        
           
           
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js" integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
      $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 400) {
      $('.menu-area').addClass('sticky'); 
    } else {
      $('.menu-area').removeClass('sticky');
    }
  })
</script>




<script>
   var is_modal_show = sessionStorage.getItem('alreadyShow');
if(is_modal_show != 'alredy shown'){
  setTimeout(showModal,1000);
    function showModal(){
      $("#footerCookie").show()
    }
  sessionStorage.setItem('alreadyShow','alredy shown');
}
function closeFooterCookieFunction() {
      var x = document.getElementById("footerCookie");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
</script>







<script>
    // Get the button
    let mybutton = document.getElementById("goTopBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      $("html, body").animate({ scrollTop: 0 }, 600);
        
    }
</script>

    <!-- Wizard script -->


<script>
     var swiper = new Swiper(".sponsorSwiper", {
              slidesPerView: 2,
               autoplay: {
    delay: 5000,
  },
              loop:true,
               breakpoints: {
                  640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                  },
            
                },
              spaceBetween: 10,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
            });

</script>

 

      

    <script type="text/javascript">
        
  var navexpander = $('#nav-expander, #nav-expander2');
    if(navexpander.length){
        $('#nav-expander, #nav-expander2, #nav-close, #nav-close2, .offwrap').on('click',function(e){
            e.preventDefault();
            $('body').toggleClass('nav-expanded');
        });
    }

    </script>




  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>




 <script>
         //Accordion
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          let active = document.querySelectorAll(".accordion-div .accordion.active");
          for(let j = 0; j < active.length; j++){
            active[j].classList.remove("active");
            active[j].nextElementSibling.style.maxHeight = null;
          }
          this.classList.toggle("active");
          panel.style.maxHeight = panel.scrollHeight + "px";
        }   
        });
        }

 </script>

 
 

<script>
    var swiper = new Swiper(".indexSwiper", {
        loop:true,
         navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
        autoplay: {
    delay: 5000,
  },
  disableOnInteraction:true,
    });
</script>

<script>
    $("input[type=file]").change(function () {
        var fieldVal = $(this).val();

        // Change the node's value by removing the fake path (Chrome)
        fieldVal = fieldVal.replace("C:\\fakepath\\", "");

        if (fieldVal != undefined || fieldVal != "") {
            $(this).next(".custom-file-label").attr('data-content', fieldVal);
            $(this).next(".custom-file-label").text(fieldVal);
        }
    });
</script>
<script>
    //canvas menu
    var navexpander = $('#nav-expander, #nav-expander2');
    if(navexpander.length){
        $('#nav-expander, #nav-expander2, #nav-close, #nav-close2, .offwrap').on('click',function(e){
            e.preventDefault();
            $('body').toggleClass('nav-expanded');
        });
    }

</script>
<script>
    
    function changeFunction(selectValue){
        var x =selectValue.value;
        document.getElementById("showvaluecountry").value = x;
    }

</script>

<script>
window.addEventListener('DOMContentLoaded', function() {
    // Show the popup with fade-in effect
    var popup = document.getElementById('startingPopup');
    popup.style.display = 'flex';
    setTimeout(function() {
        popup.style.opacity = '1';
    }, 100); // Add a small delay for the fade-in effect

    // Close the popup when the close button is clicked
    document.getElementById('closeBtn').addEventListener('click', function() {
        // Hide the popup with fade-out effect
        popup.style.opacity = '0';
        setTimeout(function() {
            popup.style.display = 'none';
        }, 300); // Duration of the fade-out animation
    });

    // Close the popup when clicking outside the popup-content
    window.addEventListener('click', function(event) {
        if (event.target === popup) {
            // Hide the popup with fade-out effect
            popup.style.opacity = '0';
            setTimeout(function() {
                popup.style.display = 'none';
            }, 300); // Duration of the fade-out animation
        }
    });
});


</script>



    @yield('script')

    @php
        echo get_setting('footer_script');
    @endphp

</body>
</html>
