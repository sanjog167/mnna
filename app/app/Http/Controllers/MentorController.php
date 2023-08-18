<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mentors = Mentor::all();
        return view('backend.mentor.index',compact('mentors')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.mentor.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mentor = new Mentor;
        $mentor->thumbnail_img = $request->thumbnail_img;
        $mentor->banner_link = $request->banner_link;
        $mentor->subtitle = $request->subtitle;
        $mentor->level = $request->level;
        $mentor->designation = $request->designation;
        $mentor->description = $request->description;
        $mentor->save();

        flash(translate('Mentor has been created successfully'))->success();
        return redirect()->route('mentor.index');
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

        public function mentoredit($id)
    {
        //
        $mentor = Mentor::findOrFail($id);
        return view('backend.mentor.edit',compact('mentor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function mentorupdatestore(Request $request, $id) 
    {
        //
        $mentor = Mentor::findOrFail($id);
       
        $mentor->thumbnail_img = $request->thumbnail_img;
        $mentor->banner_link = $request->banner_link;
        $mentor->subtitle = $request->subtitle;
        $mentor->level = $request->level;
        $mentor->designation = $request->designation;
        $mentor->description = $request->description;
        $mentor->update();
        flash(translate('Mentor has been updated successfully'))->success();
        return redirect()->route('mentor.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mentor::find($id)->delete();
        
        return redirect('admin/mentor');
    }

}
