<?php

namespace App\Http\Controllers;
// use Request;
use Illuminate\Http\Request;
use App\Offer;
use App\Parameters;
use Illuminate\Support\Facades\Redirect;
use Location;
use DB;
use Hash;
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
        $browser = $this->ExactBrowserName();
        $OS = $this->getOS();
        $device = $this->detectDevice();
        $advertiser = Offer::select('adv_id')->where('id', $oid)->first();
        $clicks = new Clicks;
        $IP = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_REFERER'])) {
            $clicks->reffer_link = $_SERVER['HTTP_REFERER'];   
        }else{
            $clicks->reffer_link = 'direct';
        }
        $clicks->affiliate_id = $aid;
        $clicks->offer_id = $oid;
         $clicks->adv_id = $advertiser->adv_id;
        $clicks->click = 1;
        $clicks->ip = $IP;
        $clicks->device = $device;
        $clicks->browser = $browser;
        $clicks->os = $OS;
        $clicks->country = 'usa';
        $clicks->proxy = 'not proxy';
        $code = Clicks::orderBy('id', 'desc')->where('click', 1)->first();
        //return $request->all();
        if(empty($code) || $code->id == 0){
            $subid = 1;
        } else { 
            $subid = $code->id + 1;
        }
        $subid = substr(bcrypt($subid), 0, 20);
        $clicks->sub_id = $subid;
        //return $clicks;
        $offerdetail = Offer::with('restrictions')->where('id', $oid)->first();
        $result = null;
        if ($offerdetail->restrictions != null) {
            $result =  $this->checkadvertisercap($offerdetail, $aid);
            if ($result === 'true') {
                $clicks->admin_id =  $offerdetail->admin_id;
                $link = str_replace("{click_id}",$subid,$offerdetail->destination_url);
            } else {
                $clicks->redirect_click =  1;
                $clicks->offer_id =  $result[0]['id'];
                $clicks->admin_id =  $result[0]['admin_id'];
                $link = str_replace("{click_id}",$subid,$result[0]['link']);
            }
        }
        if($clicks->save())
        { 
            $parameters = new Parameters;
            $parameters->sub_id = $subid;
            if (isset($request->aff_sub1) && is_numeric($request->aff_sub1)) {
                $parameters->aff_sub1 = $request->aff_sub1;
            }
            if (isset($request->aff_sub2) && is_numeric($request->aff_sub2)) {
                $parameters->aff_sub2 = $request->aff_sub2;
            }
            if (isset($request->aff_sub3) && is_numeric($request->aff_sub3)) {
                $parameters->aff_sub3 = $request->aff_sub3;
            }
            if (isset($request->aff_sub4) && is_numeric($request->aff_sub4)) {
                $parameters->aff_sub4 = $request->aff_sub4;
            }
            if (isset($request->aff_sub5) && is_numeric($request->aff_sub5)) {
                $parameters->aff_sub5 = $request->aff_sub5;
            }
            $dublicateclick = Clicks::where('ip', $IP)->where('offer_id', $oid)->where('affiliate_id', $aid)->first();
            if (!empty($dublicateclick)) {
                $parameters->unique_click = 0;
            }
            parse_str($link, $output);
            if (strpos($link, 'adv_sub1=') !== false) {
                $parameters->adv_sub1 = $output['adv_sub1'];
            }
            if (strpos($link, 'adv_sub2=') !== false) {
                $parameters->adv_sub2 = $output['adv_sub2'];
            }
            if (strpos($link, 'adv_sub3=') !== false) {
                $parameters->adv_sub3 = $output['adv_sub3'];
            }
            $parameters->save();
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
