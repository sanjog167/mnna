
(function($) {
	"use strict";


    if($('.pointer-wrap').length){
        const cursor = cursorDot({
            diameter: 40,
            borderWidth: 2,
            borderColor: '#ce1446',
            easing: 4,
            background: 'transparent'     
        })
    }
	
    //window load
    $(window).on( 'load', function() {
        $("#loading").delay(1500).fadeOut(500);
        $("#loading-center").on( 'click', function() {
        $("#loading").fadeOut(500);
        })
    })
    
      $(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 400) {
      $('.menu-area').addClass('sticky'); 
    } else {
      $('.menu-area').removeClass('sticky');
    }
  })
    
    //slider
    var slidercarousel = $('.slider-carousel');
    if(slidercarousel.length){
        $(".slider-carousel").owlCarousel({
            margin: 0,
            nav: false,
            navText:[
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            loop: true,
            dots: true,
            mouseDrag: false,
            items: 1,
            autoplay: true,
            animateOut: 'fadeOut',
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsiveClass: true
        });
    }


   // onepage nav
   var navclose = $('#onepage-menu');
   if(navclose.length){
       $(".nav-menu li a").on("click", function () {
           if ($(".showhide").is(":visible")) {
               $(".showhide").trigger("click");
           }
       });
       if ($.fn.onePageNav) {
           $(".nav-menu").onePageNav({
               currentClass: "active-menu"
           });
        }
    }
    var searchParent = $('.search-parent');
    if(searchParent.length){ 
        $( ".search-parent" ).on( "click", function() {
          $( this).toggleClass( "open_add_class", 1000 );
        });
    }

    // collapse hidden  
     var navMain = $(".navbar-collapse");
     navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
     });  

 
    
    // image loaded portfolio init
    var gridfilter = $('.grid');
        if(gridfilter.length){
        $('.grid').imagesLoaded(function() {
            $('.gridFilter').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-item',
                }
            });
        });
    }   

    // project Filter
    if ($('.gridFilter button').length) {
        var projectfiler = $('.gridFilter button');
            if(projectfiler.length){
            $('.gridFilter button').on('click', function(event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });
        }
    }

    $('.collapse.show').prev('.card-header').addClass('active');
    $('#accordion, #bs-collapse, #accordion1')
    .on('show.bs.collapse', function (a) {
        $(a.target).prev('.card-header').addClass('active');
    })
    .on('hide.bs.collapse', function (a) {
        $(a.target).prev('.card-header').removeClass('active');
    });
    
    // magnificPopup init
    var imagepopup = $('.image-popup');
    if(imagepopup.length){
        $('.image-popup').magnificPopup({
            type: 'image',
            callbacks: {
                beforeOpen: function() {
                   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure animated zoomInDown');
                }
            },
            gallery: {
                enabled: true
            }
        });
    }

    // Get a quote popup
    var popupquote = $('.popup-quote');
    if(popupquote.length){
        $('.popup-quote').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#qname',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = this.st.el.attr('data-effect');
                    if(win.width() < 800) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#qname';
                    }
                }
            }
        });
    }
    
    //preloader
    $(window).on('load', function() {
        $("#pre-load").delay(1000).fadeOut(500);
    })

    //Videos popup jQuery 
    var popupvideos = $('.popup-videos, .popup-border');
    if(popupvideos.length){
        $('.popup-videos, .popup-border').magnificPopup({
            disableOn: 10,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        }); 
    }

  

    // Skill bar 
    var skillbar = $('.skillbar');
    if(skillbar.length) {
        $('.skillbar').skillBars({  
            from: 0,    
            speed: 4000,    
            interval: 100,  
            decimals: 0,    
        });
    }

		
    // Counter Up
    var counter_Up = $('.rs-count');
    if(counter_Up.length) {  
        $('.rs-count').counterUp({
            delay: 20,
            time: 2000
        });
    }
    


    //canvas menu
    var navexpander = $('#nav-expander, #nav-expander2');
    if(navexpander.length){
        $('#nav-expander, #nav-expander2, #nav-close, #nav-close2, .offwrap').on('click',function(e){
            e.preventDefault();
            $('body').toggleClass('nav-expanded');
        });
    }

    // View Course
    $('.course-view-part .view-icons .view-grid').on('click',function(e){
        e.preventDefault();
        $('.rs-popular-courses').removeClass('list-view');
    });
    $('.course-view-part .view-icons .view-list').on('click',function(e){
        e.preventDefault();
        $('.rs-popular-courses').addClass('list-view');
    });
    
	
    // categories btn
    $('.cat-menu-inner').hide();
    $('.cat-btn').on('click',function(){
        $('.cat-menu-inner').slideToggle();
    })

    var tilt = $('.js-tilt');
    if(tilt.length) {
        const tilt = $('.js-tilt').tilt();
    }

    $( ".plus-team" ).on( "click", function( event ) {
        $(this).toggleClass("active_social");
    });
    
    $( ".cls-maker" ).on( "click", function( event ) {
        $(this).toggleClass("active_social");
    });

    /******** Mobile Menu Start ********/
    
    $('.mobile-navbar-menu a').each(function(){
        var href = $(this).attr("href");
        if(href == "#"){
            $(this).addClass('hash');
        }else{
            $(this).removeClass('hash');
        }
    });

    $.fn.menumaker = function(options) {
      var mobile_menu = $(this), settings = $.extend({
        format: "dropdown",
        sticky: false
      }, options);

        return this.each(function() {
        mobile_menu.find('li ul').parent().addClass('has-sub');
        var multiTg = function() {
            mobile_menu.find(".has-sub").prepend('<span class="submenu-button"><em></em></span>');
            mobile_menu.find(".hash").parent().addClass('hash-has-sub');
            mobile_menu.find('.submenu-button').on('click', function() {
                $(this).toggleClass('submenu-opened');
                if ($(this).siblings('ul').hasClass('open-sub')) {
                    $(this).siblings('ul').removeClass('open-sub').hide('fadeIn');
                    $(this).siblings('ul').hide('fadeIn');                                     
                }
                else {
                    $(this).siblings('ul').addClass('open-sub').hide('fadeIn');
                    $(this).siblings('ul').slideToggle().show('fadeIn');
                }
            });
        };

        if (settings.format === 'multitoggle') multiTg();
        else mobile_menu.addClass('dropdown');
        if (settings.sticky === true) mobile_menu.css('position', 'fixed');
       var resizeFix = function() {
            if ($( window ).width() > 991) {
                mobile_menu.find('ul').show('fadeIn');
                mobile_menu.find('ul.sub-menu').hide('fadeIn');
            }          
        };
        resizeFix();
        return $(window).on('resize', resizeFix);
        });
    };

    $(document).ready(function(){
        $("#mobile-navbar-menu").menumaker({
        format: "multitoggle"
        });
    });
})(jQuery);