<?php

$current_page = urlencode("http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
//echo $current_page;
function addValidator($id) {
	return "<script language=\"javascript\">$(document).ready( function() { $(\"".$id."\").validate(); });</script>";
}
function isEmail($email) {
	return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}

function addValidator_M($id) {
	return "<script language=\"javascript\">$(document).ready( function() { var validator = $(\"".$id."\").validate({ onfocusout: false, invalidHandler: function(form, validator) { var errors = validator.numberOfInvalids(); if (errors) { alert(validator.errorList[0].message); validator.errorList[0].element.focus(); } }, errorPlacement: function(error, element) { } }); }); </script>";
}
function your_name(){
	global $name,$uid;
	if (isset($_SESSION["_name"]) && isset($_SESSION["_user_id"]) )
{ 
	$uid= $_SESSION["_user_id"];
	$name= $_SESSION["_name"];
	
	}
	else {
		$name= "Guest";
		}
	}
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


function check_admin_login() {
	global $_SESSION, $adminurl;
	
	if(!$_SESSION["_admin_id"] && !$_SESSION["_admin_name"]) {
		header("location:login.php");
		exit();
	}
}

function check_user_login() {
	global $_SESSION, $siteurl, $current_page;
	
	if(!$_SESSION["_user_id"] || !$_SESSION["_user_name"]) {
		$_SESSION['QUERY_STRING'] = $current_page;
		header("location: " . $siteurl."login.php" . $current_page);
		exit();
	}
}






?>