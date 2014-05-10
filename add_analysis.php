<!DOCTYPE HTML>
<html>
	<head>
		<title>Add analysis</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
		require_once ('admin_auth.php');
		require_once ("config.php");
		require_once("db_connect.php");
		//$category_query = "SELECT * from Category";
		//$category_list = @mysqli_query($link, $category_query);
		$algo_query = "SELECT DISTINCT Algorithm_Name FROM algorithm;";
		$analysis_type_query = "SELECT analysis_type_name FROM analysis_types;";
		$algo_result = mysqli_query($link, $algo_query) or die("Query failed ".mysqli_error($link));
		$analysis_type_result = mysqli_query($link, $analysis_type_query) or die("Query failed ".mysqli_error($link));
		?>
	</head>
	<body>
<div id="big_wrapper">
			<?php
			require_once ('admin_header.php');
			?>
			<div class="login_form">
				<form class="loginForm" name="loginForm" method="post" action="login-exec.php">
					<table>
						<tr>
							<th> New analysis</th>
						</tr>
						<tr>
							<td>Algorithm</td>
							<td >
							<select name='algorithm'>
								<?php
									if($algo_result){
										while($algo_result_arr = mysqli_fetch_assoc($algo_result)){
											echo "<option>".$algo_result_arr['Algorithm_Name']." </option>";
										}
									}
								?>
							</select>
							</td>
						</tr>
						<tr>
							<td>Analysis type</td>
							<td >
							<select name='type'>
								<?php
									if($analysis_type_result){
										while($analysis_type_result_arr = mysqli_fetch_assoc($analysis_type_result)){
											echo "<option>".$analysis_type_result_arr['analysis_type_name']." </option>";
										}
									}
								?>
							</select>
							</td>
						</tr>
						<tr>
							<td>Content</td>
							<td >
							<textarea name='content' rows="6" cols="40">
								//Paste analysis here
							</textarea>
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