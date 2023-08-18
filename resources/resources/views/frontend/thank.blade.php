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
                <img class="rs-html5-video"style="height:100%;"  autoplay="" muted="" playsinline="" loop="" src="{{ static_asset('assets/images/vote.jpg')}}">
                <div class="container">
                    <div class="content-wrap text-center">
                        <div class="banner-border-line"></div>
                        <h1 class="title">Thank you for applying</h1>
                        
                    </div>
                </div>
            </div>

     @endsection