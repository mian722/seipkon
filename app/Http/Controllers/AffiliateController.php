<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Offer;
use App\Invoices;
use DB;
use Auth;
use App\AffiliatePayout;
class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affilates = User::Where('roles_id',5)->where('status', 1)->get();
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
        $managers = $this->getmanagers();
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
        $affiliates = $this->getaffiliates();
        return view('admin.affiliate-invoice-create',compact('currencies', 'timezones', 'offers', 'affiliates'));
    }

    public function affiliateinvoicesedit($id)
    {
        $offeredit = Invoices::find($id);
        return view('admin.affiliate-invoice-edit',compact('offeredit'));
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
            ->update(['status' => $request->status, 'memo' => $request->memo, 'invoiceno' => $request->invoice_no, 'offer_names' => $request->name, 'offer_clicks' => $request->clicks, 'offer_signups' => $request->signup, 'offer_amounts' => $request->amount, 'note' => $request->note]);
        return redirect()->back();
    }

    public function affiliatedetail(Request $request){
        $user = User::with('role')->where('id', $request->userid)->first();
        $offers = Offer::leftJoin('assignoffers', 'offers.id', '=', 'assignoffers.offer_id')
                        ->where('assignoffers.affiliate_id', $request->userid)
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
        
    public function createaffiliatepostback()
    {
        $affiliates = User::Where('roles_id',5)->where('status', 1)->get();
        $offers = Offer::where('status', 1)->get();
        return view('admin.postback-create',compact('affiliates','offers'));
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
        $affilates = User::Where('roles_id',5)->Where('id',$id)->first();
        $managers = User::Where('id',$affilates->admin_id)->first();
        $payouts = Offer::Where('id',$affilates->admin_id)->first();
        return view('admin.affiliate-detail-page',compact('affilates','managers'));
    }

    public function pendingaffiliates()
    {
        $affiliates = User::Where('roles_id',5)->Where('status',0)->get();
        return view('admin.affiliates-pending',compact('affiliates'));
    }
    public function aproveaffiliates($id)
    {
        $update = DB::table('users')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
    public function affiliatepayouts(){
        return view('admin.affiliate-payouts');
    }
    public function affiliatepayoutcreate(){
        $affiliates = User::Where('roles_id',5)->Where('status',1)->get();
        $offers = Offer::with('restrictions')->get();
        return view('admin.affiliate-payouts-create',compact('affiliates','offers'));
    }
    public function affiliatepayoutsave(Request $request){
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
    public function offerrate(Request $request)
    {
        $offers = Offer::with('restrictions')->where('id', $request->offerid)->first();
        $response = array(
            'msg' => '<label class="control-label">Payout Type : '.$offers->payout_type.'</label></br>
                                                   <label class="control-label">Offer Payout : $'.$offers->payout.'</label>',
        );
        return \Response::json($response);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
