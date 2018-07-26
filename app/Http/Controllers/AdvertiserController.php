<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisers = User::Where('roles_id', 4)->get();
        return view('admin.advertisers', compact('advertisers'));
    }

    public function pendingadvertisers()
    {
        $advertisers = User::Where('roles_id',4)->Where('status',0)->get();
        return view('admin.advertisers-pending',compact('advertisers'));
    }
    public function aproveadvertiser($id)
    {
        $update = DB::table('users')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}
