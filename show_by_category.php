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
			<?php
			$get_category_name_query = "SELECT category_name from category WHERE category_ID=".$_GET['category_ID'].";";
			$result = mysqli_query($link, $get_category_name_query) or die('could not connect ' . mysqli_error($link));
			$res_array = mysqli_fetch_assoc($result);
			echo "<h1>".$res_array['category_name']." algorithms</h1>";
			$query = "SELECT DISTINCT algorithm.algorithm_ID, algorithm.algorithm_name, algorithm.algorithm_description FROM algorithm, algorithm_category, 
			category WHERE algorithm.algorithm_ID = algorithm_category.algorithm_ID AND 
			category.category_ID = algorithm_category.category_ID AND algorithm_category.category_ID = ".$_GET['category_ID'].";";
			$result = mysqli_query($link, $query) or die('could not connect ' . mysqli_error($link));
			if ($result) {
				while ($res_array = mysqli_fetch_assoc($result)) {
					echo "<span class='algo_link'><a href='algorithm.php?algo_id=".$res_array['algorithm_ID']."'>
						<div class='algo_desc'>
							<p>".$res_array['algorithm_name']."</p>
							<p>".$res_array['algorithm_description']."</p>
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