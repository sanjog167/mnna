@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h1 class="mb-0 h6">{{ translate('Edit winner') }}</h5>
</div>
<div class="">
    <form class="form form-horizontal mar-top" action="{{route('winner.update.store', $winner->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                <input name="_method" type="hidden" value="POST">

                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('Winner Information')}}</h5>
                    </div>
                    <div class="card-body">
            
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Winner Main Image')}} <small></small></label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" value="{{$winner->thumbnail_img}}" name="thumbnail_img" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                                <small class="text-muted">{{translate('This image is visible in all product box. Use 300x300 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.')}}</small>
                            </div>
                        </div>

                                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Winner Name')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$winner->banner_link}}" name="banner_link" placeholder="{{translate('Winner Name')}}">
                        </div>
                    </div>
                    
                                 <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Year')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$winner->year}}" name="year" placeholder="{{translate('Year')}}">
                        </div>
                    </div>
          
                      <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Winner order level')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$winner->level}}" name="level" placeholder="{{translate('Winner order level')}}">
                            <small>if you enter 1 it comes at the first. </small>
                        </div>
                    </div>

                   
      

                    </div>
                </div>
                <div class="btn-group" role="group" aria-label="Second group" style="float: right;">
                    <button type="submit" name="button" value="publish" class="btn btn-success action-btn">{{ translate('Save') }}</button>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection

@section('script')
<script>
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
@endsection
