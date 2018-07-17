<?php 

$url = "http://centralweb.cnec.br/Diario/Login.aspx";
$ckfile = tempnam("/tmp", "CURLCOOKIE");
$useragent = 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.3 Safari/533.2';

$username = "17000006443";
$password = "110ftw";


$f = fopen('log.txt', 'w'); // file to write request header for debug purpose

/**
    Get __VIEWSTATE & __EVENTVALIDATION
 */
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);

$html = curl_exec($ch);

curl_close($ch);

preg_match('~<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="(.*?)" />~', $html, $viewstate);
preg_match('~<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="(.*?)" />~', $html, $eventValidation);

$viewstate = $viewstate[1];
$eventValidation = $eventValidation[1];

/**
 Start Login process
 */
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_STDERR, $f);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);

// Collecting all POST fields
$postfields = array();
$postfields['__EVENTTARGET'] = "";
$postfields['__EVENTARGUMENT'] = "";
$postfields['__VIEWSTATE'] = $viewstate;
$postfields['__EVENTVALIDATION'] = $eventValidation;
$postfields['ctl00$ctl00$ucMarketPlaceSupportNavigation$txtMPTopSignInEmail'] = $username;
$postfields['ctl00$ctl00$ucMarketPlaceSupportNavigation$txtMPTopSignInPasswordTextNormal'] = "Password";
$postfields['ctl00$ctl00$ucMarketPlaceSupportNavigation$txtMPTopSignInPassword'] = $password;
$postfields['ctl00$ctl00$ucMarketPlaceSupportNavigation$btnSigninTop'] = 'Sign in';
$postfields['ctl00$ctl00$cplhMain$cplhContent$txtEmail'] = 'Email address';
$postfields['ctl00$ctl00$cplhMain$cplhContent$rdlPasswordYes'] = 'Password';
$postfields['ctl00$ctl00$cplhMain$cplhContent$txtPassword'] = '';
$postfields['ctl00$ctl00$cplhMain$cplhContent$hdnEmailDefault'] = 'Email address';
$postfields['ctl00$ctl00$cplhMain$cplhContent$hdnPasswordDefault'] = 'Password';

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
$ret = curl_exec($ch); // Get result after login page.

print $ret;
