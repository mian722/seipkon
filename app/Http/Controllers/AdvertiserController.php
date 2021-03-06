<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Offer;
use App\Templates;
use App\Invoices;
use App\Clicks;
use App\Signup;
use App\AssignOffers;
use Carbon\Carbon;
use DB;
use Auth;
use App\Notifications\SignUpNotification;  

class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $start = Carbon::now()->startOfDay();
        $end = Carbon::now()->endOfDay();
         $date = [];
        while ($start->lte($end)) {
            $date[] = $start->copy()->format('Y-m-d H:i');
            //$dates[] = $this->chartdata($date);
            $start->addHour();
        }
        $clicks = [];
        foreach ($date as $value) {
          $start = Carbon::parse($value)->startOfhour();
          $end = Carbon::parse($value)->endOfhour();
          $clicks[] = clicks::leftjoin('offers','offers.id','clicks.offer_id')->where('offers.adv_id',Auth::user()->id)->whereBetween('clicks.created_at', [$start,$end])->count();
        }
        $signups = [];
        foreach ($date as $value) {
          $start = Carbon::parse($value)->startOfhour();
          $end = Carbon::parse($value)->endOfhour();
          $signups[] = signup::leftjoin('offers','offers.id','signups.offer_id')->where('offers.adv_id',Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->count();
        }
        $earning = [];
        foreach ($date as $value) {
          $start = Carbon::parse($value)->startOfhour();
          $end = Carbon::parse($value)->endOfhour();
          $earning[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('offers.adv_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.revenue * signups.signup'));
        }
      $clicks = clicks::leftjoin('offers','offers.id','clicks.offer_id')->where('offers.adv_id',Auth::user()->id)->count();
      $signups = signup::leftjoin('offers','offers.id','signups.offer_id')->where('offers.adv_id',Auth::user()->id)->count();
      $activeoffers = offer::where('adv_id', Auth::user()->id)->count();
      $pendingoffers = offer::where('adv_id', Auth::user()->id)->where('status',0)->count();
        return view('advertiser.index',compact('clicks','signups','activeoffers','pendingoffers','date','earning'));

        
    }

    public function daterangepicker2(Request $request)
    {
        //return $request->from;
        $start = Carbon::parse($request->from)->startOfDay();
        $end = Carbon::parse($request->to)->endOfDay();
        $date = [];
        $clicks = [];
        $signups = [];
        $earning = [];
        $tclicks = clicks::where('adv_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
      $tsignups = signup::where('adv_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
     $tearning = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->where('signups.adv_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
        if ($request->from == $request->to) {
          while ($start->lte($end)) {
            $date[] = $start->copy()->format('Y-m-d H:i');
            //$dates[] = $this->chartdata($date);
            $start->addHour();
          }
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $clicks[] = clicks::where('adv_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $signups[] = signup::where('adv_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $earning[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.adv_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
         
        } else {
          while ($start->lte($end)) {
            $date[] = $start->copy()->format('Y-m-d');
            //$dates[] = $this->chartdata($date);
            $start->addDay();
          }

          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $clicks[] = clicks::where('adv_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $signups[] = signup::where('adv_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $earning[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.adv_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
        }
       
      // return $date;
        
       return json_encode(array($clicks,$signups,$date,$earning,$tclicks,$tsignups,$tearning));
    }

    public function advertiserslist()
    {
        $advertisers = User::Where('roles_id', 4)->where('status','!=', 0)->get();
        return view('admin.advertisers', compact('advertisers'));
    }

    public function pendingadvertisers()
    {
        $advertisers = User::Where('roles_id',4)->Where('status','!=', 1)->get();
        return view('admin.advertisers-pending',compact('advertisers'));
    }

    public function getadvertiser()
    {
        $countries = $this->getcountry();
        $managers = $this->getuser(3);
        return view('admin.advertisers-create',compact('countries','managers'));
    }

    public function createadvertiser(Request $request)
    {
        $advertiser = new User;
        $advertiser->fname = $request->fname;
        $advertiser->lname = $request->lname;
        $advertiser->email = $request->email;
        $advertiser->contactno = $request->mobile;
        $advertiser->imid = $request->imtype;
        $advertiser->imaccount = $request->imaccount;
        $advertiser->country = $request->country;
        $advertiser->website = $request->website;
        $advertiser->company = $request->company;
        $advertiser->managerid = $request->manager;
        $advertiser->password = bcrypt($request->password);
        $advertiser->securitycode = ($request->security == 'yes') ? $request->scode : "" ;
        $advertiser->status = $request->status;
        $advertiser->roles_id = '4';
        $advertiser->admin_id = Auth::user()->id;
        $advertiser->save();
        
        if (empty($advertiser) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function aproveadvertiser($id)
    {
        $update = DB::table('users')
            ->where('id', $id)
            ->update(['status' => 1]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $affiliate = User::find($id);
            $email = $affiliate->email;
            $user = new User();
            $subject = 'You are Approved';
            $mailText = $this->getDefTemplate('advapproval');
            $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'advapproval')->first();
            $emailtype = 'advertiser';
            if (!empty($dbmail)) {
                $subject = $dbmail->email_subject;
                $mailText = $dbmail->emailstring;
                $emailtype = '';
            }
            $mailText = str_replace("{email}", $email, $mailText);
            $mailText = str_replace("{admin_name}", Auth::user()->fname, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification($subject,$emailtype, $mailText, 'Click to Login', 'http://seipkon.ytrk.us/login', ''));
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function show($id){
        $advertiser = User::Where('roles_id', 4)->Where('id',$id)->first();
        $managers = User::Where('id',$advertiser->managerid)->first();
        $offer = Offer::Where('adv_id',$id)->first();
        return view('admin.advertiser-detail-page', compact('advertiser','managers','offer'));
    }

    public function edit($id){
        $advertiser = User::Where('roles_id', 4)->Where('id',$id)->first();
        $countries = $this->getcountry();
        $managers = $this->getuser(3);
        return view('admin.advertisers-create',compact('countries','managers','advertiser'));
    }

    public function delete($id){
        $deleted = User::Where('id', $id)->delete();
        if (empty($deleted) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function block($id){
        $blocked = User::Where('id', $id)->update(['status' => 2]);
        if (empty($blocked) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $advertiser = User::find($id);
            $mailText = $this->getDefTemplate('advrejection');
            $email = $advertiser->email;
            $user = new User();
            $mailText = str_replace("{email}", $email, $mailText);
            $mailText = str_replace("{admin_name}", Auth::user()->fname, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification('You have been blocked','advertiser', $mailText, 'Help and Support Center', 'http://seipkon.ytrk.us/support', ''));
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function unblock($id){
        $unblock = User::Where('id', $id)->update(['status' => 1]);
        if (empty($unblock) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $advertiser = User::find($id);
            $mailText = $this->getDefTemplate('advapproval');
            $email = $advertiser->email;
            $user = new User();
            $mailText = str_replace("{email}", $email, $mailText);
            $mailText = str_replace("{admin_name}", Auth::user()->fname, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification('Congo, You have been Unblocked', 'advertiser', $mailText, 'Login Here', 'http://seipkon.ytrk.us/login', ''));
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function update(Request $request, $id){
        $update = DB::table('users')
            ->where('id', $id)
            ->update(['fname' => $request->fname, 'lname' => $request->lname, 'email' => $request->email, 'contactno' => $request->mobile, 'imid' => $request->imtype, 'imaccount' => $request->imaccount, 'country' => $request->country, 'website' => $request->website, 'company' => $request->company, 'managerid' => $request->manager, 'password' => bcrypt($request->password), 'securitycode' => ($request->security == 'yes') ? $request->scode : "", 'status' => $request->status]);
        
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function rejected($id){
        $rejected = User::Where('id', $id)->update(['status' => 3]);
        if (empty($rejected) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $advertiser = User::find($id);
            $email = $advertiser->email;
            $subject = 'Sorry to inform you that, Your application have been Rejected';
            $mailText = $this->getDefTemplate('advrejection');
            $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'advrejection')->first();
            $emailtype = 'advertiser';
            if (!empty($dbmail)) {
                $subject = $dbmail->email_subject;
                $mailText = $dbmail->emailstring;
                $emailtype = '';
            }
            $user = new User();
            $mailText = str_replace("{email}", $email, $mailText);
            $mailText = str_replace("{admin_name}", Auth::user()->fname, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Help and Supports', 'http://seipkon.ytrk.us/support', ''));
            return redirect()->back()->with('success','Succfully Rejected!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advertiserinvoices()
    {
         $invoices = Invoices::where('admin_id', Auth::user()->id)->where('user_role_id', 4)->get();
        return view('admin.advertiser-invoices', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advertiserinvoicescreate()
    {
        $currencies = $this->getcurrency();
        $timezones = $this->gettimezones();
        $advertisers = $this->getuser(4);
        return view('admin.advertiser-invoice-create',compact('currencies', 'timezones', 'offers', 'advertisers'));
    }

    public function advertiserinvoicesedit($id)
    {
        $offeredit = Invoices::find($id);
        return view('admin.advertiser-invoice-edit',compact('offeredit'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advertiseroffersdetails(Request $request)
    {
        $offers = Offer::with('restrictions')->where('id', $request->offerid)->first();
        $response = array(
            'msg' => '<tr>
                         <td><input type="hidden" class="name" name="name[]" value="'.$offers->id.'" />'.$offers->offer_name.'</td>
                         <td>
                                 <input type="hidden" class="clicks" name="clicks[]" value="0" />
                              <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                 <input type="hidden" name="_token" value="'.csrf_token().'" />
                                 <a href="#" id="clicks" class="tclicks" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">0</a>
                              </form>
                         </td>
                         <td>
                                 <input type="hidden" class="signups" name="signup[]" value="0" />
                              <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                 <input type="hidden" name="_token" value="'.csrf_token().'" />
                                 <a href="#" id="signup" class="tsignup" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">0</a>
                              </form>
                         </td>
                         <td>
                                 <input type="hidden" class="amounts" name="amount[]" value="0" />
                              <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                 <input type="hidden" name="_token" value="'.csrf_token().'" />
                                 <a href="#" id="amount" class="tamount" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">0</a>
                              </form>
                         </td>
                         <td><span id="deloffer" class="btn btn-danger deloffer"><input type="hidden" value="'.$request->offerid.'" /><i style="font-size: 18px;" class="fa fa-trash"></i></span></td>
                      </tr>',
        );
        return \Response::json($response);
    }

    public function advertiserupdateclicks(Request $request, $id){
        return $request->all();
    }

    public function advertiserdetail(Request $request){
        $user = User::with('role')->where('id', $request->userid)->first();
        $offers = Offer::where('offers.adv_id', $request->userid)
                        ->get();
        $msg = '<option disabled="disabled" selected="selected">Select Offer</option>';
        foreach ($offers as $offer) {
            $msg .= '<option value="'.$offer->id.'">'.$offer->offer_name.'</option>';
        }
        $response = array(
            'user' => $user,
            'msg' => $msg,
        );
        return \Response::json($response);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advertisersinvoicesedit(Request $request)
    {
        //return Auth::user()->id;
        $request->merge(['name' => json_encode($request->name)]);
        $request->merge(['clicks' => json_encode($request->clicks)]);
        $request->merge(['signup' => json_encode($request->signup)]);
        $request->merge(['amount' => json_encode($request->amount)]);

        $invoices = new Invoices;
        $invoices->invoiceno = $request->invoice_no;
        $invoices->affiliate_id = $request->affiliate_id;
        $invoices->status = $request->status;
        $invoices->currency = $request->currency;
        $invoices->timezone = $request->timezone;
        $invoices->daterange = $request->daterange;
        $invoices->memo = $request->memo;
        $invoices->offer_names = $request->name;
        $invoices->offer_clicks = $request->clicks;
        $invoices->offer_signups = $request->signup;
        $invoices->offer_amounts = $request->amount;
        $invoices->note = $request->note;
        $invoices->admin_id = Auth::user()->id;
        $invoices->save();
        
        if (empty($invoices) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function advertiserupdateinvoices(Request $request, $id){

        $request->merge(['name' => json_encode($request->name)]);
        $request->merge(['clicks' => json_encode($request->clicks)]);
        $request->merge(['signup' => json_encode($request->signup)]);
        $request->merge(['amount' => json_encode($request->amount)]);

        $update = DB::table('invoices')->where('id', $id)
            ->update(['status' => $request->status, 'memo' => $request->memo, 'invoiceno' => $request->invoice_no, 'offer_names' => $request->name, 'offer_clicks' => $request->clicks, 'offer_signups' => $request->signup, 'offer_amounts' => $request->amount, 'note' => $request->note]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

///////////////Advertiser user Dashboard/////////////////////////
    public function advertiseroffers(){
        $offers = Offer::with('restrictions')->Where('adv_id', Auth::user()->id)->get();
        return view('advertiser.all-offers', compact('offers'));
    }
}
