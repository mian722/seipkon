<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManagerRoles;
use Auth;

class ManagerController extends Controller
{
    public function index()
	    {
	        $managers = ManagerRoles::get();
	        return view('admin.roles',compact('managers'));
	    }
	public function createmanagerrole()
	    {
	        return view('admin.roles-create');
	    }    
	public function storemanagerrole(Request $request)
	    {
	    	$roles = new ManagerRoles;
	        $roles->name = $request->name;
	        $roles->description = $request->description;
	        $roles->account_management = ($request->account_management == 'on') ? 1 : 0;
	        $roles->affiliate_management = ($request->affiliate_management == 'on') ? 1 : 0;
	        $roles->global_management = ($request->global_management == 'on') ? 1 : 0;
	        $roles->setting_management = ($request->setting_management == 'on') ? 1 : 0;
	        $roles->advertiser_management = ($request->advertiser_management == 'on') ? 1 : 0;
	        $roles->offer_management = ($request->offer_management == 'on') ? 1 : 0;
	        $roles->report_management = ($request->report_management == 'on') ? 1 : 0;
	        $roles->smart_puller_management = ($request->smart_puller_management == 'on') ? 1 : 0;
	        $roles->admin_id = Auth::user()->id;
	        $roles->save();
	        
	        if (empty($roles) ) {
	            return redirect()->back()->with('fail', 'Something Wrong!');
	        } else {
	            return redirect()->back()->with('success','Succfully Added!');
	        }    
	    }
	public function getmanagerrole(Request $request)
	    {
	    	
	    	$detail = ManagerRoles::find($request->id);
	    	$list = $detail->account_management == 1 ? '<li class="col-sm-6 no-padding">Account Management</li>' : '';
	    	$list .= $detail->advertiser_management == 1 ? '<li class="col-sm-6 no-padding">Advertiser Management</li>' : '';
	    	$list .= $detail->affiliate_management == 1 ? '<li class="col-sm-6 no-padding">Affiliate Management</li>' : '';
	    	$list .= $detail->offer_management == 1 ? '<li class="col-sm-6 no-padding">Offer Management</li>' : '';
	    	$list .= $detail->global_management == 1 ? '<li class="col-sm-6 no-padding">Global Management</li>' : '';
	    	$list .= $detail->report_management == 1 ? '<li class="col-sm-6 no-padding">Report Management</li>' : '';
	    	$list .= $detail->setting_management == 1 ? '<li class="col-sm-6 no-padding">Setting Management</li>' : '';
	    	$list .= $detail->smart_puller_management == 1 ? '<li class="col-sm-6 no-padding">Smart Puller Management</li>' : '';
	    	return $data = '<table class="table no-margin no-padding">
                              <tbody>
                              <tr>
                                  <th>Name</th>
                                  <td>'.$detail->name.'</td>
                              </tr>
                              <tr>
                                  <th>Description</th>
                                  <td>'.$detail->description.'</td>
                              </tr>
                              <tr>
                                  <th style="vertical-align: middle">Permissions</th>
                                  <td>
                                    <ul>'.$list.'</ul>
                                  </td>
                              </tr>
                              </tbody>
                          </table>';
	    }    
}
