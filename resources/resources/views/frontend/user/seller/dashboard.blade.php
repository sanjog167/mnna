@extends('frontend.layouts.user_panel')

<style type="text/css">
    .navbar{
        position: initial !important;
        background: #303441;
    }
</style>

@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Dashboard') }}</h1>
            </div>
        </div>
    </div>

    <div class="row gutters-10">
        <div class="col-md-6">
            <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
              <div class="px-3 pt-3">
                <div class="h3 fw-700">
                  {{ count(\App\Models\Product::where('user_id', Auth::user()->id)->get()) }}
                </div>
                <div class="opacity-50">{{ translate('Properties')}}</div>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
              </svg>
            </div>
        </div>

                <div class="col-md-6">
            <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
              <div class="px-3 pt-3">
                <div class="h3 fw-700">
                  {{ count(\App\Models\Product::where('user_id', Auth::user()->id)->get()) }}
                </div>
                <div class="opacity-50">{{ translate('Messages')}}</div>
              </div>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                </svg>
            </div>
        </div>


    </div>

    <div class="row">

        <div class="col-md-5">
          <div class="card p-5 text-center">
              <div class="mb-3">
                  @if(Auth::user()->seller->verification_status == 0)
                      <img loading="lazy"  src="{{ static_asset('assets/img/non_verified.png') }}" alt="" width="130">
                  @else
                      <img loading="lazy"  src="{{ static_asset('assets/img/verified.png') }}" alt="" width="130">
                  @endif
              </div>
              @if(Auth::user()->seller->verification_status == 0)
                  <a href="{{ route('shop.verify') }}" class="btn btn-primary">{{ translate('Verify Now')}}</a>
              @endif
          </div>
        </div>

        <div class="col-md-7">
              <div class="card mb-4 p-4 text-center">
              <div class="h5 fw-600">{{ translate('Shop')}}</div>
              <p>{{ translate('Manage & organize your shop')}}</p>
              <a href="{{ route('shops.index') }}" class="btn btn-soft-primary">{{ translate('Go to setting')}}</a>
          </div>
        </div>

    </div>

 

@endsection
