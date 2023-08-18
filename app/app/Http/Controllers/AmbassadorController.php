<?php

namespace App\Http\Controllers;

use App\Models\Ambassador;
use Illuminate\Http\Request;

class AmbassadorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $ambassadors = Ambassador::orderByRaw('CAST(level AS UNSIGNED)')->get();
        return view('backend.ambassador.index',compact('ambassadors')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.ambassador.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambassador = new ambassador;
        $ambassador->thumbnail_img = $request->thumbnail_img;
        $ambassador->banner_link = $request->banner_link;
        $ambassador->level = $request->level;
        $ambassador->position = $request->position;
        $ambassador->save();

        flash(translate('Ambassador has been created successfully'))->success();
        return redirect()->route('ambassador.index');
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

        public function ambassadoredit($id)
    {
        //
        $ambassador = Ambassador::findOrFail($id);
        return view('backend.ambassador.edit',compact('ambassador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function ambassadorupdatestore(Request $request, $id) 
    {
        //
        $ambassador = ambassador::findOrFail($id);
       
        $ambassador->thumbnail_img = $request->thumbnail_img;
        $ambassador->banner_link = $request->banner_link;
        $ambassador->level = $request->level;
        $ambassador->position = $request->position;
        $ambassador->update();
        flash(translate('Ambassador has been updated successfully'))->success();
        return redirect()->route('ambassador.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ambassador::find($id)->delete();
        
        return redirect('admin/ambassador');
    }

}
