<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }
    public function getaffiliate()
    {
        $countries = $this->getcountry();
        $managers = $this->getmanagers();
        return view('affiliate-create',compact('countries','managers'));
    }
    public function getadvertiser()
    {
        $countries = $this->getcountry();
        $managers = $this->getmanagers();
        return view('advertisers-create',compact('countries','managers'));
    }
    public function createaffilate(Request $request)
    {
        $affilate = new User;
        $affilate->fname = $request->fname;
        $affilate->lname = $request->lname;
        $affilate->email = $request->email;
        $affilate->contactno = $request->mobile;
        $affilate->imid = $request->imtype;
        $affilate->imaccount = $request->imaccount;
        $affilate->country = $request->country;
        $affilate->website = $request->website;
        $affilate->company = $request->company;
        $affilate->managerid = $request->manager;
        $affilate->password = bcrypt($request->password);
        $affilate->tire = $request->tire;
        $affilate->roles_id = '4';
        $affilate->admin_id = Auth::user()->id;
        //return $offer;
        $affilate->save();
        
        if (empty($affilate) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }
    public function createadvertiser(Request $request)
    {
        //return $request->all();
        $advertiser = new User;
        $advertiser->fname = $request->fname;
        $advertiser->lname = $request->lname;
        $advertiser->email = $request->email;
        $advertiser->contactno = $request->mobile;
        $advertiser->imid = $request->imtype;
        $advertiser->imaccount = $request->imaccount;
        $advertiser->country = $request->country;
        $advertiser->website = $request->website;
        $advertiser->company = $request->company;
        $advertiser->managerid = $request->manager;
        $advertiser->password = bcrypt($request->password);
        $advertiser->securitycode = ($request->security == 'yes') ? $request->scode : "" ;
        $advertiser->status = $request->status;
        $advertiser->roles_id = '3';
        $advertiser->admin_id = Auth::user()->id;
        //return $offer;
        $advertiser->save();
        
        if (empty($advertiser) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
