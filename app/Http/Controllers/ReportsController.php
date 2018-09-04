<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\User;
use App\Clicks;
use App\Signups;
use Carbon\Carbon;
use Auth;

class ReportsController extends Controller
{
    public function advertiserreport(Request $request)
    {
    	$advertisers = $this->getuser(4);
    	$managers = $this->getuser(3);
        $offers = Offer::select('offer_name', 'id')->with('restrictions')->where('admin_id',Auth::user()->id)->get();
        $timezones = $this->gettimezones();

    	return view('admin.advertisers-reports',compact('advertisers', 'managers', 'offers', 'timezones'));
    }

    public function advertiserreportgenerate(Request $request){
    	$data = json_decode($request->allform);

      return $postbacks = User::leftJoin('offers', 'offers.adv_id', '=', 'users.id')
                        ->leftJoin('clicks', 'clicks.offer_id', '=', 'offers.id')
                        ->leftJoin('signups', 'signups.offer_id', '=', 'offers.id')
                        ->where('users.id', 2)
                        ->select('users.*','offers.*')
                        ->get();

    	return $table = '<table id="button_datatables_example" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                   <th>NO.</th>
                                   <th>'.$data->radio.'</th>
                                   '.((isset($data->advertiser)) ? '<th>Advertiser</th>' : '').'
                                   '.((isset($data->adv_manager)) ? '<th>Advertiser Manager </th>' : '').'
                                   '.((isset($data->offer)) ? '<th>Offer</th>' : '').'
                                   '.((isset($data->clicks)) ? '<th>Clicks</th>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<th>Unique Clicks</th>' : '').'
                                   '.((isset($data->currency)) ? '<th>Currency</th>' : '').'
                                   '.((isset($data->revenue)) ? '<th>Revenue</th>' : '').'
                                   '.((isset($data->conversions)) ? '<th>Conversions</th>' : '').'
                                   '.((isset($data->payout)) ? '<th>Payout</th>' : '').'
                                   '.((isset($data->amount)) ? '<th>Amount</th>' : '').'
                                   '.((isset($data->profit)) ? '<th>Profit</th>' : '').' 
                                   '.((isset($data->click_rate)) ? '<th>CR</th>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<th>EPC</th>' : '').' 
                                </tr>
                            </thead>
                        <tbody>';


                $table .=	'<tr>
                               <td>1</td>
                               <td>2018-07-01</td>
                               <td><a href="#">sss #2</a></td>
                               <td><a href="#">offer test google #4</a></td>
                               <td>5</td>
                               <td>0</td>
                               <td>0.000%</td>
                               <td>0.000</td>
                               <td>0.000</td>
                               <td>0.000</td>
                            </tr>';

                $table .=	'</tbody>
                          </table>';

         return $table;	

    }

}
