<?php

namespace App\Http\Controllers;
// use Request;
use Illuminate\Http\Request;
use App\Offer;
use Illuminate\Support\Facades\Redirect;
use Location;
use DB;
use App\Clicks;

class ClicksController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tracking(Request $request, $aid, $oid)
    {
        //return $request->s1;
        $browser = $this->ExactBrowserName();
        $OS = $this->getOS();
        $device = $this->detectDevice();
        $IP = $_SERVER['REMOTE_ADDR'];
        $reffer = $_SERVER['REMOTE_ADDR'];
        $clicks = new Clicks;
        $clicks->affiliate_id = $aid;
        $clicks->offer_id = $oid;
        $clicks->click = 1;
        if($reffer == null){
            $clicks->reffer_link = 'direct';
        } else {
           $clicks->reffer_link = $reffer;
        }
        $clicks->ip = $IP;
        $clicks->device = $device;
        $clicks->browser = $browser;
        $clicks->os = $OS;
        $clicks->country = 'usa';
        $clicks->proxy = 'not proxy';
        $code = Clicks::orderBy('id', 'desc')->where('click', 1)->first();
        //return $request->all();
        if(empty($code)){
            $subid = 1;
        } else { 
            if ($code->sub_id != 0) {
                $subid = $code->sub_id+1;
            }else if ($code->sub_id2 != 0) {
                $subid = $code->sub_id2+1;
            }else if ($code->sub_id3 != 0) {
                $subid = $code->sub_id3+1;
            }else if ($code->sub_id4 != 0) {
                $subid = $code->sub_id4+1;
            }
        }
        if (isset($request->s2)) {
            $clicks->sub_id2 = $subid;
        }else if (isset($request->s3)) {
            $clicks->sub_id3 = $subid;
        }else if (isset($request->s4)) {
            $clicks->sub_id4 = $subid;
        }else {
            $clicks->sub_id = $subid;
        }
        return $clicks;
        $offerdetail = Offer::with('restrictions')->where('id', $oid)->first();
        if ($offerdetail->restrictions != null) {
            $result =  $this->checkadvertisercap($offerdetail, $aid);
            if ($result === 'true') {
                $clicks->admin_id =  $offerdetail->admin_id;
                $link = $offerdetail->destination_url.$subid;
            } else {
                $clicks->redirect_click =  1;
                $clicks->offer_id =  $result[0]['id'];
                $clicks->admin_id =  $result[0]['admin_id'];
                $link = $result[0]['link'].$subid;
            }
        }
        if($clicks->save())
        {  
            return Redirect::away($link);
        }



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

    public function matchstring(){

    }
}
