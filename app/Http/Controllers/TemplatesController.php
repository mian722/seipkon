<?php

namespace App\Http\Controllers;

use App\Templates;
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
        $affsignup = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'affsignup')->first();
        $affapproval = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'affapproval')->first();
        $affrejection = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'affrejection')->first();
        $affpassreset = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'affpassreset')->first();
        $advsignup = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'advsignup')->first();
        $advapproval = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'advapproval')->first();
        $advrejection = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'advrejection')->first();
        $advpassreset = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'advpassreset')->first();
        $offerapproval = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'offerapproval')->first();
        $offerpayout = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'offerpayout')->first();
        $offerstatus = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'offerstatus')->first();
        return view('admin.email-templates',compact('affsignup', 'affapproval', 'affrejection', 'affpassreset', 'advsignup', 'advapproval', 'advrejection', 'advpassreset', 'offerapproval', 'offerpayout', 'offerstatus'));
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
    public function affiliateupdate(Request $request, templates $templates)
    {
        $update = Templates::where('id', $request->tem_id)
            ->update(['email_subject' => $request->email_subject, 'emailstring' => $request->emailstring]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
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
