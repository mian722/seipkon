<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clicks;
use App\Signup;
use App\AssignOffers;

class AdminPostController extends Controller
{
    public function postback($subid)
    {
    	$clicks = Clicks::where('subid', $subid)->first();
    	$signup = new Signup;
        $signup->affiliate_id = $clicks->affiliate_id;
        $signup->admin_id = $clicks->admin_id;
        $signup->offer_id = $clicks->offer_id;
        $signup->sub_id = $subid;
        $signup->signup = 1;
        return $signup;
        //$signup->save();
		// $done = Clicks::where('subid', $subid)->where('admin_id',$clicks->admin_id)->update(array('signup' => '1'));
		if ($signup->save()) {
			$getuserpostback = AssignOffers::select('postbacklink')->where('affiliate_id',$clicks->affiliate_id)->where('offer_id',$clicks->offer_id)->first();
			$userpostback = str_replace('{sa}', $subid, $getuserpostback->postbacklink);
			return redirect()->away($userpostback);
		}
		
    }
}
