<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use Illuminate\Http\Request;

class AppearanceController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Appearance::all();
        return view('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('backend.about.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file('companyimage');
        $file = new Appearance();
        $imageName = 'product' . time() . ('.' . $image->getClientOriginalExtension());
        $image->move(public_path('images/product'), $imageName);
        $file->create([
            'companyimage' => $imageName,
            'companytitle' => $request['companytitle'],
            'phone_number' => $request['phone_number'],
            'address' => $request['address'],
            'companydescription' => $request['companydescription'],
            'missiontitle' => $request['missiontitle'],
            'missiondescription' => $request['missiondescription'],
            'popuptitle' => $request['popuptitle'],
            'popuptext' => $request['popuptext'],

        ]);

         return redirect()->route('aboutus.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function aboutedit($id)
    {   
        $about = Appearance::find($id);
         return view('backend.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function aboutupdate(Request $request, $id)
    {
      
        $image = $request->file('companyimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['companyimage'];
        if($image){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageName = 'product' . time() . ('.' . $image->getClientOriginalExtension());
        $image->move(public_path('images/product'), $imageName);
        }else{
            $imageName = $file['companyimage'];

        }

             $imagetwo = $request->file('popimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['popimage'];
        if($imagetwo){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameTwo = 'producttwo' . time() . ('.' . $imagetwo->getClientOriginalExtension());
        $imagetwo->move(public_path('images/product'), $imageNameTwo);
        }else{
            $imageNameTwo = $file['popimage'];

        }
        
                     $bannervideo = $request->file('bannervideo');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['bannervideo'];
        if($bannervideo){
            if(isset($file['icon'])){
                unlink($path);
            }
             $videoNameTwo = 'videotwo' . time() . ('.' . $bannervideo->getClientOriginalExtension());
        $bannervideo->move(public_path('images/product'), $videoNameTwo);
        }else{
            $videoNameTwo = $file['bannervideo'];

        }

                $imagethree = $request->file('gimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['gimage'];
        if($imagethree){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameThree = 'productthree' . time() . ('.' . $imagethree->getClientOriginalExtension());
        $imagethree->move(public_path('images/product'), $imageNameThree);
        }else{
            $imageNameThree = $file['gimage'];

        }


                $imagefour = $request->file('o1image');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['o1image'];
        if($imagefour){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameFour = 'productfour' . time() . ('.' . $imagefour->getClientOriginalExtension());
        $imagefour->move(public_path('images/product'), $imageNameFour);
        }else{
            $imageNameFour = $file['o1image'];

        }


                $imagefive = $request->file('o2image');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['o2image'];
        if($imagefive){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameFive = 'productfive' . time() . ('.' . $imagefive->getClientOriginalExtension());
        $imagefive->move(public_path('images/product'), $imageNameFive);
        }else{
            $imageNameFive = $file['o2image'];

        }

                  $imagesix = $request->file('o3image');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['o3image'];
        if($imagesix){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameSix = 'productsix' . time() . ('.' . $imagesix->getClientOriginalExtension());
        $imagesix->move(public_path('images/product'), $imageNameSix);
        }else{
            $imageNameSix = $file['o3image'];

        }

                  $imageseven = $request->file('o4image');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['o4image'];
        if($imageseven){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameSeven = 'productseven' . time() . ('.' . $imageseven->getClientOriginalExtension());
        $imageseven->move(public_path('images/product'), $imageNameSeven);
        }else{
            $imageNameSeven = $file['o4image'];

        }


                  $imageeight = $request->file('o5image');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['o5image'];
        if($imageeight){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameEight = 'productseven' . time() . ('.' . $imageeight->getClientOriginalExtension());
        $imageeight->move(public_path('images/product'), $imageNameEight);
        }else{
            $imageNameEight = $file['o5image'];

        }
        
                   $imagenine = $request->file('ad1');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['ad1'];
        if($imagenine){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameNine = 'producteight' . time() . ('.' . $imagenine->getClientOriginalExtension());
        $imagenine->move(public_path('images/product'), $imageNameNine);
        }else{
            $imageNameNine = $file['ad1'];

        }
        
                        $imageten = $request->file('ad2');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['ad2'];
        if($imageten){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameTen = 'productnine' . time() . ('.' . $imageten->getClientOriginalExtension());
        $imageten->move(public_path('images/product'), $imageNameTen);
        }else{
            $imageNameTen = $file['ad2'];

        }
        
                            $imageeleven = $request->file('ad3');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['ad3'];
        if($imageeleven){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameEleven = 'productten' . time() . ('.' . $imageeleven->getClientOriginalExtension());
        $imageeleven->move(public_path('images/product'), $imageNameEleven);
        }else{
            $imageNameEleven = $file['ad3'];

        }
        
        //about banner image
        
        $imagetwelve = $request->file('abannerimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['abannerimage'];
        if($imagetwelve){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameTwelve = 'productten' . time() . ('.' . $imagetwelve->getClientOriginalExtension());
        $imagetwelve->move(public_path('images/product'), $imageNameTwelve);
        }else{
            $imageNameTwelve = $file['abannerimage'];

        }
       
       //team banner image
       
       $imagethirteen = $request->file('teambannerimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['teambannerimage'];
        if($imagethirteen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameThirteen = 'productten' . time() . ('.' . $imagethirteen->getClientOriginalExtension());
        $imagethirteen->move(public_path('images/product'), $imageNameThirteen);
        }else{
            $imageNameThirteen = $file['teambannerimage'];

        }
       
       //Archive banner image
       $imagefourteen = $request->file('archivebannerimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['archivebannerimage'];
        if($imagefourteen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameFourteen = 'productten' . time() . ('.' . $imagefourteen->getClientOriginalExtension());
        $imagefourteen->move(public_path('images/product'), $imageNameFourteen);
        }else{
            $imageNameFourteen = $file['archivebannerimage'];

        }
       
       //Contact banner image
       $imagefifteen = $request->file('contactbannerimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['contactbannerimage'];
        if($imagefifteen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameFifteen = 'productten' . time() . ('.' . $imagefifteen->getClientOriginalExtension());
        $imagefifteen->move(public_path('images/product'), $imageNameFifteen);
        }else{
            $imageNameFifteen = $file['contactbannerimage'];

        }
        
        //Sponsor banner image
       $imagesixteen = $request->file('sponsorbannerimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['sponsorbannerimage'];
        if($imagesixteen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameSixteen = 'productten' . time() . ('.' . $imagesixteen->getClientOriginalExtension());
        $imagesixteen->move(public_path('images/product'), $imageNameSixteen);
        }else{
            $imageNameSixteen = $file['sponsorbannerimage'];

        }
        
        
         //Media banner image
       $imageseventeen = $request->file('mediacoveragebannerimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['mediacoveragebannerimage'];
        if($imageseventeen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameSeventeen = 'productten' . time() . ('.' . $imageseventeen->getClientOriginalExtension());
        $imageseventeen->move(public_path('images/product'), $imageNameSeventeen);
        }else{
            $imageNameSeventeen = $file['mediacoveragebannerimage'];

        }
        
      
       //Main Logo Image
       $imageeighteen = $request->file('mainheaderlogo');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['mainheaderlogo'];
        if($imageeighteen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameEighteen = 'productten' . time() . ('.' . $imageeighteen->getClientOriginalExtension());
        $imageeighteen->move(public_path('images/product'), $imageNameEighteen);
        }else{
            $imageNameEighteen = $file['mainheaderlogo'];

        }
        
        //Footer Logo
       $imagenineteen = $request->file('footerlogo');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['footerlogo'];
        if($imagenineteen){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameNineteen = 'productten' . time() . ('.' . $imagenineteen->getClientOriginalExtension());
        $imagenineteen->move(public_path('images/product'), $imageNameNineteen);
        }else{
            $imageNameNineteen = $file['footerlogo'];

        }
   
       $imagetwenty = $request->file('popupimage');
        $file = Appearance::find($id);

        $path = public_path() . '/images/product' .$file['popupimage'];
        if($imagetwenty){
            if(isset($file['icon'])){
                unlink($path);
            }
             $imageNameTwenty = 'productten' . time() . ('.' . $imagetwenty->getClientOriginalExtension());
        $imagetwenty->move(public_path('images/product'), $imageNameTwenty);
        }else{
            $imageNameTwenty = $file['popupimage'];

        }
       
       
       
        $file->update([
            'companyimage' => $imageName,
            'popimage' => $imageNameTwo,
            'bannervideo' => $videoNameTwo,
             'gimage' => $imageNameThree,
             
             'statustwo' => $request['sponsor'],
             'sponsortwo' => $request['sponsortwo'],
             'popupstatus' => $request['popupstatus'],

 'o1image' => $imageNameFour,
  'o2image' => $imageNameFive,
   'o3image' => $imageNameSix,
    'o4image' => $imageNameSeven,
     'o5image' => $imageNameEight,
     
       'ad1' => $imageNameNine,
    'ad2' => $imageNameTen,
     'ad3' => $imageNameEleven,
     
     'abannerimage' => $imageNameTwelve,
     'teambannerimage' => $imageNameThirteen,
     'archivebannerimage' => $imageNameFourteen,
     'contactbannerimage' => $imageNameFifteen,
     'sponsorbannerimage' => $imageNameSixteen,
     'mediacoveragebannerimage' => $imageNameSeventeen,
     
     'mainheaderlogo' => $imageNameEighteen,
     'footerlogo' => $imageNameNineteen,
     'popupimage' => $imageNameTwenty,

            'companytitle' => $request['companytitle'],
              'phone_number' => $request['phone_number'],
              
               'ad1link' => $request['ad1link'],
                'ad2link' => $request['ad2link'],
                 'ad3link' => $request['ad3link'],
              
              'email' => $request['email'],
               'open_hours' => $request['open_hours'],
                'facebook' => $request['facebook'],
                 'instagram' => $request['instagram'],
                  'youtube' => $request['youtube'],
                   'tiktok' => $request['tiktok'],
                    'daraj' => $request['daraj'],
            'address' => $request['address'],
            'companydescription' => $request['companydescription'],
            'missiontitle' => $request['missiontitle'],
            'missiondescription' => $request['missiondescription'],
            'popuptitle' => $request['popuptitle'],
            'popuptext' => $request['popuptext'],
            'whyus' => $request['whyus'],
            'title' => $request['title'],
            'description' => $request['description'],
            
            'poplink' => $request['poplink'],
            
            'mtitle' => $request['mtitle'],
            'sponsordescription' => $request['sponsordescription'],

            
            
            'votinglink' => $request['votinglink'],
           
            
            'customone' => $request['customone'],
            'customtwo' => $request['customtwo'], 
            'customthree' => $request['customthree'],
            'customfour' => $request['customfour'],
            

            'title1' => $request['title1'],
            'offer1' => $request['offer1'],



            'title2' => $request['title2'],
            'offer2' => $request['offer2'],
          

            'title3' => $request['title3'],
            'offer3' => $request['offer3'],
       

            'title4' => $request['title4'],
            'offer4' => $request['offer4'],
           

            'title5' => $request['title5'],
            'offer5' => $request['offer5'],
         

        
          

        ]);

         return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
