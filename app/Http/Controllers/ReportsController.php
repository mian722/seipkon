<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\User;
use App\Clicks;
use App\Signups;
use Carbon\Carbon;
use Auth;
use DB;

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
      //return $data->offers_id;
      //return $data->advertiser_id;
      $alldata = User::Join('offers', 'offers.adv_id', '=', 'users.id')
      ->Join('offer_restrictions', 'offer_restrictions.offer_id', '=', 'offers.id');
      (isset($data->advertiser_id) ? (is_array($data->advertiser_id)) ? $alldata->whereIn('users.id',$data->advertiser_id) : $alldata->where('users.id',$data->advertiser_id) : '');
      (isset($data->adv_manager_value) ? (is_array($data->adv_manager_value)) ? $alldata->whereIn('users.managerid',$data->adv_manager_value) : $alldata->where('users.managerid',$data->adv_manager_value) : '');
      (isset($data->offers_id) ? (is_array($data->offers_id)) ? $alldata->whereIn('offers.id',$data->offers_id) : $alldata->where('offers.id',$data->offers_id) : '');
      (isset($data->conversion_status) ? (is_array($data->conversion_status)) ? $alldata->whereIn('users.status',$data->conversion_status) : $alldata->where('users.status',$data->conversion_status) : '');
      ((isset($data->timezone) && !empty($data->timezone)) ? $alldata->where('offer_restrictions.caps_timezone',$data->timezone) : '');
      $alldata->select('users.*', 'offers.*', 'offer_restrictions.caps_timezone');
      //return $alldata->get();
      // if (isset($data->daterange)) {
      //   $data->->whereBetween('clicks.updated_at', [
      //                       Carbon\Carbon::parse('today')->startOfDay(),
      //                       Carbon\Carbon::parse('today')->endOfDay(),
      //                       ]);
      // }


      //           for($i = 0; $i <= count($alldata); $i++) {
      //             echo $alldata[$i];
      //           }
      // return App\Clicks::where('uid',$offer->uid)->where('oid',$offer->oid)->select(DB::raw("IFNULL(sum(clicks.click),0) as click"))->whereBetween('clicks.updated_at', [
      //                       Carbon\Carbon::parse('today')->startOfDay(),
      //                       Carbon\Carbon::parse('today')->endOfDay(),
      //                       ])->get();

      // return $postbacks = User::Join('clicks', 'clicks.affiliate_id', '=', 'users.id')
      //                   ->get();

    	$table = '<table id="button_datatables_example" class="table display table-striped table-bordered">
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
                foreach ($alldata->get() as $value) {
              
                $table .= '<tr>
                               <td>NO.</td>
                                   <td>'.$value->id.'</td>
                                   '.((isset($data->advertiser)) ? '<td>'.$value->fname.'</td>' : '').'
                                   '.((isset($data->adv_manager)) ? '<td>Advertiser Manager </td>' : '').'
                                   '.((isset($data->offer)) ? '<td>Offer</td>' : '').'
                                   '.((isset($data->clicks)) ? '<td>Clicks</td>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<td>Unique Clicks</td>' : '').'
                                   '.((isset($data->currency)) ? '<td>Currency</td>' : '').'
                                   '.((isset($data->revenue)) ? '<td>Revenue</td>' : '').'
                                   '.((isset($data->conversions)) ? '<td>Conversions</td>' : '').'
                                   '.((isset($data->payout)) ? '<td>Payout</td>' : '').'
                                   '.((isset($data->amount)) ? '<td>Amount</td>' : '').'
                                   '.((isset($data->profit)) ? '<td>Profit</td>' : '').' 
                                   '.((isset($data->click_rate)) ? '<td>CR</td>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<td>EPC</td>' : '').' 
                            </tr>';
                          }
              

                $table .=	'</tbody>
                          </table>';

         return $table;	

    }

}
