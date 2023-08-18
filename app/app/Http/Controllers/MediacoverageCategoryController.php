<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediacoverageCategory; 

class MediacoverageCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $categories = MediacoverageCategory::orderBy('category_name', 'asc');

        if ($request->has('search')){
            $sort_search = $request->search;
            $categories = $categories->where('category_name', 'like', '%'.$sort_search.'%');
        }
        
        $categories = $categories->paginate(15);
        return view('backend.mediacoverage_system.category.index', compact('categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_categories = MediacoverageCategory::all();
        return view('backend.mediacoverage_system.category.create', compact('all_categories'));
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
            'category_name' => 'required|max:255',
        ]);
        
        $category = new MediacoverageCategory;
        
        $category->category_name = $request->category_name;
        $category->level = $request->level;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->category_name));
        
        $category->save();
        
        
        flash(translate('Sponsor category has been created successfully'))->success();
        return redirect()->route('mediacoverage-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cateogry = MediacoverageCategory::find($id);
        $all_categories = MediacoverageCategory::all();
        
        return view('backend.mediacoverage_system.category.edit',  compact('cateogry','all_categories'));
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
            'category_name' => 'required|max:255',
        ]);

        $category = MediacoverageCategory::find($id);

        $category->category_name = $request->category_name;
        $category->level = $request->level;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->category_name));
        
        $category->save();
        
        
        flash(translate('Mediacoverage category has been updated successfully'))->success();
        return redirect()->route('mediacoverage-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MediacoverageCategory::find($id)->delete();
        
        return redirect('admin/mediacoverage-category');
    }
}
