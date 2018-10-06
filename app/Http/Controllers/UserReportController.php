<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Offer;
use App\AssignOffers;

class UserReportController extends Controller
{
  ////////////////AFF reports//////////////////////
public function affconversionreport()
    {
      $advertisers = $this->getuser(4);
      $adv_managers = $this->getrelatedmanagers($advertisers);
      $affiliates = $this->getuser(5);
      $aff_managers = $this->getrelatedmanagers($affiliates);
      $offers = $this->getalloffers();
      $timezones = $this->gettimezones();
      $countries = $this->getcountry();
      $getplatforms = $this->getplatform();

      return view('affiliate.conversion-report',compact('advertisers', 'adv_managers', 'managers','affiliates','aff_managers', 'offers','countries', 'timezones','getplatforms'));
    }
    public function affgeneralreport(){
      $offers = AssignOffers::leftjoin('offers', 'offers.id', 'assignoffers.offer_id' )->where('user_id', Auth::user()->id)->get();
      $timezones = $this->gettimezones();
      $countries = $this->getcountry();
      $platforms = $this->getplatform();

      return view('affiliate.general-report',compact('offers', 'timezones', 'countries', 'platforms'));
    }
    public function affgeneralreportgenerate(Request $request)
    {
      $data = json_decode($request->allform);

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
 
      $generalquery = "Select u.*, ao.user_id, ao.offer_id, o.*, adv_manager.fname as adv_manager_name, adv_manager.id as adv_manager_id, aff_manager.fname as aff_manager_name, aff_manager.id as aff_manager_id, adv.fname as adv_name, adv.id as adv_id, off_r.platform_targeting, off_r.mobile_carrier_targeting
      , (SELECT COUNT(clc.click) FROM clicks clc WHERE clc.affiliate_id = u.id and clc.offer_id = o.id ".$range1.") as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE uc.affiliate_id = u.id and uc.offer_id = o.id ".$range2.") as uniquesumclicks
      , (SELECT COUNT(s.signup) FROM signups s WHERE s.affiliate_id = u.id and s.offer_id = o.id ".$range3.") as sumsignup
      from users u LEFT JOIN assignoffers ao on u.id = ao.user_id
      Left Join offers o on o.id = ao.offer_id
      Left Join offer_restrictions off_r on off_r.offer_id = o.id
      Left Join users aff_manager on aff_manager.id = u.managerid
      Left Join users adv on adv.id = o.adv_id
      Left Join users adv_manager on adv_manager.id = adv.managerid
      where u.id = ".Auth::user()->id;

      if(isset($data->offers_id)){
        if(is_array($data->offers_id)){
          $oids = join("','",$data->offers_id);   
          $generalquery .= " and o.id IN ('$oids')";
        }else{
          $generalquery .= " and o.id = ".$data->offers_id;
        }
      }
      if(isset($data->geo_targeting)){
        if(is_array($data->geo_targeting)){
          $generalquery .= " AND (";
          $num = 0;
          foreach ($data->geo_targeting as $target) {
            if ($num == 0) {
              $generalquery .= "off_r.geo_targeting LIKE '%".$target."%'";
              $num++;
            }
            $generalquery .= "OR off_r.geo_targeting LIKE '%".$target."%'";
          }
          $generalquery .= ")";
        }else{
          $generalquery .= " and off_r.geo_targeting LIKE '%".$data->geo_targeting."%'";
        }
      }

      if(isset($data->timezone) && $data->timezone != "null"){
        $generalquery .= " and off_r.caps_timezone = '".$data->timezone."'";
      }

      if(isset($data->platform_name)){
        if(is_array($data->platform_name)){
          $generalquery .= " AND (";
          $num = 0;
          foreach ($data->platform_name as $target) {
            if ($num == 0) {
              $generalquery .= "off_r.platform_targeting LIKE '%".$target."%'";
              $num++;
            }
            $generalquery .= "OR off_r.platform_targeting LIKE '%".$target."%'";
          }
          $generalquery .= ")";
        }else{
          $generalquery .= " and off_r.platform_targeting LIKE '%".$data->platform_name."%'";
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
                if (!empty($alldata)) {
                foreach ($alldata as $value) {
                //$managername = User::select('fname')->where('id', $value->managerid)->first();
                $amount = $value->revenue * $value->sumsignup;
                $payout = $value->payout * $value->sumsignup;
                $profit = $amount - $payout;

                $platformss = json_decode($value->platform_targeting);
                $mobile_carrier = json_decode($value->mobile_carrier_targeting);
                $cr = 00.0;
                $earn_per_click = 0.00;
                if ($value->sumclicks != 0) {
                  $cr = round((($value->sumsignup / $value->sumclicks) * 100), 1);
                  $earn_per_click = round(($profit / $value->sumclicks),2);
                }
                $table .= '<tr>
                               <td>'.$counter++.'</td>
                                   '.((isset($data->advertiser)) ? '<td><a href="'.route('advertiser.show', $value->adv_id).'">'.$value->adv_name.'</a></td>' : '').'
                                   '.((isset($data->affiliate)) ? '<td><a href="'.route('affiliate.show', $value->user_id).'">'.$value->fname.'</a></td>' : '').'
                                   '.((isset($data->adv_manager)) ? '<td>'.$value->adv_manager_name.'</td>' : '').'
                                   '.((isset($data->aff_manager)) ? '<td>'.$value->aff_manager_name.'</td>' : '').'
                                   '.((isset($data->smartlink)) ? '<td>Smart Link</td>' : '').'
                                   '.((isset($data->offer)) ? '<td><a href="'.route('offers-detail', $value->id).'">'.$value->offer_name.'</a></td>' : '').'
                                   '.((isset($data->country)) ? '<td>Country</td>' : '').'
                                   '.((isset($data->sub_id)) ? '<td>Source ID</td>' : '').'
                                   '.((isset($data->clicks)) ? '<td>'.$value->sumclicks.'</td>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<td>'.$value->uniquesumclicks.'</td>' : '').'
                                   '.((isset($data->currency)) ? '<td>USD</td>' : '').'
                                   '.((isset($data->revenue)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                   '.((isset($data->conversions)) ? '<td>'.$value->sumsignup.'</td>' : '').'
                                   '.((isset($data->payout)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                   '.((isset($data->amount)) ? '<td>$'.$amount.'</td>' : '').'
                                   '.((isset($data->profit)) ? '<td>$'.$profit.'</td>' : '').' 
                                   '.((isset($data->platform)) ? '<td>'.(($platformss != null) ? implode (", ",$platformss) : '').'</td>' : '').' 
                                   '.((isset($data->mobile_carrier)) ? '<td>'.(($mobile_carrier != null) ? implode (", ",$mobile_carrier) : '').'</td>' : '').' 
                                   '.((isset($data->click_rate)) ? '<td>'.$cr.'%</td>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<td>$'.$earn_per_click.'</td>' : '').' 
                            </tr>';
                          }
                }else{
                  $table .= '<tr>
                                       <td colspan="100" style="text-align: center;">No Result</td>
                                    </tr>';
                }
              

                $table .= '</tbody>
                          </table>';

         return $table; 
    }
    public function affconversionreportgenerate(Request $request)
    {
      $data = json_decode($request->allform);
      $range1 = '';
      if(isset($data->daterange)){
        $explode = explode(" - ", $data->daterange);
        $startdate = $explode[0].' 00:00:00';
        $enddate = $explode[1].' 23:59:59';
        $range1 = " and s.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
      }

      $affil = "Select u.*,c.*,p.*, c.id as cid, s.id as sid, s.updated_at as convertiontime, c.updated_at as clicktime, c.ip as clicksip, c.id as clicksid, o.*, s.*, adv.fname as advname, aff_man.fname as aff_man_name, adv_man.fname as adv_man_name
      from signups s LEFT JOIN clicks c on c.sub_id = s.sub_id
      Left Join parameters p on p.sub_id = s.sub_id
      Left Join offers o on o.id = s.offer_id
      Left Join offer_restrictions off_r on off_r.offer_id = o.id
      LEFT JOIN users u on u.id = s.affiliate_id
      LEFT JOIN users adv on adv.id = s.adv_id
      LEFT JOIN users aff_man on aff_man.id = u.managerid
      LEFT JOIN users adv_man on adv_man.id = adv.managerid
      where u.id = ".Auth::user()->id.$range1;
      //return $alldata = DB::select($affil);
      //return $request->allform;
      $affil .= " ORDER BY o.id ASC";

      $alldata = DB::select($affil);


      $table = '<table id="button_datatables" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                  <th>NO.</th>
                                  '.((isset($data->coversiontime)) ? '<th>Coversion Time</th>' : '').'
                                  '.((isset($data->clicktime)) ? '<th>Click Time</th>' : '').'
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
                                  '.((isset($data->payout)) ? '<th>Payout</th>' : '').'
                                  '.((isset($data->amount)) ? '<th>Amount</th>' : '').'
                                  '.((isset($data->advsub1)) ? '<th>Adv Sub 1</th>' : '').'
                                  '.((isset($data->advsub2)) ? '<th>Adv Sub 2</th>' : '').'
                                  '.((isset($data->advsub3)) ? '<th>Adv Sub 3</th>' : '').'
                                  '.((isset($data->affsub1)) ? '<th>Aff Sub 1</th>' : '').'
                                  '.((isset($data->affsub2)) ? '<th>Aff Sub 2</th>' : '').'
                                  '.((isset($data->affsub3)) ? '<th>Aff Sub 3</th>' : '').'
                                  '.((isset($data->affsub4)) ? '<th>Aff Sub 4</th>' : '').'
                                  '.((isset($data->affsub5)) ? '<th>Aff Sub 5</th>' : '').'
                                  '.((isset($data->plateform)) ? '<th>Platform</th>' : '').'
                                  '.((isset($data->mobilcarrier)) ? '<th>Mobile Carrier</th>' : '').'
                                </tr>
                            </thead>
                        <tbody>';
                $counter = 1;
                foreach ($alldata as $value) {
                $table .= '<tr>
                               <td>'.$counter++.'</td>
                                   '.((isset($data->coversiontime)) ? '<td>'.$value->convertiontime.'</td>' : '').'
                                   '.((isset($data->clicktime)) ? '<td>'.$value->clicktime.'</td>' : '').'
                                   '.((isset($data->smartlinkcheck)) ? '<td>Smart Link</td>' : '').'
                                   '.((isset($data->offer)) ? '<td><a href="'.route('offers-detail', $value->offer_id).'">'.$value->offer_name.'</a></td>' : '').'
                                   '.((isset($data->country)) ? '<td>'.$value->country.'</td>' : '').'
                                   '.((isset($data->sourceid)) ? '<td>'.$value->sub_id.'</td>' : '').'
                                   '.((isset($data->clicksid)) ? '<td>'.$value->clicksid.'</td>' : '').'
                                   '.((isset($data->clicksip)) ? '<td>'.$value->clicksip.'</td>' : '').'
                                   '.((isset($data->conversionip)) ? '<td>'.$value->conversion_ip.'</td>' : '').'
                                   '.((isset($data->status)) ? '<td>'.$value->status.'</td>' : '').'
                                   '.((isset($data->postback)) ? '<td>'.$value->offer_postback.'</td>' : '').'
                                   '.((isset($data->referurl)) ? '<td>'.$value->reffer_link.'</td>' : '').'
                                  '.((isset($data->payout)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                  '.((isset($data->amount)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                  '.((isset($data->advsub1)) ? '<td>'.$value->adv_sub1.'</td>' : '').'
                                  '.((isset($data->advsub2)) ? '<td>'.$value->adv_sub2.'</td>' : '').'
                                  '.((isset($data->advsub3)) ? '<td>'.$value->adv_sub3.'</td>' : '').'
                                  '.((isset($data->affsub1)) ? '<td>'.$value->aff_sub1.'</td>' : '').'
                                  '.((isset($data->affsub2)) ? '<td>'.$value->aff_sub2.'</td>' : '').'
                                  '.((isset($data->affsub3)) ? '<td>'.$value->aff_sub3.'</td>' : '').'
                                  '.((isset($data->affsub4)) ? '<td>'.$value->aff_sub4.'</td>' : '').'
                                  '.((isset($data->affsub5)) ? '<td>'.$value->aff_sub5.'</td>' : '').'
                                  '.((isset($data->plateform)) ? '<td>'.$value->os.'</td>' : '').'
                                  '.((isset($data->mobilcarrier)) ? '<td>'.$value->device.'</td>' : '').'
 
                            </tr>';
                          }

                return $table .= '</tbody>
                          </table>';
    }
    public function affoperationreport()
    {
      $offers_report = $this->offersreport();
      $smartlink_report = $this->smartlinkreport();
      return view('affiliate.operation-report',compact('offers_report','smartlink_report'));
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
  ////////////////adve reports//////////////////////
  public function advconversionreport()
    {
      $advertisers = $this->getuser(4);
      $adv_managers = $this->getrelatedmanagers($advertisers);
      $affiliates = $this->getuser(5);
      $aff_managers = $this->getrelatedmanagers($affiliates);
      $offers = $this->getalloffers();
      $timezones = $this->gettimezones();
      $countries = $this->getcountry();
      $getplatforms = $this->getplatform();

      return view('advertiser.conversion-report',compact('advertisers', 'adv_managers', 'managers','affiliates','aff_managers', 'offers','countries', 'timezones','getplatforms'));
    }

    public function advconversionreportgenerate(Request $request)
    {
      $data = json_decode($request->allform);
      $range1 = '';
      if(isset($data->daterange)){
        $explode = explode(" - ", $data->daterange);
        $startdate = $explode[0].' 00:00:00';
        $enddate = $explode[1].' 23:59:59';
        $range1 = " and s.updated_at BETWEEN '".$startdate."' AND '".$enddate."'";
      }

      $affil = "Select c.*,p.*, c.id as cid, s.id as sid, s.updated_at as convertiontime, c.updated_at as clicktime, c.ip as clicksip, c.id as clicksid, o.*, s.*
      from signups s LEFT JOIN clicks c on c.sub_id = s.sub_id
      Left Join parameters p on p.sub_id = s.sub_id
      Left Join offers o on o.id = s.offer_id
      Left Join offer_restrictions off_r on off_r.offer_id = o.id
      where s.status = 1 and o.adv_id = ".Auth::user()->id.$range1;
      //return $alldata = DB::select($affil);
      //return $request->allform;
      $affil .= " ORDER BY o.id ASC";

      $alldata = DB::select($affil);


      $table = '<table id="button_datatables" class="table display table-striped table-bordered">
                            <thead>
                                <tr>
                                  <th>NO.</th>
                                  '.((isset($data->coversiontime)) ? '<th>Coversion Time</th>' : '').'
                                  '.((isset($data->clicktime)) ? '<th>Click Time</th>' : '').'
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
                                  '.((isset($data->payout)) ? '<th>Payout</th>' : '').'
                                  '.((isset($data->amount)) ? '<th>Amount</th>' : '').'
                                  '.((isset($data->advsub1)) ? '<th>Adv Sub 1</th>' : '').'
                                  '.((isset($data->advsub2)) ? '<th>Adv Sub 2</th>' : '').'
                                  '.((isset($data->advsub3)) ? '<th>Adv Sub 3</th>' : '').'
                                  '.((isset($data->affsub1)) ? '<th>Aff Sub 1</th>' : '').'
                                  '.((isset($data->affsub2)) ? '<th>Aff Sub 2</th>' : '').'
                                  '.((isset($data->affsub3)) ? '<th>Aff Sub 3</th>' : '').'
                                  '.((isset($data->affsub4)) ? '<th>Aff Sub 4</th>' : '').'
                                  '.((isset($data->affsub5)) ? '<th>Aff Sub 5</th>' : '').'
                                  '.((isset($data->plateform)) ? '<th>Platform</th>' : '').'
                                  '.((isset($data->mobilcarrier)) ? '<th>Mobile Carrier</th>' : '').'
                                </tr>
                            </thead>
                        <tbody>';
                $counter = 1;
                foreach ($alldata as $value) {
                $table .= '<tr>
                               <td>'.$counter++.'</td>
                                   '.((isset($data->coversiontime)) ? '<td>'.$value->convertiontime.'</td>' : '').'
                                   '.((isset($data->clicktime)) ? '<td>'.$value->clicktime.'</td>' : '').'
                                   '.((isset($data->smartlinkcheck)) ? '<td>Smart Link</td>' : '').'
                                   '.((isset($data->offer)) ? '<td><a href="'.route('offers-detail', $value->offer_id).'">'.$value->offer_name.'</a></td>' : '').'
                                   '.((isset($data->country)) ? '<td>'.$value->country.'</td>' : '').'
                                   '.((isset($data->sourceid)) ? '<td>'.$value->sub_id.'</td>' : '').'
                                   '.((isset($data->clicksid)) ? '<td>'.$value->clicksid.'</td>' : '').'
                                   '.((isset($data->clicksip)) ? '<td>'.$value->clicksip.'</td>' : '').'
                                   '.((isset($data->conversionip)) ? '<td>'.$value->conversion_ip.'</td>' : '').'
                                   '.((isset($data->status)) ? '<td>'.$value->status.'</td>' : '').'
                                   '.((isset($data->postback)) ? '<td>'.$value->offer_postback.'</td>' : '').'
                                   '.((isset($data->referurl)) ? '<td>'.$value->reffer_link.'</td>' : '').'
                                  '.((isset($data->payout)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                  '.((isset($data->amount)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                  '.((isset($data->advsub1)) ? '<td>'.$value->adv_sub1.'</td>' : '').'
                                  '.((isset($data->advsub2)) ? '<td>'.$value->adv_sub2.'</td>' : '').'
                                  '.((isset($data->advsub3)) ? '<td>'.$value->adv_sub3.'</td>' : '').'
                                  '.((isset($data->affsub1)) ? '<td>'.$value->aff_sub1.'</td>' : '').'
                                  '.((isset($data->affsub2)) ? '<td>'.$value->aff_sub2.'</td>' : '').'
                                  '.((isset($data->affsub3)) ? '<td>'.$value->aff_sub3.'</td>' : '').'
                                  '.((isset($data->affsub4)) ? '<td>'.$value->aff_sub4.'</td>' : '').'
                                  '.((isset($data->affsub5)) ? '<td>'.$value->aff_sub5.'</td>' : '').'
                                  '.((isset($data->plateform)) ? '<td>'.$value->os.'</td>' : '').'
                                  '.((isset($data->mobilcarrier)) ? '<td>'.$value->device.'</td>' : '').'
 
                            </tr>';
                          }

                return $table .= '</tbody>
                          </table>';
    }

    public function generalreport(){
      $offers = Offer::where('adv_id', Auth::user()->id)->get();
      $timezones = $this->gettimezones();
      $countries = $this->getcountry();
      $platforms = $this->getplatform();

      return view('advertiser.general-report',compact('offers', 'timezones', 'countries', 'platforms'));
    }

    public function advgeneralreportgenerate(Request $request)
    {
      $data = json_decode($request->allform);

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

      $generalquery = "Select o.*, off_r.platform_targeting, off_r.mobile_carrier_targeting
      , (SELECT COUNT(clc.click) FROM clicks clc WHERE clc.offer_id = o.id and status = 1 ".$range1.") as sumclicks
      , (SELECT COUNT(DISTINCT uc.ip) FROM clicks uc WHERE  uc.offer_id = o.id and status = 1 ".$range2.") as uniquesumclicks
      , (SELECT COUNT(s.signup) FROM signups s WHERE s.offer_id = o.id and status = 1 ".$range3.") as sumsignup
      from offers o
      Left Join offer_restrictions off_r on off_r.offer_id = o.id
      where o.adv_id = ".Auth::user()->id;

      //return $alldata = DB::select($generalquery);
      if(isset($data->aff_manager_id)){
        if(is_array($data->aff_manager_id)){
          $aids = join("','",$data->aff_manager_id);   
          $generalquery .= " and aff_manager.id IN ('$aids')";
        }else{
          $generalquery .= " and aff_manager.id = ".$data->aff_manager_id;
        }
      }
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
      if(isset($data->geo_targeting)){
        if(is_array($data->geo_targeting)){
          $generalquery .= " AND (";
          $num = 0;
          foreach ($data->geo_targeting as $target) {
            if ($num == 0) {
              $generalquery .= "off_r.geo_targeting LIKE '%".$target."%'";
              $num++;
            }
            $generalquery .= "OR off_r.geo_targeting LIKE '%".$target."%'";
          }
          $generalquery .= ")";
        }else{
          $generalquery .= " and off_r.geo_targeting LIKE '%".$data->geo_targeting."%'";
        }
      }

      if(isset($data->timezone) && $data->timezone != "null"){
        $generalquery .= " and off_r.caps_timezone = '".$data->timezone."'";
      }

      if(isset($data->platform_name)){
        if(is_array($data->platform_name)){
          $generalquery .= " AND (";
          $num = 0;
          foreach ($data->platform_name as $target) {
            if ($num == 0) {
              $generalquery .= "off_r.platform_targeting LIKE '%".$target."%'";
              $num++;
            }
            $generalquery .= "OR off_r.platform_targeting LIKE '%".$target."%'";
          }
          $generalquery .= ")";
        }else{
          $generalquery .= " and off_r.platform_targeting LIKE '%".$data->platform_name."%'";
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
                if (!empty($alldata)) {
                foreach ($alldata as $value) {
                //$managername = User::select('fname')->where('id', $value->managerid)->first();
                $amount = $value->revenue * $value->sumsignup;
                $payout = $value->payout * $value->sumsignup;
                $profit = $amount - $payout;

                $platformss = json_decode($value->platform_targeting);
                $mobile_carrier = json_decode($value->mobile_carrier_targeting);
                $cr = 00.0;
                $earn_per_click = 0.00;
                if ($value->sumclicks != 0) {
                  $cr = round((($value->sumsignup / $value->sumclicks) * 100), 1);
                  $earn_per_click = round(($profit / $value->sumclicks),2);
                }
                $table .= '<tr>
                               <td>'.$counter++.'</td>
                                   '.((isset($data->advertiser)) ? '<td><a href="'.route('advertiser.show', $value->adv_id).'">'.$value->adv_name.'</a></td>' : '').'
                                   '.((isset($data->affiliate)) ? '<td><a href="'.route('affiliate.show', $value->user_id).'">'.$value->fname.'</a></td>' : '').'
                                   '.((isset($data->adv_manager)) ? '<td>'.$value->adv_manager_name.'</td>' : '').'
                                   '.((isset($data->aff_manager)) ? '<td>'.$value->aff_manager_name.'</td>' : '').'
                                   '.((isset($data->smartlink)) ? '<td>Smart Link</td>' : '').'
                                   '.((isset($data->offer)) ? '<td><a href="'.route('offers-detail', $value->id).'">'.$value->offer_name.'</a></td>' : '').'
                                   '.((isset($data->country)) ? '<td>Country</td>' : '').'
                                   '.((isset($data->sub_id)) ? '<td>Source ID</td>' : '').'
                                   '.((isset($data->clicks)) ? '<td>'.$value->sumclicks.'</td>' : '').'
                                   '.((isset($data->unique_clicks)) ? '<td>'.$value->uniquesumclicks.'</td>' : '').'
                                   '.((isset($data->currency)) ? '<td>USD</td>' : '').'
                                   '.((isset($data->revenue)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                   '.((isset($data->conversions)) ? '<td>'.$value->sumsignup.'</td>' : '').'
                                   '.((isset($data->payout)) ? '<td>$'.$value->revenue.'</td>' : '').'
                                   '.((isset($data->amount)) ? '<td>$'.$amount.'</td>' : '').'
                                   '.((isset($data->profit)) ? '<td>$'.$profit.'</td>' : '').' 
                                   '.((isset($data->platform)) ? '<td>'.(($platformss != null) ? implode (", ",$platformss) : '').'</td>' : '').' 
                                   '.((isset($data->mobile_carrier)) ? '<td>'.(($mobile_carrier != null) ? implode (", ",$mobile_carrier) : '').'</td>' : '').' 
                                   '.((isset($data->click_rate)) ? '<td>'.$cr.'%</td>' : '').' 
                                   '.((isset($data->earn_per_click)) ? '<td>$'.$earn_per_click.'</td>' : '').' 
                            </tr>';
                          }
                }else{
                  $table .= '<tr>
                                       <td colspan="100" style="text-align: center;">No Result</td>
                                    </tr>';
                }
              

                $table .= '</tbody>
                          </table>';

         return $table; 
    }
}
