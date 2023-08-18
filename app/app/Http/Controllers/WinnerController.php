<?php

namespace App\Http\Controllers;

use App\Models\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $winners = Winner::all();
        return view('backend.winner.index',compact('winners')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.winner.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $winner = new Winner;
        $winner->thumbnail_img = $request->thumbnail_img;
        $winner->banner_link = $request->banner_link;
        $winner->level = $request->level;
        $winner->year = $request->year;
        $winner->save();

        flash(translate('Winner has been created successfully'))->success();
        return redirect()->route('winner.index');
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

        public function winneredit($id)
    {
        //
        $winner = Winner::findOrFail($id);
        return view('backend.winner.edit',compact('winner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function winnerupdatestore(Request $request, $id) 
    {
        //
        $winner = Winner::findOrFail($id);
       
        $winner->thumbnail_img = $request->thumbnail_img;
        $winner->banner_link = $request->banner_link;
        $winner->level = $request->level;
        $winner->year = $request->year;
        $winner->update();
        flash(translate('Winner has been updated successfully'))->success();
        return redirect()->route('winner.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Winner::find($id)->delete();
        
        return redirect('admin/winner');
    }

}
