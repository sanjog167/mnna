
                <div class="offwrap"></div>

        <!--Preloader start here-->
  

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header header-transparent">
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container custom">
                            <div class="row-table">
                                <div class="col-cell header-logo">                                  
                                    <div class="logo-area">
                                        <a href="{{ route('home') }}">
                                            <img class="normal-logo" src="{{ static_asset('assets/images/logo-v-01.svg') }}" alt="logo">  
                                            <img class="sticky-logo" src="{{ static_asset('assets/images/logo-color-v-01.svg') }}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu hidden-md">
                                                <ul class="nav-menu">
                                                    <li class="rs-mega-menu mega-rs"> <a href="{{ route('home') }}">Home</a>
                                                        
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">About Us</a>                                                        
                                                        <ul class="sub-menu">
                                                            <li class="last-item menu-item-has-children">
                                                                <a href="{{route('aboutus')}}">Miss Nepal North America</a>
                                                            </li>
                                                            <li class="last-item menu-item-has-children">
                                                                <a href="{{route('frontteam')}}">Our Team</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children d-none">
                                                        <a href="#">Events</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{route('mnantwentythree')}}">Miss Nepal North America 2023</a></li>
                                                            <li><a href="{{route('mnantwentytwo')}}">Miss Nepal North America 2022</a></li>
                                                            <li><a href="{{route('mnantwentyone')}}">Miss Nepal North America 2021</a></li>
                                                           <li><a href="{{route('mnannineteen')}}">Miss Nepal North America 2019</a></li>
                                                            <li><a href="{{route('mnaneighteen')}}">Miss Nepal North America 2018</a></li>
                                                           
                                                        </ul>
                                                    </li>
                                                    
                                                         <li class="menu-item-has-children">
                                                        <a href="#">Events</a>
                                                        <ul class="sub-menu">
                                                            @foreach($events as $key => $event)
                                                            <li><a href="{{route('product',$event->slug)}}">{{$event->name}}</a></li>
                                                        @endforeach
                                                           
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('archive')}}">Archive</a>
                                                        
                                                    </li>
                                                        <li><a href="{{route('mediacoverage')}}">Media</a></li>
                                                        
                                                           @if($abouts->sponsortwo == 1)
                                                           <li>
                                             <a  href="{{route('sponsor')}}"> Sponsors</a></li>
                                             @else
                                           @endif
                                            
                                                  
                                                  
                                                    <li>
                                                        <a href="{{route('contact')}}">Contact</a>
                                                        </li>
                                                         
                                               </ul>         
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="expand-btn-inner">
                                        <ul>
                                             @if($abouts->statustwo == 1)
                                             <a class="mobile apply-menu" href="https://vote.missnepalnorthamerica.com/" target="_blank"> <i class="fas fa-crown"></i> Vote Now</a>
                                             @else
                                           <a class="apply-menu" href="{{ route('usaform') }}"> <i class="fas fa-crown"></i> Apply Now</a>
                                           @endif
                                            <li class="humburger">
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                    <div class="bar">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                        <span class="dot4"></span>
                                                        <span class="dot5"></span>
                                                        <span class="dot6"></span>
                                                        <span class="dot7"></span>
                                                        <span class="dot8"></span>
                                                        <span class="dot9"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                    <!-- Canvas Menu start -->
                    <nav class="right_menu_togle hidden-md">
                        <div class="close-btn">
                            <a id="nav-close" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <div class="canvas-logo">
                            
                            <a href="{{ route('home') }}"><img class="normal-logo" src="{{ static_asset('assets/images/logo-white-01.svg') }}" alt="logo"> </a>
                        </div>
                        <div class="offcanvas-text">
                            <p>{!!$abouts->customtwo!!}</p>
                        </div>
                        <div class="canvas-contact">
                              <div class="address-area">
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-location"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Address</h4>
                                          {!!$abouts->address!!}
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-email"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Email</h4>
                                          <em><a href="mailto:info@missnepalnorthamerica.com">{!!$abouts->email!!}</a></em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-call"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Phone</h4>
                                           <a href="tel:+1 845-682-8686"><em>{!!$abouts->phone_number!!}</em></a>
                                      </div>
                                  </div>
                              </div>
                            <ul class="social">
                                <li><a href="{!!$abouts->facebook!!}" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="{!!$abouts->tiktok!!}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                <li><a href="{!!$abouts->instagram!!}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="{!!$abouts->youtube!!}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->

                    <!-- Canvas Mobile Menu start -->
                    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                        <div class="close-btn">
                            <a id="nav-close2" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <ul class="nav-menu">
                            <li class="menu-item-has-children current-menu-item">
                                <a href="{{ route('home') }}">Home</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">About Us</a>                                                        
                                <ul class="sub-menu">
                                    <li class="last-item menu-item-has-children"> 
                                        <a href="{{route('aboutus')}}">Miss Nepal North America</a>
                                    </li>
                                    <li class="last-item menu-item-has-children">
                                        <a href="{{route('frontteam')}}">Our Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Events</a>
                                <ul class="sub-menu">
                                    <li class="last-item"><a href="{{route('mnantwentythree')}}">Miss Nepal North America 2023</a></li>
                                    <li class="last-item"><a href="{{route('mnantwentytwo')}}">Miss Nepal North America 2022</a></li>
                                    <li class="last-item"><a href="{{route('mnantwentyone')}}">Miss Nepal North America 2021</a></li>
                                    <li class="last-item"><a href="{{route('mnannineteen')}}">Miss Nepal North America 2019</a></li>
                                     <li class="last-item"><a href="{{route('mnaneighteen')}}">Miss Nepal North America 2018</a></li>  
                                </ul>
                            </li>
                            <li>
                                                        <a href="{{route('archive')}}">Archive</a>
                                                        
                                                    </li>
                                                  <li><a href="{{route('mediacoverage')}}">Media</a></li>
                                                  @if($abouts->sponsortwo == 1)
                                                           <li>
                                             <a  href="{{route('sponsor')}}"> Sponsors</a></li>
                                             @else
                                           @endif
                                                    <li>
                                                        <a href="{{route('contact')}}">Contact</a>
                                                        </li>
                                                        @if($abouts->statustwo == 1)
                                                        
                                                    <li><a class="mobile apply-menu" href="vote.missnepalnorthamerica.com"> <i class="fas fa-crown"></i> Vote Now</a></li>
                                                        @else
                                                        
                                                        <li><a class="mobile apply-menu" href="{{ route('usaform') }}"> <i class="fas fa-crown"></i> Apply Now</a></li>
                                                            @endif
                        </ul> <!-- //.nav-menu -->
                        <div class="canvas-contact">
                              <div class="address-area">
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-location"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Address</h4>
                                          {!!$abouts->address!!}
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-email"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Email</h4>
                                          <em><a href="mailto:info@missnepalnorthamerica.com">{!!$abouts->email!!}</a></em>
                                      </div>
                                  </div>
                                  <div class="address-list">
                                      <div class="info-icon">
                                          <i class="flaticon-call"></i>
                                      </div>
                                      <div class="info-content">
                                          <h4 class="title">Phone</h4>
                                          {!!$abouts->phone_number!!}
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->
                    
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->