<!DOCTYPE HTML>
<html>
	<head>
		<title> Add language </title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
		require_once ('admin_auth.php');
		require_once ("config.php");
		require_once("db_connect.php");
		//$category_query = "SELECT * from Category";
		//$category_list = @mysqli_query($link, $category_query);
		?>
	</head>
	<body>
<div id="big_wrapper">
			<?php
			require_once ('admin_header.php');
			?>
			<div class="login_form">
				<form class="loginForm" name="loginForm" method="post" action="add_language-exec.php">
					<table>
						<tr>
							<th> New language</th>
						</tr>
						<tr>
							<td>Language name</td>
							<td >
							<input name="language" type="text" class="textfield"  placeholder="languagename" />
							</td>
						</tr>
						<tr>
							<td>
							<input class='button' type="submit" name="login" value="Submit" />
							</td>
							
						</tr>
					</table>
				</form>
			</div>
		</div>
		
	</body>
</html>