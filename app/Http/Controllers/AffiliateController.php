<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affilates = User::Where('roles_id',4)->get();

        return view('affiliates',compact('affilates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->getcountry();
        $managers = $this->getmanagers();
        return view('affiliate-create',compact('countries','managers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $affilates = User::Where('roles_id',4)->Where('id',$id)->first();
        $managers = User::Where('id',$affilates->admin_id)->first();
        $payouts = Offer::Where('id',$affilates->admin_id)->first();
        return view('affiliate-detail-page',compact('affilates','managers'));
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
