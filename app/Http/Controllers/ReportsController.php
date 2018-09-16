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

      $status1 = '';
      $status2 = '';
      $status3 = '';
      if(isset($data->conversion_status) && $data->conversion_status != 'null'){
          $status1 = " and I1.status = ".$data->conversion_status;
          $status2 = " and uc.status = ".$data->conversion_status;
          $status3 = " and I2.status = ".$data->conversion_status;
      }
      $range1 = '';
      $range2 = '';
      $range3 = '';
      if(isset($data->daterange)){
          $explode = explode(" - ", $data->daterange);
          $startdate = $explode[0].' 00:00:00';
          $enddate = $explode[1].' 23:59:59';
          $range1 = " and I1.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
          $range2 = " and uc.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
          $range3 = " and I2.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
      }


      $query = "SELECT  u.*, a.*, a.id as offer_id
      , (SELECT COUNT(I1.click) FROM clicks I1 WHERE I1.offer_id = a.id ".$status1.$range1.") as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.offer_id = a.id ".$status2.$range2.") as uniquesumclicks
      , (SELECT COUNT(I2.signup) FROM signups I2 WHERE I2.offer_id = a.id ".$status3.$range3.") as sumsignup
      FROM users u LEFT JOIN offers a
         ON u.id= a.adv_id
         WHERE u.roles_id = 4 and u.admin_id = ".Auth::user()->id;
      if(isset($data->advertiser_id)){
        if(is_array($data->advertiser_id)){
          $aids = join("','",$data->advertiser_id);   
          $query .= " and u.id IN ('$aids')";
        }else{
          $query .= " and u.id = ".$data->advertiser_id;
        }
      }
      if(isset($data->adv_manager_value)){
        if(is_array($data->adv_manager_value)){
          $mids = join("','",$data->adv_manager_value);   
          $query .= " and u.managerid IN ('$mids')";
        }else{
          $query .= " and u.managerid = ".$data->adv_manager_value;
        }
      }
      if(isset($data->offers_id)){
        if(is_array($data->offers_id)){
          $oids = join("','",$data->offers_id);   
          $query .= " and a.id IN ('$oids')";
        }else{
          $query .= " and a.id = ".$data->offers_id;
        }
      }
      $query .= " ORDER BY a.id ASC";

      $alldata = DB::select($query);

    	$table = '<table id="button_datatables_example" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                   <th>NO.</th>
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
                $counter = 1;
                foreach ($alldata as $value) {
                $managername = User::select('fname')->where('id', $value->managerid)->first();
                $amount = $value->revenue * $value->sumsignup;
                $payout = $value->payout * $value->sumsignup;
                $profit = $amount - $payout;
                $cr = 00.0;
                $earn_per_click = 0.00;
                if ($value->sumclicks != 0) {
                  $cr = round((($value->sumsignup / $value->sumclicks) * 100), 1);
                  $earn_per_click = round(($profit / $value->sumclicks),2);
                }
                $table .= '<tr>
                               <td>'.$counter++.'</td>
                                   '.((isset($data->advertiser)) ? '<td><a href="'.route('affiliate.show', $value->id).'">'.$value->fname.'</a></td>' : '').'
                                   '.((isset($data->adv_manager)) ? '<td><a href="'.route('affiliate.show', $value->managerid).'">'.(!empty($managername->fname) ? $managername->fname : "" ).'</a></td>' : '').'
                                   '.((isset($data->offer)) ? '<td><a href="'.route('offers-detail', $value->offer_id).'">'.$value->offer_name.'</a></td>' : '').'
                                   '.((isset($data->clicks)) ? '<td>'.$value->sumclicks.'</td>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<td>'.$value->uniquesumclicks.'</td>' : '').'
                                   '.((isset($data->currency)) ? '<td>USD</td>' : '').'
                                   '.((isset($data->revenue)) ? '<td>$'.$value->revenue.' ('.$value->revenue_type.')</td>' : '').'
                                   '.((isset($data->conversions)) ? '<td>'.$value->sumsignup.'</td>' : '').'
                                   '.((isset($data->payout)) ? '<td>$'.$value->payout.' ('.$value->payout_type.')</td>' : '').'
                                   '.((isset($data->amount)) ? '<td>$'.$amount.'</td>' : '').'
                                   '.((isset($data->profit)) ? '<td>$'.$profit.'</td>' : '').' 
                                   '.((isset($data->click_rate)) ? '<td>'.$cr.'%</td>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<td>$'.$earn_per_click.'</td>' : '').' 
                            </tr>';
                          }
              

                $table .=	'</tbody>
                          </table>';

         return $table;	

    }
    public function operationreport()
    {
     
    }

}
