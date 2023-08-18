@extends('backend.layouts.app')

@section('content')




          

<form method="POST" action="{{route('aboutus.update',$about->id)}}" enctype="multipart/form-data"> {{csrf_field()}}



<div class="card">
<div class="card-header">
	<h4 class="mb-3">Website Basic Information</h4></div>

<div class="card-body"> 


                      <h4 class="mb-3">Vote Now Enable</h4>

<label class="aiz-switch aiz-switch-success mb-0">
                              <input type="checkbox" value="1" name="sponsor"  @if ($about->statustwo == 1) checked @endif>
                              <span></span>  
                          </label> 
                          
                                                <h4 class="mb-3">Sponsor Menu Enable</h4>

<label class="aiz-switch aiz-switch-success mb-0">
                              <input type="checkbox" value="1" name="sponsortwo"  @if ($about->sponsortwo == 1) checked @endif>
                              <span></span>  
                          </label> 
                          



  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->phone_number}}" name="phone_number" id="inputEmail3" placeholder="Phone Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
   <textarea class="aiz-text-editor form-control" class="form-control" name="address" id="inputPassword3" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.." data-min-height="150"> {{$about->address}} </textarea> 
    </div>
  </div>


  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->email}}" name="email" id="inputEmail3" placeholder="Email">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Opening Hours</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->open_hours}}" name="open_hours" id="inputEmail3" placeholder="Opening Hours">
    </div>
  </div>
  
  
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Map</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->customone}}" name="open_hours" id="inputEmail3" placeholder="Map">
    </div>
  </div>
  
  
    
     <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Short Info</label>
    <div class="col-sm-10">

              <textarea class="aiz-text-editor form-control" class="form-control" name="customtwo" id="inputPassword3" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.."> {{$about->customtwo}} </textarea> 

    </div>
  </div>
</div>
</div>
<div class="card">
    <div class="card-header">
    	<h4 class="mb-3">PopUp</h4></div>


    <div class="card-body">
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Popup Status</label>
            <div class="col-sm-10">
              <label class="aiz-switch aiz-switch-success mb-0">
                              <input type="checkbox" value="1" name="popupstatus"  @if ($about->popupstatus == 1) checked @endif>
                              <span></span>  
                          </label> 
            </div>
        </div>
        
                          

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Popup Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$about->popuptitle}}" name="popuptitle" id="inputPassword3" placeholder="Popup Title">
            </div>
        </div>
      <div class="form-group row">
            <label for="popupimage" class="col-sm-2 col-form-label">Popup Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->popupimage}}" name="popupimage" id="popupimage" placeholder="Popup Image" style="margin-bottom:1em;">
               @if(empty($about->popupimage))
                    <p>No image selected</p>
                @else
                    <img src="{{asset('public/images/product/'.$about->popupimage)}}" alt="" style="width:200px;height:200px;object-fit:cover">
                @endif
            </div>
    
           
        </div>
        <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Popup Description</label>
        <div class="col-sm-10">
            <textarea class="aiz-text-editor form-control" class="form-control" name="popuptext" id="inputPassword3" placeholder="Type.."> {{$about->popuptext}} </textarea> 
        </div>
      </div>

    </div>
</div>

<div class="card">
<div class="card-header">
	<h4 class="mb-3">Social Media Profiles</h4></div>


<div class="card-body">
<div class="form-group socialmedia">
                     
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="lab la-facebook-f"></i></span>
                            </div>
                            <input type="hidden" name="types[]" value="facebook">
                            <input type="text" class="form-control" placeholder="http://" name="facebook" value="{{$about->facebook}}">
                        </div>
                  
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="lab la-instagram"></i></span>
                            </div>
                            <input type="hidden" name="types[]" value="instagram">
                            <input type="text" class="form-control" placeholder="http://" name="instagram" value="{{$about->instagram}}">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="lab la-youtube"></i></span>
                            </div>
                            <input type="hidden" name="types[]" value="youtube">
                            <input type="text" class="form-control" placeholder="http://" name="youtube" value="{{$about->youtube}}">
                        </div>

                             <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  
                                  <img src="https://seeklogo.com/images/T/tiktok-app-icon-logo-0F5AD7AE01-seeklogo.com.png" alt="daraz" style="width:20px;">
                                  
                                </span>
                            </div>
                            <input type="hidden" name="types[]" value="youtube">
                            <input type="text" class="form-control" placeholder="http://" name="tiktok" value="{{$about->tiktok}}">
                        </div>

                    
                  
                    </div>
                </div>
            </div>



<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Main Header Logo</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="mainheaderlogo" class="col-sm-2 col-form-label">Main Header Logo Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->mainheaderlogo}}" name="mainheaderlogo" id="mainheaderlogo" placeholder="Main Header Logo">
              @if(empty($about->mainheaderlogo))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about['mainheaderlogo'])}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
            
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Banner Video</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="mainheaderlogo" class="col-sm-2 col-form-label">Banner Video</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->bannervideo}}" name="bannervideo" id="bannervideo" placeholder="Banner Video">
              @if(empty($about->bannervideo))
        <p>No selected</p>
    @else
        <video width="320" height="240" controls>
  <source src="{{asset('public/images/product/'.$about['bannervideo'])}}" type="video/mp4">
</video>
    @endif
            </div>
    
            
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Sticky Header Logo</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="stickyheaderlogo" class="col-sm-2 col-form-label">Sticky Header Logo Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->stickyheaderlogo}}" name="stickyheaderlogo" id="stickyheaderlogo" placeholder="Sticky Header Logo">
              @if(empty($about->stickyheaderlogo))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about['stickyheaderlogo'])}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
            
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Footer Logo</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="footerlogo" class="col-sm-2 col-form-label">Footer Logo Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->footerlogo}}" name="footerlogo" id="footerlogo" placeholder="Footer Logo">
              @if(empty($about->footerlogo))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about['footerlogo'])}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
            
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Our team page</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="teambannerimage" class="col-sm-2 col-form-label">Our Team Banner Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->teambannerimage}}" name="teambannerimage" id="teambannerimage" placeholder="About Banner Image">
              @if(empty($about->teambannerimage))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about['teambannerimage'])}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
            
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Archive page</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="archivebannerimage" class="col-sm-2 col-form-label">Archive Banner Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->archivebannerimage}}" name="archivebannerimage" id="archivebannerimage" placeholder="Archive Banner Image" style="margin-bottom:1em;">
               @if(empty($about->archivebannerimage))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about->archivebannerimage)}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
           
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Contact page</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="contactbannerimage" class="col-sm-2 col-form-label">Contact Banner Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->contactbannerimage}}" name="contactbannerimage" id="contactbannerimage" placeholder="Contact Banner Image" style="margin-bottom:1em;">
               @if(empty($about->contactbannerimage))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about->contactbannerimage)}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
           
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Sponsor page</h4>
    </div>
    <div class="card-body">
        
        
        
        <div class="form-group row">
            <label for="contactbannerimage" class="col-sm-2 col-form-label">Sponsor Banner Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->sponsorbannerimage}}" name="sponsorbannerimage" id="sponsorbannerimage" placeholder="Sponsor Banner Image" style="margin-bottom:1em;">
               @if(empty($about->sponsorbannerimage))
        <p>No image selected</p>
    @else
        <img src="{{asset('public/images/product/'.$about->sponsorbannerimage)}}" alt="" style="width:200px;height:200px;object-fit:cover">
    @endif
            </div>
    
           
        </div>
        <div class="form-group row">
            <label for="inputsponsordescription" class="col-sm-2 col-form-label">Sponsor Description</label>
            <div class="col-sm-10">
                <textarea class="aiz-text-editor form-control" class="form-control" name="sponsordescription" id="inputsponsordescription" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.."> {{$about->sponsordescription}} </textarea> 
            </div>
          </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4 class="mb-3">Media page</h4>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <label for="contactbannerimage" class="col-sm-2 col-form-label">Media Banner Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->mediacoveragebannerimage}}" name="mediacoveragebannerimage" id="mediacoveragebannerimage" placeholder="Media Banner Image" style="margin-bottom:1em;">
                @if(empty($about->mediacoveragebannerimage))
                    <p>No image selected</p>
                @else       
                    <img src="{{asset('public/images/product/'.$about->mediacoveragebannerimage)}}" alt="" style="width:200px;height:200px;object-fit:cover">
                @endif
            </div>
    
           
        </div>
    </div>
</div>



<div class="card">
<div class="card-header">
	<h4 class="mb-3">About Us</h4></div>


<div class="card-body">
    
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">About Banner Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" value="{{$about->abannerimage}}" name="abannerimage" id="inputPassword3" placeholder="About Banner Image">
               <img src="{{asset('public/images/product/'.$about['abannerimage'])}}" alt="" style="width:200px;height:200px;object-fit:cover">
            </div>
    
           

    
    
    
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Company Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" value="{{$about->companyimage}}" name="companyimage" id="inputPassword3" placeholder="Company Image">
      <img src="{{asset('public/images/product/'.$about['companyimage'])}}" alt="" style="width:200px;height:200px;object-fit:cover">
    </div>
    
        

    
    
    
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">About Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->missiontitle}}" name="missiontitle" id="inputPassword3" placeholder="About Title">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">About Description</label>
    <div class="col-sm-10">
        <textarea class="aiz-text-editor form-control" class="form-control" name="missiondescription" id="inputPassword3" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.."> {{$about->missiondescription}} </textarea> 
    </div>
  </div>
      <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Vision</label>
    <div class="col-sm-10">
        <textarea class="aiz-text-editor form-control" class="form-control" name="whyus" id="inputPassword3" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.."> {{$about->whyus}} </textarea> 
    </div>
  </div>
</div>
</div>

<div class="card">
<div class="card-header">
	<h4 class="mb-3">Privilege Section</h4></div>


<div class="card-body">
    
     <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->title}}" name="title" id="inputPassword3" placeholder=" Title">
    </div>
  </div>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Description</label>
    <div class="col-sm-10">
        <textarea class="aiz-text-editor form-control" class="form-control" name="description" id="inputPassword3" data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]' placeholder="Type.."> {{$about->description}} </textarea> 
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Image 1</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" value="{{$about->gimage}}" name="gimage" id="inputPassword3" placeholder=" Image">
              <img src="{{asset('public/images/product/'.$about['gimage'])}}" alt="" style="width:200px;height:200px;object-fit:cover">

    </div>
  </div>
  
      <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Image 2</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" value="{{$about->ad1}}" name="ad1" id="inputPassword3" placeholder=" Image">
              <img src="{{asset('public/images/product/'.$about['ad1'])}}" alt="" style="width:200px;height:200px;object-fit:cover">

    </div>
  </div>
  
       <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Image 3</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" value="{{$about->ad2}}" name="ad2" id="inputPassword3" placeholder=" Image">
              <img src="{{asset('public/images/product/'.$about['ad2'])}}" alt="" style="width:200px;height:200px;object-fit:cover">

    </div>
  </div>
  
   
      <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Image 4</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" value="{{$about->ad3}}" name="ad3" id="inputPassword3" placeholder=" Image">
              <img src="{{asset('public/images/product/'.$about['ad3'])}}" alt="" style="width:200px;height:200px;object-fit:cover">

    </div>
  </div>
  
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Image 5</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" value="{{$about->o1image}}" name="o1image" id="inputPassword3" placeholder=" Image1">
              <img src="{{asset('public/images/product/'.$about['o1image'])}}" alt="" style="width:200px;height:200px;object-fit:cover">

    </div>
  </div>

   

</div>
</div>





<div class="card">
<div class="card-header">
	<h4 class="mb-3">Form Information</h4></div>


<div class="card-body">
    
         <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Form Main Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->mtitle}}" name="mtitle" id="inputPassword3" placeholder="Form Main Title">
    </div>
  </div>


  
     <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Form Application Charge</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{$about->poplink}}" name="poplink" id="inputPassword3" placeholder="Form Application Charge">
    </div>
  </div>

</div>
</div>


<div class="card">
<div class="card-header">
	<h4 class="mb-3">Voting Settings</h4></div>


<div class="card-body">
        
         <div class="form-group row">
            <label for="inputvotinglink" class="col-sm-2 col-form-label">Voting Link</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$about->votinglink}}" name="votinglink" id="inputvotinglink" placeholder="Voting link">
            </div>
          </div>


</div>
</div>



  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>


@endsection