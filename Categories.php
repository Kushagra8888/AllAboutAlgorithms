<!DOCTYPE HTML>
<html>
	<head>
		<title>Categories</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
		session_start();
		require_once ('auth.php');
		require_once ("config.php");
		require_once("db_connect.php");
		//$category_query = "SELECT * from Category";
		//$category_list = @mysqli_query($link, $category_query);
		?>
	</head>
	<body>

		<div id="big_wrapper">
			<?php
			require_once ('header.php');
			?>
			<?php
			$query = "SELECT * FROM category;";
			$result = mysqli_query($link, $query) or die('could not connect ' . mysqli_error($link));
			if ($result) {
				echo "<table class='category_table' >
				<tr>
					<th>Categories</th>
					<th>Description</th>
				</tr>
				";
				while ($res_array = mysqli_fetch_assoc($result)) {
					echo "<tr>
					<td><a href='show_by_category.php?category_ID=".$res_array['Category_ID']."'>".$res_array['Category_name']."</a></td>
					<td>".$res_array['Category_description']."</td>
					</tr>
					";

				}
			}
			else{
				echo "
				<p>No rows retreived</p>
				";
			}
			mysqli_close($link);
			?>
			<?php
		require_once ('footer.php');
		?>
		</div>
		
	</body>
</html>