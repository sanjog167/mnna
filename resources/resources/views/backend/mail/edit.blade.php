@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h1 class="mb-0 h6">{{ translate('Edit Mail') }}</h5>
</div>
<div class="">
    <form class="form form-horizontal mar-top" action="{{route('mail.update.store', $mail->id)}}" method="POST" enctype="multipart/form-data" id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                <input name="_method" type="hidden" value="POST">

                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('Mail Information')}}</h5>
                    </div>
                    <div class="card-body">
            

                        <div class="form-group row"> 
                            <label class="col-md-3 col-form-label">{{translate('Email')}}</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$mail->email}}" name="email" placeholder="{{translate('Email')}}">
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
