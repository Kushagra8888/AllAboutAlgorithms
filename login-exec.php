<?php
	//Start session
	session_start();
	if($_POST['login'] == "Signup"){
		unset($_SESSION['ERRMSG_ARR']);
		unset($_SESSION['register_err']);
		header("location: register.php");
		exit();
	}
	
	//Include database connection details
	require_once('config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$E_mail = clean($_POST['E-mail']);
	$password = clean($_POST['password']);
	$user_type = clean($_POST['user_type']);
	
	
	//Input Validations
	if($E_mail == '') {
		$errmsg_arr[] = '*E_mail ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = '*Password missing';
		$errflag = true;
	}
	if($user_type == '') {
		$errmsg_arr[] = '*User type missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	require_once("db_connect.php");
	if($user_type == 'user'){
		$_SESSION['SESS_MEMBER_ID'] = 'user';
		$query = "SELECT * FROM user where E_mail ='".$E_mail."';";
	}
	else if($user_type = 'admin'){
		$_SESSION['SESS_MEMBER_ID'] = 'admin';
		$query = "SELECT * FROM admin where E_mail ='".$E_mail."';";
	}
	echo $query;
	$result = mysqli_query($link, $query) or die("Query failed ".mysqli_error($link));
	//$res_array = mysqli_fetch_assoc($result);
	if($user_type == 'user'){
		$res_array = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $res_array['User_ID'];
	}
	if (mysqli_num_rows($result) == 1){
		if($user_type == 'user'){
			header("location: Home.php");
			exit();
		}
		else if($user_type == 'admin'){
			header("location: Admin_home.php");
			exit();
		}
	//$_SESSION['SESS_MEMBER_ID'] = 'admin';
	}
	else {
			//Login failed
			header("location: login-failed.php");
			exit();
			//echo $user_type;
		}
	
?>