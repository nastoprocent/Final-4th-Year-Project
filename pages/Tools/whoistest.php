<?php
	require_once("headerTools.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penetration Testing</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrapmain.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../vendor/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">
    
    <link href="../../pages/Tools/sqlmap/css/css.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
            
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
             <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome, <?php echo $row_session['userName']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                       Welcome & Name 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
 
            <div class="row">
                <div class="col-lg-8">
                    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          Status
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-power-off fa-fw"></i> Status of the tool:
                        </div>
                            <div class="panel-body">
                                <div id="morris-area-chart">
                                      <!-- Adding services progress bar -->
                                            <div>
                                                <p>
                                                    <strong>Whois Scanner</strong>
                                                    <span class="pull-right text-muted">100% Complete <strong class="alert alert-success"> Online</strong></span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                        <span class="sr-only">100% Complete (Offline)</span>
                                                    </div>
                                                </div>
                                            </div>
                                    <!-- Adding services progress bar -->
                             </div>
                        </div>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          Status
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
     
                    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                           Test
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                    <!-- design interface for scanning -->
                    <div class="panel panel-default">    
                        <div class="panel-heading">
                                <i class="fa fa-database fa-fw"></i> Vulnerabilities test:
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                <div class="page-header center">                        
                                    <h1 class="design-menu">Vulnerabilities testing with Whois</h1>
                                    <div class="row">
                                        <div class="col-xs-12 center">
                                           <div class="points-required-box">
                                                <span class="label credits-cost-label">
                                                     <i class="fa fa-check green"></i>
                                                     At least 24h Subscription required for the testing.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-margin">
                                        <div class="align-center">
                                           <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="page-header center">                        
                                                        <h1 class="request-label">Tests that the tool will perform:</h1>
                                                    </div>
                                                    <table style="margin: auto;" class="full-width">
                                                        <tr><td class="td1"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td1">&nbsp; Tool will find the host provider.</td></tr>
                                                        <tr><td class="td2"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td2">&nbsp; Update & Creation of the site.</td></tr>
                                                        <tr><td class="td1"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td1">&nbsp; Display the servers on which the site is hosted.</td></tr>
                                                        <tr><td class="td2"><i class="ace-icon fa fa-check bigger-110 green pull-right"></i> </td><td class="td2">&nbsp; Will display contact details with the site.</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="page-header center">                        
                                                        <h1 class="request-label">Tests that tool won't perform:</h1>
                                                    </div>
                                                    <table style="margin: auto;" class="full-width">
                                                            <tr><td class="td1"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td1">&nbsp; Wont allow you to attack a site.</td></tr>
                                                            <tr><td class="td2"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td2">&nbsp; Wont allow you to exploit the site in any way.</td></tr>
                                                            <tr><td class="td1"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td1">&nbsp; Tool wont look for repositories on server.</td></tr>
                                                            <tr><td class="td2"><i class="ace-icon fa fa-close bigger-110 red pull-right"></i> </td><td class="td2">&nbsp; Wont allow any bad intend.</td></tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                           Test
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Global Chat 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                <div class="col-lg-4"> <!-- col-lg-4 right side setup -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Chat as: <input class="testing" type="text" id="name" name="name" disabled value="<?php echo $row_session['userName']; ?>"/>
                        </div>
                        <div class="panel-body" id="shout">
                        </div>
                        <div class="panel-footer">
                            <form method="post" name="chatform" id="chatform">
                                <div class="input-group">
                                    <input type="text" id="message" name="message" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-btn">
                                        <input class="btn btn-warning btn-sm" type="submit" id="sendmessage" value="Send"/>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                    <script type="text/javascript">
                            function refresh_shoutbox() {
                                var data = 'refresh=1';
                                $.ajax({
                                    type: "POST",
                                    url: "../pages/chat.php",
                                    data: data,
                                    success: function(html){ // this happen after we get result
                                        $("#shout").html(html);
                                    }
                                });
                            }
                            refresh_shoutbox();
                            setInterval("refresh_shoutbox()", 2000);
                            
                            $("#chatform").submit(function(e) {
                                var message = document.getElementById('message').value;
                                if (message.length < 1) {
                                    alert("The field was empty, Input some message next time!");
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                } else {
                                    // getting the values that user typed
                                    var name    = $("#name").val();
                                    var message = $("#message").val();
                                    // forming the queryString
                                    var data = 'name='+ name +'&message='+ message;
                                    
                                    $.ajax({
                                        type: "POST",
                                        url: "../pages/chat.php",
                                        data: data,
                                        success: function(html) { // this happen after we get result
                                            $("#shout").slideToggle(0, function(){
                                                $(this).html(html).slideToggle(0);
                                                $("#message").val("");
                                                document.getElementById('message').setAttribute('disabled', true);
                                                setTimeout(function() {
													document.getElementById('message').removeAttribute('disabled', false);
												}, 30000); // <-- time in milliseconds

                                            });
                                        }
                                    });
                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                }
                            });
                        </script>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                        Global Chat 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          Whois
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
<?php
           
            $domain = isset($_GET['domain']) ? $_GET['domain'] : '';
            $whoisservers = array(
            	"ac" => "whois.nic.ac", // Ascension Island
            	// ad - Andorra - no whois server assigned
            	"ae" => "whois.nic.ae", // United Arab Emirates
            	"aero"=>"whois.aero",
            	"af" => "whois.nic.af", // Afghanistan
            	"ag" => "whois.nic.ag", // Antigua And Barbuda
            	"ai" => "whois.ai", // Anguilla
            	"al" => "whois.ripe.net", // Albania
            	"am" => "whois.amnic.net",  // Armenia
            	// an - Netherlands Antilles - no whois server assigned
            	// ao - Angola - no whois server assigned
            	// aq - Antarctica (New Zealand) - no whois server assigned
            	// ar - Argentina - no whois server assigned
            	"arpa" => "whois.iana.org",
            	"as" => "whois.nic.as", // American Samoa
            	"asia" => "whois.nic.asia",
            	"at" => "whois.nic.at", // Austria
            	"au" => "whois.aunic.net", // Australia
            	// aw - Aruba - no whois server assigned
            	"ax" => "whois.ax", // Aland Islands
            	"az" => "whois.ripe.net", // Azerbaijan
            	// ba - Bosnia And Herzegovina - no whois server assigned
            	// bb - Barbados - no whois server assigned
            	// bd - Bangladesh - no whois server assigned
            	"be" => "whois.dns.be", // Belgium
            	"bg" => "whois.register.bg", // Bulgaria
            	"bi" => "whois.nic.bi", // Burundi
            	"biz" => "whois.biz",
            	"bj" => "whois.nic.bj", // Benin
            	// bm - Bermuda - no whois server assigned
            	"bn" => "whois.bn", // Brunei Darussalam
            	"bo" => "whois.nic.bo", // Bolivia
            	"br" => "whois.registro.br", // Brazil
            	"bt" => "whois.netnames.net", // Bhutan
            	// bv - Bouvet Island (Norway) - no whois server assigned
            	// bw - Botswana - no whois server assigned
            	"by" => "whois.cctld.by", // Belarus
            	"bz" => "whois.belizenic.bz", // Belize
            	"ca" => "whois.cira.ca", // Canada
            	"cat" => "whois.cat", // Spain
            	"cc" => "whois.nic.cc", // Cocos (Keeling) Islands
            	"cd" => "whois.nic.cd", // Congo, The Democratic Republic Of The
            	// cf - Central African Republic - no whois server assigned
            	"ch" => "whois.nic.ch", // Switzerland
            	"ci" => "whois.nic.ci", // Cote d'Ivoire
            	"ck" => "whois.nic.ck", // Cook Islands
            	"cl" => "whois.nic.cl", // Chile
            	// cm - Cameroon - no whois server assigned
            	"cn" => "whois.cnnic.net.cn", // China
            	"co" => "whois.nic.co", // Colombia
            	"com" => "whois.verisign-grs.com",
            	"coop" => "whois.nic.coop",
            	// cr - Costa Rica - no whois server assigned
            	// cu - Cuba - no whois server assigned
            	// cv - Cape Verde - no whois server assigned
            	// cw - Curacao - no whois server assigned
            	"cx" => "whois.nic.cx", // Christmas Island
            	// cy - Cyprus - no whois server assigned
            	"cz" => "whois.nic.cz", // Czech Republic
            	"de" => "whois.denic.de", // Germany
            	// dj - Djibouti - no whois server assigned
            	"dk" => "whois.dk-hostmaster.dk", // Denmark
            	"dm" => "whois.nic.dm", // Dominica
            	// do - Dominican Republic - no whois server assigned
            	"dz" => "whois.nic.dz", // Algeria
            	"ec" => "whois.nic.ec", // Ecuador
            	"edu" => "whois.educause.edu",
            	"ee" => "whois.eenet.ee", // Estonia
            	"eg" => "whois.ripe.net", // Egypt
            	// er - Eritrea - no whois server assigned
            	"es" => "whois.nic.es", // Spain
            	// et - Ethiopia - no whois server assigned
            	"eu" => "whois.eu",
            	"fi" => "whois.ficora.fi", // Finland
            	// fj - Fiji - no whois server assigned
            	// fk - Falkland Islands - no whois server assigned
            	// fm - Micronesia, Federated States Of - no whois server assigned
            	"fo" => "whois.nic.fo", // Faroe Islands
            	"fr" => "whois.nic.fr", // France
            	// ga - Gabon - no whois server assigned
            	"gd" => "whois.nic.gd", // Grenada
            	// ge - Georgia - no whois server assigned
            	// gf - French Guiana - no whois server assigned
            	"gg" => "whois.gg", // Guernsey
            	// gh - Ghana - no whois server assigned
            	"gi" => "whois2.afilias-grs.net", // Gibraltar
            	"gl" => "whois.nic.gl", // Greenland (Denmark)
            	// gm - Gambia - no whois server assigned
            	// gn - Guinea - no whois server assigned
            	"gov" => "whois.nic.gov",
            	// gr - Greece - no whois server assigned
            	// gt - Guatemala - no whois server assigned
            	"gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
            	// gu - Guam - no whois server assigned
            	// gw - Guinea-bissau - no whois server assigned
            	"gy" => "whois.registry.gy", // Guyana
            	"hk" => "whois.hkirc.hk", // Hong Kong
            	// hm - Heard and McDonald Islands (Australia) - no whois server assigned
            	"hn" => "whois.nic.hn", // Honduras
            	"hr" => "whois.dns.hr", // Croatia
            	"ht" => "whois.nic.ht", // Haiti
            	"hu" => "whois.nic.hu", // Hungary
            	// id - Indonesia - no whois server assigned
            	"ie" => "whois.domainregistry.ie", // Ireland
            	"il" => "whois.isoc.org.il", // Israel
            	"im" => "whois.nic.im", // Isle of Man
            	"in" => "whois.inregistry.net", // India
            	"info" => "whois.afilias.net",
            	"int" => "whois.iana.org",
            	"io" => "whois.nic.io", // British Indian Ocean Territory
            	"iq" => "whois.cmc.iq", // Iraq
            	"ir" => "whois.nic.ir", // Iran, Islamic Republic Of
            	"is" => "whois.isnic.is", // Iceland
            	"it" => "whois.nic.it", // Italy
            	"je" => "whois.je", // Jersey
            	// jm - Jamaica - no whois server assigned
            	// jo - Jordan - no whois server assigned
            	"jobs" => "jobswhois.verisign-grs.com",
            	"jp" => "whois.jprs.jp", // Japan
            	"ke" => "whois.kenic.or.ke", // Kenya
            	"kg" => "www.domain.kg", // Kyrgyzstan
            	// kh - Cambodia - no whois server assigned
            	"ki" => "whois.nic.ki", // Kiribati
            	// km - Comoros - no whois server assigned
            	// kn - Saint Kitts And Nevis - no whois server assigned
            	// kp - Korea, Democratic People's Republic Of - no whois server assigned
            	"kr" => "whois.kr", // Korea, Republic Of
            	// kw - Kuwait - no whois server assigned
            	// ky - Cayman Islands - no whois server assigned
            	"kz" => "whois.nic.kz", // Kazakhstan
            	"la" => "whois.nic.la", // Lao People's Democratic Republic
            	// lb - Lebanon - no whois server assigned
            	// lc - Saint Lucia - no whois server assigned
            	"li" => "whois.nic.li", // Liechtenstein
            	// lk - Sri Lanka - no whois server assigned
            	"lt" => "whois.domreg.lt", // Lithuania
            	"lu" => "whois.dns.lu", // Luxembourg
            	"lv" => "whois.nic.lv", // Latvia
            	"ly" => "whois.nic.ly", // Libya
            	"ma" => "whois.iam.net.ma", // Morocco
            	// mc - Monaco - no whois server assigned
            	"md" => "whois.nic.md", // Moldova
            	"me" => "whois.nic.me", // Montenegro
            	"mg" => "whois.nic.mg", // Madagascar
            	// mh - Marshall Islands - no whois server assigned
            	"mil" => "whois.nic.mil",
            	// mk - Macedonia, The Former Yugoslav Republic Of - no whois server assigned
            	"ml" => "whois.dot.ml", // Mali
            	// mm - Myanmar - no whois server assigned
            	"mn" => "whois.nic.mn", // Mongolia
            	"mo" => "whois.monic.mo", // Macao
            	"mobi" => "whois.dotmobiregistry.net",
            	"mp" => "whois.nic.mp", // Northern Mariana Islands
            	// mq - Martinique (France) - no whois server assigned
            	// mr - Mauritania - no whois server assigned
            	"ms" => "whois.nic.ms", // Montserrat
            	// mt - Malta - no whois server assigned
            	"mu" => "whois.nic.mu", // Mauritius
            	"museum" => "whois.museum",
            	// mv - Maldives - no whois server assigned
            	// mw - Malawi - no whois server assigned
            	"mx" => "whois.mx", // Mexico
            	"my" => "whois.domainregistry.my", // Malaysia
            	// mz - Mozambique - no whois server assigned
            	"na" => "whois.na-nic.com.na", // Namibia
            	"name" => "whois.nic.name",
            	"nc" => "whois.nc", // New Caledonia
            	// ne - Niger - no whois server assigned
            	"net" => "whois.verisign-grs.net",
            	"nf" => "whois.nic.nf", // Norfolk Island
            	"ng" => "whois.nic.net.ng", // Nigeria
            	// ni - Nicaragua - no whois server assigned
            	"nl" => "whois.domain-registry.nl", // Netherlands
            	"no" => "whois.norid.no", // Norway
            	// np - Nepal - no whois server assigned
            	// nr - Nauru - no whois server assigned
            	"nu" => "whois.nic.nu", // Niue
            	"nz" => "whois.srs.net.nz", // New Zealand
            	"om" => "whois.registry.om", // Oman
            	"org" => "whois.pir.org",
            	// pa - Panama - no whois server assigned
            	"pe" => "kero.yachay.pe", // Peru
            	"pf" => "whois.registry.pf", // French Polynesia
            	// pg - Papua New Guinea - no whois server assigned
            	// ph - Philippines - no whois server assigned
            	// pk - Pakistan - no whois server assigned
            	"pl" => "whois.dns.pl", // Poland
            	"pm" => "whois.nic.pm", // Saint Pierre and Miquelon (France)
            	// pn - Pitcairn (New Zealand) - no whois server assigned
            	"post" => "whois.dotpostregistry.net",
            	"pr" => "whois.nic.pr", // Puerto Rico
            	"pro" => "whois.dotproregistry.net",
            	// ps - Palestine, State of - no whois server assigned
            	"pt" => "whois.dns.pt", // Portugal
            	"pw" => "whois.nic.pw", // Palau
            	// py - Paraguay - no whois server assigned
            	"qa" => "whois.registry.qa", // Qatar
            	"re" => "whois.nic.re", // Reunion (France)
            	"ro" => "whois.rotld.ro", // Romania
            	"rs" => "whois.rnids.rs", // Serbia
            	"ru" => "whois.tcinet.ru", // Russian Federation
            	// rw - Rwanda - no whois server assigned
            	"sa" => "whois.nic.net.sa", // Saudi Arabia
            	"sb" => "whois.nic.net.sb", // Solomon Islands
            	"sc" => "whois2.afilias-grs.net", // Seychelles
            	// sd - Sudan - no whois server assigned
            	"se" => "whois.iis.se", // Sweden
            	"sg" => "whois.sgnic.sg", // Singapore
            	"sh" => "whois.nic.sh", // Saint Helena
            	"si" => "whois.arnes.si", // Slovenia
            	"sk" => "whois.sk-nic.sk", // Slovakia
            	// sl - Sierra Leone - no whois server assigned
            	"sm" => "whois.nic.sm", // San Marino
            	"sn" => "whois.nic.sn", // Senegal
            	"so" => "whois.nic.so", // Somalia
            	// sr - Suriname - no whois server assigned
            	"st" => "whois.nic.st", // Sao Tome And Principe
            	"su" => "whois.tcinet.ru", // Russian Federation
            	// sv - El Salvador - no whois server assigned
            	"sx" => "whois.sx", // Sint Maarten (dutch Part)
            	"sy" => "whois.tld.sy", // Syrian Arab Republic
            	// sz - Swaziland - no whois server assigned
            	"tc" => "whois.meridiantld.net", // Turks And Caicos Islands
            	// td - Chad - no whois server assigned
            	"tel" => "whois.nic.tel",
            	"tf" => "whois.nic.tf", // French Southern Territories
            	// tg - Togo - no whois server assigned
            	"th" => "whois.thnic.co.th", // Thailand
            	"tj" => "whois.nic.tj", // Tajikistan
            	"tk" => "whois.dot.tk", // Tokelau
            	"tl" => "whois.nic.tl", // Timor-leste
            	"tm" => "whois.nic.tm", // Turkmenistan
            	"tn" => "whois.ati.tn", // Tunisia
            	"to" => "whois.tonic.to", // Tonga
            	"tp" => "whois.nic.tl", // Timor-leste
            	"tr" => "whois.nic.tr", // Turkey
            	"travel" => "whois.nic.travel",
            	// tt - Trinidad And Tobago - no whois server assigned
            	"tv" => "tvwhois.verisign-grs.com", // Tuvalu
            	"tw" => "whois.twnic.net.tw", // Taiwan
            	"tz" => "whois.tznic.or.tz", // Tanzania, United Republic Of
            	"ua" => "whois.ua", // Ukraine
            	"ug" => "whois.co.ug", // Uganda
            	"uk" => "whois.nic.uk", // United Kingdom
            	"us" => "whois.nic.us", // United States
            	"uy" => "whois.nic.org.uy", // Uruguay
            	"uz" => "whois.cctld.uz", // Uzbekistan
            	// va - Holy See (vatican City State) - no whois server assigned
            	"vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
            	"ve" => "whois.nic.ve", // Venezuela
            	"vg" => "whois.adamsnames.tc", // Virgin Islands, British
            	// vi - Virgin Islands, US - no whois server assigned
            	// vn - Viet Nam - no whois server assigned
            	// vu - Vanuatu - no whois server assigned
            	"wf" => "whois.nic.wf", // Wallis and Futuna
            	"ws" => "whois.website.ws", // Samoa
            	"xxx" => "whois.nic.xxx",
            	// ye - Yemen - no whois server assigned
            	"yt" => "whois.nic.yt", // Mayotte
            	"yu" => "whois.ripe.net");
            
            function LookupDomain($domain){
            	global $whoisservers;
            	$domain_parts = explode(".", $domain);
            	$tld = strtolower(array_pop($domain_parts));
            	$whoisserver = $whoisservers[$tld];
            	if(!$whoisserver) {
            		return "Error: No appropriate Whois server found for $domain domain!";
            	}
            	$result = QueryWhoisServer($whoisserver, $domain);
            	if(!$result) {
            		return "Error: No results retrieved from $whoisserver server for $domain domain!";
            	}
            	else {
            		while(strpos($result, "Whois Server:") !== FALSE){
            			preg_match("/Whois Server: (.*)/", $result, $matches);
            			$secondary = $matches[1];
            			if($secondary) {
            				$result = QueryWhoisServer($secondary, $domain);
            				$whoisserver = $secondary;
            			}
            		}
            	}
            	return "$domain domain lookup results from $whoisserver server:\n\n" . $result;
            }
            
            function LookupIP($ip) {
            	$whoisservers = array(
            		//"whois.afrinic.net", // Africa - returns timeout error :-(
            		"whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
            		"whois.apnic.net", // Asia/Pacific only
            		"whois.arin.net", // North America only
            		"whois.ripe.net", // Europe, Middle East and Central Asia only
            		"domains" => "whois.donuts.co", // donuts registry
                    "tips" => "whois.donuts.co", // donuts registry
                    "blog" => "whois.nic.blog", // wordpress registry
                    "accountants" => "whois.donuts.co", // donuts registry
                                	);
            	$results = array();
            	foreach($whoisservers as $whoisserver) {
            		$result = QueryWhoisServer($whoisserver, $ip);
            		if($result && !in_array($result, $results)) {
            			$results[$whoisserver]= $result;
            		}
            	}
            	$res = "RESULTS FOUND: " . count($results);
            	foreach($results as $whoisserver=>$result) {
            		$res .= "\n\n-------------\nLookup results for " . $ip . " from " . $whoisserver . " server:\n\n" . $result;
            	}
            	return $res;
            }
            
            function ValidateIP($ip) {
            	$ipnums = explode(".", $ip);
            	if(count($ipnums) != 4) {
            		return false;
            	}
            	foreach($ipnums as $ipnum) {
            		if(!is_numeric($ipnum) || ($ipnum > 255)) {
            			return false;
            		}
            	}
            	return $ip;
            }
            
            function ValidateDomain($domain) {
            	if(!preg_match("/^([-a-z0-9]{1,63})\.([a-z\.]{2,24})$/i", $domain)) {
            		return false;
            	}
            	return $domain;
            }
            
            function QueryWhoisServer($whoisserver, $domain) {
            	$port = 43;
            	$timeout = 10;
            	$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
            	fputs($fp, $domain . "\r\n");
            	$out = "";
            	while(!feof($fp)){
            		$out .= fgets($fp);
            	}
            	fclose($fp);
            	$res = "";
            	if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
            		$rows = explode("\n", $out);
            		foreach($rows as $row) {
            			$row = trim($row);
            			if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
            				$res .= $row."\n";
            			}
            		}
            	}
            	return $res;
            }
            ?>
            <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <i class="fa fa-database fa-fw"></i>Tool:
                        </div>
                        <div class="panel-body">
                        <div class="row">
                             <div class="form-group">
                                <div class="card mb-4" id="boxdesign">
                                 <img class="card-img-top" src="../../../img/Whois-Scanner.png" style="height:350px; border-top-left-radius:25px; border-top-right-radius:25px;">
                                 <div class="card-body">
                                  <p class="heading">
                                   Welcome to the WhoIs Scanner!
                                    </p>
                                    <p class="text">
                                    Use the allocated space to input the IP address or the URL of the target.
                                    Then simply click on the button at the bottom when done to launch a new scan!<br /><br />
                                    <small class="hint">If you input incorrect URL or IP address the results might not show up. Also if you paste url in not ip, dont use HTTPS or the scan wont be performed.</small>
                                    </p>
                                  </div>
                                </div>
                                <form role="form" name="run_whois_scan" id="run_whois_scan">
                                    <div class="inputportscannerdesign">
                                            <label class="col-sm-4 text-position" for="target">
                                            <strong for="domain">Domain or IP Address:</strong>
                                            </label>
                                        <div class="col-sm-8">
                                            <span class="input-icon input-icon-right no-padding col-xs-12 col-md-7 col-lg-7">
                                            <input type="text" name="domain" id="domain" style="width:100%;"value="<?=$domain;?>" placeholder="Url: website.com/100.164.231.0"/> 
                                            </span>
                                        </div>
                                    </div>
                                    </hr>
                                    <input type="submit" class="btn" name="submit" id="block" value="Run Whois Scan"/></br></br>
                                    <p class="centerthetickbox" ><input type="checkbox" required name="terms"> I am authorized to scan this target and i accept the <a href="../../../Terms&Conditions.pdf"><u>Terms and Conditions</u></a></p>
                                    </div>
                                </form>
                                <script type="text/javascript">
    							 $("#run_whois_scan").submit(function() {
    								   $.ajax({
    								   type: "POST",
    								   url: "../../pages/Tools/whois_db_insert.php",
    								   data: $("#run_whois_scan").serialize(),
    								   success: function(data) {
    								   }
    								  });
    							    });
    							</script>
                            </div>
                        </div>
                    </div>
                 <?php
                    if($domain) {
                         ?>
                    <div class="panel panel-default">    
                        <div class="panel-heading">
                            <i class="fa fa-database fa-fw"></i>Results of the test:
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart">
                                <div class="page-header center">                        
                                    <h1 class="results">The results of the test are as fallows:</h1>
                                </div>
                                <?php
                                    	$domain = trim($domain);
                                    	if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
                                    	if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
                                    	if(ValidateIP($domain)) {
                                    		echo "hello before check";
                                    		$result = LookupIP($domain);
                                    	}
                                    	elseif(ValidateDomain($domain)) {
                                    		$result = LookupDomain($domain);
                                    	}
                                    	else die('<div class="col-md-4"></div>
                                    	<div class="col-md-4">
                                    	    <span class="invalidinput"><p style="text-align:center;">Invalid Input!</p></span>
                                    	</div>
                                    	<div class="col-md-4"></div>');
                                    	echo "<pre>\n" . $result . "\n</pre>\n";
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                                    }
                                ?> 
                </div> <!-- /.col-lg-8 -->
                
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                          Whois
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
                
            </div><!-- /.row -->
        </div><!-- /#page-wrapper -->
    </div> <!-- /#wrapper -->
    
     <!-- Footer -->
      
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         Footer 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
    <footer class="footer">
      <div class="container">
        <p>Copyright &copy; PenTesting by Trojan 2017</p>
      </div>
    </footer>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                                                                                                         Footer 
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../vendor/dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>