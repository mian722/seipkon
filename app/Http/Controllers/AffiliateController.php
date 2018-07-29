<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Offer;
use Auth;
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
        return view('admin.affiliate-invoices');
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
        $offers = $this->getalloffers();
        $affiliates = $this->getaffiliates();
        return view('admin.affiliate-invoice-create',compact('currencies', 'timezones', 'offers', 'affiliates'));
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
                         <td>'.$offers->offer_name.'</td>
                         <td>
                                 <input type="hidden"  name="clicks[]" value="0" />
                              <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                 <input type="hidden" name="_token" value="'.csrf_token().'" />
                                 <a href="#" id="clicks" class="tclicks" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">0</a>
                              </form>
                         </td>
                         <td>
                                 <input type="hidden"  name="signup[]" value="0" />
                              <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                 <input type="hidden" name="_token" value="'.csrf_token().'" />
                                 <a href="#" id="signup" class="tsignup" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">0</a>
                              </form>
                         </td>
                         <td>
                                 <input type="hidden"  name="amount[]" value="0" />
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
        return $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliateaddinvoices(Request $request)
    {
        //return Auth::user()->id;
        return $request->all();
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
        return $request->all();
        return view('admin.affiliate-payouts-create');
    }
    public function offerrate(Request $request)
    {
        $offers = Offer::with('restrictions')->where('id', $request->offerid)->first();
        $response = array(
            'msg' => '<label class="control-label">Payout Type : '.$offers->payout_type.'</label></br>
                                                   <label class="control-label">Offer Payout : '.$offers->payout.'</label>',
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
