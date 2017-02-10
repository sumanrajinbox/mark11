<?php
//echo "/--function included --/";
if(!($_SESSION)) {
    session_start();
}


$session_id = session_id();

$error = array();
$default_date = "d-M-Y";
$default_time = "H:i a";

$countryArray = array("Afghanistan", "Albania", "Algeria", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "BurkinaFaso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "CostaRica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "ELSalvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "Gabon", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "MarshallIslands", "Martinique", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "NewZealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "PuertoRico", "Qatar", "Romania", "Russia", "Rwanda", "SanMarino", "SaudiArabia", "Senegal", "Seychelles", "Singapore", "Slovakia", "Slovenia", "Somalia", "SouthAfrica", "SouthKorea", "Spain", "SriLanka", "Sudan", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Tibet", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "U.A.E", "Uganda", "Ukraine", "United Kingdom", "Uruguay", "United States", "Uzbekistan", "Venezuela", "Vietnam", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF", "PNG");

$temp = mysql_query('select * from settings') or die(mysql_error());
while($row = mysql_fetch_array($temp)) {
	$settings[$row["name"]] = stripslashes($row["value"]);
}
function authorname($n)
{
$aname= mysql_query("select * from author where id='".$n."' ") or die(mysql_error());	
while($authorname = mysql_fetch_array($aname))
{
	
	return $authorname['name'];
	}
}

function query($query) {
	return mysql_query($query) or die(mysql_error());
}

function select_one_row($query) {
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	return $row;
}

function select_all_row($query) {
	$sqlresult = mysql_query($query) or die(mysql_error());
	$result = array();
	while ($row = mysql_fetch_array($sqlresult)) { $result[] = $row; }
	mysql_free_result($sqlresult);
	return $result;
}

function count_row($query) {
	$result = mysql_query($query) or die(mysql_error());;
	return mysql_num_rows($result);
}

function checkerror() {
	global $error;
	
	$return = "";
	
	if(count($error) > 0) {
		foreach($error as $e) {
			$return .= "<div class=\"error_display\">".$e."</div>";
		}
	}	
	return $return;
}

function random($length = 7) {
	$alphanum = "aAbBcCdDeEfFgGhHjJkKmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789";
	$randText = substr(str_shuffle($alphanum), 0, $length);
	return $randText;
}

function age($d) {
	return floor((time() - $d) / (60 * 60 * 24 * 30 * 12)) . " Years";
}

function encode_string($string) {
	$string = preg_replace("/<!--.*?-->/ms", "", $string); 
	return htmlentities($string , ENT_QUOTES, "UTF-8");
}

function decode_string($string, $ttl=0) {
	$string = html_entity_decode($string, ENT_QUOTES, "UTF-8");
	$string = preg_replace("/<!--.*?-->/ms", "", $string); 
	
	if($ttl == 1) {
		return texttolinks($string);
	} else {
		return $string;
	}
}

function Display($date, $type="d-M-Y h:i a") {
	if($date == "") return "";
	return date($type, $date);
}

function elapsed($timestamp) {
	$time = array(
		12 * 30 * 24 * 60 * 60 => 'year',
		30 * 24 * 60 * 60 => 'month',
		24 * 60 * 60 => 'day',
		60 * 60 => 'hour',
		60 => 'minute',
		1 => 'seconde'
	);
	
	$ptime = time() - $timestamp;
	
	foreach ($time as $seconds => $str) {
		$elp = $ptime / $seconds;
		if($elp <= 0) {
			return '0 second ago';
		}
		
		if($elp >= 1) {
			$rounded = round($elp);
			$elapsed =  $rounded . ' ' . $str;
			
			if($rounded > 1) {
				$elapsed .= 's';
			}
			
			$elapsed .= ' ago';
			return $elapsed;
		}
	}
}

function clean($string) {
	if(trim($string) != "") $string = preg_replace("/[^a-zA-Z0-9\s.+]/", "", $string);
	return trim($string);
}

function mysql_clean($string) {
	$string = trim($string);
	if($string != "") { $string = stripslashes($string); $string = mysql_real_escape_string($string); }
	return $string;
}

function make_title($string) {
	$string = decode_string($string);
	$string = strtolower($string);
	$string = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $string);
	$string = preg_replace("/[\/_|+ -]+/", '-', $string);
	
	if($string == "-") {
		$string = "";
	}
	return $string;
}

function _make_title($string) {
	$string = trim($string);
	$string = strtolower($string);
	$string = strip_tags($string);
	$string = str_replace(array( '\'', '"', ',' , ';', '<', '>'), '', $string);
	$string = preg_replace('/&(amp;)?#?[a-z0-9]+;"/i', '-', $string);
	$string = str_replace(' ', '-', $string);
	$string = str_replace('--', '-', $string);
	$string = strtolower(str_replace(' ', '', $string));
	return $string;
}

function short_string($string, $length=0) {
	$len = strlen($len);
	$string = decode_string($string);
	$string = strip_tags($string);
	$string = substr($string, 0, $length);
	return $string;
}

function activeClass($match, $must="") {
	global $pagename;
	if($match == $pagename) { return "class=\"active\""; }
	if($must != "") { return "class=\"last\""; }
}

function activeSubClass($match) {
	global $subpage;
	if($match == $subpage) { return "class=\"active\""; }
}


function mail_send($to, $toname, $subject, $body, $from="", $fromname="", $replyto="", $replytoname="", $issmtp=1) {
	global $settings;
	
	if($from == "") $from = $settings["siteemail"];
	if($fromname == "") $fromname = $settings["sitename"];
	
	if($replyto == "") $replyto = $from;
	if($replytoname == "") $replytoname = $fromname;
	
	include_once "mail/class.phpmailer.php";

	$mail = new PHPMailer();
	$mail->CharSet = "UTF-8";
	$mail->Mailer = "mail";
	
	if($issmtp == 0) {
		$mail->IsSMTP(false);
	} else {
		if($settings["mail_method"] == 'smtp' && $settings["mail_username"] != ' ') {
			$mail->Mailer = $settings["mail_method"];
			$mail->IsSMTP(true);
			$mail->Host = $settings["mail_host"];
			$mail->Username = $settings["mail_username"];
			$mail->Password = $settings["mail_password"];
			$mail->SMTPAuth = true;
			$mail->SMTPKeepAlive = true;
			$mail->Port = 587;
		} else {
			$mail->IsSMTP(false);
		}
	}
	
  $mail->MsgHTML($body);
	
	$mail->Subject = $subject;	
	
	$mail->SetFrom($from, $fromname);
	$mail->AddReplyTo($replyto, $replytoname);
	$mail->IsHTML(true);
	
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
  $mail->AddAddress($to, $toname);
  //$mail->AddStringAttachment($row["photo"], "YourPhoto.jpg");
	
	//$mail->Send();
	
	 if(!$mail->Send()) {
    echo "Mailer Error - " . $mail->ErrorInfo;
  }
	
	$mail->ClearAddresses();
  $mail->ClearAttachments();
}

function mail_send_newsletter($to, $toname, $subject, $body) {
	include_once "mail/class.phpmailer.php";

	$mail = new PHPMailer();
	$mail->CharSet = "UTF-8";
		
	$mail->Mailer = "smtp";
	$mail->IsSMTP(true);
	$mail->Host = "pro.turbo-smtp.com";
	$mail->Username = "support@readomania.com";
	$mail->Password = "GSbRL4FS";
	$mail->SMTPAuth = true;
	$mail->SMTPKeepAlive = true;
	$mail->Port = 587;
	
	$mail->MsgHTML($body);
	
	$mail->Subject = $subject;	
	
	$mail->SetFrom("newsletter@readomania.com", "Readomania Newsletter");
	//$mail->AddReplyTo($replyto, $replytoname);
	$mail->IsHTML(true);
	
	$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
  	$mail->AddAddress($to, $toname);
  
  	if(!$mail->Send()) {
		echo $mail->ErrorInfo;
  	}
	
	$mail->ClearAddresses();
  	$mail->ClearAttachments();
}

?>