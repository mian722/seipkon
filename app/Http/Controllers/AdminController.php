<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Notifications\SignUpNotification;
use Auth;
use App\User;

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
	
	public function index(){
    	return view('admin.home');
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
