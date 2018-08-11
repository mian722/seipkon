<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clicks;
use App\Signup;
use App\AssignOffers;

class SignupController extends Controller
{
    public function postback($subid)
    {
    	$clicks = Clicks::where('sub_id', $subid)->first();
    	$signup = new Signup;
        $signup->affiliate_id = $clicks->affiliate_id;
        $signup->admin_id = $clicks->admin_id;
        $signup->offer_id = $clicks->offer_id;
        $signup->sub_id = $subid;
        //$signup->save();
		// $done = Clicks::where('subid', $subid)->where('admin_id',$clicks->admin_id)->update(array('signup' => '1'));
		if ($signup->save()) {
			$getuserpostback = AssignOffers::select('postbacklink')->where('affiliate_id',$clicks->affiliate_id)->where('offer_id',$clicks->offer_id)->first();
            if (strpos($getuserpostback->postbacklink, '{subid}') !== false) {
                return $userpostback = str_replace('{subid}', $subid, $getuserpostback->postbacklink);
            }
			return redirect()->away($userpostback);
		}
		
    }
}
