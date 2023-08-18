@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h1 class="mb-0 h6">{{ translate('Edit mentor') }}</h5>
</div>
<div class="">
    <form class="form form-horizontal mar-top" action="{{route('mentor.update.store', $mentor->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                <input name="_method" type="hidden" value="POST">

                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('Mentor Information')}}</h5>
                    </div>
                    <div class="card-body">
            
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Mentor Main Image')}} <small></small></label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" value="{{$mentor->thumbnail_img}}" name="thumbnail_img" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                                <small class="text-muted">{{translate('This image is visible in all product box. Use 300x300 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.')}}</small>
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label class="col-md-3 col-form-label">{{translate('Mentor Name')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$mentor->banner_link}}" name="banner_link" placeholder="{{translate('mentor Name')}}">
                            </div>
                        </div>
                        
                                    <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Mentor order level')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$mentor->level}}" name="level" placeholder="{{translate('Mentor order level')}}">
                            <small>if you enter 1 it comes at the first. </small>
                        </div>
                    </div>
                        
                        <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Mentor Title')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$mentor->subtitle}}"  name="subtitle" placeholder="{{translate('Mentor Title')}}">
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Mentor Designation')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$mentor->designation}}" name="designation" placeholder="{{translate('Mentor Designation')}}">
                        </div>
                    </div>
                  
                    <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Mentor Description')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="description" class="aiz-text-editor">{{$mentor->description}}</textarea>
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
