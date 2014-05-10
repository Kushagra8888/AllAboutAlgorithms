<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Registration Form</title>
		<link href="Home_Style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="img/icon.png" type="image/x-icon" />
		<?php
		if (session_status() == PHP_SESSION_NONE) {
    session_start();
}?>

	</head>
	<body>
		<div id="big_wrapper">
			<img src="img/AAAbanner3.jpg" alt="AllAboutAlgorithms">
			<div id="login_form">
				<form class="login_form" name="loginForm" method="post" action="register_user.php">
					<table>
						<tr>
							<th> SIGN UP</th>
						</tr>
						<tr>
							<td>First Name</td>
							<td >
							<input name="first_name" type="text" class="textfield" id="login" placeholder="First Name" />
							</td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td >
							<input name="last_name" type="text" class="textfield" id="login" placeholder="Last Name" />
							</td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td >
							<input name="E_mail" type="email" class="textfield" id="login" placeholder="e-mail" />
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>
							<input name="password" type="password" class="textfield" id="password" placeholder="password"/>
							</td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td>
							<input name="confirm_password" type="password" class="textfield" id="password" placeholder="Confirm password"/>
							</td>
						</tr>
					
						<tr>
							<td>
							<input class='button' type="submit" name="login" value="Signup"/>
							</td>
							<td>
							<input class='button' type="submit" name="login" value="Login" />
							</td>
							
						</tr>
					</table>
					<?php
					
					if(isset($_SESSION['register_err'])){
						foreach ($_SESSION['register_err'] as $value){
							echo "<p class='errmsg'>".$value."</p><br>";
						}
					}
					//session_destroy();
					?>
				</form>
				
			</div>
		</div>
	</body>
</html>
