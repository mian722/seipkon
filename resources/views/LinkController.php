<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Redirect;
use App\Clicks;
use App\Offer;
use DB;
use Location;
class LinkController extends Controller
{
    public function linkinfo($uid, $oid)
    {   
        $browser =  $this->ExactBrowserName();
        $getOS =  $this->getOS();
    	$device = $this->detectDevice();
    	$ip = Request::server('REMOTE_ADDR');
        $reffer = Request::server('HTTP_REFERER');
        $code = DB::table('clicks')->orderBy('id', 'desc')->first();
       if(empty($code)){
        $subid = 1;
        } else { 
        $subid = $code->subid+1;
        }
        $clicks = new Clicks;
        $clicks->uid = $uid;
        $clicks->oid = $oid;
        $clicks->subid = $subid;
        $clicks->click = 1;
        if($clicks->reffer_link == null){
            $clicks->reffer_link = 'direct';
        } else {
           $clicks->reffer_link = $reffer;
        }
        $clicks->ip = $ip;
        $clicks->device = $device;
        $clicks->browser = $browser;
        $clicks->getOS = $getOS;
        $clicks->country = 'usa';
        $clicks->proxy = 'not proxy';
        //return $clicks;
        if($clicks->save())
        {   
            $check = DB::table('divert')->where('uid',$uid)->where('oid',$oid)->first();
            if(!$check){
            	DB::table('divert')->insert(['uid' => $uid , 'oid' => $oid]);
            } else {
            	//DB::table('divert')->where('oid', $oid)->where('uid', $uid)->increment('counter');
            }
            	
            $divert = DB::table('divert')->select('counter')->where('uid', $uid)->where('oid','=',$oid)->first();
            $offerlink = DB::table('offers')->select('offerlink','offerlink1','counter')->where('id','=',$oid)->first();
	    if($divert->counter < 2){
	    	/*DB::table('offers')
	            ->where('id', $oid)
	            ->increment('counter');*/
	    	$link = $offerlink->offerlink.$subid;
	    	return Redirect::away($link);
	    } else {
	    	/*DB::table('offers')
	            ->where('id', $oid)
	            ->update(['counter' => 0]);*/
	           $finallink = ($offerlink->offerlink1 == '' ) ? $offerlink->offerlink : $offerlink->offerlink1;
	    	$link = $finallink.$subid;
	    	return Redirect::away($link);
	    }
            
        }
        
    }

    public function checkProxy($ip){
            $ch = curl_init();  
            $timeout = 5;  
            curl_setopt($ch,CURLOPT_URL,'http://proxy.mind-media.com/block/proxycheck.php?ip='.$ip);  
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
            $data = curl_exec($ch);  
            curl_close($ch);  
            return $data;
        }
    public   function detectDevice(){
    	$userAgent = Request::server('HTTP_USER_AGENT');
    	$devicesTypes = array(
            "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
            "tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
            "mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
            "bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
        );
     	foreach($devicesTypes as $deviceType => $devices) {           
            foreach($devices as $device) {
                if(preg_match("/" . $device . "/i", $userAgent)) {
                    $deviceName = $deviceType;
                }
            }
        }
        return ucfirst($deviceName);
 	}    
        
    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
    public function ExactBrowserName()
    {
    
        $ExactBrowserNameUA= Request::server('HTTP_USER_AGENT');
        
        if (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "opr/")) {
            // OPERA
            $ExactBrowserNameBR="Opera";
        } elseIf (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "chrome/")) {
            // CHROME
            $ExactBrowserNameBR="Chrome";
        } elseIf (strpos(strtolower($ExactBrowserNameUA), "msie")) {
            // INTERNET EXPLORER
            $ExactBrowserNameBR="Internet Explorer";
        } elseIf (strpos(strtolower($ExactBrowserNameUA), "firefox/")) {
            // FIREFOX
            $ExactBrowserNameBR="Firefox";
        } elseIf (strpos(strtolower($ExactBrowserNameUA), "safari/") and strpos(strtolower($ExactBrowserNameUA), "opr/")==false and strpos(strtolower($ExactBrowserNameUA), "chrome/")==false) {
            // SAFARI
            $ExactBrowserNameBR="Safari";
        } else {
            // OUT OF DATA
            $ExactBrowserNameBR="Self";
        };
        
        return $ExactBrowserNameBR;
    }
    public function getOS() 
    { 

    $user_agent = Request::server('HTTP_USER_AGENT');

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}
}
