<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Notifications\SignUpNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/thankyou';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contactno' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'imid' => 'required|string|max:255',
            'imaccount' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {  
        $subdomain = $this->getsubdomain();
        $admin_id = User::select('id')->where('subdomain',$subdomain)->first();
        $roles_id = ($data['usertype'] == 'affiliate') ? 5 : 4 ;
        $userCreated = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'contactno' => $data['contactno'],
            'password' => bcrypt($data['password']),
            'imid' => $data['imid'],
            'imaccount' => $data['imaccount'],
            'admin_id' => $admin_id->id,
            'roles_id' => $roles_id,
        ]);

        if (!empty($userCreated) ) {
            $mailText = '<p style="color: red;">Thank you for registering as our '.$data['usertype'].'.</p><br /><br />Your account {email} has been submitted for approval. You will receive an email notification on your application status soon.';
            $email = $data['email'];
            $user = new User();
            $convertedText = str_replace("{email}", $email, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification('subject','', $convertedText, 'Click to Login', 'http://seipkon.ytrk.us', ''));
            return $userCreated;
        } else {
            return $userCreated;
        }
    }
}