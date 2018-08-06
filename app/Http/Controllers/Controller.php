<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Offer;
use App\Clicks;
use App\Signup;
use Auth;
use Request;
use Redirect;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getcountry() {
    	return $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
    }

    public function getuser($id){
    	return $user = User::where('roles_id',$id)->where('admin_id', Auth::user()->id)->where('status',1)->get();
    }

    public function getalloffers(){
    	return Offer::where('admin_id', Auth::user()->id)->get();
    }

    public function getcurrency() {
    	return $currencies = array("United States, Dollars(USD)", "Euro(EUR)", "Australia, Dollars(AUD)", "Brazil, Reais(BRL)", "Britain (United Kingdom), Pounds(GBP)", "Canada, Dollars(CAD)", "China, Yuan Renminbi(CNY)", "Denmark, Kroner(DKK)", "Hong Kong, Dollars(HKD)", "Hungary, Forint(HUF)", "India, Rupees(INR)", "Indonesia, Rupiahs(IDR)", "Israel, New Shekels(ILS)", "Japan, Yen(JPY)", "Mexico, Pesos(MXN)", "Russia, Rubles(RUB)", "Switzerland/Liechtenstein, Francs(CHF)", "Thailand, Baht(THB)", "Ukraine, Hryvnia(UAH)", "Vietnam(VND)", "Turkey(TRY)", "Korea(KRW)", "Egypt(EGP)", "Argentina(ARS)", "Singapore(SGD)", "Poland(PLN)");
    }

    public function gettimezones(){
    	return $timezones = array("(GMT -11:00)Pacific/Midway,Niue,Pago_Pago", "(GMT -10:00)Pacific/Honolulu,Rarotonga", "(GMT -09:30)Pacific/Marquesas", "(GMT -09:00)America/Adak", "(GMT -08:00)Pacific/Pitcairn", "(GMT -08:00)America/Anchorage", "(GMT -07:00)America/Hermosillo,Phoenix", "(GMT -07:00)America/Los_Angeles,Vancouver", "(GMT -07:00)America/Whitehorse", "(GMT -06:00)America/Belize,Guatemala,Managua,Tegucigalpa,Pacific/Galapagos", "(GMT -06:00)America/Chihuahua,Denver,Edmonton", "(GMT -06:00)America/Costa_Rica", "(GMT -05:00)America/Bogota,Guayaquil,Jamaica,Lima", "(GMT -05:00)America/Cayman", "(GMT -05:00)America/Chicago,Mexico_City,Panama,Winnipeg", "(GMT -04:30)America/Caracas", "(GMT -04:00)America/Manaus,Martinique,La_Paz", "(GMT -04:00)America/Asuncion", "(GMT -04:00)America/Detroit,Havana,Iqaluit,Nassau,New_York,Toronto", "(GMT -03:00)America/Araguaina,Maceio,Montevideo,Antarctica/Rothera,Atlantic/Bermuda,Stanley", "(GMT -03:00)America/Moncton", "(GMT -02:30)America/St_Johns", "(GMT -02:00)America/Noronha,Atlantic/South_Georgia", "(GMT -02:00)America/Godthab,Miquelon", "(GMT -01:00)Atlantic/Cape_Verde", "(GMT +00:00)Africa/Abidjan,Accra,Bamako,Banjul,Freetown,Lome,Monrovia,Nouakchott", "(GMT +00:00)America/Scoresbysund,Atlantic/Azores", "(GMT +00:00)Atlantic/Reykjavik", "(GMT +01:00)Africa/Algiers,Brazzaville,Luanda,Lagos,Europe/Guernsey,Jersey", "(GMT +01:00)Africa/Bangui", "(GMT +01:00)Atlantic/Madeira,Europe/Dublin,Lisbon,London", "(GMT +01:00)Africa/Kinshasa", "(GMT +02:00)Africa/Blantyre", "(GMT +02:00)Africa/Cairo", "(GMT +02:00)Africa/Ceuta,Europe/Belgrade,Berlin,Bratislava,Luxembourg,Madrid,Paris,Rome", "(GMT +02:00)Africa/Gaborone", "(GMT +02:00)Africa/Harare", "(GMT +03:00)Africa/Asmara,Djibouti,Juba,Indian/Comoro,Mayotte", "(GMT +03:00)Asia/Beirut,Damascus,Europe/Tallinn,Uzhgorod,Vilnius", "(GMT +03:00)Africa/Addis_Ababa", "(GMT +04:00)Asia/Baku,Dubai,Tbilisi,Yerevan,Europe/Samara,Indian/Mauritius,Reunion", "(GMT +04:00)Asia/Muscat", "(GMT +04:30)Asia/Kabul", "(GMT +04:30)Asia/Tehran", "(GMT +05:00)Antarctica/Mawson,Asia/Aqtobe,Karachi,Samarkand,Indian/Kerguelen,Maldives", "(GMT +05:30)Asia/New Delhi,Colombo,Kolkata", "(GMT +06:00)Asia/Almaty,Dhaka,Novosibirsk,Qyzylorda,Indian/Chagos", "(GMT +06:30)Asia/Rangoon,Indian/Cocos", "(GMT +07:00)Asia/Bangkok,Krasnoyarsk,Novokuznetsk,Pontianak,Vientiane,Indian/Christmas", "(GMT +07:00)Asia/Jakarta", "(GMT +07:00)Asia/Ho_Chi_Minh", "(GMT +08:00)Asia/Beijing,Hong_Kong,Makassar,Manila,Shanghai,Singapore,Taipei,Australia/Perth", "(GMT +08:00)Asia/Hovd", "(GMT +08:30)Asia/Pyongyang", "(GMT +09:00)Asia/Dili,Jayapura,Khandyga,Seoul,Tokyo,Yakutsk,Pacific/Palau", "(GMT +09:00)Asia/Chita", "(GMT +09:00)Asia/Choibalsan,Ulaanbaatar", "(GMT +09:30)Australia/Adelaide,Broken_Hill,Darwin", "(GMT +10:00)Asia/Magadan,Vladivostok,Australia/Brisbane,Currie,Melbourne,Sydney,Canberra,Pacific/Chuuk,Guam,Saipan", "(GMT +10:30)Australia/Lord_Howe", "(GMT +11:00)Antarctica/Macquarie,Asia/Srednekolymsk,Pacific/Guadalcanal,Kosrae,Norfolk,Noumea,Pohnpei,Efate", "(GMT +11:00)Asia/Sakhalin", "(GMT +12:00)Asia/Anadyr,Kamchatka,Pacific/Fiji,Funafuti,Majuro,Nauru,Tarawa,Wallis", "(GMT +12:00)Pacific/Auckland", "(GMT +13:00)Pacific/Enderbury", "(GMT +13:00)Pacific/Fakaofo", "(GMT +13:00)Pacific/Tongatapu", "(GMT +13:00)Pacific/Apia", "(GMT +14:00)Pacific/Kiritimati");
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





    public function checkadvertisercap($offerdetail, $aid){
      $oid = $offerdetail->id;
      $advertiser_caps_type = $offerdetail->restrictions->advertiser_caps_type;
      $advertiser_caps_value = $offerdetail->restrictions->advertiser_caps_value;
      $offerrevenue = $offerdetail->revenue;
      $redirectoffer = Offer::select('id', 'destination_url')->where('id', $offerdetail->restrictions->redirect_offer)->where('status', 1)->first();
      $redirectofferid = $redirectoffer->id;
      $redirectofferlink = $redirectoffer->destination_url;
      if (empty($redirectofferlink)) {
        $redirectofferlink = 'http://www.google.com/';
      }
      
      $now = Carbon::today()->toDateString();
      $todaysignups = Signup::orWhere('created_at', 'like', '%' . $now . '%')->where('offer_id', $oid)->get(); 
      $signups = Signup::where('offer_id', $oid)->get(); 
      switch ($advertiser_caps_type) {
          case 'Total':
              if(count($signups) >= $advertiser_caps_value){
                return $this->rederecturl($redirectofferid, $redirectofferlink);
              }else{
                return $this->checkaffiliatecap($offerdetail, $redirectofferid,$redirectofferlink);
              }
              break;
          case 'Daily':
              if(count($todaysignups) >= $advertiser_caps_value){
                return $this->rederecturl($redirectofferid, $redirectofferlink);
              }else{
                return $this->checkaffiliatecap($offerdetail, $redirectofferid, $redirectofferlink);
              }
              break;
          case 'Revenue':
              $total = count($signups) * $offerrevenue;
              if ($total >= $advertiser_caps_value) {
                return $this->rederecturl($redirectofferid, $redirectofferlink);
              }else{
                return $this->checkaffiliatecap($offerdetail, $redirectofferid, $redirectofferlink);
              }
              break;
          default:
              break;
      }
    } 
    public function checkaffiliatecap($offerdetail, $redirectofferid, $redirectofferlink){
      $oid = $offerdetail->id;
      $affiliate_caps_type = $offerdetail->restrictions->affiliate_caps_type;
      $affiliate_caps_value = $offerdetail->restrictions->affiliate_caps_value;
      $offerpayout = $offerdetail->payout;
      
      $now = Carbon::today()->toDateString();
      $todaysignups = Signup::orWhere('created_at', 'like', '%' . $now . '%')->where('offer_id', $oid)->get(); 
      $signups = Signup::where('offer_id', $oid)->get(); 
      switch ($affiliate_caps_type) {
          case 'Total':
              if(count($signups) >= $affiliate_caps_value){
                return $this->rederecturl($redirectofferid, $redirectofferlink);
              }else{
                return 'Continue';
              }
              break;
          case 'Daily':
              if(count($todaysignups) >= $affiliate_caps_value){
                return $this->rederecturl($redirectofferid, $redirectofferlink);
              }else{
                return 'Continue';
              }
              break;
          case 'Revenue':
              $total = count($signups) * $offerpayout;
              if ($total >= $affiliate_caps_value) {
                return $this->rederecturl($redirectofferid, $redirectofferlink);
              }else{
                return 'Continue';
              }
              break;
          default:
              break;
      }
    } 

    public function rederecturl($redirectofferid, $redirectofferlink){
      return $array = array(['id' => $redirectofferid, 'link' => $redirectofferlink]);
    }
}
