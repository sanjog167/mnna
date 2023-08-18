@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Social Initiative')}}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('socialinitiative.create') }}" class="btn btn-circle btn-info">
                <span>{{translate('Add New Social Initiative')}}</span> 
            </a>
        </div>
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_blogs" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Social Initiatives') }}</h5>
            </div>
            
            <div class="col-md-2">
                <div class="form-group mb-0">
                    <input type="text" class="form-control form-control-sm" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type & Enter') }}">
                </div>
            </div>
        </div>
        </from>
        <div class="card-body">
            <table class="table mb-0 aiz-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{translate('Title')}}</th>
                        <th>{{translate('Description')}}</th>
                        

                        <th class="text-right">{{translate('Options')}}</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($socialinitiatives as $key => $socialinitiative) 
                    <tr>
                          <td>{{ $key+1}} </td>
                              
                   
                        
                         <td>{{ $socialinitiative->title }} </td>
                         <td>{!! $socialinitiative->description !!} </td>
                   
                         


             
                        <td class="text-right">
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('socialinitiative.edit',$socialinitiative->id)}}" title="{{ translate('Edit') }}">
                                <i class="las la-pen"></i>
                            </a>
                            
                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('socialinitiative.destroy', $socialinitiative->id)}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
         
        </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
<script type="text/javascript">
            function update_upcoming(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('event.upcoming') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Event updated successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}'); 
                }
            });
        }
</script>
@endsection