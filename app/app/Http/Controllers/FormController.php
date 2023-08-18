<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Mail\FormManager;
use Mail;



class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

        public function all_forms(Request $request)
    {
        $date = $request->date;
        $sort_search = null;
        $delivery_status = null;

        $forms = Form::orderBy('id', 'desc');
   
        $forms = $forms->paginate(15);
        return view('backend.forms.index', compact('forms', 'sort_search', 'delivery_status', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $form = new Form;
            $form->radioone = $request->radioone;
            $form->whynominate = $request->whynominate;
            $form->name = $request->name;
            $form->surname = $request->surname;
            $form->birth = $request->birth;
            $form->dob = $request->dob; 
            $form->passport = $request->passport;
            $form->doi = $request->doi;
            $form->poi = $request->poi;
            $form->marital = $request->marital;
            $form->spouse = $request->spouse;

            $form->father = $request->father;
            $form->mother = $request->mother;
            $form->homeadd = $request->homeadd;
            $form->ihouse = $request->ihouse;
            $form->istreet = $request->istreet;
            $form->icity = $request->icity;
 

            $form->idistrict = $request->idistrict;
            $form->iprovince = $request->iprovince;
            $form->icountry = $request->icountry;

            $form->sincedate = $request->sincedate;

            $form->mobile = $request->mobile;
            $form->alternate = $request->alternate;
            $form->email = $request->email;
            $form->prof = $request->prof;
            $form->cname = $request->cname;

            $form->designation = $request->designation;
            $form->compname = $request->compname;
            $form->landmark = $request->landmark;
            $form->street = $request->street;
            $form->city = $request->city;
            $form->district = $request->district;
            $form->province = $request->province;

            $form->country = $request->country;
            $form->workingsince = $request->workingsince;
            $form->mainname = $request->mainname;
            $form->chooseposition = $request->chooseposition;
            $form->empposition = $request->empposition;
            $form->estsalary = $request->estsalary;
            $form->turnover = $request->turnover;
            $form->lastprofit = $request->lastprofit;
            $form->lasttaxpaid = $request->lasttaxpaid;

    $form->previousorg = $request->previousorg;
            $form->designationthere = $request->designationthere;
          $form->previousorg1 = $request->previousorg1;
            $form->designationthere1 = $request->designationthere1;
                $form->previousorg2 = $request->previousorg2;
            $form->designationthere2 = $request->designationthere2;
                $form->previousorg3 = $request->previousorg3;
            $form->designationthere3 = $request->designationthere3;

                $form->addcname = $request->addcname;
            $form->addnature = $request->addnature;
          $form->addinv = $request->addinv;
            $form->addaddress = $request->addaddress;
                $form->adddesign = $request->adddesign;

                                $form->addcname1 = $request->addcname1;
            $form->addnature1 = $request->addnature1;
          $form->addinv1 = $request->addinv1;
            $form->addaddress1 = $request->addaddress1;
                $form->adddesign1 = $request->adddesign1;

                                $form->addcname2 = $request->addcname2;
            $form->addnature2 = $request->addnature2;
          $form->addinv2 = $request->addinv2;
            $form->addaddress2 = $request->addaddress2;
                    $form->adddesign2 = $request->adddesign2;
          

                                $form->addcname3 = $request->addcname3;
            $form->addnature3 = $request->addnature3;
          $form->addinv3 = $request->addinv3;
            $form->addaddress3 = $request->addaddress3;
                $form->adddesign3 = $request->adddesign3;

                               $form->awardname = $request->awardname;
            $form->titlewon = $request->titlewon;
          $form->awarddate = $request->awarddate;
            $form->offername = $request->offername;
                $form->offerdate = $request->offerdate;

                               $form->awardname1 = $request->awardname1;
            $form->titlewon1 = $request->titlewon1;
          $form->awarddate1 = $request->awarddate1;
            $form->offername1 = $request->offername1;
                $form->offerdate1 = $request->offerdate1;

                               $form->awardname2 = $request->awardname2;
            $form->titlewon2 = $request->titlewon2;
          $form->awarddate2 = $request->awarddate2;
            $form->offername2 = $request->offername2;
                $form->offerdate2 = $request->offerdate2;

                               $form->awardname3 = $request->awardname3;
            $form->titlewon3 = $request->titlewon3;
          $form->awarddate3 = $request->awarddate3;
            $form->offername3 = $request->offername3;
                $form->offerdate3 = $request->offerdate3;


                               $form->traveldate = $request->traveldate;
            $form->travelcountry = $request->travelcountry;
          $form->travelreason = $request->travelreason;
            $form->travelcompanion = $request->travelcompanion;

                                   $form->traveldate1 = $request->traveldate1;
            $form->travelcountry1 = $request->travelcountry1;
          $form->travelreason1 = $request->travelreason1;
            $form->travelcompanion1 = $request->travelcompanion1;
             

                                    $form->traveldate2 = $request->traveldate2;
            $form->travelcountry2 = $request->travelcountry2;
          $form->travelreason2 = $request->travelreason2;
            $form->travelcompanion2 = $request->travelcompanion2;
             

                                    $form->traveldate3 = $request->traveldate3;
            $form->travelcountry3 = $request->travelcountry3;
          $form->travelreason3 = $request->travelreason3;
            $form->travelcompanion3 = $request->travelcompanion3;


                                    $form->orgname = $request->orgname;
            $form->orgnature = $request->orgnature;
          $form->orgrole = $request->orgrole;
            $form->orgdate = $request->orgdate;


                                    $form->orgname1 = $request->orgname1;
            $form->orgnature1 = $request->orgnature1;
          $form->orgrole1 = $request->orgrole1;
            $form->orgdate1 = $request->orgdate1;


                                    $form->orgname2 = $request->orgname2;
            $form->orgnature2 = $request->orgnature2;
          $form->orgrole2 = $request->orgrole2;
            $form->orgdate2 = $request->orgdate2;


                                    $form->orgname3 = $request->orgname3;
            $form->orgnature3 = $request->orgnature3;
          $form->orgrole3 = $request->orgrole3;
            $form->orgdate3 = $request->orgdate3;

                                     $form->nameaward = $request->nameaward;
            $form->dateaward = $request->dateaward;
          $form->reasonaward = $request->reasonaward;


                                     $form->nameaward1 = $request->nameaward1;
            $form->dateaward1 = $request->dateaward1;
          $form->reasonaward1 = $request->reasonaward1;


                                     $form->nameaward2 = $request->nameaward2;
            $form->dateaward2 = $request->dateaward2;
          $form->reasonaward2 = $request->reasonaward2;


                                     $form->nameaward3 = $request->nameaward3;
            $form->dateaward3 = $request->dateaward3;
          $form->reasonaward3 = $request->reasonaward3;
             


             
             


         
          
           

            $form->save();

 return redirect()->back()->with('tiktoksuccess',' Your form submitted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */ 
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form 
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        Form::find($id)->delete();
        
 return redirect()->back()->with('tiktoksuccess',' Your form submitted successfully');
    }
}
