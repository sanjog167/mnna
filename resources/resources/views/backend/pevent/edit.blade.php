@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h1 class="mb-0 h6">{{ translate('Edit Past Event') }}</h5>
</div>
<div class="">
    <form class="form form-horizontal mar-top" action="{{route('pevent.update.store', $pevent->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                <input name="_method" type="hidden" value="POST">

                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('Past Event Information')}}</h5>
                    </div>
                    <div class="card-body">
            
                     

                                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Past Event Link')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$pevent->banner_link}}" name="banner_link" placeholder="{{translate('Past Event Link')}}">
                        </div>
                    </div>
                    
                                 <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Past Event Title')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$pevent->position}}" name="position" placeholder="{{translate('Past Event Title')}}">
                        </div>
                    </div>
                    
                                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Past Event order level')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$pevent->level}}" name="level" placeholder="{{translate('Past Event order level')}}">
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
