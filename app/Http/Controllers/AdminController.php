<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\SignUpNotification;
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

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('admin');
    }
	
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
          $clicks[] = clicks::leftjoin('offers','offers.id','clicks.offer_id')->where('offers.admin_id',Auth::user()->id)->whereBetween('clicks.created_at', [$start,$end])->count();
        }
        $signups = [];
        foreach ($date as $value) {
          $start = Carbon::parse($value)->startOfhour();
          $end = Carbon::parse($value)->endOfhour();
          $signups[] = signup::leftjoin('offers','offers.id','signups.offer_id')->where('offers.admin_id',Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->count();
        }
        $earning = [];
        foreach ($date as $value) {
          $start = Carbon::parse($value)->startOfhour();
          $end = Carbon::parse($value)->endOfhour();
          $earning[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('offers.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.revenue * signups.signup'));
        }
        $payout = [];
        foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $payout[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
          $profit = [];
        foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $profit[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.revenue - offers.payout'));
          }

        $clicks = json_encode($clicks);
        $signups = json_encode($signups);
        $earning = json_encode($earning);
        $payout = json_encode($payout);
        $profit = json_encode($profit);
        $tclicks = clicks::where('admin_id',Auth::user()->id)->whereDate('created_at', Carbon::today())->count();
        $tsignups = signup::whereDate('created_at', Carbon::today())->where('admin_id',Auth::user()->id)->count();
        $tearning = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('offers.admin_id', Auth::user()->id)->whereDate('signups.created_at', Carbon::today())->sum(DB::raw('offers.revenue * signups.signup'));
        $tpayout = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereDate('signups.created_at', Carbon::today())->sum(DB::raw('offers.payout * signups.signup'));
        $activeoffers = offer::where('admin_id', Auth::user()->id)->count();
        $pendingoffers = offer::where('admin_id', Auth::user()->id)->where('status',0)->count();
        $allclicks = clicks::where('admin_id',Auth::user()->id)->count();
        $allsignups = signup::where('admin_id',Auth::user()->id)->count();
        
        $topaffiliates = User::leftJoin('signups', 'signups.affiliate_id', '=', 'users.id')
        ->leftJoin('offers', 'offers.id', '=', 'signups.offer_id')
        ->where('signups.admin_id',Auth::user()->id)
        ->where('users.roles_id',5)
        ->select('users.*', DB::raw('COUNT(offers.revenue * signups.signup) as count'),DB::raw('SUM(offers.revenue * signups.signup) as earning'))
        ->groupBy('users.id')
        ->orderBy('count', 'desc')->take(10)
        ->get();
        $topoffers = offer::leftJoin('signups', 'signups.affiliate_id', '=', 'offers.id')
        ->where('offers.admin_id',Auth::user()->id)
        ->select('offers.*', DB::raw('COUNT(signups.signup) as count'),DB::raw('SUM(offers.revenue * signups.signup) as earning'))
        ->groupBy('offers.id')
        ->orderBy('count', 'desc')->take(10)
        ->get();

      return view('admin.index',compact('tclicks','tsignups','tpayout','clicks','signups','activeoffers','pendingoffers','date','earning','tearning','payout','profit','allclicks','allsignups','topaffiliates','topoffers'));
	}

    public function daterangepicker3(Request $request)
    {
        //return $request->from;
        $start = Carbon::parse($request->from)->startOfDay();
        $end = Carbon::parse($request->to)->endOfDay();
        $date = [];
        $clicks = [];
        $signups = [];
        $earning = [];
        $payout = [];
        $profit = [];
        $tclicks = clicks::where('admin_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
        $tsignups = signup::where('admin_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
        $tearning = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.revenue * signups.signup'));
        $tpayout = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
        if ($request->from == $request->to) {
          while ($start->lte($end)) {
            $date[] = $start->copy()->format('Y-m-d H:i');
            //$dates[] = $this->chartdata($date);
            $start->addHour();
          }
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $clicks[] = clicks::where('admin_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $signups[] = signup::where('admin_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $earning[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
        foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $payout[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
          
        foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfHour();
            $end = Carbon::parse($value)->endOfHour();
            $profit[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.revenue - offers.payout'));
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
            $clicks[] = clicks::where('admin_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $signups[] = signup::where('admin_id',Auth::user()->id)->whereBetween('created_at', [$start,$end])->count();
          }
          
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $earning[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
          foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $payout[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.payout * signups.signup'));
          }
          
        foreach ($date as $value) {
            $start = Carbon::parse($value)->startOfDay();
            $end = Carbon::parse($value)->endOfDay();
            $profit[] = signup::leftJoin('offers', 'offers.id', '=', 'signups.offer_id')->select('offer_amounts')->where('signups.admin_id', Auth::user()->id)->whereBetween('signups.created_at', [$start,$end])->sum(DB::raw('offers.revenue - offers.payout'));
          }
        }
       
     // return $tclicks;
        
       return json_encode(array($clicks,$signups,$date,$earning,$tclicks,$tsignups,$tearning,$profit,$payout,$tpayout));
    }
    
    public function adminregister(Request $request) {
       $this->validate($request, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'subdomain' => 'required|string|max:100|unique:users',
            'imaccount' => 'required|string|max:255',
        ]);
        $userCreated = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'company' => $request->company,
            'subdomain' => $request->subdomain,
            'imid' => 'skype',
            'imaccount' => $request->imaccount,
            'roles_id' => 2,
        ]);

        if (!empty($userCreated) ) {
            $mailText = '<p style="color: red;">Thank you for registering as our affiliate.</p><br /><br />Your account {email} has been submitted for approval. You will receive an email notification on your application status soon.';
            $email = $request->email;
            $user = new User();
            $convertedText = str_replace("{email}", $email, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification('Subject', 'affiliate', $convertedText, 'Click to Login', 'http://seipkon.ytrk.us', ''));
            return view('landing.thankyou');
        } else {
            return redirect()->back()->with('fail', 'Something Wrong!');
        }
    }
    
}
