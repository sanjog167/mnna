@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Media Coverage')}}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('mediacoverage.create') }}" class="btn btn-circle btn-info">
                <span>{{translate('Add New Media Coverage')}}</span>
            </a>
        </div>
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_mediacoverages" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col text-center text-md-left">
                <h5 class="mb-md-0 h6">{{ translate('All Media Coverage') }}</h5>
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
                        <th data-breakpoints="lg">{{translate('Category')}}</th>
                        <th data-breakpoints="lg">{{translate('Media Order Level')}}</th>
                        <th data-breakpoints="lg">{{translate('Image')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mediacoverages as $key => $mediacoverage)
                    <tr>
                        <td>
                            {{ ($key+1) + ($mediacoverages->currentPage() - 1) * $mediacoverages->perPage() }}
                        </td>
                        <td>
                            {{ $mediacoverage->title }}
                        </td>
                        
                        <td>
                            @if($mediacoverage->category != null)
                                {{ $mediacoverage->category->category_name }}
                            @else
                                --
                            @endif
                        </td>
                            <td>
                           {{ $mediacoverage->level }}
                        </td>
                        <td>
                              <img src="{{ uploaded_asset($mediacoverage->banner) }}" style="width:70px; height:70px;object-fit:contain;">
                        </td>
                        <td>
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" onchange="change_status(this)" value="{{ $mediacoverage->id }}" <?php if($mediacoverage->status == 1) echo "checked";?>>
                                <span></span>
                            </label>
                        </td>
                        <td class="text-right">
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('mediacoverage.edit',$mediacoverage->id)}}" title="{{ translate('Edit') }}">
                                <i class="las la-pen"></i>
                            </a>
                            
                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('mediacoverage.destroy', $mediacoverage->id)}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $mediacoverages->links() }}
            </div>
        </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection


@section('script')

    <script type="text/javascript">
        function change_status(el){
            var status = 0;
            if(el.checked){
                var status = 1;
            }
            $.post('{{ route('mediacoverage.change-status') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Change mediacoverage status successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }
    </script>

@endsection
