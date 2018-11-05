<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\CustomizationModel;
use DB;
use Auth;

class CustomizationContoller extends Controller
{
    public function index()
    {
        $smtpdetail = CustomizationModel::where('admin_id',Auth::user()->id)->first();
        $domaindetail = DomainlistModel::where('admin_id',Auth::user()->id)->get();
        return view('admin.customization',compact('smtpdetail','domaindetail'));
    }
    public function networkname(Request $request)
    {
    	$update = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['company' => $request->network_name]);
        return view('admin.customization');
    }
public function networklogo(Request $request)
    {
            $validator = Validator::make($request->all(),
                [
                    'file' => 'image',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = base_path()."/public/companylogo/";
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            $update = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['companylogo' => $filename]);
            return 'success';
    }
    public function networkfavicon(Request $request)
    {
            $validator = Validator::make($request->all(),
                [
                    'file' => 'image',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = base_path()."/public/companylogo/";
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            $update = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['favicon' => $filename]);
            return 'success';
    }
    public function smtpsave(Request $request)
    {
    	//return $request->all();
    	$checkExist = CustomizationModel::where('admin_id', Auth::user()->id)->first();

    	if ($checkExist) {
    		$update = DB::table('smtpdetails')
            ->where('admin_id', Auth::user()->id)
            ->update(['admin_id' => Auth::user()->id,'smtp_server' => $request->smtp_server,'security_type' => $request->security_type,'port' => $request->port,'username' => $request->username,'password' => $request->password,'nickname' => $request->nickname,'email' => $request->email]);
            if(!empty($update)){
	            return redirect()->back()->with('success','Succfully Added!');
	        }else{
	            return redirect()->back()->with('fail', 'Something Wrong!');
	        }
    	}
    	else
    	{
    		$assignoffer = new CustomizationModel;
	        $assignoffer->admin_id = Auth::user()->id;
	        $assignoffer->smtp_server = $request->smtp_server;
	        $assignoffer->security_type = $request->security_type;
	        $assignoffer->port = $request->port;
	        $assignoffer->username = $request->username;
	        $assignoffer->password = $request->password;
	        $assignoffer->nickname = $request->nickname;
	        $assignoffer->email = $request->email;
	        $assignoffer->save();
	        if(!empty($assignoffer)){
	            return redirect()->back()->with('success','Succfully Added!');
	        }else{
	            return redirect()->back()->with('fail', 'Something Wrong!');
	        }
    	}
        
    }

}
