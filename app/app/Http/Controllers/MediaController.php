<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
          $medias = Media::all();
          $medias->each(function($media) {
            $media->embed_url = $media->getEmbedUrlAttribute();
        });
            return view('backend.media.index',compact('medias')); 
        }
      

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.media.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new Media;
        $media->banner_link = $request->banner_link;
        $media->level = $request->level;
        $media->save();

        flash(translate('Media has been created successfully'))->success();
        return redirect()->route('media.index');
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

        public function mediaedit($id)
    {
        //
        $media = Media::findOrFail($id);
        return view('backend.media.edit',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function mediaupdatestore(Request $request, $id) 
    {
        //
        $media = Media::findOrFail($id);
       
        $media->banner_link = $request->banner_link;
        $media->level = $request->level;
        $media->update();
        flash(translate('Media has been updated successfully'))->success();
        return redirect()->route('media.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Media::find($id)->delete();
        
        return redirect('admin/media');
    }

}
