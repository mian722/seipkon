<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Offer;
use App\User;
use App\AssignOffers;
use App\OfferRestriction;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\UrlGenerator;


class OfferController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::with('restrictions')->get();
        return view('admin.all-offers',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offers = $this->getalloffers();
        $users = $this->getuser(4);
        $timezones = $this->gettimezones();
        $countries = $this->getcountry();
        return view('admin.add-offer', compact('offers', 'users', 'timezones', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $file = Input::file('offer_image');
                $file_name = $file->getClientOriginalName();
                $file_size = round($file->getSize() / 50120);
                $file_ex = $file->getClientOriginalExtension();
                $file_mime = $file->getMimeType();
                if (!in_array($file_ex, array('jpg', 'jpeg','png'))) return 'Invalid image extension we just allow JPG, GIF, PNG';
                $newname = str_random(10).$file_name;
                $file->move(base_path().'/public/offerimages/', $newname);
        $offer = new Offer;
        $offer->offer_name = $request->offer_name;
        $offer->adv_id = $request->adv_id;
        $offer->tags = json_encode($request->tags);
        $offer->duration = $request->duration;
        $offer->status = $request->status;
        $offer->revenue_type = $request->revenue_type;
        $offer->revenue = $request->revenue;
        $offer->offer_approval = $request->offer_approval;
        $offer->payout_type = $request->payout_type;
        $offer->payout = $request->payout;
        $offer->preview_url = $request->preview_url;
        $offer->destination_url = $request->destination_url;
        $offer->signup_protocol = $request->signup_protocol;
        $offer->signup_need_approval = $request->signup_need_approval;
        $offer->description = $request->description;
        $offer->admin_id = Auth::user()->id;
        $basePath = url('/');
        $offer->offer_image = $newname;
        $offer->offer_postback = url('/').'/advback?click_id={click_id}&adv_id='.$request->adv_id;
        $offer->save();
        if (!empty($offer) ) {
            //return $offer;
            $offer_restriction = new OfferRestriction;
            $offer_restriction->offer_id = $offer->id;
            $offer_restriction->advertiser_caps_type = $request->advertiser_caps_type;
            $offer_restriction->advertiser_caps_value = $request->advertiser_caps_value;
            $offer_restriction->affiliate_caps_type = $request->affiliate_caps_type;
            $offer_restriction->affiliate_caps_value = $request->affiliate_caps_value;
            $offer_restriction->caps_timezone = $request->caps_timezone;
            $offer_restriction->redirect_offer = $request->redirect_offer;
            $offer_restriction->offer_pool = json_encode($request->offer_pool);
            $offer_restriction->tracking_domain = $request->tracking_domain;
            $offer_restriction->ssl = ($request->ssl == 'on') ? 1 : 0;
            $offer_restriction->lead_traffic_preview_url = ($request->lead_traffic_preview_url == 'on') ? 1 : 0;
            $offer_restriction->unique_ip_tracking = ($request->unique_ip_tracking == 'on') ? 1 : 0;
            $offer_restriction->geo_targeting = json_encode($request->geo_targeting);
            $offer_restriction->geo_type = $request->geo_type;
            $offer_restriction->mobile_carrier_targeting = json_encode($request->mobile_carrier_targeting);
            $offer_restriction->platform_targeting = json_encode($request->platform_targeting);
            $offer_restriction->admin_id = Auth::user()->id;
            $offer_restriction->save();
            if (!empty($offer_restriction) ) {
                return redirect()->back()->with('success','Succfully Added!');
            }
            //return redirect()->back()->with('success','Succfully Added!');
        } else { 
            return redirect()->back()->with('fail', 'Something Wrong!');
        }
    }

    public function offerapplications(){
        //$assignoffers = AssignOffers::where('admin_id', Auth::user()->id)->where('status', 0)->get();
        $offerapplications = AssignOffers::leftJoin('users', 'users.id', '=', 'assignoffers.affiliate_id')
        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
        ->select('assignoffers.*', 'users.fname', 'users.lname', 'users.managerid', 'offers.adv_id', 'offers.offer_name')
        ->where('assignoffers.admin_id', Auth::user()->id)->where('assignoffers.status', 0)->get();

        return view('admin.offer-application', compact('offerapplications'));
    }

    public function approveapplication($id){
        $update = AssignOffers::where('id', $id)->update(['status' => 1]);
        if (empty($update) ) {
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
    public function createpostback($aid, $oid)
    {
        $offer = Offer::find($oid);
        $user = User::where('roles_id', 5)->where('id', $aid)->first();

        $assignoffer = new AssignOffers;
        $assignoffer->affiliate_id = $user->id;
        $assignoffer->offer_id = $offer->id;
        $assignoffer->postbacklink = url('/').'/post/'.$user->id.'/'.$offer->id;
        $assignoffer->usertracklink = url('/').'/link/'.$user->id.'/'.$offer->id;
        $assignoffer->admin_id = Auth::user()->id;
        $assignoffer->status = 0;
        $assignoffer->save();
        if(!empty($assignoffer)){
            return redirect(url('/'))->with('success','Succfully Added!');
        }else{
            return redirect()->back()->with('fail', 'Something Wrong!');
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
