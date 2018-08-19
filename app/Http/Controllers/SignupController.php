<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clicks;
use App\Signup;
use App\Offer;
use App\AssignOffers;

class SignupController extends Controller
{
    public function postback(Request $request)
    {
        $subid = $request->subid;
    	$clicks = Clicks::where('sub_id', $subid)->with('parameters')->first();
        if (!empty($clicks)) {
            $sign = Signup::where('sub_id', $subid)->first();
            if (empty($sign)) {
                $signup = new Signup;
                $signup->affiliate_id = $clicks->affiliate_id;
                $signup->admin_id = $clicks->admin_id;
                $signup->offer_id = $clicks->offer_id;
                $signup->sub_id = $clicks->sub_id;

                $getuserpostback = AssignOffers::select('postbacklink')->where('affiliate_id',$clicks->affiliate_id)->where('offer_id',$clicks->offer_id)->first();
                if (!empty($getuserpostback)) {
                    $userpostback = $getuserpostback->postbacklink;
                }else{
                    return '';
                }
                if (strpos($userpostback, '{click_id}') !== false) {
                    $userpostback = str_replace('{click_id}', $clicks->sub_id, $userpostback);
                }
                if (strpos($userpostback, '{offer_id}') !== false) {
                    $userpostback = str_replace('{offer_id}', $clicks->offer_id, $userpostback);
                }
                if (strpos($userpostback, '{country_id}') !== false) {
                    $userpostback = str_replace('{country_id}', $clicks->country, $userpostback);
                }
                if (strpos($userpostback, '{aff_id}') !== false) {
                    $userpostback = str_replace('{aff_id}', $clicks->affiliate_id, $userpostback);
                }
                if (strpos($userpostback, '{adv_id}') !== false) {
                    $advid = Offer::select('adv_id')->where('id', $clicks->offer_id)->first();
                    $userpostback = str_replace('{adv_id}', $advid->adv_id, $userpostback);
                }
                if (strpos($userpostback, '{adv_sub1}') !== false) {
                    $userpostback = str_replace('{adv_sub1}', $clicks->parameters->adv_sub1, $userpostback);
                }
                if (strpos($userpostback, '{adv_sub2}') !== false) {
                    $userpostback = str_replace('{adv_sub2}', $clicks->parameters->adv_sub2, $userpostback);
                }
                if (strpos($userpostback, '{adv_sub3}') !== false) {
                    $userpostback = str_replace('{adv_sub3}', $clicks->parameters->adv_sub3, $userpostback);
                }
                if (strpos($userpostback, '{aff_sub1}') !== false) {
                    $userpostback = str_replace('{aff_sub1}', $clicks->parameters->aff_sub1, $userpostback);
                }
                if (strpos($userpostback, '{aff_sub2}') !== false) {
                    $userpostback = str_replace('{aff_sub2}', $clicks->parameters->aff_sub2, $userpostback);
                }
                if (strpos($userpostback, '{aff_sub3}') !== false) {
                    $userpostback = str_replace('{aff_sub3}', $clicks->parameters->aff_sub3, $userpostback);
                }
                if (strpos($userpostback, '{aff_sub4}') !== false) {
                    $userpostback = str_replace('{aff_sub4}', $clicks->parameters->aff_sub4, $userpostback);
                }
                if (strpos($userpostback, '{aff_sub5}') !== false) {
                    $userpostback = str_replace('{aff_sub5}', $clicks->parameters->aff_sub5, $userpostback);
                }
                if (strpos($userpostback, '{unique_click}') !== false) {
                    $userpostback = str_replace('{unique_click}', ($clicks->parameters->unique_click == 1) ? 'unique' : 'duplicate', $userpostback);
                }
                if (strpos($userpostback, '{ip}') !== false) {
                    $userpostback = str_replace('{ip}', $clicks->ip, $userpostback);
                }
                if (strpos($userpostback, '{click_time}') !== false) {
                    $userpostback = str_replace('{click_time}', $clicks->updated_at, $userpostback);
                }
                if (strpos($userpostback, '{agent}') !== false) {
                    $userpostback = str_replace('{agent}', $clicks->browser, $userpostback);
                }
                if (strpos($userpostback, '{payout}') !== false) {
                    $offer = Offer::select('payout')->where('id', $clicks->offer_id)->first();
                    $userpostback = str_replace('{payout}', $offer->payout, $userpostback);
                }
                if (strpos($userpostback, '{reffer}') !== false) {
                    $userpostback = str_replace('{reffer}', $clicks->reffer_link, $userpostback);
                }
                if (strpos($userpostback, '{conversion_ip}') !== false) {
                    $userpostback = str_replace('{conversion_ip}', $clicks->ip, $userpostback);
                }
                if ($signup->save()) {
                    return redirect()->away($userpostback);
                }
            }else{
                return redirect()->away('http://www.google.com');
            }
            
        }else{
            return redirect()->away('http://www.google.com');
        }
    }

}
