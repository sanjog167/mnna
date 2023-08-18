<?php

namespace App\Http\Controllers;

use App\Models\DynamicMail;
use Illuminate\Http\Request;

class DynamicMailController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mails = DynamicMail::all();
        return view('backend.mail.index',compact('mails')); 
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.mail.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = new DynamicMail;
        $mail->email = $request->email;
        $mail->save();

        flash(translate('Mail has been created successfully'))->success();
        return redirect()->route('mail.index');
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

        public function mailedit($id)
    {
        //
        $mail = DynamicMail::findOrFail($id);
        return view('backend.mail.edit',compact('mail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function mailupdatestore(Request $request, $id) 
    {
        //
        $mail = DynamicMail::findOrFail($id);
       
        $mail->email = $request->email;
        $mail->update();
        flash(translate('Mail has been updated successfully'))->success();
        return redirect()->route('mail.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DynamicMail::find($id)->delete();
        
        return redirect('admin/mail');
    }

}
