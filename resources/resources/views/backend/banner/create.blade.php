@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Sliders')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('banner.store') }}" method="POST">
                    @csrf
       
                  <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Slider Main Image')}} <small></small></label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="thumbnail_img" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                                <small class="text-muted">{{translate('This image is visible in all product box. Use 300x300 sizes image. Keep some blank space around main object of your image as we had to crop some edge in different devices to make it responsive.')}}</small>
                            </div>
                        </div>
                    

                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Banner Text')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="banner_link" placeholder="{{translate('Banner Text')}}">
                        </div>
                    </div>
                    
                         <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner order level')}}
                            <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Banner order level')}}" name="level" id="level" class="form-control" required>
                        </div>
                    </div>
       
                    
     
    
                    
                 
                    

                    
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{translate('Save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
