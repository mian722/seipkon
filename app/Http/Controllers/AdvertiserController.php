<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Offer;
use App\Templates;
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
        return view('index');
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
}
