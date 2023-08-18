<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediacoverageCategory;
use App\Models\Mediacoverage;

class MediacoverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $mediacoverages = Mediacoverage::orderBy('created_at', 'desc');
        
        if ($request->search != null){
            $mediacoverages = $mediacoverages->where('title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        $mediacoverages = $mediacoverages->paginate(15);

        return view('backend.mediacoverage_system.mediacoverage.index', compact('mediacoverages','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mediacoverage_categories = MediacoverageCategory::all();
        return view('backend.mediacoverage_system.mediacoverage.create', compact('mediacoverage_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $mediacoverage = new Mediacoverage;
        
        $mediacoverage->category_id = $request->category_id;
        $mediacoverage->title = $request->title;
         $mediacoverage->level = $request->level;
        $mediacoverage->banner = $request->banner;
        $mediacoverage->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $mediacoverage->short_description = $request->short_description;
        $mediacoverage->description = $request->description;
        
        $mediacoverage->meta_title = $request->meta_title;
        $mediacoverage->meta_img = $request->meta_img;
        $mediacoverage->meta_description = $request->meta_description;
        $mediacoverage->meta_keywords = $request->meta_keywords;
        
        $mediacoverage->save();

        flash(translate('Mediacoverage post has been created successfully'))->success();
        return redirect()->route('mediacoverage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mediacoverage = Mediacoverage::find($id);
        $mediacoverage_categories = MediacoverageCategory::all();
        
        return view('backend.mediacoverage_system.mediacoverage.edit', compact('mediacoverage','mediacoverage_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
        ]);

        $mediacoverage = Mediacoverage::find($id);

        $mediacoverage->category_id = $request->category_id;
         $mediacoverage->level = $request->level;
        $mediacoverage->title = $request->title;
        $mediacoverage->banner = $request->banner;
        $mediacoverage->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $mediacoverage->short_description = $request->short_description;
        $mediacoverage->description = $request->description;
        
        $mediacoverage->meta_title = $request->meta_title;
        $mediacoverage->meta_img = $request->meta_img;
        $mediacoverage->meta_description = $request->meta_description;
        $mediacoverage->meta_keywords = $request->meta_keywords;
        
        $mediacoverage->save();

        flash(translate('Mediacoverage post has been updated successfully'))->success();
        return redirect()->route('mediacoverage.index');
    }
    
    public function change_status(Request $request) {
        $mediacoverage = Mediacoverage::find($request->id);
        $mediacoverage->status = $request->status;
        
        $mediacoverage->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mediacoverage::find($id)->delete();
        
        return redirect('admin/mediacoverage');
    }


    public function all_mediacoverage() {
    $mediacoverages = Mediacoverage::where('status', 1)->orderBy('created_at', 'desc')->get();
    return view("frontend.mediacoverage.listing", compact('mediacoverages'));
}
    
    public function mediacoverage_details($slug) {
        $mediacoverage = Mediacoverage::where('slug', $slug)->first();
        $rmediacoverages = Mediacoverage::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view("frontend.mediacoverage.details", compact('mediacoverage','rmediacoverages'));
    }
}
