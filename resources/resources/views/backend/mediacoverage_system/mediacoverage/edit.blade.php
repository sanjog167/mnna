@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Media Coverage Information')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('mediacoverage.update',$mediacoverage->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Media Coverage Title')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Media Coverage Title')}}" onkeyup="makeSlug(this.value)" id="title" name="title" value="{{ $mediacoverage->title }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row" id="category">
                        <label class="col-md-3 col-from-label">
                            {{translate('Category')}} 
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <select
                                class="form-control aiz-selectpicker"
                                name="category_id"
                                id="category_id"
                                data-live-search="true"
                                required
                                @if($mediacoverage->category != null)
                                data-selected="{{ $mediacoverage->category->id }}"
                                @endif
                            >
                                <option>--</option>
                                @foreach ($mediacoverage_categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                                  <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Media order level')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$mediacoverage->level}}" name="level" placeholder="{{translate('Media order level')}}">
                            <small>if you enter 1 it comes at the first. </small>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Slug')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Slug')}}" name="slug" id="slug" value="{{ $mediacoverage->slug }}" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">
                            {{translate('Banner')}} 
                            <small>(1300x650)</small>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="banner" class="selected-files" value="{{ $mediacoverage->banner }}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
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
