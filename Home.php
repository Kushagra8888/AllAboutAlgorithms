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
			<img src="img\splash-screen.png" alt="splash-screen">
			<?php
			$query = "SELECT * FROM algorithm WHERE Algorithm_ID < 4;";
			$result = mysqli_query($link, $query) or die('could not connect ' . mysqli_error($link));
			if ($result) {
				while ($res_array = mysqli_fetch_assoc($result)) {
					echo "<span class='algo_link'><a href='algorithm.php?algo_id=".$res_array['Algorithm_ID']."'>
						<div class='algo_desc'>
							<h3>".$res_array['Algorithm_Name']."</h3>
							<p>".$res_array['Algorithm_Description']."</p>
						</div>
						</a></span>
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