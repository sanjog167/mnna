<?php

namespace App\Http\Controllers;

use App\Models\PastEvent;
use Illuminate\Http\Request;

class PastEventController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
 
      
        public function index()
        {
          $pastevents = PastEvent::all();
    
            return view('backend.pevent.index',compact('pastevents')); 
        }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pevent.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pevent = new PastEvent;
        $pevent->banner_link = $request->banner_link;
        $pevent->position = $request->position;
        $pevent->level = $request->level;
        $pevent->save();

        flash(translate(' Event has been created successfully'))->success();
        return redirect()->route('pastevent.index');
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

        public function pasteventedit($id)
    {
        //
        $pevent = PastEvent::findOrFail($id);
        return view('backend.pevent.edit',compact('pevent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function pasteventupdatestore(Request $request, $id) 
    {
        //
        $pevent = PastEvent::findOrFail($id);
       
        $pevent->banner_link = $request->banner_link;
        $pevent->position = $request->position;
        $pevent->level = $request->level;
        $pevent->update();
        flash(translate('Event has been updated successfully'))->success();
        return redirect()->route('pastevent.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PastEvent::find($id)->delete();
        
        return redirect('admin/pastevent');
    }

}
