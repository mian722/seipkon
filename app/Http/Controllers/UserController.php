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

    public function createaffilate(Request $request)
    {
        //return $request->all();
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
        $affilate->securitycode = ($request->security == 'yes') ? $request->scode : "" ;
        $affilate->status = $request->status;
        $affilate->roles_id = '5';
        $affilate->admin_id = Auth::user()->id;
        //return $offer;
        $affilate->save();
        
        if (empty($affilate) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }        
    }
    
    public function accountslist()
    {
        $accounts = User::where('roles_id',3)->where('admin_id', Auth::user()->id)->get();
        return view('admin.accounts', compact('accounts'));        
    }
    public function createaccount()
    {
        $countries = $this->getcountry();
        $managers = $this->getuser(3);
        return view('admin.accounts-create',compact('countries','managers'));
    }
    public function storeaccount(Request $request)
    {
        $affilate = new User;
        $affilate->fname = $request->fname;
        $affilate->lname = $request->lname;
        $affilate->email = $request->email;
        $affilate->contactno = $request->mobile;
        $affilate->imid = $request->imid;
        $affilate->imaccount = $request->imaccount;
        $affilate->country = $request->country;
        $affilate->website = $request->website;
        $affilate->company = $request->company;
        $affilate->managerid = $request->manager;
        $affilate->password = bcrypt($request->password);
        $affilate->status = 1;
        $affilate->roles_id = '3';
        $affilate->admin_id = Auth::user()->id;
        //return $affilate;
        $affilate->save();
        
        if (empty($affilate) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }        
    }

    public function accountedit($id){
        $countries = $this->getcountry();
        $managers = $this->getuser(3);
        $account = User::where('id', $id)->first();
        return view('admin.accounts-create', compact('account','countries','managers'));
    }

    public function accountupdate(Request $request, $id){
        $update = User::where('id', $id)
            ->update(['fname' => $request->fname, 'lname' => $request->lname, 'email' => $request->email, 'contactno' => $request->contactno, 'imid' => $request->imid, 'country' => $request->country, 'website' => $request->website, 'company' => $request->company, 'managerid' => $request->managerid, 'password' => bcrypt($request->password)]);
        
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        } 
    }

    public function accountdelete($id){

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
