<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\SignUpNotification;
use App\Offer;
use App\AssignOffers;
use App\Invoices;
use DB;
use Auth;
use App\AffiliatePayout;
use App\Templates;
class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function affiliatelist()
    {

        // $mailText = '<p style="color: red;">Thank you for registering as our affiliate.</p><br /><br />Your account {email} has been submitted for approval. You will receive an email notification on your application status soon.';
        // $email = 'mohsys768@gmail.com';
        // $user = new User();
        // $convertedText = str_replace("{email}", $email, $mailText);
        // $user->email = $email;   // This is the email you want to send to.
        // $user->notify(new SignUpNotification('Subject', 'affiliate', $convertedText, 'Click to Login', 'http://seipkon.ytrk.us', ''));
        $affilates = User::Where('roles_id',5)->WhereIn('status',[1,2])->get();
        return view('admin.affiliates',compact('affilates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->getcountry();
        $managers = $this->getuser(3);
        return view('admin.affiliate-create',compact('countries','managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliateinvoices()
    {
        $invoices = Invoices::where('admin_id', Auth::user()->id)->get();
        return view('admin.affiliate-invoices', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliateinvoicescreate()
    {
        $currencies = $this->getcurrency();
        $timezones = $this->gettimezones();
        $affiliates = $this->getuser(5);
        return view('admin.affiliate-invoice-create',compact('currencies', 'timezones', 'offers', 'affiliates'));
    }

    public function affiliateinvoicesedit($id)
    {
        $offeredit = Invoices::find($id);
        return view('admin.affiliate-invoice-edit',compact('offeredit'));
    }

    public function edit($id){
        $affiliate = User::Where('roles_id', 5)->Where('id',$id)->first();
        $countries = $this->getcountry();
        $managers = $this->getuser(3);
        return view('admin.affiliate-create',compact('countries','managers','affiliate'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliateoffersdetails(Request $request)
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

    public function affiliateupdateclicks(Request $request, $id){
        return $request->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliateaddinvoices(Request $request)
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

    public function affiliateupdateinvoices(Request $request, $id){

        $request->merge(['name' => json_encode($request->name)]);
        $request->merge(['clicks' => json_encode($request->clicks)]);
        $request->merge(['signup' => json_encode($request->signup)]);
        $request->merge(['amount' => json_encode($request->amount)]);

        $update = DB::table('invoices')->where('id', $id)
            ->update(['status' => $request->status, 'memo' => $request->memo, 'invoiceno' => $request->invoice_no, 'offer_names' => $request->name, 'offer_clicks' => $request->clicks, 'offer_signups' => $request->signup, 'offer_amountsa' => $request->amount, 'note' => $request->note]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function affiliatedetail(Request $request){
        $user = User::with('role')->where('id', $request->userid)->first();
        $offers = Offer::leftJoin('assignoffers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->where('assignoffers.user_id', $request->userid)
                        ->get();
        $msg = '<option disabled="disabled" selected="selected">Select Offer</option>';
        foreach ($offers as $offer) {
            $msg .= '<option value="'.$offer->offer_id.'">'.$offer->offer_name.'</option>';
        }
        $response = array(
            'user' => $user,
            'msg' => $msg,
        );
        return \Response::json($response);

    }
    public function affiliatepostback()
    {
        $postbacks = AssignOffers::leftJoin('users', 'users.id', '=', 'assignoffers.user_id')
                        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->select('users.fname','users.lname','assignoffers.*','offers.offer_name')
                        ->get();
        return view('admin.affiliate-postback',compact('postbacks'));
    }    
    public function createaffiliatepostback()
    {
        $affiliates = User::Where('roles_id',5)->where('status', 1)->get();
        $offers = Offer::where('status', 1)->get();
        return view('admin.postback-create',compact('affiliates','offers'));
    }
    public function createpostback(Request $request)
    {
        //return $request->all();
        $assignoffers = new AssignOffers;
        $assignoffers->user_id = $request->user_id;
        $assignoffers->postback_type = $request->postback_type;
        $assignoffers->smartlink_id = $request->smartlink_id;
        $assignoffers->offer_id = $request->offer_id;
        $assignoffers->postback_protocol = $request->postback_protocol;
        $assignoffers->postbacklink = $request->postbacklink;
        $assignoffers->postbacklink = $request->postbacklink;
        $assignoffers->admin_id = Auth::user()->id;
        $assignoffers->status = '1';
        $assignoffers->save();
        
        if (empty($assignoffers) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }
    public function userpostbackcreate()
    {
         $offers = AssignOffers::leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')->where('assignoffers.status', 1)->Where('assignoffers.postbacklink', '!=', '')->where('assignoffers.user_id', Auth::user()->id)->get();
        return view('affiliate.postback-create',compact('offers'));
    }
    public function editpostback($id)
        {
            $assignoffers = Assignoffers::Where('id',$id)->first();
            $affiliates = User::Where('roles_id',5)->where('status', 1)->get();
            $offers = Offer::where('status', 1)->get();
            return view('admin.postback-create',compact('affiliates','offers','assignoffers'));
        }
    public function postbackupdate($id,Request $request)
    {
        //return $request->all();
        $offer_id = null;
        $smartlink_id = null;
        if ($request->postback_type == 'offer') {
            $offer_id = $request->offer_id;
        } elseif(($request->postback_type == 'smartlink') ) {
            $smartlink_id = $request->smartlink_id;
        } 
        $update = AssignOffers::where('id', $id)
            ->update(['user_id' => $request->user_id,'offer_id' => $offer_id,'smartlink_id' => $smartlink_id,'postback_type' => $request->postback_type,'postback_protocol' => $request->postback_protocol,'postbacklink' => $request->postbacklink,'status' => $request->status]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $affilate = new User;
        $affilate->fname = $request->fname;
        $affilate->lname = $request->lname;
        $affilate->email = $request->email;
        $affilate->contactno = $request->mobile;
        $affilate->imid = $request->imtype;
        $affilate->imaccount = $request->imaccount;
        $affilate->country = $request->country;
        $affilate->website = $request->website;
        $affilate->company = $request->company;
        $affilate->managerid = $request->manager;
        $affilate->password = bcrypt($request->password);
        $affilate->tire = $request->tire;
        $affilate->roles_id = '5';
        $affilate->admin_id = Auth::user()->id;
        $affilate->save();
        
        if (empty($affilate) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
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
        $affilates = User::Where('roles_id', 5)->Where('id',$id)->first();
        $managers = User::Where('id',$affilates->managerid)->first();
        $payouts = User::with('assignoffers')->Where('id',$id)->first();
        $postbacks = User::leftJoin('assignoffers', 'users.id', '=', 'assignoffers.user_id')
                        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->where('assignoffers.user_id', $id)
                        ->select('users.fname','users.lname','assignoffers.*','offers.offer_name')
                        ->get();
        return $approvedoffers = Offer::with('restrictions')
                            ->select('offers.*', 'assignoffers.user_id',  DB::raw("IFNULL(sum(clicks.click),0) as sumclicks"),
                                DB::raw("IFNULL(sum(signups.signup),0) as sumsignups"))
                        ->leftJoin('assignoffers', 'assignoffers.offer_id', 'offers.id')
                        ->leftJoin('signups', function($joinsign)
                            {
                                $joinsign->on('signups.affiliate_id', '=', 'assignoffers.user_id');
                                $joinsign->on('signups.offer_id', '=', 'assignoffers.offer_id');
                            })
                        ->leftJoin('clicks', function($join)
                            {
                                $join->on('clicks.affiliate_id', '=', 'assignoffers.user_id');
                                $join->on('clicks.offer_id', '=', 'assignoffers.offer_id');
                            })
                        ->where('assignoffers.user_id', $id)
                        ->groupBy('assignoffers.offer_id')->get();
        return view('admin.affiliate-detail-page',compact('affilates','managers','payouts','postbacks', 'approvedoffers'));
    }
    public function aproveaffiliate($id)
    {
        $update = DB::table('users')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
    public function pendingaffiliates()
    {
        $affiliates = User::Where('roles_id',5)->WhereIn('status',[0,3])->get();
        return view('admin.affiliates-pending',compact('affiliates'));
    }
    public function aproveaffiliates($id)
    {
        $update = User::where('id', $id)
            ->update(['status' => 1]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $affiliate = User::find($id);
            $email = $affiliate->email;
            $subject = 'You are Approved';
            $mailText = $this->getDefTemplate('affapproval');
            $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'affapproval')->first();
            $emailtype = 'affiliate';
            if (!empty($dbmail)) {
                $subject = $dbmail->email_subject;
                $mailText = $dbmail->emailstring;
                $emailtype = '';
            }
            $mailText = $this->setParameters($mailText, $id, 0);
            $user = new User();
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Click to Login', 'http://seipkon.ytrk.us/login', ''));
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function affiliatepayouts(){
        $payouts = AffiliatePayout::leftJoin('users', 'users.id', 'affiliate_payout.affiliate_id')
        ->leftJoin('offers', 'offers.id', 'affiliate_payout.offer_id')
        ->select('affiliate_payout.*', 'users.fname', 'offers.revenue', 'offers.payout_type', 'offers.offer_name')->get();
        return view('admin.affiliate-payouts', compact('payouts'));
    }

    public function affiliatepayoutcreate(){
        $affiliates = User::Where('roles_id',5)->Where('status',1)->get();
        $offers = Offer::with('restrictions')->get();
        return view('admin.affiliate-payouts-create',compact('affiliates','offers'));
    }

    public function editpayout(Request $request)
    {
        $update = DB::table('affiliate_payout')->where('id', $request->pk)
            ->update(['rate' => $request->value]);
        return 'success';
    }

    public function deletepayout($id)
    {
        $isdeleted = AffiliatePayout::where('id', $id)->delete();
        if (empty($isdeleted) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function affiliatepayoutsave(Request $request){
        $check = AffiliatePayout::isDuplicated($request->all());
        if ($check == 'true') {
            return redirect()->back()->with('failed','Already Exist');
        }else{   
            $payout = new AffiliatePayout;
            $payout->offer_id = $request->offerid;
            $payout->affiliate_id = $request->affiliateid;
            $payout->rate = $request->payout;
            $payout->save();
            if (empty($payout) ) {
                return redirect()->back()->with('fail', 'Something Wrong!');
            } else {
                return redirect()->back()->with('success','Succfully Added!');
            }
        }
    }

    public function offerrate(Request $request)
    {
        $offers = Offer::with('restrictions')->where('id', $request->offerid)->first();
        $response = array(
            'msg' => '<label class="control-label">Payout Type : '.$offers->payout_type.'</label></br>
                                                   <label class="control-label">Offer Payout : $'.$offers->payout.'</label>',
        );
        return \Response::json($response);
    }

    public function getinvoice($id){
       $invoice = Invoices::Where('id',$id)->first();
       $user = User::Where('id',$invoice->affiliate_id)->first();
       $admin = User::Where('id',$invoice->admin_id)->first();
        return view('admin.invoice',compact('invoice','user','admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getaffiliatepostback($id)
    {
        $affiliates = User::Where('roles_id',5)->where('status', 1)->get();
        $offers = Offer::where('status', 1)->get();
        $postbacks = User::leftJoin('assignoffers', 'users.id', '=', 'assignoffers.user_id')
                        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->where('assignoffers.id', $id)
                        ->select('users.fname','users.lname','assignoffers.*','offers.offer_name')
                        ->get();
        return view('admin.postback-create',compact('affiliates','offers','postbacks'));
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
        $update = DB::table('users')
            ->where('id', $id)
            ->update(['fname' => $request->fname, 'lname' => $request->lname, 'email' => $request->email, 'contactno' => $request->mobile, 'imid' => $request->imtype, 'imaccount' => $request->imaccount, 'country' => $request->country, 'website' => $request->website, 'company' => $request->company, 'managerid' => $request->manager, 'password' => bcrypt($request->password), 'securitycode' => ($request->security == 'yes') ? $request->scode : "", 'status' => $request->status]);
        
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
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
    public function deletepostback($id)
    {
        $delete = AssignOffers::where('id',$id)->delete();
        if (empty($delete) ) {
                return redirect()->back()->with('fail', 'Something Wrong!');
            } else {
                return redirect()->back()->with('success','Succfully Added!');
            }
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
            $affilate = User::find($id);
            $email = $affilate->email;
            $subject = 'You have been blocked';
            $mailText = $this->getDefTemplate('affblock');
            $emailtype = 'affiliate';
            $user = new User();
            $mailText = $this->setParameters($mailText, $id, 0);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Help and Support Center', 'http://seipkon.ytrk.us/support', ''));
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function unblock($id){
        $unblock = User::Where('id', $id)->update(['status' => 1]);
        if (empty($unblock) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $affilate = User::find($id);
            $mailText = $this->getDefTemplate('affunblock');
            $mailText = $this->setParameters($mailText, $id, 0);
            $user = new User();
            $user->email = $affilate->email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification('Congo, You have been Unblocked', 'affiliate', $mailText, 'Login Here', 'http://seipkon.ytrk.us/login', ''));
            return redirect()->back()->with('success','Succfully Added!');
        }
    }

    public function rejected($id){
        $rejected = User::Where('id', $id)->update(['status' => 3]);
        if (empty($rejected) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            $affilate = User::find($id);
            $email = $affilate->email;
            $subject = 'Sorry to inform you that, Your application have been Rejected';
            $mailText = $this->getDefTemplate('affrejection');
            $dbmail = Templates::where('admin_id', Auth::user()->id)->where('email_type', 'affrejection')->first();
            $emailtype = 'affiliate';
            if (!empty($dbmail)) {
                $subject = $dbmail->email_subject;
                $mailText = $dbmail->emailstring;
                $emailtype = '';
            }
            $mailText = $this->setParameters($mailText, $id, 0);
            $user = new User();
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification($subject, $emailtype, $mailText, 'Help and Supports', 'http://seipkon.ytrk.us/support', ''));
            return redirect()->back()->with('success','Succfully Rejected!');
        }
    }
///////////////Affilaiates user Dashboard/////////////////////////
    public function affiliateoffers()
    {
        $offers = Offer::WhereIn('offer_approval',[1,2])->get();
        return view('affiliate.all-offers',compact('offers'));
    }
    public function approveoffers()
    { 
        $offers = AssignOffers::leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->leftJoin('offer_restrictions', 'offer_restrictions.id', '=', 'offers.id')
                        ->where('user_id', Auth::user()->id)
                        ->where('assignoffers.status','!=', 0)
                        ->get();
        return view('affiliate.all-offers',compact('offers'));
    }
    public function userpostback($name)
    {
         $postbacks = AssignOffers::leftJoin('users', 'users.id', '=', 'assignoffers.user_id')
                        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->select('users.fname','users.lname','assignoffers.*','offers.offer_name')
                        ->where('user_id', Auth::user()->id)
                        ->get();
        return view('affiliate.postback',compact('postbacks'));
    }  
    public function offerdetail($name, $id){
        $offer = Offer::with('restrictions')->where('id', $id)->first();
        $users = User::leftJoin('assignoffers', 'users.id', '=', 'assignoffers.user_id')
                        ->leftJoin('offers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->where('assignoffers.user_id', Auth::user()->id)
                        ->where('assignoffers.offer_id', $id)
                        ->select('users.fname','users.lname','assignoffers.*','offers.offer_name')
                        ->first();
        return view('affiliate.offers-detail-page', compact('offer','users'));
    }
    public function saveuserpostback(Request $request)
    {
        $admin_id = $this->getsubdomain();
        $assignoffers = new AssignOffers;
        $assignoffers->user_id = Auth::user()->id;
        $assignoffers->postback_type = $request->postback_type;
        $assignoffers->smartlink_id = $request->smartlink_id;
        $assignoffers->offer_id = $request->offer_id;
        $assignoffers->postback_protocol = $request->postback_protocol;
        $assignoffers->postbacklink = $request->postbacklink;
        $assignoffers->postbacklink = $request->postbacklink;
        $assignoffers->admin_id = $admin_id;
        $assignoffers->status = '0';
        $assignoffers->save();
        
        if (empty($assignoffers) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
        
        return view('affiliate.postback-create',compact('offers'));
    }
    public function createuserpostback($name, $id)
    {
        $assignoffers = Assignoffers::Where('id',$id)->first();
        $offers = AssignOffers::leftjoin('offers', 'offers.id', 'assignoffers.offer_id')->where('assignoffers.user_id', Auth::user()->id)->where('assignoffers.status', 1)->get();
        return view('affiliate.postback-create',compact('assignoffers','offers'));
    }

    public function userpostbackupdate($name,$id,Request $request)
    {
        //return $request->all();
        //return $id;
        $offer_id = null;
        $smartlink_id = null;
        if ($request->postback_type == 'offer') {
            $offer_id = $request->offer_id;
        } elseif(($request->postback_type == 'smartlink') ) {
            $smartlink_id = $request->smartlink_id;
        } 
        $update = AssignOffers::where('id', $id)
            ->update(['smartlink_id' => $smartlink_id,'postback_type' => $request->postback_type,'postback_protocol' => $request->postback_protocol,'postbacklink' => $request->postbacklink]);
        if (empty($update) ) {
            return redirect()->back()->with('fail', 'Something Wrong!');
        } else {
            return redirect()->back()->with('success','Succfully Added!');
        }
    }
     public function applyoffer($name, $oid)
    {
        $admin_id = $this->getsubdomain();
        $offer = Offer::find($oid);
        $user = User::where('roles_id', 5)->where('id', Auth::user()->id)->first();

        $assignoffer = new AssignOffers;
        $assignoffer->user_id = $user->id;
        $assignoffer->offer_id = $offer->id;
        // $assignoffer->postbacklink = url('/').'/post/'.$user->id.'/'.$offer->id;
        $assignoffer->usertracklink = url('/').'/link/'.$user->id.'/'.$offer->id;
        $assignoffer->admin_id = $admin_id;
        $assignoffer->postback_type = 'offer';
        $assignoffer->postback_protocol = 'postbackurl';
        $assignoffer->status = 0;
        $assignoffer->save();
        if(!empty($assignoffer)){
            return redirect()->back()->with('success','Succfully Added!');
        }else{
            return redirect()->back()->with('fail', 'Something Wrong!');
        }
    }

}
