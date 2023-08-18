<?php

namespace App\Http\Controllers;

use App\Models\Homebanner;
use Illuminate\Http\Request;

class HomebannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $banners = Homebanner::all();
        return view('backend.banner.index',compact('banners')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.banner.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Homebanner;
        $banner->thumbnail_img = $request->thumbnail_img;
        $banner->banner_link = $request->banner_link;
          $banner->level = $request->level;
        $banner->save();

        flash(translate('Homebanner post has been created successfully'))->success();
        return redirect()->route('banner.index');
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

        public function banneredit($id)
    {
        //
        $banner = Homebanner::findOrFail($id);
        return view('backend.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function bannerupdatestore(Request $request, $id) 
    {
        //
        $banner = Homebanner::findOrFail($id);
       
        $banner->thumbnail_img = $request->thumbnail_img;
        $banner->banner_link = $request->banner_link;
          $banner->level = $request->level;
        $banner->update();
        flash(translate('Banner has been updated successfully'))->success();
        return redirect()->route('banner.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Homebanner::find($id)->delete();
        
        return redirect('admin/banner');
    }

}
