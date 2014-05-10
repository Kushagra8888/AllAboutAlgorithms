<!DOCTYPE HTML>
<html>
	<head>
		<title>Algorithm</title>
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
		require_once ('auth.php');
		require_once ("config.php");
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (!$link) {
			die('Could not connect: ' . mysqli_connect_error());
		}
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
			$algo_id=$_GET['algo_id'];
			$algo_query = "SELECT * FROM algorithm WHERE Algorithm_ID = ".$algo_id.";";
			$algo_result = mysqli_query($link, $algo_query) or die('could not connect ' . mysqli_error($link));
			
			if($algo_result){
				$algo_res_array = mysqli_fetch_assoc($algo_result);
			}
			$algo_name = $algo_res_array['Algorithm_Name'];
			
			$query_categories = "SELECT DISTINCT category_name, category_ID FROM algorithm_category_names WHERE Algorithm_ID=".$algo_id.";";
			$query_analysis = "SELECT * FROM view_algorithm_analysis WHERE algorithm_id=".$algo_id.";";
			$query_implementations = "SELECT implementation_name, implementation_description, language, implementation from implementations WHERE algorithm_name ='".addslashes($algo_name)."';";
			$query_implementations_result = mysqli_query($link, $query_implementations) or die("Implementations query failed". mysqli_error($link));
			$query_categories_result = mysqli_query($link, $query_categories) or die("Query failed". mysqli_error($link));
			$query_analysis_result = mysqli_query($link, $query_analysis) or die("Query failed ".mysqli_error($link));
			
			
			
			mysqli_close($link);
			?>
			<div class='algo_desc'>
				<h2><?php echo $algo_res_array['Algorithm_Name'] ?></h2>
				<p><?php echo $algo_res_array['Algorithm_Description'] ?></p>
			</div>
			<details>
				<summary>
					Categories
				</summary>
				<?php
					if ($query_categories_result){
					while(	$query_categories_result_array= mysqli_fetch_assoc($query_categories_result)){
						echo "<p><a href='show_by_category.php?category_ID=".$query_categories_result_array['category_ID']."'>".$query_categories_result_array['category_name']."</a></p>";
					}
						 
					}
				?>
			</details>
			
			<details>
				<summary>
					The process
				</summary>
				<p><?php echo $algo_res_array['Algorithm_Process']; ?></p>
			</details>
			
			<details>	
				<summary>
					Analysis
				</summary>
				<?php
					if ($query_analysis_result){
					while(	$query_analysis_result_array= mysqli_fetch_assoc($query_analysis_result)){
						echo "<h3>".$query_analysis_result_array['analysis_type_name']."</h3>
						<p>".$query_analysis_result_array['analysis_content']."</p>
						";
					}
						 
					}
				?>
			</details>
			
			<details>
				<summary>
					Implementations
				</summary>
				<?php
					if ($query_implementations_result){
					while(	$query_implementations_result_array= mysqli_fetch_assoc($query_implementations_result)){
						echo "<h3>".$query_implementations_result_array['implementation_name']."(".$query_implementations_result_array['language'].")</h3>
						<p>".$query_implementations_result_array['implementation_description']."</p>
						<p>".$query_implementations_result_array['implementation']."</p>
						";
					}
						 
					}
				?>
			</details>
			
			<?php
		require_once ('footer.php');
		?>
		</div>
		
	</body>
</html>