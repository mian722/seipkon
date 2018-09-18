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
                                   '.((isset($data->revenue)) ? '<th>Revenue(USD)</th>' : '').'
                                   '.((isset($data->conversions)) ? '<th>Conversions</th>' : '').'
                                   '.((isset($data->payout)) ? '<th>Payout(USD)</th>' : '').'
                                   '.((isset($data->amount)) ? '<th>Amount(USD)</th>' : '').'
                                   '.((isset($data->profit)) ? '<th>Profit(USD)</th>' : '').' 
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
                                   '.((isset($data->advertiser)) ? '<td><a href="'.route('affiliate.show', $value->adv_id).'">'.$value->fname.'</a></td>' : '').'
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

      $affiliates_report = $this->affiliatesreport();
      $advertisers_report = $this->advertisersreport();
      $offers_report = $this->offersreport();
      $smartlink_report = $this->smartlinkreport();

      return view('admin.operation-report',compact('advertisers_report','offers_report','affiliates_report','smartlink_report'));



    }
    public function affiliatesreport()
    {
      $adv_query = "SELECT  u.*, o.*, u.id as aff_id
      , (SELECT COUNT(I1.click)  FROM clicks I1 WHERE I1.offer_id = o.id ) as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.offer_id = o.id) as uniquesumclicks
      , (SELECT COUNT(I2.signup) FROM signups I2 WHERE I2.offer_id = o.id) as sumsignup
      , (SELECT (COUNT(I2.signup) * o.revenue) FROM signups I2 WHERE I2.offer_id = o.id) as totalrevenue
      , (SELECT (COUNT(I2.signup) * o.payout) FROM signups I2 WHERE I2.offer_id = o.id) as totalpayout
      from users u INNER JOIN assignoffers ao on u.id = ao.user_id
      INNER Join offers o on o.id = ao.offer_id
      where u.roles_id = 5 and u.admin_id = ".Auth::user()->id." ORDER BY o.id DESC";
        $adv_result = DB::select($adv_query);

        $issame = false;
        $advertisers_report = array();

        foreach ($adv_result as $subArray) {
          foreach ($advertisers_report as $key=>$sumValue) {
            if ($subArray->id == $sumValue->id) {
              $advertisers_report[$key]->sumclicks += $subArray->sumclicks;
              $advertisers_report[$key]->sumsignup += $subArray->sumsignup;
              $advertisers_report[$key]->totalrevenue += $subArray->totalrevenue;
              $advertisers_report[$key]->totalpayout += $subArray->totalpayout;
              $issame = true;
              break;
            }
          }
            if($issame == true){
                $issame = false;
            }else{
                $advertisers_report[] =  $subArray;
            }
        }
        return $advertisers_report;
    }
    public function advertisersreport()
    {
      $adv_query = "SELECT  u.*, o.*, u.id as aff_id
      , (SELECT COUNT(I1.click)  FROM clicks I1 WHERE I1.offer_id = o.id ) as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.offer_id = o.id) as uniquesumclicks
      , (SELECT COUNT(I2.signup) FROM signups I2 WHERE I2.offer_id = o.id) as sumsignup
      , (SELECT (COUNT(I2.signup) * o.revenue) FROM signups I2 WHERE I2.offer_id = o.id) as totalrevenue
      , (SELECT (COUNT(I2.signup) * o.payout) FROM signups I2 WHERE I2.offer_id = o.id) as totalpayout
      FROM users u INNER JOIN offers o
         ON u.id= o.adv_id
         WHERE u.roles_id = 4 and u.admin_id = ".Auth::user()->id." ORDER BY o.id DESC";
         $adv_result = DB::select($adv_query);

        $issame = false;
        $advertisers_report = array();

        foreach ($adv_result as $subArray) {
          foreach ($advertisers_report as $key=>$sumValue) {
            if ($subArray->id == $sumValue->id) {
              $advertisers_report[$key]->sumclicks += $subArray->sumclicks;
              $advertisers_report[$key]->sumsignup += $subArray->sumsignup;
              $advertisers_report[$key]->totalrevenue += $subArray->totalrevenue;
              $advertisers_report[$key]->totalpayout += $subArray->totalpayout;
              $issame = true;
              break;
            }
          }
            if($issame == true){
                $issame = false;
            }else{
                $advertisers_report[] =  $subArray;
            }
        }
        return $advertisers_report;
    }
    public function offersreport()
    {
      $adv_query = "SELECT  o.*, o.id as offer_id
      , (SELECT COUNT(I1.click)  FROM clicks I1 WHERE I1.offer_id = o.id ) as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.offer_id = o.id) as uniquesumclicks
      , (SELECT COUNT(I2.signup) FROM signups I2 WHERE I2.offer_id = o.id) as sumsignup
      , (SELECT (COUNT(I2.signup) * o.revenue) FROM signups I2 WHERE I2.offer_id = o.id) as totalrevenue
      , (SELECT (COUNT(I2.signup) * o.payout) FROM signups I2 WHERE I2.offer_id = o.id) as totalpayout
      FROM offers o 
        WHERE  o.admin_id = ".Auth::user()->id." ORDER BY o.id DESC";
        $adv_result = DB::select($adv_query);

        $issame = false;
        $advertisers_report = array();

        foreach ($adv_result as $subArray) {
          foreach ($advertisers_report as $key=>$sumValue) {
            if ($subArray->id == $sumValue->id) {
              $advertisers_report[$key]->sumclicks += $subArray->sumclicks;
              $advertisers_report[$key]->sumsignup += $subArray->sumsignup;
              $advertisers_report[$key]->totalrevenue += $subArray->totalrevenue;
              $advertisers_report[$key]->totalpayout += $subArray->totalpayout;
              $issame = true;
              break;
            }
          }
            if($issame == true){
                $issame = false;
            }else{
                $advertisers_report[] =  $subArray;
            }
        }
        return $advertisers_report;
    }
    public function smartlinkreport()
    {
      $adv_query = "SELECT  o.*, o.id as offer_id
      , (SELECT COUNT(I1.click)  FROM clicks I1 WHERE I1.offer_id = o.id ) as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.offer_id = o.id) as uniquesumclicks
      , (SELECT COUNT(I2.signup) FROM signups I2 WHERE I2.offer_id = o.id) as sumsignup
      , (SELECT (COUNT(I2.signup) * o.revenue) FROM signups I2 WHERE I2.offer_id = o.id) as totalrevenue
      , (SELECT (COUNT(I2.signup) * o.payout) FROM signups I2 WHERE I2.offer_id = o.id) as totalpayout
      FROM offers o 
        WHERE  o.admin_id = ".Auth::user()->id." ORDER BY o.id DESC";
        $adv_result = DB::select($adv_query);

        $issame = false;
        $advertisers_report = array();

        foreach ($adv_result as $subArray) {
          foreach ($advertisers_report as $key=>$sumValue) {
            if ($subArray->id == $sumValue->id) {
              $advertisers_report[$key]->sumclicks += $subArray->sumclicks;
              $advertisers_report[$key]->sumsignup += $subArray->sumsignup;
              $advertisers_report[$key]->totalrevenue += $subArray->totalrevenue;
              $advertisers_report[$key]->totalpayout += $subArray->totalpayout;
              $issame = true;
              break;
            }
          }
            if($issame == true){
                $issame = false;
            }else{
                $advertisers_report[] =  $subArray;
            }
        }
        return $advertisers_report;
    }

    public function affiliatereport()
    {
      $affiliates = $this->getuser(5);
      $managers = $this->getuser(3);
        $offers = Offer::select('offer_name', 'id')->with('restrictions')->where('admin_id',Auth::user()->id)->get();
        $timezones = $this->gettimezones();

      return view('admin.affiliate-reports',compact('affiliates', 'managers', 'offers', 'timezones'));
    }

    public function affiliatereportgenerate(Request $request)
    {
      $data = json_decode($request->allform);

      $status1 = '';
      $status2 = '';
      $status3 = '';
      if(isset($data->conversion_status) && $data->conversion_status != 'null'){
        $status1 = " and clc.status = ".$data->conversion_status;
        $status2 = " and uc.status = ".$data->conversion_status;
        $status3 = " and s.status = ".$data->conversion_status;
      }
      $range1 = '';
      $range2 = '';
      $range3 = '';
      if(isset($data->daterange)){
        $explode = explode(" - ", $data->daterange);
        $startdate = $explode[0].' 00:00:00';
        $enddate = $explode[1].' 23:59:59';
        $range1 = " and clc.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
        $range2 = " and uc.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
        $range3 = " and s.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
      }

      $affil = "Select u.*, ao.user_id, ao.offer_id, o.*
      , (SELECT COUNT(clc.click) FROM clicks clc WHERE clc.affiliate_id = u.id and clc.offer_id = o.id ".$status1.$range1.") as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.affiliate_id = u.id and uc.offer_id = o.id ".$status2.$range2.") as uniquesumclicks
      , (SELECT COUNT(s.signup) FROM signups s WHERE s.affiliate_id = u.id and s.offer_id = o.id ".$status3.$range3.") as sumsignup
      from users u LEFT JOIN assignoffers ao on u.id = ao.user_id
      Left Join offers o on o.id = ao.offer_id
      where u.roles_id = 5 and u.admin_id = ".Auth::user()->id;


      if(isset($data->affiliate_id)){
        if(is_array($data->affiliate_id)){
          $aids = join("','",$data->affiliate_id);   
          $affil .= " and u.id IN ('$aids')";
        }else{
          $affil .= " and u.id = ".$data->affiliate_id;
        }
      }
      if(isset($data->adv_manager_value)){
        if(is_array($data->adv_manager_value)){
          $mids = join("','",$data->adv_manager_value);   
          $affil .= " and u.managerid IN ('$mids')";
        }else{
          $affil .= " and u.managerid = ".$data->adv_manager_value;
        }
      }
      if(isset($data->offers_id)){
        if(is_array($data->offers_id)){
          $oids = join("','",$data->offers_id);   
          $affil .= " and o.id IN ('$oids')";
        }else{
          $affil .= " and o.id = ".$data->offers_id;
        }
      }
      $affil .= " ORDER BY o.id ASC";

      $alldata = DB::select($affil);

      $table = '<table id="button_datatables_example" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                   <th>NO.</th>
                                   '.((isset($data->affiliate)) ? '<th>Affiliate</th>' : '').'
                                   '.((isset($data->adv_manager)) ? '<th>Advertiser Manager </th>' : '').'
                                   '.((isset($data->offer)) ? '<th>Offer</th>' : '').'
                                   '.((isset($data->clicks)) ? '<th>Clicks</th>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<th>Unique Clicks</th>' : '').'
                                   '.((isset($data->currency)) ? '<th>Currency</th>' : '').'
                                   '.((isset($data->revenue)) ? '<th>Revenue(USD)</th>' : '').'
                                   '.((isset($data->conversions)) ? '<th>Conversions</th>' : '').'
                                   '.((isset($data->payout)) ? '<th>Payout(USD)</th>' : '').'
                                   '.((isset($data->amount)) ? '<th>Amount(USD)</th>' : '').'
                                   '.((isset($data->profit)) ? '<th>Profit(USD)</th>' : '').' 
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
                                   '.((isset($data->affiliate)) ? '<td><a href="'.route('affiliate.show', $value->id).'">'.$value->fname.'</a></td>' : '').'
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
              

                $table .= '</tbody>
                          </table>';
         return $table; 
    }
  public function conversionreport()
      {
      $advertisers = $this->getuser(4);
      $adv_managers = $this->getrelatedmanagers($advertisers);
      $affiliates = $this->getuser(5);
      $aff_managers = $this->getrelatedmanagers($affiliates);
      $offers = $this->getalloffers();
      $timezones = $this->gettimezones();
      $countries = $this->getcountry();
      $getplatforms = $this->getplatform();

      return view('admin.conversion-report',compact('advertisers', 'adv_managers', 'managers','affiliates','aff_managers', 'offers','countries', 'timezones','getplatforms'));
      }

    public function conversionreportgenerate(Request $request){
      
      $data = json_decode($request->allform);
      $status1 = '';
      if(isset($data->conversion_status) && $data->conversion_status != 'null'){
        $status1 = " and s.status = ".$data->conversion_status;
      }
      $range1 = '';
      if(isset($data->daterange)){
        $explode = explode(" - ", $data->daterange);
        $startdate = $explode[0].' 00:00:00';
        $enddate = $explode[1].' 23:59:59';
        $range1 = " and s.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
      }

      $affil = "Select u.fname, c.id as cid, s.id as sid, o.offer_name, adv.fname as advname, aff_man.fname as aff_man_name, adv_man.fname as adv_man_name
      from signups s LEFT JOIN clicks c on c.sub_id = s.sub_id
      Left Join offers o on o.id = s.offer_id
      Left Join offer_restrictions off_r on off_r.offer_id = o.id
      LEFT JOIN users u on u.id = s.affiliate_id
      LEFT JOIN users adv on adv.id = s.adv_id
      LEFT JOIN users aff_man on aff_man.id = u.managerid
      LEFT JOIN users adv_man on adv_man.id = adv.managerid
      where u.admin_id = ".Auth::user()->id;
      // return  $alldata = DB::select($affil);

      if(isset($data->affiliatelist)){
        if(is_array($data->affiliatelist)){
          $aids = join("','",$data->affiliate_id);   
         $affil .= " and s.affiliate_id IN ('$aids')";
        }else{
          $affil .= " and s.affiliate_id = ".$data->affiliatelist;
        }
      }
      if(isset($data->countrylist)){
        if(is_array($data->countrylist)){
          $mids = join("','",$data->countrylist);   
          $affil .= " and c.country IN ('$mids')";
        }else{
          $affil .= " and c.country = '".$data->countrylist."'";
        }
      }
      if(isset($data->affiliatemanager)){
        if(is_array($data->affiliatemanager)){
          $mids = join("','",$data->affiliatemanager);   
          $affil .= " and aff_man.id IN ('$mids')";
        }else{
          $affil .= " and aff_man.id = ".$data->affiliatemanager;
        }
      }
      if(isset($data->advertiserlist)){
        if(is_array($data->advertiserlist)){
          $mids = join("','",$data->advertiserlist);   
          $affil .= " and s.adv_id IN ('$mids')";
        }else{
          $affil .= " and s.adv_id = ".$data->advertiserlist;
        }
      }
      if(isset($data->advertisermanager)){
        if(is_array($data->advertisermanager)){
          $mids = join("','",$data->advertisermanager);   
          $affil .= " and adv_man.id IN ('$mids')";
        }else{
          $affil .= " and adv_man.id = ".$data->advertisermanager;
        }
      }
      if(isset($data->offerlist)){
        if(is_array($data->offerlist)){
          $oids = join("','",$data->offerlist);   
          $affil .= " and s.offer_id IN ('$oids')";
        }else{
          $affil .= " and s.offer_id = ".$data->offerlist;
        }
      }
      if(isset($data->plateformlist)){
        if(is_array($data->plateformlist)){
          $oids = join("','",$data->plateformlist);   
          $affil .= " and c.os IN ('$oids')";
        }else{
          $affil .= " and c.os = '".$data->plateformlist."'";
        }
      }
      if(isset($data->conversionstatus)){
        if(is_array($data->conversionstatus)){
          $oids = join("','",$data->conversionstatus);   
          $affil .= " and s.status IN ('$oids')";
        }else{
          $affil .= " and s.status = '".$data->conversionstatus."'";
        }
      }
      if(isset($data->timezonelist)){
        if(is_array($data->timezonelist)){
          $oids = join("','",$data->timezonelist);   
          $affil .= " and off_r.caps_timezone IN ('$oids')";
        }else{
          $affil .= " and off_r.caps_timezone = '".$data->timezonelist."'";
        }
      }
     // return $request->allform;
      $alldata = DB::select($affil);
      $affil .= " ORDER BY o.id ASC";

     return  $alldata = DB::select($affil);

      $table = '<table id="button_datatables_example" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                  <th>NO.</th>
                                  '.((isset($data->coversiontime)) ? '<th>Coversion Time</th>' : '').'
                                  '.((isset($data->clicktime)) ? '<th>Click Time</th>' : '').'
                                  '.((isset($data->advertiser)) ? '<th>Advertiser</th>' : '').'
                                  '.((isset($data->affiliate)) ? '<th>Affiliate</th>' : '').'
                                  '.((isset($data->advmanger)) ? '<th>Advertiser Manager</th>' : '').'
                                  '.((isset($data->affmanager)) ? '<th>Affiliate Manager</th>' : '').'
                                  '.((isset($data->smartlinkcheck)) ? '<th>SmartLink</th>' : '').'
                                  '.((isset($data->offer)) ? '<th>Offer</th>' : '').'
                                  '.((isset($data->country)) ? '<th>Country</th>' : '').'
                                  '.((isset($data->sourceid)) ? '<th>Source ID</th>' : '').'
                                  '.((isset($data->clicksid)) ? '<th>Clicks ID</th>' : '').'
                                  '.((isset($data->clicksip)) ? '<th>Clicks IP</th>' : '').'
                                  '.((isset($data->conversionip)) ? '<th>Conversions IP</th>' : '').'
                                  '.((isset($data->status)) ? '<th>Status</th>' : '').'
                                  '.((isset($data->postback)) ? '<th>Postback</th>' : '').'
                                  '.((isset($data->referurl)) ? '<th>Referer URL</th>' : '').'
                                  '.((isset($data->revenue)) ? '<th>Revenue</th>' : '').'
                                  '.((isset($data->payout)) ? '<th>Payout</th>' : '').'
                                  '.((isset($data->amount)) ? '<th>Amount</th>' : '').'
                                  '.((isset($data->profit)) ? '<th>Profit</th>' : '').'
                                  '.((isset($data->adcsub1)) ? '<th>Adv Sub 1</th>' : '').'
                                  '.((isset($data->adcsub2)) ? '<th>Adv Sub 2</th>' : '').'
                                  '.((isset($data->adcsub3)) ? '<th>Adv Sub 3</th>' : '').'
                                  '.((isset($data->affsub1)) ? '<th>Aff Sub 1</th>' : '').'
                                  '.((isset($data->affsub2)) ? '<th>Aff Sub 2</th>' : '').'
                                  '.((isset($data->affsub3)) ? '<th>Aff Sub 3</th>' : '').'
                                  '.((isset($data->affsub4)) ? '<th>Aff Sub 4</th>' : '').'
                                  '.((isset($data->affsub5)) ? '<th>Aff Sub 5</th>' : '').'
                                  '.((isset($data->plateform)) ? '<th>Platform</th>' : '').'
                                  '.((isset($data->mobilcarrier)) ? '<th>Mobile Carrier</th>' : '').'
                                  '.((isset($data->cr)) ? '<th>CR</th>' : '').'
                                  '.((isset($data->epc)) ? '<th>EPC</th>' : '').'
                                <tr>
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
                                   '.((isset($data->affiliate)) ? '<td><a href="'.route('affiliate.show', $value->id).'">'.$value->fname.'</a></td>' : '').'
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
              

                $table .= '</tbody>
                          </table>';

         return $table; 

    }

    public function generalreport(){
      $advertisers = $this->getuser(4);
      $adv_managers = $this->getrelatedmanagers($advertisers);

      $affiliates = $this->getuser(5);
      $aff_managers = $this->getrelatedmanagers($affiliates);
      $offers = $this->getalloffers();
      $timezones = $this->gettimezones();
      $countries = $this->getcountry();

      return view('admin.general-report',compact('advertisers', 'adv_managers', 'affiliates', 'aff_managers', 'offers', 'timezones', 'countries'));
    }


    public function generalreportgenerate(Request $request)
    {
      $data = json_decode($request->allform);

      // $status1 = '';
      // $status2 = '';
      // $status3 = '';
      // if(isset($data->conversion_status) && $data->conversion_status != 'null'){
      //     $status1 = " and I1.status = ".$data->conversion_status;
      //     $status2 = " and uc.status = ".$data->conversion_status;
      //     $status3 = " and I2.status = ".$data->conversion_status;
      // }
      $range1 = '';
      $range2 = '';
      $range3 = '';
      if(isset($data->daterange)){
          $explode = explode(" - ", $data->daterange);
          $startdate = $explode[0].' 00:00:00';
          $enddate = $explode[1].' 23:59:59';
          $range1 = " and clc.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
          $range2 = " and uc.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
          $range3 = " and s.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
      }

      $generalquery = "Select u.*, ao.user_id, ao.offer_id, o.*, adv_manager.fname as adv_manager_name, aff_manager.fname as aff_manager_name, adv.fname as adv_name, off_r.platform_targeting
      , (SELECT COUNT(clc.click) FROM clicks clc WHERE clc.affiliate_id = u.id and clc.offer_id = o.id ".$range1.") as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.affiliate_id = u.id and uc.offer_id = o.id ".$range2.") as uniquesumclicks
      , (SELECT COUNT(s.signup) FROM signups s WHERE s.affiliate_id = u.id and s.offer_id = o.id ".$range3.") as sumsignup
      from users u LEFT JOIN assignoffers ao on u.id = ao.user_id
      Left Join offers o on o.id = ao.offer_id
      Left Join offer_restrictions off_r on off_r.offer_id = o.id
      Left Join users aff_manager on aff_manager.id = u.managerid
      Left Join users adv on adv.id = o.adv_id
      Left Join users adv_manager on adv_manager.id = adv.managerid
      where u.roles_id = 5 and u.admin_id = ".Auth::user()->id;

      //$alldata = DB::select($generalquery);
      if(isset($data->advertiser_id)){
        if(is_array($data->advertiser_id)){
          $aids = join("','",$data->advertiser_id);   
          $generalquery .= " and adv.id IN ('$aids')";
        }else{
          $generalquery .= " and adv.id = ".$data->advertiser_id;
        }
      }
      if(isset($data->adv_manager_id)){
        if(is_array($data->adv_manager_id)){
          $mids = join("','",$data->adv_manager_id);   
          $generalquery .= " and adv_manager.id IN ('$mids')";
        }else{
          $generalquery .= " and adv_manager.id = ".$data->adv_manager_id;
        }
      }
      if(isset($data->offers_id)){
        if(is_array($data->offers_id)){
          $oids = join("','",$data->offers_id);   
          $generalquery .= " and o.id IN ('$oids')";
        }else{
          $generalquery .= " and o.id = ".$data->offers_id;
        }
      }
      $generalquery .= " ORDER BY o.id ASC";

      $alldata = DB::select($generalquery);

      $table = '<table id="button_datatables_example" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                   <th>NO.</th>
                                   '.((isset($data->advertiser)) ? '<th>Advertiser</th>' : '').'
                                   '.((isset($data->affiliate)) ? '<th>Affiliate</th>' : '').'
                                   '.((isset($data->adv_manager)) ? '<th>Advertiser Manager</th>' : '').'
                                   '.((isset($data->aff_manager)) ? '<th>Affiliate Manager</th>' : '').'
                                   '.((isset($data->smartlink)) ? '<th>Affiliate Manager</th>' : '').'
                                   '.((isset($data->offer)) ? '<th>Offer</th>' : '').'
                                   '.((isset($data->country)) ? '<th>Country</th>' : '').'
                                   '.((isset($data->sub_id)) ? '<th>Source ID</th>' : '').'
                                   '.((isset($data->clicks)) ? '<th>Clicks</th>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<th>Unique Clicks</th>' : '').'
                                   '.((isset($data->currency)) ? '<th>Currency</th>' : '').'
                                   '.((isset($data->revenue)) ? '<th>Revenue(USD)</th>' : '').'
                                   '.((isset($data->conversions)) ? '<th>Conversions</th>' : '').'
                                   '.((isset($data->payout)) ? '<th>Payout(USD)</th>' : '').'
                                   '.((isset($data->amount)) ? '<th>Amount(USD)</th>' : '').'
                                   '.((isset($data->profit)) ? '<th>Profit(USD)</th>' : '').' 
                                   '.((isset($data->platform)) ? '<th>Platform</th>' : '').' 
                                   '.((isset($data->mobile_carrier)) ? '<th>Mobile Carrier</th>' : '').' 
                                   '.((isset($data->click_rate)) ? '<th>CR</th>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<th>EPC</th>' : '').' 
                                </tr>
                            </thead>
                        <tbody>';
                $counter = 1;
                foreach ($alldata as $value) {
                //$managername = User::select('fname')->where('id', $value->managerid)->first();
                $amount = $value->revenue * $value->sumsignup;
                $payout = $value->payout * $value->sumsignup;
                $profit = $amount - $payout;

                $platformss = json_decode($value->platform_targeting);
                $cr = 00.0;
                $earn_per_click = 0.00;
                if ($value->sumclicks != 0) {
                  $cr = round((($value->sumsignup / $value->sumclicks) * 100), 1);
                  $earn_per_click = round(($profit / $value->sumclicks),2);
                }
                $table .= '<tr>
                               <td>'.$counter++.'</td>
                                   '.((isset($data->advertiser)) ? '<td><a href="'.route('affiliate.show', $value->adv_id).'">'.$value->adv_name.'</a></td>' : '').'
                                   '.((isset($data->affiliate)) ? '<td>'.$value->fname.'</td>' : '').'
                                   '.((isset($data->adv_manager)) ? '<td><a href="'.route('affiliate.show', $value->managerid).'">'.$value->adv_manager_name.'</a></td>' : '').'
                                   '.((isset($data->aff_manager)) ? '<td>'.$value->aff_manager_name.'</td>' : '').'
                                   '.((isset($data->smartlink)) ? '<td>Smart Link</td>' : '').'
                                   '.((isset($data->offer)) ? '<td><a href="'.route('offers-detail', $value->offer_id).'">'.$value->offer_name.'</a></td>' : '').'
                                   '.((isset($data->country)) ? '<td>Country</td>' : '').'
                                   '.((isset($data->sub_id)) ? '<td>Source ID</td>' : '').'
                                   '.((isset($data->clicks)) ? '<td>'.$value->sumclicks.'</td>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<td>'.$value->uniquesumclicks.'</td>' : '').'
                                   '.((isset($data->currency)) ? '<td>USD</td>' : '').'
                                   '.((isset($data->revenue)) ? '<td>$'.$value->revenue.' ('.$value->revenue_type.')</td>' : '').'
                                   '.((isset($data->conversions)) ? '<td>'.$value->sumsignup.'</td>' : '').'
                                   '.((isset($data->payout)) ? '<td>$'.$value->payout.' ('.$value->payout_type.')</td>' : '').'
                                   '.((isset($data->amount)) ? '<td>$'.$amount.'</td>' : '').'
                                   '.((isset($data->profit)) ? '<td>$'.$profit.'</td>' : '').' 
                                   '.((isset($data->platform)) ? '<td>'.implode (", ",$platformss).'</td>' : '').' 
                                   '.((isset($data->mobile_carrier)) ? '<td>Mobile Carrier</td>' : '').' 
                                   '.((isset($data->click_rate)) ? '<td>'.$cr.'%</td>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<td>$'.$earn_per_click.'</td>' : '').' 
                            </tr>';
                          }
              

                $table .= '</tbody>
                          </table>';

         return $table; 
    }
}
