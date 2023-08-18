@extends('backend.layouts.app')

@section('content')

<div class="card">
    <form class="" action="" id="sort_orders" method="GET">
   
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <!--<th>#</th>-->
                        <th>
                            <div class="form-group">
                                <div class="aiz-checkbox-inline">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" class="check-all">
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                            </div>
                        </th>
                        <th>{{ translate('First Name') }}</th>
                        <th>{{ translate('Last Name') }}</th>
                        <th>{{ translate('Email') }}</th>
                        <th>{{ translate('Phone Number') }}</th>
                        <th>{{ translate('Age') }}</th>
                        <th>{{ translate('Gender') }}</th>
                        <th>{{ translate('Height') }}</th>
                        <th>{{ translate('Country') }}</th>
                        <th>{{ translate('State') }}</th>
                        <th>{{ translate('City') }}</th>
                        <th>{{ translate('Close up') }}</th>
                        <th>{{ translate('Full size') }}</th>
                  
                        
                  
                        <th class="text-right" width="15%">{{translate('options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $key => $order)
                    <tr>
  
                        <td>
                            <div class="form-group">
                                <div class="aiz-checkbox-inline">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" class="check-one" name="id[]" value="{{$order->id}}">
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $order->name }}

                        </td>
                        <td>
                            {{ $order->surname }}

                        </td>
                    
                        <td>
                            {{ $order->email }}
                        </td>
                    
                         <td>
                            {{ $order->mobile }}
                        </td>
                        
                        <td>
                            {{ $order->prof }}
                        </td>
                        
                        <td>
                            {{ $order->designation }}
                        </td>
                        
                        <td>
                            {{ $order->addinv }}
                        </td>
                        
                        <td>
                            {{ $order->country }}
                        </td>
                        
                        <td>
                            {{ $order->doi }}
                        </td>
                        
                        <td>
                            {{ $order->city }}
                        </td>
                        <td>
                          <img src="{{ static_asset($order->poi) }}" height="30" style="display:inline-block;">
                        </td>
                        <td>
                           <img src="{{ static_asset($order->alternate) }}" height="30" style="display:inline-block;">
                        </td>
                        
                        
                     
                    
                        <td class="text-right">
                            <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{ route('invoice.download', $order->id) }}" title="{{ translate('Download Invoice') }}">
                                <i class="las la-download"></i>
                            </a> 
                       
                       
                           <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('forms.destroy', $order->id)}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="aiz-pagination">
                {{ $forms->appends(request()->input())->links() }}
            </div>

        </div>
    </form>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
    <script type="text/javascript">
        $(document).on("change", ".check-all", function() {
            if(this.checked) {
                // Iterate each checkbox
                $('.check-one:checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.check-one:checkbox').each(function() {
                    this.checked = false;
                });
            }

        });

//        function change_status() {
//            var data = new FormData($('#order_form')[0]);
//            $.ajax({
//                headers: {
//                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                },
//                url: "{{route('bulk-order-status')}}",
//                type: 'POST',
//                data: data,
//                cache: false,
//                contentType: false,
//                processData: false,
//                success: function (response) {
//                    if(response == 1) {
//                        location.reload();
//                    }
//                }
//            });
//        }

        function bulk_delete() {
            var data = new FormData($('#sort_orders')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('bulk-order-delete')}}",
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if(response == 1) {
                        location.reload();
                    }
                }
            });
        }
    </script>
@endsection
