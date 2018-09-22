<?php

namespace App\Http\Controllers;

use App\templates;
use Illuminate\Http\Request;
use Auth;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affiliatesignup = Templates::find(3);
        return view('admin.email-templates',compact('affiliatetempalte', 'affiliatetempalte2', 'affiliatetempalte3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function affiliatestore(Request $request)
    {
        $templates = new Templates;
        $templates->email_subject = $request->email_subject;
        $templates->emailstring = $request->emailstring;
        $templates->email_type = $request->email_type;
        $templates->status = 1;
        $templates->admin_id = Auth::user()->id;
        $templates->save();
        
        if (empty($templates) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function show(templates $templates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function edit(templates $templates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, templates $templates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(templates $templates)
    {
        //
    }
}
