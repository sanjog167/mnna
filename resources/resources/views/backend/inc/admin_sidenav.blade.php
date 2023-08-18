<div class="aiz-sidebar-wrap">
    <div class="aiz-sidebar left c-scrollbar">
        <div class="aiz-side-nav-logo-wrap">
            <a href="{{ route('admin.dashboard') }}" class="d-block text-left">
                               <img style="width:200px; height:100%" src="https://missnepalnorthamerica.com/public/assets/images/logo-v-01.svg" class="brand-icon" alt="{{ get_setting('site_name') }}">

            </a>
        </div>
        <div class="aiz-side-nav-wrap">
            <div class="px-20px mb-3">
                <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text" name="" placeholder="{{ translate('Search in menu') }}" id="menu-search" onkeyup="menuSearch()">
            </div>
            <ul class="aiz-side-nav-list" id="search-menu">
            </ul>
            <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">
                <li class="aiz-side-nav-item d-none">
                    <a href="{{route('admin.dashboard')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Dashboard')}}</span> 
                    </a>
                </li>
                
                          <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-bullhorn aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Homepage Banner') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('banner.create') }}" class="aiz-side-nav-link {{ areActiveRoutes(['banner.create'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Add Homepage Banner') }}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('banner.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['banner.index'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('All Homepage Banner') }}</span>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                    
                          <li class="aiz-side-nav-item">
                        <a href="{{route('products.all')}}" class="aiz-side-nav-link">
                            <i class="las la-bullhorn aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('All events') }}</span>
                        </a>
                        </li>
                    
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-bullhorn aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Events') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
  
                                <a href="{{ route('event.create') }}" class="aiz-side-nav-link {{ areActiveRoutes(['event.create'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Add Event') }}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
  
                                <a href="{{ route('event.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['event.index'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('All Events') }}</span>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                    
                         <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-bullhorn aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Sponsors') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            </li>
                            
                                  <li class="aiz-side-nav-item">
  
                                <a href="{{ route('sponsor.create') }}" class="aiz-side-nav-link {{ areActiveRoutes(['sponsor.create'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Add Sponsors') }}</span>
                                </a>
                            </li>
                            
                            
                                  <li class="aiz-side-nav-item">
  
                                <a href="{{ route('sponsor.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['sponsor.index'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('All Sponsors') }}</span>
                                </a>
                            </li>
                        <li class="aiz-side-nav-item">
  
                                <a href="{{ route('sponsor-category.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['sponsor-category.index'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Sponsor Category') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-bullhorn aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Media') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
  
                                <a href="{{ route('mediacoverage.create') }}" class="aiz-side-nav-link {{ areActiveRoutes(['mediacoverage.create'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Add Media ') }}</span>
                                </a>
                            </li>
                            
                                  <li class="aiz-side-nav-item">
  
                                <a href="{{ route('mediacoverage.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['mediacoverage.index'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('All Media ') }}</span>
                                </a>
                            </li>
                        <li class="aiz-side-nav-item">
  
                                <a href="{{ route('mediacoverage-category.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['mediacoverage-category.index'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('Media  Category') }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    
                      <li class="aiz-side-nav-item">
                    <a href="{{route('team.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Our Team')}}</span> 
                    </a>
                </li>
                
                       <li class="aiz-side-nav-item">
                    <a href="{{route('advisor.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Our Advisors')}}</span> 
                    </a>
                </li>
                
                         <li class="aiz-side-nav-item">
                    <a href="{{route('ambassador.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Our Ambassadors')}}</span> 
                    </a>
                </li>
                
                           <li class="aiz-side-nav-item">
                    <a href="{{route('pastevent.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Past Events')}}</span> 
                    </a>
                </li>
                
                             <li class="aiz-side-nav-item">
                    <a href="{{route('winner.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Winners')}}</span> 
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{route('mentor.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Mentor')}}</span> 
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="{{route('faq.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('FAQs')}}</span> 
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{route('socialinitiative.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Social Initiative')}}</span> 
                    </a>
                </li>
                       <li class="aiz-side-nav-item">
                    <a href="{{route('mail.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Form Emails')}}</span> 
                    </a>
                </li>
                
                             <li class="aiz-side-nav-item">
                    <a href="{{route('media.index')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Archive')}}</span> 
                    </a>
                </li>
                


                 <li class="aiz-side-nav-item d-none">
                    <a href="{{route('homepagebanner')}}" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{translate('Homepage Banner')}}</span> 
                    </a>
                </li>
                
                                                        <li class="aiz-side-nav-item">
                        <a href="{{ URL::to('admin/aboutedit/1') }}" class="aiz-side-nav-link d-flex align-items-center">
                           <i class="las la-book"></i>
                            <span class="aiz-side-nav-text pl-2">{{ translate('Website Contents') }}</span>
                          
                        </a>
               
                    </li>

                   <li class="aiz-side-nav-item">
                                <a href="{{ route('all_forms.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['all_forms.index', 'all_forms.show'])}}">
                                   <i class="las la-book"></i>
                                    <span class="aiz-side-nav-text">{{translate('Applicant Forms')}}</span>
                                </a>
                            </li>
                            
                         
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('uploaded-files.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['uploaded-files.create'])}}">
                            <i class="las la-folder-open aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Uploaded Files') }}</span>
                        </a>
                    </li>
           


            @if((Auth::user()->user_type == 'admin' || in_array('9', json_decode(Auth::user()->staff->role->permissions))) && get_setting('vendor_system_activation') == 1)
                    <li class="aiz-side-nav-item">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-user aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{ translate('Sellers') }}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                @php
                                    $sellers = \App\Models\Seller::where('verification_status', 0)->where('verification_info', '!=', null)->count();
                                @endphp
                                <a href="{{ route('sellers.index') }}" class="aiz-side-nav-link {{ areActiveRoutes(['sellers.index', 'sellers.create', 'sellers.edit', 'sellers.payment_history','sellers.approved','sellers.profile_modal','sellers.show_verification_request'])}}">
                                    <span class="aiz-side-nav-text">{{ translate('All Seller') }}</span>
                                    @if($sellers > 0)<span class="badge badge-info">{{ $sellers }}</span> @endif
                                </a>
                            </li>
                          

        
                 
                        </ul>
                    </li>
                @endif
                 


            <!-- Website Setup -->
                @if(Auth::user()->user_type == 'admin' || in_array('13', json_decode(Auth::user()->staff->role->permissions)))
                    <li class="aiz-side-nav-item d-none">
                        <a href="#" class="aiz-side-nav-link {{ areActiveRoutes(['website.footer', 'website.header'])}}" >
                            <i class="las la-desktop aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Website Setup')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.header') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Header')}}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.footer', ['lang'=>  App::getLocale()] ) }}" class="aiz-side-nav-link {{ areActiveRoutes(['website.footer'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Footer')}}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.pages') }}" class="aiz-side-nav-link {{ areActiveRoutes(['website.pages', 'custom-pages.create' ,'custom-pages.edit'])}}">
                                    <span class="aiz-side-nav-text">{{translate('Pages')}}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('website.appearance') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Appearance')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

            <!-- Setup & Configurations -->
                @if(Auth::user()->user_type == 'admin' || in_array('14', json_decode(Auth::user()->staff->role->permissions)))
                    <li class="aiz-side-nav-item d-none">
                        <a href="#" class="aiz-side-nav-link">
                            <i class="las la-dharmachakra aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">{{translate('Setup & Configurations')}}</span>
                            <span class="aiz-side-nav-arrow"></span>
                        </a>
                        <ul class="aiz-side-nav-list level-2">
                            <li class="aiz-side-nav-item">
                                <a href="{{route('general_setting.index')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('General Settings')}}</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="{{route('activation.index')}}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Features activation')}}</span>
                                </a>
                            </li>
                           
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('file_system.index') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('File System & Cache Configuration')}}</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{ route('social_login.index') }}" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Social media Logins')}}</span>
                                </a>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Facebook')}}</span>
                                    <span class="aiz-side-nav-arrow"></span>
                                </a>
                                <ul class="aiz-side-nav-list level-3">
                                    <li class="aiz-side-nav-item">
                                        <a href="{{ route('facebook_chat.index') }}" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">{{translate('Facebook Chat')}}</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="{{ route('facebook-comment') }}" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">{{translate('Facebook Comment')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link">
                                    <span class="aiz-side-nav-text">{{translate('Google')}}</span>
                                    <span class="aiz-side-nav-arrow"></span>
                                </a>
                                <ul class="aiz-side-nav-list level-3">
                                    <li class="aiz-side-nav-item">
                                        <a href="{{ route('google_analytics.index') }}" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">{{translate('Analytics Tools')}}</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="{{ route('google_recaptcha.index') }}" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">{{translate('Google reCAPTCHA')}}</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="{{ route('google-map.index') }}" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">{{translate('Google Map')}}</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="{{ route('google-firebase.index') }}" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">{{translate('Google Firebase')}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                    </li>
                @endif




 
            </ul><!-- .aiz-side-nav -->
        </div><!-- .aiz-side-nav-wrap -->
    </div><!-- .aiz-sidebar -->
    <div class="aiz-sidebar-overlay"></div>
</div><!-- .aiz-sidebar -->    <section class="banner-tems text-center">

    </section>
