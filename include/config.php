<?php
//echo "/----config----/";



//error_reporting(E_ALL & ~E_NOTICE);
$servername = "localhost";
$dbname = "market";
$dbusername = "root";
$dbpassword = "";

date_default_timezone_set("Asia/Calcutta");
ini_set('date.timezone', "Asia/Calcutta");
ini_set('default_charset', 'utf-8');

$link = mysql_pconnect($servername, $dbusername, $dbpassword) or die('Could not connect: ' . mysql_error());

mysql_select_db($dbname, $link) or die('Could not select database.');
mysql_set_charset('utf8', $link);
//error_reporting(-1);
//error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);


include "function.php";
include "custom.php";
$siteurl = $settings["siteurl"];
$adminurl = $siteurl . "admin/";
?>