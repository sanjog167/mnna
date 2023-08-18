@extends('frontend.layouts.app')




@section('content')

@if($abouts->statustwo == 0 || $abouts->statustwo == 1)
<div class="voting-closed-banner rs-banner rs-banner-style2 mb-overlay">
    <img class="rs-html5-video" style="height:100%;" autoplay="" muted="" playsinline="" loop=""
        src="{{ static_asset('assets/images/vote.jpg')}}">
    <div class="container">
        <div class="content-wrap text-center">
            <div class="voting-closed">
                <div class="banner-border-line"></div>
            <h1 class="title">Application Form has been closed for Miss Nepal North America.</h1>
            </div>

        </div>
    </div>
</div>



@else

<div class="rs-banner rs-banner-style2 mb-overlay">
    <img class="rs-html5-video" style="height:100%;" autoplay="" muted="" playsinline="" loop=""
        src="{{ static_asset('assets/images/vote.jpg')}}">
    <div class="container">
        <div class="content-wrap text-center">
            <div class="banner-border-line"></div>
            <h1 class="title">APPLY NOW</h1>

        </div>
    </div>
</div>
<!-- Banner Section End -->

<div class="container">
      <div class="applicant-application">
          <h4 class="rt-strong rt-mb-20">Miss Nepal North America 2023 </h4>
        <h6>Application Form</h6>
           <form method="POST" action="{{route('paymentv2.start')}}" enctype="multipart/form-data" >
   @csrf
   <div class="form-row mt-4">
      <div class="col-md-6 rt-mb-30"> 
         <input type="hidden" name="amount" value="100"> 
         <label for="InputName1">
         First Name</label>
         <input id="InputName1" type="text" class="form-control"  name="nameone"
            placeholder="Enter Your First Name" required>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="InputName2">Last Name</label>
         <input id="InputName2" type="text" class="form-control"  placeholder="Enter Your Last Name "
            name="nametwo" required>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="InputAge">Age</label>
         <input id="InputAge" name="applicantage" type="number" class="form-control" i
            placeholder="Enter your Age " required>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="InputHeight">Height</label>
         <input id="InputHeight" name="height" type="name" class="form-control" 
            placeholder="Enter your Height " required>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="SelectGender">Gender</label>
         <select id-"SelectGender" name="gender" required>
            <option value="Female" selected>Female</option>
            <option value="Transgender">Transgender</option>
         </select>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="SelectCountry">Country</label>
         <select id="SelectCountry" name="country" required >
            <option value="Select" disabled selected>Select your country</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Barbados">Barbados</option>
            <option value="Belize">Belize</option>
            <option value="Canada">Canada</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cuba">Cuba</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="El Salvador ">El Salvador </option>
            <option value="Grenada">Grenada</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Haiti">Haiti</option>
            <option value="Honduras">Honduras</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Mexico">Mexico</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Panama">Panama</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
            </option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="United States">United States</option>
         </select>
      </div>
      <div class="col-md-4 rt-mb-30">
         <label for="InputState">State</label>
         <input id="InputState" type="text" class="form-control" placeholder="Enter Your state Name " name="state" required
            >
      </div>
      <div class="col-md-4 rt-mb-30">
         <label for="city-name">City</label>
         <input name="cityname" type="text" class="form-control" id="city-name"
            placeholder="Enter your city " required>
      </div>
      <div class="col-md-4 rt-mb-30">
         <label for="education-qualification">Education</label>
         <input name="education" type="text" class="form-control" id="education-qualification"
            placeholder="Enter your Education/Qualification " required>
      </div>
      <div class="col-md-12 rt-mb-30">
         <label for="InputDescribe">Describe About You</label>
         <textarea id="InputDescribe" class="form-control" name="describe" rows="4"
            placeholder="Describe about yourself" required></textarea>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="lst-name">Contact</label>
         <input type="number" class="form-control" id="lst-name" name="mnumber"
            placeholder="Enter your Contact Number " required>
      </div>
      <div class="col-md-6 rt-mb-30">
         <label for="InputEmail">Email</label>
         <input class="form-control" type="email" name="fname" id-"InputEmail" required>
      </div>
      <div class="col-md-6 rt-mb-30">
         <div class="upload-input">
             <label for="InputImage1">Upload your Close up photo</label>
         <input id="InputImage1" type="file" name="imageone" required>
         </div>
      </div>
      <div class="col-md-6 rt-mb-30">
         <div class="upload-input">
             <label for="InputImage2">Upload your Full size photo</label>
         <input id="InputImage2" type="file" name="imagetwo" required>
         </div>
      </div>
          <div class="col-md-12 rt-mb-30">
         <label for="SelectWay">Best Way to contact</label>
         <select id="SelectWay" name="bestway" required >
            <option value="Select" disabled selected>Select Best Way to contact</option>
            <option value="phone">Phone Call</option>
            <option value="email">Email</option>
           
         </select>
      </div>
      <div class="col-md-6 rt-mb-30">
         <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" required>
         <label class="form-check-label" for="defaultCheck4" style="margin-left:20px;">I agree to all the Tems and Conditions</label>
      </div>
      <div class="col-md-6 rt-mb-30">
         <button type="submit" id="applySubmitBtn" value="Submit">Submit & Pay $100</div>

      </div>
      </form>
   </div>
   </div>





<div class="container mt-50">


    <div class="applicant-terms">
        <h4>Application Terms and Conditions</h4>
        <ul>
            <li>Age should be between 18 and 29 years.</li>
            <li>The applicant should be single/never married currently living in North America.</li>
            <li>Must have previous leadership experience (school, college, community) and/or have a strong passion to
                develop leadership qualities</li>
            <li>Must have the willpower to grow with, adapt to, and find balanced solutions to various challenges.</li>
            <li>The minimum academic qualification should be 10+2 or equivalent.</li>
            <li>The minimum height must be 5 ft 1 inch (154 cm).</li>
            <li>Applicants should possess sound health, and have a good moral character.</li>

        </ul>
    </div>
</div>


@endif






@endsection