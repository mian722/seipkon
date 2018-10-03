<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Offer;
use File;
use App\User;
use App\AssignOffers;
use App\OfferRestriction;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\UrlGenerator;
use App\Notifications\SignUpNotification;
use App\Templates;


class OfferController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::with('restrictions')
        ->select('offers.*', 'users.id as uid', 'users.fname')
        ->LeftJoin('users', 'users.id','=','offers.adv_id')
        ->get();
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
        $offerspools = $this->getallofferpools();
        $users = $this->getuser(4);
        $timezones = $this->gettimezones();
        $countries = $this->getcountry();
        return view('admin.add-offer', compact('offers', 'offerspools', 'users', 'timezones', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //eturn dd($request);
        $newname = '';
        if (Input::file('offer_image')) {
            $file = Input::file('offer_image');
            $file_name = $file->getClientOriginalName();
            $file_size = round($file->getSize() / 50120);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();
            if (!in_array($file_ex, array('jpg', 'jpeg','png'))) return 'Invalid image extension we just allow JPG, GIF, PNG';
            $newname = str_random(10).$file_name;
            $file->move(base_path().'/public/offerimages/', $newname);
        }
        $names = array();
        if ($request->file('gallery')) {
            $mulfiles = $request->file('gallery');
            foreach($mulfiles as $sinfile){
                $file_name = $sinfile->getClientOriginalName();
                $file_size = round($sinfile->getSize() / 50120);
                $file_ex = $sinfile->getClientOriginalExtension();
                if (!in_array($file_ex, array('jpg', 'jpeg','png'))) return 'Invalid image extension we just allow JPG, GIF, PNG';
                $nname = str_random(10).$file_name;
                $names[] = $nname;
                $sinfile->move(base_path().'/public/offerimages/', $nname);
            }
        }

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
        $offer->creative_image = json_encode($names);
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
        $offerapplications = AssignOffers::leftJoin('users', 'users.id', '=', 'assignoffers.user_id')
        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
        ->select('assignoffers.*', 'users.fname', 'users.lname', 'users.managerid', 'offers.adv_id', 'offers.offer_name')
        ->where('assignoffers.admin_id', Auth::user()->id)->where('assignoffers.status', 0)->get();

        return view('admin.offer-application', compact('offerapplications'));
    }

    public function approveapplication($id){
        $offer = Offer::find($id);
        $users = AssignOffers::LeftJoin('users', 'users.id', 'assignoffers.user_id')
        ->where('assignoffers.id', $id)->select('users.id', 'users.email')->get();
        $update = AssignOffers::where('id', $id)->update(['status' => 1]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {

            foreach($users as $user){
                $email = $user->email;
                $subject = 'Offer Has Been Approved';
                $mailText = $this->getDefTemplate('offerapproval');
                $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'offerapproval')->first();
                $emailtype = '';
                if (!empty($dbmail)) {
                    $subject = $dbmail->email_subject;
                    $mailText = $dbmail->emailstring;
                    $emailtype = '';
                }
                $mailText = $this->setParameters($mailText, $user->id, $offer->id);
                $user = new User();
                $user->email = $email;   // This is the email you want to send to.
                $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Login Here', 'http://seipkon.ytrk.us/login', ''));
            }
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
        $assignoffer->user_id = $user->id;
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
        $updatedata = Offer::with('restrictions')->where('id',$id)->first();
        $offers = $this->getalloffers();
        $offerspools = $this->getallofferpools();
        $users = $this->getuser(4);
        $timezones = $this->gettimezones();
        $countries = $this->getcountry();
        return view('admin.add-offer', compact('offers', 'offerspools', 'users', 'timezones', 'countries','updatedata'));
    }

    public function offerdetail($id){
        $offer = Offer::with('restrictions')->where('id', $id)->first();
        $users = User::leftJoin('assignoffers', 'users.id', '=', 'assignoffers.user_id')
                        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->where('assignoffers.user_id', $id)
                        ->select('users.fname','users.lname','assignoffers.*','offers.offer_name')
                        ->get();
        return view('admin.offers-detail-page', compact('offer', 'users'));
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
        //return $request->all();
        $offer = Offer::find($id);
        $users = AssignOffers::LeftJoin('users', 'users.id', 'assignoffers.user_id')
        ->where('assignoffers.offer_id', $offer->id)->where('assignoffers.status', 1)->select('users.id', 'users.email')->get();
        $newname = $offer->offer_image;
        $names = $offer->creative_image;
        if (Input::file('offer_image')) {
            $file = Input::file('offer_image');
            $file_name = $file->getClientOriginalName();
            $file_size = round($file->getSize() / 50120);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();
            if (!in_array($file_ex, array('jpg', 'jpeg','png'))) return 'Invalid image extension we just allow JPG, GIF, PNG';
            $newname = str_random(10).$file_name;
            $file->move(base_path().'/public/offerimages/', $newname);
        }
        if ($request->file('gallery')) {
            $mulfiles = $request->file('gallery');
            foreach($mulfiles as $sinfile){
                $file_name = $sinfile->getClientOriginalName();
                $file_size = round($sinfile->getSize() / 50120);
                $file_ex = $sinfile->getClientOriginalExtension();
                if (!in_array($file_ex, array('jpg', 'jpeg','png'))) return 'Invalid image extension we just allow JPG, GIF, PNG';
                $nname = str_random(10).$file_name;
                $names[] = $nname;
                $sinfile->move(base_path().'/public/offerimages/', $nname);
            }
        }
        $prevpayout = 0;
        if ($offer->payout == $request->payout) {
            $prevpayout = $offer->prev_payout;
        }else{
            $prevpayout = $offer->payout;
        }
        $prevstatus = 0;
        if ($offer->status == $request->status) {
            $prevstatus = $offer->prev_status;
        }else{
            $prevstatus = $offer->status;
        }
        $updateoffer = Offer::where('id', $id)->update(['offer_name' => $request->offer_name, 'adv_id' => $request->adv_id, 'tags' => json_encode($request->tags), 'duration' => $request->duration, 'status' => $request->status, 'prev_status' => $prevstatus, 'revenue_type' => $request->revenue_type, 'revenue' => $request->revenue, 'offer_approval' => $request->offer_approval, 'payout_type' => $request->payout_type, 'payout' => $request->payout, 'prev_payout' => $prevpayout, 'preview_url' => $request->preview_url, 'destination_url' => $request->destination_url, 'signup_protocol' => $request->signup_protocol, 'signup_need_approval' => $request->signup_need_approval, 'offer_image' => $newname, 'creative_image' => $names, 'description' => $request->description, 'offer_name' => $request->offer_name]);
        $updateofferrestriction = OfferRestriction::where('id', $id)->update(['advertiser_caps_type' => $request->advertiser_caps_type, 'advertiser_caps_value' => $request->advertiser_caps_value, 'affiliate_caps_type' => $request->affiliate_caps_type, 'affiliate_caps_value' => $request->affiliate_caps_value, 'caps_timezone' => $request->caps_timezone, 'tracking_domain' => $request->tracking_domain, 'geo_targeting' => json_encode($request->geo_targeting), 'geo_type' => $request->geo_type, 'mobile_carrier_targeting' => json_encode($request->mobile_carrier_targeting), 'platform_targeting' => json_encode($request->platform_targeting)]);
        if (empty($updateoffer) ) {
            return redirect('/all-offers')->with('fail', 'Something Wrong!');
        } else {
            if ($offer->status != $request->status) {
                foreach($users as $user){
                    $email = $user->email;
                    $subject = 'Offer Status Changed';
                    $mailText = $this->getDefTemplate('offerstatus');
                    $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'offerstatus')->first();
                    $emailtype = '';
                    if (!empty($dbmail)) {
                        $subject = $dbmail->email_subject;
                        $mailText = $dbmail->emailstring;
                        $emailtype = '';
                    }
                    $mailText = $this->setParameters($mailText, $user->id, $offer->id);
                    $user = new User();
                    $user->email = $email;   // This is the email you want to send to.
                    $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Login Here', 'http://seipkon.ytrk.us/login', ''));
                }
            }
            if ($offer->payout != $request->payout) {
                foreach($users as $user){
                    $email = $user->email;
                    $subject = 'Offer Payout Changed';
                    $mailText = $this->getDefTemplate('offerpayout');
                    $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'offerpayout')->first();
                    $emailtype = '';
                    if (!empty($dbmail)) {
                        $subject = $dbmail->email_subject;
                        $mailText = $dbmail->emailstring;
                        $emailtype = '';
                    }
                    $mailText = $this->setParameters($mailText, $user->id, $offer->id);
                    $user = new User();
                    $user->email = $email;   // This is the email you want to send to.
                    $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Login Here', 'http://seipkon.ytrk.us/login', ''));
                }
            }
            return redirect('/all-offers')->with('success','Succfully Added!');
        }
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
