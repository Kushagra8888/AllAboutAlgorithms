<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Login Form</title>
		<link href="Home_Style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="img/icon.png" type="image/x-icon" />
		<?php 
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}
		?>
	</head>
	<body>
		<div id="big_wrapper">
			<img src="img/AAAbanner3.jpg" alt="AllAboutAlgorithms">
			<div class="login_form">
				<form class="loginForm" name="loginForm" method="post" action="login-exec.php">
					<table>
						<tr>
							<th> SIGN IN</th>
						</tr>
						<tr>
							<td>E-mail</td>
							<td >
							<input name="E-mail" type="email" class="textfield" id="login" placeholder="e-mail" />
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>
							<input name="password" type="password" class="textfield" id="password" placeholder="password"/>
							</td>
						</tr>
						<tr>
							<td> Login as: </td>
							<td>
							<input name="user_type" type="radio" value="user" />
							User
							<input name="user_type" type="radio" value="admin" />
							Admin </td>
						</tr>
						<tr>
							<td>
							<input class='button' type="submit" name="login" value="Login" />
							</td>
							<td>
							<input class='button' type="submit" name="login" value="Signup"/>
							</td>
						</tr>
					</table>
					<?php
					if(isset($_SESSION['ERRMSG_ARR'])){
						foreach ($_SESSION['ERRMSG_ARR'] as $value){
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
