<?php
	
	//Cookie timeout for 12 hours
	$sessionCookieExpireTime=12*60*60;
	session_set_cookie_params($sessionCookieExpireTime);

//Start session

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')|| ($_SESSION['SESS_MEMBER_ID'] != 'user')) {
		header("location: access-denied.php");
		exit();	
		
	}
	
?>