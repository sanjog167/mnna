@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h1 class="mb-0 h6">{{ translate('Edit Social Initiative') }}</h5>
</div>
<div class="">
    <form class="form form-horizontal mar-top" action="{{route('socialinitiative.update.store', $socialinitiative->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                <input name="_method" type="hidden" value="POST">

                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('Social Initiative Information')}}</h5>
                    </div>
                    <div class="card-body">
            

                       <div class="form-group row"> 
                            <label class="col-md-3 col-form-label">{{translate('Title')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$socialinitiative->title}}" name="title" placeholder="{{translate('Title')}}">
                            </div>
                        </div>
                    <div class="form-group row"> 
                            <label class="col-md-3 col-form-label">{{translate('Description')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$socialinitiative->description}}" name="description" placeholder="{{translate('Description')}}">
                            </div>
                        </div>
                   
                  
                    <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate(' Images')}}</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="images" value="{{$socialinitiative->images}}" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
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
