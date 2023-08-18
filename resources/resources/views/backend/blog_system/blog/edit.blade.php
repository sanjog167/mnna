@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Sponsor Information')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('sponsor.update',$blog->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Sponsor Title')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Blog Title')}}" onkeyup="makeSlug(this.value)" id="title" name="title" value="{{ $blog->title }}" class="form-control" required>
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
                                @if($blog->category != null)
                                data-selected="{{ $blog->category->id }}"
                                @endif
                            >
                                <option>--</option>
                                @foreach ($blog_categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Slug')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Slug')}}" name="slug" id="slug" value="{{ $blog->slug }}" class="form-control" required>
                        </div>
                    </div>
                    
                                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Sponsor order level')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$blog->level}}" name="level" placeholder="{{translate('Sponsor order level')}}">
                            <small>if you enter 1 it comes at the first. </small>
                        </div>
                    </div>
                    
                                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Sponsor Link')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$blog->links}}" name="links" placeholder="{{translate('Link')}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">
                            {{translate('Logo Image File')}} 
                        </label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}
                                    </div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="banner" class="selected-files" value="{{ $blog->banner }}">
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
