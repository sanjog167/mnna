@extends('frontend.layouts.user_panel')

<style type="text/css">
    .navbar{
        position: initial !important;
        background: #303441;
    }
</style>

@section('panel_content')

 @if(Auth::user()->seller->verification_status == 1)
<div class="aiz-titlebar mt-2 mb-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Add Your Product') }}</h1>
        </div>
    </div>
</div>

<form class="" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" id="choice_form"> 
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
                                placeholder="{{ translate('Product Name') }}" onchange="update_sku()" required>
                        </div>
                    </div>
                    <div class="form-group row" id="category">
                        <label class="col-md-3 col-from-label">{{translate('Category')}}</label>
                        <div class="col-md-8">
                            <select class="form-control aiz-selectpicker" name="category_id" id="category_id"
                                data-live-search="true" required>
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
                                    <input type="radio" name="stock_visibility_state" value="sale" checked>
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-from-label">{{translate('Rent')}}</label>
                            <div class="col-md-6">
                                <label class="aiz-switch aiz-switch-success mb-0">
                                    <input type="radio" name="stock_visibility_state" value="rent">
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
                                    <option value="institutional">{{translate('Institutional')}}</option>
                                    <option value="individual">{{translate('Individual')}}</option>
                                  
                                </select>
        
            

                    </div>
                </div>

                   <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Property Variation ( Address, Area & Road and more )')}}</h5>
                </div>
                <div class="card-body">
    

                    <div class="form-group row d-none">
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
                        <p class="d-none">{{ translate('Choose the attributes of this product and then input values of each attribute') }}
                        </p>
                        <br>
                    </div>

                    <div class="customer_choice_options" id="customer_choice_options">

                    </div>
                </div>

                                <div class="card-body propertyfields d-flex flex-column">

                    <input type="text" placeholder="Exact Address"  name="address" class="address">
                    <input type="text" placeholder="House No./Landmark" name="landmark" class="landmark">
                    <input type="text" placeholder="total area" name="total_area" class="total_area">
                    <input type="text" placeholder="built up area" name="built_area" class="built_area">
                    <input type="text" placeholder="road access" name="road_access" class="road_access">
                    <input type="text" placeholder="Kitchen" name="kitchen" class="kitchen">
                    <input type="text" placeholder="Dining Room" name="dining_room" class="dining_room">
                    <input type="text" placeholder="Bed room" name="bedroom" class="bedroom">
                    <input type="text" placeholder="bathroom" name="bathroom" class="bathroom">
                    <input type="text" placeholder="Hall" name="hall" class="hall">
                    <input type="text" placeholder="Total Floors" name="total_floors" class="total_floors"> 
                    <input type="text" placeholder="Parking" name="parking" class="parking"> 

                </div>

                   <label class="pl-4">Amenities</label>
                         <div class="card-body amenities_create"> 



                       <div class="aiz-radio-inline">
                                <label class="aiz-megabox pl-0 mr-2">
                                  <input
                                    class="coupon_question"
                                    type="checkbox"
                                    name="am1" checked
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
                                    name="am2"
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
                                    type="checkbox"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                                    class="coupon_question"
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
                        <label class="col-md-3 col-form-label"
                            for="signinSrEmail">{{translate('Gallery Images')}}</label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="photos" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Thumbnail Image')}}
                            <small>(290x300)</small></label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="thumbnail_img" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
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
                            <input type="text" class="form-control" name="maps" 
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
                            <input type="text" lang="en" min="0" value="0" step="0.01"
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
                            <textarea class="aiz-text-editor" name="description"></textarea>
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
                        <label class="col-md-3 col-from-label">{{translate('Meta Title')}}</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="meta_title"
                                placeholder="{{ translate('Meta Title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">{{translate('Description')}}</label>
                        <div class="col-md-8">
                            <textarea name="meta_description" rows="8" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{ translate('Meta Image') }}</label>
                        <div class="col-md-8">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse')}}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="meta_img" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
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

@else

<h5>Not Verified Yet</h5>

@endif

@endsection

@section('script')

<script>  
$(document).ready(function(){
    $('#category_id').bind('change', function() {
      if ( this.value == '1')
      {
        $(".landmark").show();
          $(".built_area").show();
           $(".address").show();
          $(".road_access").show();
               $(".kitchen").show();
          $(".dining_room").show();
               $(".bedroom").show();
          $(".bathroom").show();
               $(".hall").show();
          $(".total_floors").show();
      }
    });
});
</script>

<script>  
$(document).ready(function(){
    $('#category_id').on('change', function() {
      if ( this.value == '2')
      {
        $(".landmark").hide();
          $(".built_area").hide();
               $(".address").show();
          
               $(".kitchen").hide();
          $(".dining_room").hide();
               $(".bedroom").hide();
          $(".bathroom").hide();
               $(".hall").hide();
          $(".total_floors").hide();
      }
    });
});
</script>

<script>  
$(document).ready(function(){
    $('#category_id').on('change', function() {
      if ( this.value == '3')
      {
        $(".landmark").show();
          $(".built_area").show();
            $(".address").show();
          
               $(".kitchen").show();
          $(".dining_room").show();
               $(".bedroom").show();
          $(".bathroom").show();
               $(".hall").show();
          $(".total_floors").show();
      }
    });
});
</script>



<script>  
$(document).ready(function(){
    $('#category_id').on('change', function() {
      if ( this.value == '4')
      {
       $(".landmark").hide();
          $(".built_area").hide();
               $(".address").show();
          
               $(".kitchen").hide();
          $(".dining_room").hide();
               $(".bedroom").hide();
          $(".bathroom").hide();
               $(".hall").hide();
          $(".total_floors").hide();
      }
    });
});
</script>

<script>  
$(document).ready(function(){
    $('#category_id').on('change', function() {
      if ( this.value == '5')
      {
        $(".landmark").show();
          $(".built_area").show();
            $(".address").show();
          
               $(".kitchen").show();
          $(".dining_room").show();
               $(".bedroom").show();
          $(".bathroom").show();
               $(".hall").show();
          $(".total_floors").show();
      }
    });
});
</script>

<script type="text/javascript">
    
        function oload(){

            add_more_customer_choice_option(4, 'Location');
            add_more_customer_choice_option(5, 'Property Types');
            add_more_customer_choice_option(6, 'Road Types');
           
          
        }
</script>










<script type="text/javascript">
    $("[name=shipping_type]").on("change", function (){
            $(".product_wise_shipping_div").hide();
            $(".flat_rate_shipping_div").hide();
            if($(this).val() == 'product_wise'){
                $(".product_wise_shipping_div").show();
            }
            if($(this).val() == 'flat_rate'){
                $(".flat_rate_shipping_div").show();
            }

        });

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
                            <select class="form-control aiz-selectpicker attribute_choice" data-live-search="true" name="choice_options_'+ i +'[]">\
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

        $('input[name="unit_price"]').on('keyup', function() {
            update_sku();
        });

        $('input[name="name"]').on('keyup', function() {
            update_sku();
        });

        function delete_row(em){
            $(em).closest('.form-group row').remove();
            update_sku();
        }

        function delete_variant(em){
            $(em).closest('.variant').remove();
        }

        function update_sku(){
            $.ajax({
               type:"POST",
               url:'{{ route('products.sku_combination') }}',
               data:$('#choice_form').serialize(),
               success: function(data){
                   $('#sku_combination').html(data);
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

        $('#choice_attributes').on('change', function() {
            $('#customer_choice_options').html(null);
            $.each($("#choice_attributes option:selected"), function(){
                add_more_customer_choice_option($(this).val(), $(this).text());
            });
            update_sku();
        });

</script>
@endsection
