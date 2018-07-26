<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisers = User::Where('roles_id',5)->get();
        return view('admin.advertisers', compact('advertisers'));
    }
}
