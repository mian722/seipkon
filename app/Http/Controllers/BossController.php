<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BossController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('boss');
    }
    
	public function index(){
    	return view('boss.home');
	}
}
