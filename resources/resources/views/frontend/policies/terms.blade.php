@extends('frontend.layouts.app')
<style type="text/css">
    .navbar{
        position: initial !important;
        background: #303441;
    }
</style>
@section('content')
@php
    $terms =  \App\Models\Page::where('type', 'terms_conditions_page')->first();
@endphp
<section class="pt-4 mb-4">
    <div class="container text-center">
        <h1 class="fw-600 h4">{{ $terms->getTranslation('title') }}</h1>
        <div class="bread-crumb justify-content-center">
                                <a href="Home">Home</a>
                                <i class="fas fa-angle-right"></i>
                                <p>About Us</p>
        </div>
    </div>
</section>
<section class="mb-4 terms-content">
    <div class="container">
        <div class=" bg-white overflow-hidden mw-100 text-left">
            <div class="terms-title">
                Terms and Conditions    
            </div>
            <div class="terms-text">
                This website bhada.com , including any subdomains thereof, and any other websites through which its services are made available, our mobile, tablet and other smart device 
                applications, and application program interfaces etc, , (hereinafter collectively referred to as "bhada") is owned, hosted and operated by 
                These terms and conditions, privacy policy and community guidelines regulating use of these Services constitute a legally binding agreement between Bhada and the User (the “Agreement”).
            </div>
            <div class="terms-title">
                DEFINITIONS   
            </div>
            <div class="terms-text">
                The term Subscriber would include any person, whether an individual or a legal entity who has subscribed to the Services of 99acres (whether on a paid or free basis), and to whom the access to 99acres is restricted by the use of a sign in user name and a password. The user name and password are either allotted by 99acres or chosen by the Subscriber or agreed upon by 99acres. It is made abundantly clear that only the authorized User has the right to access the Services so offered by 99acres.

The term Browser/Visitor will mean and include a person who utilizes any of the Services offered by 99acres, without the need or a requirement to create an account i.e. visits non-restricted portions of 99acres.

The use and access to 99acres shall be subject to these terms and conditions and community guidelines. For the purposes of this Agreement, any person who does not have a legal or a contractual right to access the Services, but does so, will fall within the definition of an 'unauthorized user' and will nevertheless be subject to the terms and conditions regulating the usage of 99acres, and expressly so with respect to respecting the intellectual property rights of the IEIL, and abiding by terms and conditions below mentioned.
            </div>
            <div class="terms-title">
                SUBMISSION AND ADMINISTRATION OF LISTINGS/ADVERTISEMENTS   
            </div>
            <div class="terms-text">
                User agrees not to submit any property descriptions, photographs, financial, contact or other information contained in each property's data to 99acres unless the User submitting such a Listing/Advertisement has acquired and received all necessary rights and authorizations from the owner of such property or the power-of-attorney holder, including from the photographer and/or copyright owner of any photographs, to publish and advertise the said Property(s) on the User's website or on 99acres. Similarly, 99acres does not take any ownership, directly or indirectly towards any person whatsoever, with respect to banners hosted on its website by its customers, which are strictly in the nature of sale of space by 99acre & it has not carried out any independent verification on the authenticity or compliance requirements, as may have been required under any law for the time being in force, of such images/ banners/ listings.Some listings may contain third party video content (“Video Content”) provided for general informational purposes only and such content does not constitute a recommendation or solicitation or intends to influence any type of purchase or decision. No guarantees are made by 99acres or the providers of the video content as to its accuracy or completeness. In case a User is covered under the RERDA, it shall obtain all requisite approvals, licenses and permits issued by the competent authorities with respect to the Project/Land/Apartment/Plot in the listing, by following the due process of law. Further, the User shall, at all times, remain in compliance with all applicable Laws in relation to the Project/Land/Apartment/Plot in the listing. The User shall disclose all material information as required by LMA and in respect of their registrations under RERDA and all such property(s) submitted including the present status and nature of such property and shall also disclose whether the property is free from all encumbrances or not. The User shall disclose all material factual information as regarding the property being advertised, its correct dimensions as also in respect of their registrations under RERDA and all such property(s) submitted including the present status and nature of such property and shall also disclose whether the property is free from all encumbrances or not. The User in addition shall furnish a brief background of such property in respect of title, ownership and possession, IEIL may also require the User to support his/her claims with respect to the status of the property with such documents as may be specified by it from time to time. The User may further be required to substantiate his claims as to the nature and status of the property by swearing an affidavit stating the authenticity of the information/data so provided/displayed. IEIL may, at its sole discretion but without any obligation to, search for such and remove properties that are alleged to have been submitted in violation of this provision. In addition, IEIL may require additional evidence of compliance with this provision from Users who are alleged to have submitted properties or other information/data in violation of these terms and conditions. IEIL will, in its sole discretion, terminate the accounts of, and refuse Service to, any User who repeatedly or intentionally violates these terms and conditions. Additionally, the User agrees to allow the Property listing, or any part of it, to be searched, displayed, accessed, downloaded, copied, and otherwise referred to by users of the User's website or the 99acres website. IEIL shall have the sole authority to choose the manner in which any Property will be searchable, displayed, accessed, downloaded, copied, and otherwise used on 99acres and IEIL shall have the right to modify the property listing in the exercise of its rights under these terms and conditions. In addition to the terms aforementioned the User agrees
            </div>
        </div>
    </div>
</section>
@endsection
