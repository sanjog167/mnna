@extends('frontend.layouts.app')
@section('content')
<style>
    .navbar{
    background:#303441;
}

</style>
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start userpanel-flex">
			@include('frontend.inc.user_side_nav')
			<div class="aiz-user-panel">
				@yield('panel_content')
            </div>
        </div>
    </div>
</section>
@endsection