@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Blog Category Information')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{ route('sponsor-category.update', $cateogry->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Name')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Name')}}" id="category_name" name="category_name" value="{{ $cateogry->category_name }}" class="form-control" required>
                        </div>
                    </div>
                    
                                <div class="form-group row"> 
                        <label class="col-md-3 col-form-label">{{translate('Sponsor category order level')}}</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{$cateogry->level}}" name="level" placeholder="{{translate('Sponsor category order level')}}">
                            <small>if you enter 1 it comes at the first. </small>
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
