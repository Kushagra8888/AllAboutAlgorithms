<!DOCTYPE HTML>
<html>
	<head>
		<title> Home </title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
		session_start();
		require_once ('auth.php');
		require_once ("config.php");
		//$category_query = "SELECT * from Category";
		//$category_list = @mysqli_query($link, $category_query);
		?>
	</head>
	<body>

		<div id="big_wrapper">
			<?php
			require_once ('header.php');
			?>
			<h1>About</h1>
			<p>A simple and organised website to simpilfy learning algorithms. Developed using HTML5, CSS3 and PHP with MySQL as back-end</p>
			<p>Team members: Kushagra (kushagra8888@gmail.com)</p>
			<?php
		require_once ('footer.php');
		?>
		</div>
		
	</body>
</html>