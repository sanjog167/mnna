<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$teams = Team::orderByRaw('CAST(level AS UNSIGNED)')->get();
        return view('backend.team.index',compact('teams')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.team.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team;
        $team->thumbnail_img = $request->thumbnail_img;
        $team->banner_link = $request->banner_link;
        $team->position = $request->position;
        $team->level = $request->level;
        $team->save();

        flash(translate('Team has been created successfully'))->success();
        return redirect()->route('team.index');
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

        public function teamedit($id)
    {
        //
        $team = Team::findOrFail($id);
        return view('backend.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function teamupdatestore(Request $request, $id) 
    {
        //
        $team = Team::findOrFail($id);
       
        $team->thumbnail_img = $request->thumbnail_img;
        $team->banner_link = $request->banner_link;
        $team->position = $request->position;
        $team->level = $request->level;
        $team->update();
        flash(translate('Team has been updated successfully'))->success();
        return redirect()->route('team.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::find($id)->delete();
        
        return redirect('admin/team');
    }

}
