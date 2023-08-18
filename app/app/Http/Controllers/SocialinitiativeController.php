<?php

namespace App\Http\Controllers;

use App\Models\Socialinitiative;
use Illuminate\Http\Request;

class SocialinitiativeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $socialinitiatives = Socialinitiative::all();
        return view('backend.socialinitiative.index',compact('socialinitiatives')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.socialinitiative.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $socialinitiative = new Socialinitiative;
        $socialinitiative->title = $request->title;
        $socialinitiative->description = $request->description;
        $socialinitiative->images = $request->images;
        $socialinitiative->save();

        flash(translate('Socialinitiative has been created successfully'))->success();
        return redirect()->route('socialinitiative.index');
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

        public function socialinitiativeedit($id)
    {
        //
        $socialinitiative = Socialinitiative::findOrFail($id);
        return view('backend.socialinitiative.edit',compact('socialinitiative'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function socialinitiativeupdatestore(Request $request, $id) 
    {
        //
        $socialinitiative = Socialinitiative::findOrFail($id);
       
        $socialinitiative->title = $request->title;
        $socialinitiative->description = $request->description;
        $socialinitiative->images = $request->images;
        $socialinitiative->update();
        flash(translate('Socialinitiative has been updated successfully'))->success();
        return redirect()->route('socialinitiative.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Socialinitiative::find($id)->delete();
        
        return redirect('admin/socialinitiative');
    }

}
