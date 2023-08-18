<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $advisors = Advisor::all();
        return view('backend.advisor.index',compact('advisors')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.advisor.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advisor = new Advisor;
        $advisor->thumbnail_img = $request->thumbnail_img;
        $advisor->level = $request->level;
        $advisor->banner_link = $request->banner_link;
        $advisor->position = $request->position;
        $advisor->save();

        flash(translate('Advisor has been created successfully'))->success();
        return redirect()->route('advisor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Homebanner $homebanner) 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Homebanner $homebanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homebanner $homebanner)
    {
        //
    }

        public function advisoredit($id)
    {
        //
        $advisor = Advisor::findOrFail($id);
        return view('backend.advisor.edit',compact('advisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function advisorupdatestore(Request $request, $id) 
    {
        //
        $advisor = Advisor::findOrFail($id);
       
        $advisor->thumbnail_img = $request->thumbnail_img;
        $advisor->banner_link = $request->banner_link;
        $advisor->level = $request->level;
        $advisor->position = $request->position;
        $advisor->update();
        flash(translate('Advisor has been updated successfully'))->success();
        return redirect()->route('advisor.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advisor::find($id)->delete();
        
        return redirect('admin/advisor');
    }

}
