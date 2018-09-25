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
    protected $redirectTo = '/admin/home';

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
            'subdomain' => 'required|string|max:100|unique:users',
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
        $userCreated = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'contactno' => $data['contactno'],
            'password' => bcrypt($data['password']),
            'subdomain' => $data['subdomain'],
            'imid' => $data['imid'],
            'imaccount' => $data['imaccount'],
            'admin_id' => 0,
            'roles_id' => 2,
        ]);

        if (!empty($userCreated) ) {
            $mailText = '<p style="color: red;">Thank you for registering as our affiliate.</p><br /><br />Your account {email} has been submitted for approval. You will receive an email notification on your application status soon.';
            $email = $data['email'];
            $user = new User();
            $convertedText = str_replace("{email}", $email, $mailText);
            $user->email = $email;   // This is the email you want to send to.
            $user->notify(new SignUpNotification('affiliate', $convertedText, 'Click to Login', 'http://seipkon.ytrk.us', ''));
            return $userCreated;
        } else {
            return $userCreated;
        }
    }
}
