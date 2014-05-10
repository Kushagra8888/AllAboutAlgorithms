<?php
session_start();
if($_POST['login'] == "Login"){
		unset($_SESSION['ERRMSG_ARR']);
		header("location: index.php");
		exit();
	}
require_once ("config.php");
require_once("db_connect.php");
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['E_mail'];
$pass = $_POST['password'];
$confirm = $_POST['confirm_password'];

$name_pattern =" /^[a-zA-z]+$/i";
$email_pattern = "/^([\w0-9\.]+)@([a-z]+)\.([a-z]{1,3})$/" ;
$password_pattern = "/^[.\d]+$/";

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
if(!preg_match($name_pattern, $fname)){
	$errmsg[] = "*First name should be sequence of word characters";
}
if(!preg_match($name_pattern, $lname)){
	$errmsg[] = "*Last name should be a sequence of word characters";
}
if(!preg_match($email_pattern, $email)){
	$errmsg[] = "*Not a valid email address";
}
if(!preg_match($password_pattern, $pass)){
	$errmsg[] = "*Invalid password";
}
if($pass != $confirm){
	$errmsg[] = "*Passwords do not match";
}

if (isset($errmsg)){
		$_SESSION['register_err'] = $errmsg;
		session_write_close();
		//print_r($errmsg);
		header("location: register.php");
		exit();
}
else{
	$insert_query = "INSERT INTO user(First_Name, Last_Name, E_mail, Password) values ('".$fname."','".$lname."','".$email."','".$pass."');";
	$insert_query_result = mysqli_query($link, $insert_query);
	echo "<h1>Yor account has been successfully registered!</h1>
	<br><p><a href='index.php'>Login</a></p>
	";
}

?>
