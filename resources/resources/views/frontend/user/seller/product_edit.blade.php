@extends('frontend.layouts.user_panel')

<style type="text/css">
    .navbar{
        position: initial !important;
        background: #303441;
    }
</style>

@section('panel_content')

<div class="aiz-titlebar mt-2 mb-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Update your product') }}</h1>
        </div>
    </div>
</div>

<form class="" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data"
    id="choice_form">

        <div class="row gutters-5"> 
        <div class="col-lg-12">
            @csrf
            <input type="hidden" name="added_by" value="seller">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Information')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Product Name')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name"
                                placeholder="{{ translate('Product Name') }}" value="{{$product->name}}" required>
                        </div>
                    </div>
                   <div class="form-group row" id="category">
                            <label class="col-lg-3 col-from-label">{{translate('Category')}}</label>
                            <div class="col-lg-8">
                                <select class="form-control aiz-selectpicker" name="category_id" id="category_id" data-selected="{{ $product->category_id }}" data-live-search="true" required>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->getTranslation('name') }}</option>
                                    @foreach ($category->childrenCategories as $childCategory)
                                    @include('categories.child_category', ['child_category' => $childCategory])
                                    @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
    
        
    
   

                </div>
            </div>


                      <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            {{translate('Property Purpose')}}
                        </h5>
                    </div>
                 <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-6 col-from-label">{{translate('Sale')}}</label>
                            <div class="col-md-6">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="radio" name="stock_visibility_state" value="sale" @if($product->stock_visibility_state == 'sale') checked @endif>
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-from-label">{{translate('Rent')}}</label>
                            <div class="col-md-6">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="radio" name="stock_visibility_state" value="rent" @if($product->stock_visibility_state == 'rent') checked @endif>
                                    <span></span>
                                </label>
                            </div>
                        </div>

                    

                    </div>
                </div>


                                 <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            {{translate('Property Ownership')}}
                        </h5>
                    </div>

                    <div class="card-body">

                         <select class="form-control " name="ownership_type" id="ownership_type">
                                    <option value="institutional"  <?php if($product->ownership_type == 'institutional') echo "selected";?>>{{translate('Institutional')}}</option>
                                    <option value="individual"  <?php if($product->ownership_type == 'individual') echo "selected";?>>{{translate('Individual')}}</option>
                                  
                                </select>
        
            

                    </div>
                </div>

                   <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Property Variation ( Address, Area & Road and more )')}}</h5>
                </div>
                <div class="card-body">
    

                    <div class="form-group row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="{{translate('Attributes')}}" disabled>
                        </div>
                        <div class="col-md-8">
                            <select name="choice_attributes[]" id="choice_attributes"
                                class="form-control aiz-selectpicker" data-live-search="true"
                                data-selected-text-format="count" multiple
                                data-placeholder="{{ translate('Choose Attributes') }}">
                                @foreach (\App\Models\Attribute::all() as $key => $attribute)
                                <option value="{{ $attribute->id }}">{{ $attribute->getTranslation('name') }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <p>{{ translate('Choose the attributes of this product and then input values of each attribute') }}
                        </p>
                        <br>
                    </div>

                    <div class="customer_choice_options" id="customer_choice_options">
            @foreach (json_decode($product->choice_options) as $key => $choice_option)
                <div class="form-group row">
                    <div class="col-lg-3">
                        <input type="hidden" name="choice_no[]" value="{{ $choice_option->attribute_id }}">
                        <input type="text" class="form-control" name="choice[]"
                            value="{{ \App\Models\Attribute::find($choice_option->attribute_id)->getTranslation('name') }}"
                            placeholder="{{ translate('Choice Title') }}" disabled>
                    </div>
                    <div class="col-lg-8">
                        <select class="form-control aiz-selectpicker attribute_choice" data-live-search="true" name="choice_options_{{ $choice_option->attribute_id }}[]" multiple>
                            @foreach (\App\Models\AttributeValue::where('attribute_id', $choice_option->attribute_id)->get() as $row)
                                <option value="{{ $row->value }}" @if( in_array($row->value, $choice_option->values)) selected @endif>
                                    {{ $row->value }}
                                </option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control aiz-tag-input" name="choice_options_{{ $choice_option->attribute_id }}[]" placeholder="{{ translate('Enter choice values') }}" value="{{ implode(',', $choice_option->values) }}" data-on-change="update_sku"> --}}
                    </div>
                </div>
                @endforeach
                    </div>
                </div>

                                <div class="card-body propertyfields d-flex flex-column">

                    <input type="text" placeholder="Exact Address" value="{{$product->address}}"  name="address" class="address">
                    <input type="text" placeholder="House No./Landmark" value="{{$product->landmark}}" name="landmark" class="landmark">
                    <input type="text" placeholder="total area" value="{{$product->total_area}}" name="total_area" class="total_area">
                    <input type="text" placeholder="built up area" value="{{$product->built_area}}" name="built_area" class="built_area">
                    <input type="text" placeholder="road access" value="{{$product->road_access}}" name="road_access" class="road_access">
                    <input type="text" placeholder="Kitchen" value="{{$product->kitchen}}" name="kitchen" class="kitchen">
                    <input type="text" placeholder="Dining Room" value="{{$product->dining_room}}" name="dining_room" class="dining_room">
                    <input type="text" placeholder="Bed room" value="{{$product->bedroom}}" name="bedroom" class="bedroom">
                    <input type="text" placeholder="bathroom" value="{{$product->bathroom}}" name="bathroom" class="bathroom">
                    <input type="text" placeholder="Hall" value="{{$product->hall}}" name="hall" class="hall">
                    <input type="text" placeholder="Total Floors" value="{{$product->total_floors}}" name="total_floors" class="total_floors"> 
                    <input type="text" placeholder="Parking" value="{{$product->parking}}" name="parking" class="parking"> 

                </div>

                   <label class="pl-4">Amenities</label>
                         <div class="card-body amenities_create">



                       <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"
                                    type="checkbox"
                                    name="am1" @if($product->am1!=null) checked @endif
                                    value="EARTHQUAKE RESISTANT"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    EARTHQUAKE RESISTANT
                                  </span>
                              
                                
                                </label>
                              </div>
                              <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"
                                    type="checkbox"
                                    name="am2"  @if($product->am2!=null) checked @endif
                                    value="MARBEL"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    MARBEL
                                  </span>
                              
                                </label>
                              </div>
                              <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"
                                    type="checkbox"  @if($product->am3!=null) checked @endif
                                    name="am3"
                                    value="PARQUET"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    PARQUET
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am4!=null) checked @endif
                                    type="checkbox"
                                    name="am4"
                                    value="GYM"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    GYM
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am5!=null) checked @endif
                                    type="checkbox"
                                    name="am5"
                                    value="FRIDGE"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    FRIDGE
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am6!=null) checked @endif
                                    type="checkbox"
                                    name="am6"
                                    value="SOFA"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    SOFA
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am7!=null) checked @endif
                                    type="checkbox"
                                    name="am7"
                                    value="CC CAMERA"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    CC CAMERA
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am8!=null) checked @endif
                                    type="checkbox"
                                    name="am8"
                                    value="SOLAR"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    SOLAR
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am9!=null) checked @endif
                                    type="checkbox"
                                    name="am9"
                                    value="DINING TABLE"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    DINING TABLE
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am10!=null) checked @endif
                                    type="checkbox"
                                    name="am10"
                                    value="MICROWAVE"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    MICROWAVE
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am11!=null) checked @endif
                                    type="checkbox"
                                    name="am11"
                                    value="AIRCON"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    AIRCON
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am12!=null) checked @endif
                                    type="checkbox"
                                    name="am12"
                                    value="WATER PURIFIER"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    WATER PURIFIER
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am13!=null) checked @endif
                                    type="checkbox"
                                    name="am13"
                                    value="WASHING MACHINE"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    WASHING MACHINE
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am14!=null) checked @endif
                                    type="checkbox"
                                    name="am14"
                                    value="BED"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    BED
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am15!=null) checked @endif
                                    type="checkbox"
                                    name="am15"
                                    value="GARDEN"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    GARDEN
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am16!=null) checked @endif
                                    type="checkbox"
                                    name="am16"
                                    value="IRON"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    IRON
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am17!=null) checked @endif
                                    type="checkbox"
                                    name="am17"
                                    value="MODULAR KITCHEN"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    MODULAR KITCHEN
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am18!=null) checked @endif
                                    type="checkbox"
                                    name="am18"
                                    value="LIFT"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    LIFT
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am19!=null) checked @endif
                                    type="checkbox"
                                    name="am19"
                                    value="PARKING"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    PARKING
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am20!=null) checked @endif
                                    type="checkbox"
                                    name="am20"
                                    value="PLAYGROUND"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    PLAYGROUND
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am21!=null) checked @endif
                                    type="checkbox"
                                    name="am21"
                                    value="SWIMMING POOL"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    SWIMMING POOL
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am22!=null) checked @endif
                                    type="checkbox"
                                    name="am22"
                                    value="INTERNET"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    INTERNET
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am23!=null) checked @endif
                                    type="checkbox"
                                    name="am23"
                                    value="DRINKING WATER"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    DRINKING WATER
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am24!=null) checked @endif
                                    type="checkbox"
                                    name="am24"
                                    value="BATHROOM"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    BATHROOM
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am25!=null) checked @endif
                                    type="checkbox"
                                    name="am25"
                                    value="TV"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    TV
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am26!=null) checked @endif
                                    type="checkbox"
                                    name="am26"
                                    value="DRAINAGE"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    DRAINAGE
                                  </span>
                               
                                </label>
                              </div>
                                             <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"  @if($product->am27!=null) checked @endif
                                    type="checkbox"
                                    name="am27"
                                    value="ELECTRICITY BACKUP"
                                    onchange="valueChanged()"
                                  />
                                  <span
                                    class="aiz-megabox-elem rounded d-flex align-items-center py-2 px-3 mb-2"
                                  >
                                    ELECTRICITY BACKUP
                                  </span>
                               
                                </label>
                              </div>
             

                          </div>



            </div>



              <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('Product Images')}}</h5>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Gallery Images')}}</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="photos" value="{{ $product->photos }}" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Thumbnail Image')}} <small>(290x300)</small></label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="thumbnail_img" value="{{ $product->thumbnail_img }}" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                                                    <label class="col-lg-3 col-from-label">{{translate('Gallery Images')}}</label>
                        <div class="col-lg-8">
                            <div id="photos">
                                @if(is_array(json_decode($product->photos)))
                                @foreach (json_decode($product->photos) as $key => $photo)
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="img-upload-preview">
                                        <img loading="lazy"  src="{{ uploaded_asset($photo) }}" alt="" class="img-responsive">
                                            <input type="hidden" name="previous_photos[]" value="{{ $photo }}">
                                            <button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div> --}}
                        {{-- <div class="form-group row">
                            <label class="col-lg-3 col-from-label">{{translate('Thumbnail Image')}} <small>(290x300)</small></label>
                            <div class="col-lg-8">
                                <div id="thumbnail_img">
                                    @if ($product->thumbnail_img != null)
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="img-upload-preview">
                                            <img loading="lazy"  src="{{ uploaded_asset($product->thumbnail_img) }}" alt="" class="img-responsive">
                                            <input type="hidden" name="previous_thumbnail_img" value="{{ $product->thumbnail_img }}">
                                            <button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>



                             <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Video')}}</h5>
                </div>
                <div class="card-body">
  
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Video')}}</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" name="newvideo" 
                                placeholder="{{ translate('Upload Video') }}">
                        </div>
                    </div>
                </div>
            </div>


                             <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Property Map')}}</h5>
                </div>
                <div class="card-body">
  
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Property Map')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="maps" value="{{$product->maps}}" 
                                placeholder="{{ translate('Property Map') }}">
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product price')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Property Price')}}</label>
                        <div class="col-md-6">
                            <input type="text" lang="en" min="0" step="0.01" value="{{$product->unit_price}}" 
                                placeholder="{{ translate('Unit price') }}" name="unit_price" class="form-control"
                                required>
                        </div>
                    </div>

            


        
      
        
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Product Description')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Description')}}</label>
                        <div class="col-md-8">
                            <textarea class="aiz-text-editor" name="description">{{$product->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card d-none">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('PDF Specification')}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label"
                            for="signinSrEmail">{{translate('PDF Specification')}}</label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="document">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="pdf" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{translate('SEO Meta Tags')}}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-lg-3 col-from-label">{{translate('Meta Title')}}</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="meta_title" value="{{ $product->meta_title }}" placeholder="{{translate('Meta Title')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-from-label">{{translate('Description')}}</label>
                            <div class="col-lg-8">
                                <textarea name="meta_description" rows="8" class="form-control">{{ $product->meta_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Meta Images')}}</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="meta_img" value="{{ $product->meta_img }}" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{translate('Slug')}}</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="{{translate('Slug')}}" id="slug" name="slug" value="{{ $product->slug }}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    
        <div class="col-12">
            <div class="mar-all text-right">
                <button type="submit" name="button" value="publish"
                    class="btn btn-primary">{{ translate('Upload Product') }}</button>
            </div>
        </div>
    </div>

</form>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function (){
        show_hide_shipping_div();
    });

    $("[name=shipping_type]").on("change", function (){
        show_hide_shipping_div();
    });

    function show_hide_shipping_div() {
        var shipping_val = $("[name=shipping_type]:checked").val();

        $(".flat_rate_shipping_div").hide();

        if(shipping_val == 'flat_rate'){
            $(".flat_rate_shipping_div").show();
        }
    }


    function add_more_customer_choice_option(i, name){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:"POST",
            url:'{{ route('products.add-more-choice-option') }}',
            data:{
               attribute_id: i
            },
            success: function(data) {
                var obj = JSON.parse(data);
                $('#customer_choice_options').append('\
                <div class="form-group row">\
                    <div class="col-md-3">\
                        <input type="hidden" name="choice_no[]" value="'+i+'">\
                        <input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="{{ translate('Choice Title') }}" readonly>\
                    </div>\
                    <div class="col-md-8">\
                        <select class="form-control aiz-selectpicker attribute_choice" data-live-search="true" name="choice_options_'+ i +'[]" multiple>\
                            '+obj+'\
                        </select>\
                    </div>\
                </div>');
                AIZ.plugins.bootstrapSelect('refresh');
           }
       });


    }

    $('input[name="colors_active"]').on('change', function() {
        if(!$('input[name="colors_active"]').is(':checked')){
            $('#colors').prop('disabled', true);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        else{
            $('#colors').prop('disabled', false);
            AIZ.plugins.bootstrapSelect('refresh');
        }
        update_sku();
    });

    $(document).on("change", ".attribute_choice",function() {
        update_sku();
    });

    $('#colors').on('change', function() {
        update_sku();
    });

    function delete_row(em){
        $(em).closest('.form-group').remove();
        update_sku();
    }

    function delete_variant(em){
        $(em).closest('.variant').remove();
    }

    function update_sku(){
        $.ajax({
           type:"POST",
           url:'{{ route('products.sku_combination_edit') }}',
           data:$('#choice_form').serialize(),
           success: function(data){
               $('#sku_combination').html(data);
               AIZ.uploader.previewGenerate();
                AIZ.plugins.fooTable();
               if (data.length > 1) {
                   $('#show-hide-div').hide();
               }
               else {
                    $('#show-hide-div').show();
               }
           }
       });
    }

    AIZ.plugins.tagify();


    $(document).ready(function(){
        update_sku();

        $('.remove-files').on('click', function(){
            $(this).parents(".col-md-4").remove();
        });
    });

    $('#choice_attributes').on('change', function() {
        $.each($("#choice_attributes option:selected"), function(j, attribute){
            flag = false;
            $('input[name="choice_no[]"]').each(function(i, choice_no) {
                if($(attribute).val() == $(choice_no).val()){
                    flag = true;
                }
            });
            if(!flag){
                add_more_customer_choice_option($(attribute).val(), $(attribute).text());
            }
        });

        var str = @php echo $product->attributes @endphp;

        $.each(str, function(index, value){
            flag = false;
            $.each($("#choice_attributes option:selected"), function(j, attribute){
                if(value == $(attribute).val()){
                    flag = true;
                }
            });
            if(!flag){
                $('input[name="choice_no[]"][value="'+value+'"]').parent().parent().remove();
            }
        });

        update_sku();
    });


</script>
@endsection
