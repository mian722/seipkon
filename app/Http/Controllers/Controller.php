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
use App\OffersPool;
use Auth;
use Session;
use DB;
use Request;
use Redirect;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user= Auth::user();

            return $next($request);
        });
    }

    public function getsubdomain()
    {
     
      $url_array = explode('.', Request::getHost());
      if ($url_array[0] == 'www') {
        return $url_array[1];
      } else {
        return $url_array[0];
      }
    } 

    public function getplatform()
    {
     return $os_array     = array(
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
    }
    public function getcountry() {
    	return $countries=Array(
      "AD" => array("AND","Andorra"),
      "AE" => array("ARE","United Arab Emirates"),
      "AF" => array("AFG","Afghanistan"),
      "AG" => array("ATG","Antigua And Barbuda"),
      "AI" => array("AIA","Anguilla"),
      "AL" => array("ALB","Albania"),
      "AM" => array("ARM","Armenia"),
      "AN" => array("ANT","Netherlands Antilles"),
      "AO" => array("AGO","Angola"),
      "AQ" => array("ATA","Antarctica"),
      "AR" => array("ARG","Argentina"),
      "AS" => array("ASM","American Samoa"),
      "AT" => array("AUT","Austria"),
      "AU" => array("AUS","Australia"),
      "AW" => array("ABW","Aruba"),
      "AZ" => array("AZE","Azerbaijan"),
      "BA" => array("BIH","Bosnia And Herzegovina"),
      "BB" => array("BRB","Barbados"),
      "BD" => array("BGD","Bangladesh"),
      "BE" => array("BEL","Belgium"),
      "BF" => array("BUR","Burkina Faso"),
      "BG" => array("BGR","Bulgaria"),
      "BH" => array("BHR","Bahrain"),
      "BI" => array("BDI","Burundi"),
      "BJ" => array("BEN","Benin"),
      "BM" => array("BMU","Bermuda"),
      "BN" => array("BRN","Brunei Darussalam"),
      "BO" => array("BOL","Bolivia"),
      "BR" => array("BRA","Brazil"),
      "BS" => array("BHS","Bahamas"),
      "BT" => array("BTN","Bhutan"),
      "BW" => array("BWA","Botswana"),
      "BY" => array("BLR","Belarus"),
      "BZ" => array("BLZ","Belize"),
      "CA" => array("CAN","Canada"),
      "CD" => array("COD","The Democratic Republic Of The Congo"),
      "CF" => array("CAF","Central African Republic"),
      "CG" => array("COG","Congo"),
      "CH" => array("CHE","Switzerland"),
      "CI" => array("CIV","Cote D'ivoire"),
      "CK" => array("COK","Cook Islands"),
      "CL" => array("CHL","Chile"),
      "CM" => array("CMR","Cameroon"),
      "CN" => array("CHN","China"),
      "CO" => array("COL","Colombia"),
      "CR" => array("CRI","Costa Rica"),
      "CS" => array("SCG","Serbia And Montenegro"),
      "CU" => array("CUB","Cuba"),
      "CV" => array("CPV","Cape Verde"),
      "CY" => array("CYP","Cyprus"),
      "CZ" => array("CZE","Czech Republic"),
      "DE" => array("DEU","Germany"),
      "DJ" => array("DJI","Djibouti"),
      "DK" => array("DNK","Denmark"),
      "DM" => array("DMA","Dominica"),
      "DO" => array("DOM","Dominican Republic"),
      "DZ" => array("DZA","Algeria"),
      "EC" => array("ECU","Ecuador"),
      "EE" => array("EST","Estonia"),
      "EG" => array("EGY","Egypt"),
      "ER" => array("ERI","Eritrea"),
      "ES" => array("ESP","Spain"),
      "ET" => array("ETH","Ethiopia"),
      "EU" => array("EUR","European Union"),
      "FI" => array("FIN","Finland"),
      "FJ" => array("FJI","Fiji"),
      "FK" => array("FLK","Falkland Islands (Malvinas)"),
      "FM" => array("FSM","Federated States Of Micronesia"),
      "FO" => array("FRO","Faroe Islands"),
      "FR" => array("FRA","France"),
      "GA" => array("GAB","Gabon"),
      "GB" => array("GBR","United Kingdom"),
      "GD" => array("GRD","Grenada"),
      "GE" => array("GEO","Georgia"),
      "GF" => array("GUF","French Guiana"),
      "GH" => array("GHA","Ghana"),
      "GI" => array("GIB","Gibraltar"),
      "GL" => array("GRL","Greenland"),
      "GM" => array("GMB","Gambia"),
      "GN" => array("GIN","Guinea"),
      "GP" => array("GLP","Guadeloupe"),
      "GQ" => array("GNQ","Equatorial Guinea"),
      "GR" => array("GRC","Greece"),
      "GS" => array("SGS","South Georgia And The South Sandwich Islands"),
      "GT" => array("GTM","Guatemala"),
      "GU" => array("GUM","Guam"),
      "GW" => array("GNB","Guinea-Bissau"),
      "GY" => array("GUY","Guyana"),
      "HK" => array("HKG","Hong Kong"),
      "HN" => array("HND","Honduras"),
      "HR" => array("HRV","Croatia"),
      "HT" => array("HTI","Haiti"),
      "HU" => array("HUN","Hungary"),
      "ID" => array("IDN","Indonesia"),
      "IE" => array("IRL","Ireland"),
      "IL" => array("ISR","Israel"),
      "IN" => array("IND","India"),
      "IO" => array("IOT","British Indian Ocean Territory"),
      "IQ" => array("IRQ","Iraq"),
      "IR" => array("IRN","Islamic Republic Of Iran"),
      "IS" => array("ISL","Iceland"),
      "IT" => array("ITA","Italy"),
      "JM" => array("JAM","Jamaica"),
      "JO" => array("JOR","Jordan"),
      "JP" => array("JPN","Japan"),
      "KE" => array("KEN","Kenya"),
      "KG" => array("KGZ","Kyrgyzstan"),
      "KH" => array("KHM","Cambodia"),
      "KI" => array("KIR","Kiribati"),
      "KM" => array("COM","Comoros"),
      "KN" => array("KNA","Saint Kitts And Nevis"),
      "KR" => array("KOR","Republic Of Korea"),
      "KW" => array("KWT","Kuwait"),
      "KY" => array("CYM","Cayman Islands"),
      "KZ" => array("KAZ","Kazakhstan"),
      "LA" => array("LAO","Lao People's Democratic Republic"),
      "LB" => array("LBN","Lebanon"),
      "LC" => array("LCA","Saint Lucia"),
      "LI" => array("LIE","Liechtenstein"),
      "LK" => array("LKA","Sri Lanka"),
      "LR" => array("LBR","Liberia"),
      "LS" => array("LSO","Lesotho"),
      "LT" => array("LTU","Lithuania"),
      "LU" => array("LUX","Luxembourg"),
      "LV" => array("LVA","Latvia"),
      "LY" => array("LBY","Libyan Arab Jamahiriya"),
      "MA" => array("MAR","Morocco"),
      "MC" => array("MCO","Monaco"),
      "MD" => array("MDA","Republic Of Moldova"),
      "ME" => array("MNE","Montenegro"),
      "MG" => array("MDG","Madagascar"),
      "MH" => array("MHL","Marshall Islands"),
      "MK" => array("MKD","The Former Yugoslav Republic Of Macedonia"),
      "ML" => array("MLI","Mali"),
      "MM" => array("MMR","Myanmar"),
      "MN" => array("MNG","Mongolia"),
      "MO" => array("MAC","Macao"),
      "MP" => array("MNP","Northern Mariana Islands"),
      "MQ" => array("MTQ","Martinique"),
      "MR" => array("MRT","Mauritania"),
      "MT" => array("MLT","Malta"),
      "MU" => array("MUS","Mauritius"),
      "MV" => array("MDV","Maldives"),
      "MW" => array("MWI","Malawi"),
      "MX" => array("MEX","Mexico"),
      "MY" => array("MYS","Malaysia"),
      "MZ" => array("MOZ","Mozambique"),
      "NA" => array("NAM","Namibia"),
      "NC" => array("NCL","New Caledonia"),
      "NE" => array("NER","Niger"),
      "NF" => array("NFK","Norfolk Island"),
      "NG" => array("NGA","Nigeria"),
      "NI" => array("NIC","Nicaragua"),
      "NL" => array("NLD","Netherlands"),
      "NO" => array("NOR","Norway"),
      "NP" => array("NPL","Nepal"),
      "NR" => array("NRU","Nauru"),
      "NU" => array("NIU","Niue"),
      "NZ" => array("NZL","New Zealand"),
      "OM" => array("OMN","Oman"),
      "PA" => array("PAN","Panama"),
      "PE" => array("PER","Peru"),
      "PF" => array("PYF","French Polynesia"),
      "PG" => array("PNG","Papua New Guinea"),
      "PH" => array("PHL","Philippines"),
      "PK" => array("PAK","Pakistan"),
      "PL" => array("POL","Poland"),
      "PR" => array("PRI","Puerto Rico"),
      "PS" => array("PSE","Palestinian Territory"),
      "PT" => array("PRT","Portugal"),
      "PW" => array("PLW","Palau"),
      "PY" => array("PRY","Paraguay"),
      "QA" => array("QAT","Qatar"),
      "RE" => array("REU","Reunion"),
      "RO" => array("ROM","Romania"),
      "RS" => array("SRB","Serbia"),
      "RU" => array("RUS","Russian Federation"),
      "RW" => array("RWA","Rwanda"),
      "SA" => array("SAU","Saudi Arabia"),
      "SB" => array("SLB","Solomon Islands"),
      "SC" => array("SYC","Seychelles"),
      "SD" => array("SDN","Sudan"),
      "SE" => array("SWE","Sweden"),
      "SG" => array("SGP","Singapore"),
      "SI" => array("SVN","Slovenia"),
      "SK" => array("SVK","Slovakia (Slovak Republic)"),
      "SL" => array("SLE","Sierra Leone"),
      "SM" => array("SMR","San Marino"),
      "SN" => array("SEN","Senegal"),
      "SO" => array("SOM","Somalia"),
      "SR" => array("SUR","Suriname"),
      "ST" => array("STP","Sao Tome And Principe"),
      "SV" => array("SLV","El Salvador"),
      "SY" => array("SYR","Syrian Arab Republic"),
      "SZ" => array("SWZ","Swaziland"),
      "TD" => array("TCD","Chad"),
      "TF" => array("ATF","French Southern Territories"),
      "TG" => array("TGO","Togo"),
      "TH" => array("THA","Thailand"),
      "TJ" => array("TJK","Tajikistan"),
      "TK" => array("TKL","Tokelau"),
      "TL" => array("TLS","Timor-Leste"),
      "TM" => array("TKM","Turkmenistan"),
      "TN" => array("TUN","Tunisia"),
      "TO" => array("TON","Tonga"),
      "TR" => array("TUR","Turkey"),
      "TT" => array("TTO","Trinidad And Tobago"),
      "TV" => array("TUV","Tuvalu"),
      "TW" => array("TWN","Taiwan Province Of China"),
      "TZ" => array("TZA","United Republic Of Tanzania"),
      "UA" => array("UKR","Ukraine"),
      "UG" => array("UGA","Uganda"),
      "US" => array("USA","United States"),
      "UY" => array("URY","Uruguay"),
      "UZ" => array("UZB","Uzbekistan"),
      "VA" => array("VAT","Holy See (Vatican City State)"),
      "VC" => array("VCT","Saint Vincent And The Grenadines"),
      "VE" => array("VEN","Venezuela"),
      "VG" => array("VGB","Virgin Islands"),
      "VI" => array("VIR","Virgin Islands"),
      "VN" => array("VNM","Viet Nam"),
      "VU" => array("VUT","Vanuatu"),
      "WS" => array("WSM","Samoa"),
      "YE" => array("YEM","Yemen"),
      "YT" => array("MYT","Mayotte"),
      "YU" => array("SAM","Serbia And Montenegro (Formally Yugoslavia)"),
      "ZA" => array("ZAF","South Africa"),
      "ZM" => array("ZMB","Zambia"),
      "ZW" => array("ZWE","Zimbabwe"),
      "ZZ" => array("RES","Reserved"),
      );
    }

    public function getuser($id){
      return $user = User::where('roles_id',$id)->where('admin_id', Auth::user()->id)->where('status',1)->get();
    }

    public function getalloffers(){
      return Offer::where('admin_id', Auth::user()->id)->where('status',1)->get();
    }

    public function getallofferpools(){
      return OffersPool::where('admin_id', Auth::user()->id)->where('status',1)->get();
    }

    public function getrelatedmanagers($data){
      $array = array();
      foreach ($data as $key => $manager){
        $array[] += $manager->managerid;
      }
      return $managers = User::whereIn('id', $array)->where('status', 1)->get();

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
      $redirectofferid = $offerdetail->restrictions->redirect_offer;
      $offerpoolid = $offerdetail->restrictions->offer_pool;
      $now = Carbon::today()->toDateString();
      $todaysignups = Signup::orWhere('created_at', 'like', '%' . $now . '%')->where('offer_id', $oid)->get(); 
      $signups = Signup::where('offer_id', $oid)->get(); 
      $result = '';
      if ($todaysignups) {
        $result = $this->checkaffiliatecap($offerdetail);
      }else{
        switch ($advertiser_caps_type) {
            case 'Total':
                if(count($signups) >= $advertiser_caps_value){
                  $result = 'false';
                }else{
                  $result = $this->checkaffiliatecap($offerdetail);
                }
                break;
            case 'Daily':
                if(count($todaysignups) >= $advertiser_caps_value){
                  $result = 'false';
                }else{
                  $result = $this->checkaffiliatecap($offerdetail);
                }
                break;
            case 'Revenue':
                $total = count($signups) * $offerrevenue;
                if ($total >= $advertiser_caps_value) {
                  $result = 'false';
                }else{
                  $result = $this->checkaffiliatecap($offerdetail);
                }
                break;
            default:
                break;
        }
      }
      if ($result == 'false') {
        return $this->redirecturl($redirectofferid, $offerpoolid);
      }else{
        return 'true';
      }
    } 
    public function checkaffiliatecap($offerdetail){
      $oid = $offerdetail->id;
      $affiliate_caps_type = $offerdetail->restrictions->affiliate_caps_type;
      $affiliate_caps_value = $offerdetail->restrictions->affiliate_caps_value;
      $offerpayout = $offerdetail->payout;
      
      $now = Carbon::today()->toDateString();
      $todaysignups = Signup::orWhere('created_at', 'like', '%' . $now . '%')->where('offer_id', $oid)->get(); 
      $signups = Signup::where('offer_id', $oid)->get(); 
      if ($todaysignups) {
        return $this->checkgeotargeting($offerdetail);
      }else{
        switch ($affiliate_caps_type) {
            case 'Total':
                if(count($signups) >= $affiliate_caps_value){
                  return 'false';
                }else{
                  return $this->checkgeotargeting($offerdetail);
                }
                break;
            case 'Daily':
                if(count($todaysignups) >= $affiliate_caps_value){
                  return 'false';
                }else{
                  return $this->checkgeotargeting($offerdetail);
                }
                break;
            case 'Revenue':
                $total = count($signups) * $offerpayout;
                if ($total >= $affiliate_caps_value) {
                  return 'false';
                }else{
                  return $this->checkgeotargeting($offerdetail);
                }
                break;
            default:
                break;
        }
      }
    }

    public function iptocountry($ip) {   
      if (empty(Session::get('country'))) {
        $details = json_decode(file_get_contents("http://ipinfo.io/$ip/json")); 
        Session::put('country', $details->country);
        return $details->country;
      }else{
        return Session::get('country');
      }
    }

    public function checkgeotargeting($offerdetail){
        $country = $this->iptocountry('39.53.218.175');
        $geotargeting = $offerdetail->restrictions->geo_targeting;
        $inc = $offerdetail->restrictions->geo_type;

        if ($geotargeting != null) {
          if ($inc == 'Include') {
            if (strpos($geotargeting, $country) !== false) {
                return $this->checkdevice($offerdetail);
            }else{
                return 'false';
            }
          }else{
            if (strpos($geotargeting, $country) === false) {
                return $this->checkdevice($offerdetail);
            }else{
                return 'false';
            }
          }
        }else{
          return $this->checkdevice($offerdetail);
        }        
    }

    public function checkdevice($offerdetail){

        $device = strtolower($this->detectDevice()); 
        $mobiletargeting = $offerdetail->restrictions->mobile_carrier_targeting;

        if ($mobiletargeting != null) {
          if (strpos($mobiletargeting, $device) !== false) {
              return $this->checkplatform($offerdetail);
          }else{
              return 'false';
          }
        }else{
            return $this->checkplatform($offerdetail);
        }

    }

    public function checkplatform($offerdetail){
        $OS = explode(" ",strtolower($this->getOS()));
        $platformtargeting = $offerdetail->restrictions->platform_targeting;

        if ($platformtargeting != null) {
            if (strpos($platformtargeting, $OS[0]) !== false) {
              return 'true';
            }else{
              return 'false';
            }
        }else{
            return 'true';
        }
    }

    public function redirecturl($redirectofferid, $offerpoolid){
      if (!empty($redirectofferid)) {
        $redirectofferdetail = Offer::with('restrictions')->where('id', $redirectofferid)->where('status', 1)->first();
        if (!empty($redirectofferdetail)) {
          $result = $this->checkgeotargeting($redirectofferdetail);

          if ($result == 'false') {
            return $this->checkpools($offerpoolid);
          }else{
            return $array = array(['id' => $redirectofferdetail->id, 'link' => $redirectofferdetail->destination_url, 'admin_id' => $redirectofferdetail->admin_id]);
          }
        }else{
          return $this->checkpools($offerpoolid);
        }
      }else{
        return $this->checkpools($offerpoolid);
      }
    }

    public function checkpools($offerpoolid){

        $offersid = DB::table('pool_relation')->select('offer_id')->where('pool_id', $offerpoolid)->get();
        if ($offersid == null) {
          foreach ($offersid as $offerid) {
            $offersdetail = Offer::with('restrictions')->where('id', $offerid->offer_id)->first();
            $result = $this->checkgeotargeting($offersdetail);

            if ($result == 'true') {
              return $array = array(['id' => $offersdetail->id, 'link' => $offersdetail->destination_url, 'admin_id' => $offersdetail->admin_id]);
            }
          }
          if ($result == 'false') {
              return $array = array(['id' => 0, 'admin_id' => 0, 'link' => 'http://www.google.com']);
          }
        }else{
          return $array = array(['id' => 0, 'admin_id' => 0, 'link' => 'http://www.google.com']);
        }
    }

    public function getDefTemplate($string){
      switch ($string) {
        case 'affsignup':
            return '<h4><b>Dear Partners,
                    </b></h4><p><br></p><p>Thank you for registering as our affiliate.
                    </p><p><br></p><p>Your account {email} has been submitted for approval. You will receive an email notification on your application status soon.
                    </p><p><br></p><h5>Best Regards,
                    </h5><p>{network_name}</p>';
          break;
        case 'affapproval':
            return '<h4>Dear {first_name},</h4><p><br></p><p>Thank you for your interest in joining {network_name}. Your account {email} has been APPROVED and is ready to use. Please log in from {login_url} with your password.</p><p><br></p><p>Please review our Affiliate Terms &amp; Agreement for compliance:
              Web Link: {company_website}</p><p><br></p><p>Best Regards,</p><p>{network_name}</p>';
          break;
        case 'affrejection':
            return '<h4>Dear ${first_name},</h4><p><br><br>We are sorry to inform you that your application for ${network_name} has been REJECTED. Your account&nbsp;${email} has NOT been activated.<br><br>Please contact our Administrator or Affiliate Manager for more details.<br><br>We hope to see you soon.</p><p>
              </p><p><br>Best Regards,<br>${network_name}</p>';
          break;
        case 'affblock':
            return '<p>Your {email} has been Blocked by <b style="color: blur;">{admin_name}</b>.</p><p><br></p><p>You are unable to work on it now.</p><p><br></p>';
          break;
        case 'affunblock':
            return '<p>Your {email} has been Blocked by <b style="color: blur;">{admin_name}</b>.</p><p><br></p><p>You are unable to work on it now.</p><p><br></p>';
          break;
        case 'affpassreset':
            return '<h4>Dear ${first_name},</h4><p><br><br>Please click the following link to reset your account password: </p><p>${password_reset_url}</p><p>If you have any questions, please contact us at&nbsp;${company_website}</p><p>
              <br><br></p><p><br>Best Regards,<br>${network_name}</p>';
          break;
        case 'advsignup':
            return '<div style="text-align: center; width: 100%;">
              <div style="width: 600px; text-align: left; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1px solid rgb(248, 248, 248); padding: 15px; margin: 0px auto;">
              <p>Dear Partners,<br><br>Thank you for registering as our advertiser.<br><br>Your account ${email} has been submitted for approval. You will receive an email notification on your application status soon.<br><br>Best Regards,<br>${network_name}</p></div></div>';

          break;
        case 'advapproval':
            return '<div style="text-align: center; width: 100%;">
                    <div style="width: 600px; text-align: left; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1px solid rgb(248, 248, 248); padding: 15px; margin: 0px auto;">
                    <p>Dear ${first_name},<br><br>Thank you for your interest in joining ${network_name}. Your account ${email} has been APPROVED and is ready to use. Please log in from ${login_url} with your password.<br><br>Please review our Advertiser Terms &amp; Agreement for compliance:<br>Web Link: ${company_website}</p><p>
                    </p><p><br>Best Regards,<br>${network_name}</p></div></div>';
          break;
        case 'advrejection':
            return '<div style="text-align: center; width: 100%;">
                  <div style="width: 600px; text-align: left; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1px solid rgb(248, 248, 248); padding: 15px; margin: 0px auto;">
                  <p>Dear Partners,<br><br>We are sorry to inform you that your application for ${network_name} has been REJECTED. Your account&nbsp;${email} has NOT been activated.<br><br>Please contact our Administrator or Advertiser Manager for more details.<br><br>We hope to see you soon.</p><p>
                  </p><p><br>Best Regards,<br>${network_name}</p></div></div>';
          break;
        case 'advpassreset':
            return '<div style="text-align: center; width: 100%;">
                  <div style="width: 600px; text-align: left; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1px solid rgb(248, 248, 248); padding: 15px; margin: 0px auto;">
                  <p>Dear ${first_name},<br><br>Please click the following link to reset your account password: </p><p>${password_reset_url}</p><p>If you have any questions, please contact us at&nbsp;${company_website}</p><p>
                  <br><br></p><p><br>Best Regards,<br>${network_name}</p></div></div>';

          break;
        case 'offerapproval':
            return '<div style="text-align: center; width: 100%;">
                    <div style="width: 600px; text-align: left; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 1px solid rgb(248, 248, 248); padding: 15px; margin: 0px auto;">
                    <p>Dear ${first_name},&nbsp;</p><p>
                    </p><div><br>
                    <div>&nbsp;</div>The application for offer ${offer_name} has been approved. Please login to your account to view the details.
                    <div>&nbsp;</div><div>&nbsp;</div><div>Best Regards,&nbsp;</div>
                    <div>${network_name}</div></div></div></div>';
          break;
        case 'offerpayout':
            return '<p>Dear Partners,</p><div><br><div>&nbsp;</div>
                    The payout of offer ${offer_name} #${offer_id} has changed from {offer_previous_currency}&nbsp;{offer_previous_payout}&nbsp; ${offer_previous_pricing_type} to {offer_currency}&nbsp;${offer_payout} ${offer_pricing_type} and the active time is {effective_time}(Timezone: {gmt_timezone}). Please login to your account to view the details.
                    <div>&nbsp;</div><div>&nbsp;</div><div>Best Regards,&nbsp;</div><div>${network_name}</div></div>';
          break;
        case 'offerstatus':
            return '<p>Dear Partners,</p><p></p><div><br><div>&nbsp;</div>
                    The status of offer ${offer_name} #${offer_id} has changed from ${offer_previous_status}&nbsp;to ${offer_status}. Please login to your account to view the details.
                    <div>&nbsp;</div><div>&nbsp;</div><div>Best Regards,&nbsp;</div><div>${network_name}</div></div>';
          break;
        
        default:
          break;
      }
    }

    public function setParameters($template, $affid, $offerid){
      $user = User::find($affid);
      $offer = Offer::find($offerid);
      if (!empty($user)) {
        $template = str_replace("{first_name}", $user->fname, $template);
        $template = str_replace("{last_name}", $user->lname, $template);
        $template = str_replace("{email}", $user->email, $template);
        $template = str_replace("{affiliate_id}", $user->id, $template);
        $template = str_replace("{advertiser_id}", $user->id, $template);
        $template = str_replace("{company}", $user->company, $template);
        $template = str_replace("{company_website}", $user->website, $template);
      }
      if (!empty($offer)) {
        $template = str_replace("{offer_id}", $offer->id, $template);
        $template = str_replace("{offer_payout}", $offer->payout, $template);
        $template = str_replace("{offer_previous_payout}", $offer->prev_payout, $template);
        $template = str_replace("{offer_status}", $offer->status, $template);
        $template = str_replace("{offer_previous_status}", $offer->prev_status, $template);
      }

        $template = str_replace("{network_name}", config('app.name'), $template);
        $template = str_replace("{datetime}", Carbon::now(), $template);
        $template = str_replace("{login_url}", url('/'), $template);
        return $template;
    }
}
