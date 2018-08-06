<?php

namespace App\Http\Controllers;
use Request;
//use Illuminate\Http\Request;
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
    public function tracking($aid, $oid)
    {
        $browser = $this->ExactBrowserName();
        $OS = $this->getOS();
        $device = $this->detectDevice();
        $IP = Request::server('REMOTE_ADDR');
        $reffer = Request::server('HTTP_REFERER');
        $code = Clicks::orderBy('id', 'desc')->where('click', 1)->first();
        if(empty($code)){
            $subid = 1;
        } else { 
            $subid = $code->sub_id+1;
        }
        $clicks = new Clicks;
        $clicks->affiliate_id = $aid;
        $clicks->offer_id = $oid;
        $clicks->sub_id = $subid;
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
        //return $clicks;
        $offerdetail = Offer::with('restrictions')->where('id', $oid)->first();
        if ($offerdetail->restrictions != null) {
            return $link =  $this->checkadvertisercap($offerdetail, $aid);
        }
        // switch ($offerdetail->restrictions->affiliate_caps_type) {
        //     case 'Total':

        //         break;
        //     case 'Daily':

        //         break;
        //     case 'Revenue':

        //         break;
        //     default:
        //         break;
        // }
        return $offerdetail;
        if($clicks->save())
        {  
            $link = $offerdetail->destination_url.$subid;
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
}
