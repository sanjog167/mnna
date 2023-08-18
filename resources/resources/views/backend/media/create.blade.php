@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Archive')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('media.store') }}" method="POST">
                    @csrf
       
             
                    

                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Archive Link')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="banner_link" placeholder="{{translate('Archive Link')}}">
                        </div>
                    </div>
                    
                 
       
                     <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Archive order level')}}
                            <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Archive order level')}}" name="level" id="level" class="form-control" required>
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
