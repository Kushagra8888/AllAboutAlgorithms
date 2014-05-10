<!DOCTYPE HTML>
<html>
	<head>
		<title> Home </title>
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
			<div id="admin_controls">
				<h2>Admin controls</h2>
			<ul>
				<li><a href="add_language.php">Add a new implementation language</a></li>
				<li><a href="add_implementation.php">Add implementation</a></li>
				<li><a href="add_analysis.php">Add an algorithm analysis </a></li>
				<li><a href="add_algorithm.php">Add algorithm</a></li>
				<li><a href="add_analysis_type.php">Add analysis type</a></li>
			</ul>
			</div>
		<?php
		require_once ('footer.php');
		?>
		</div>
		
	</body>
</html>