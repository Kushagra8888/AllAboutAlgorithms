<!DOCTYPE HTML>
<html>
	<head>
		<title>Add implementation</title>
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
		$language_query = "SELECT DISTINCT Language_Name FROM languages;";
		$algo_result = mysqli_query($link, $algo_query) or die("Query failed ".mysqli_error($link));
		$language_result = mysqli_query($link, $language_query) or die("Query failed ".mysqli_error($link));
		?>
	</head>
	<body>
<div id="big_wrapper">
			<?php
			require_once ('admin_header.php');
			?>
			<div class="login_form">
				<form class="loginForm" name="loginForm" method="post" action="add_implementation-exec.php">
					<table>
						<tr>
							<th> New implementation</th>
						</tr>
						<tr>
							<td>Title</td>
							<td >
							<input name="title" type="text" class="textfield"  placeholder="title" />
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td >
							<textarea name="description" rows="6" cols="40" >Write description here...	
							</textarea>	
							</td>
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
							<td>Language</td>
							<td >
							<select name='language'>
								<?php
									if($language_result){
										while($language_result_arr = mysqli_fetch_assoc($language_result)){
											echo "<option>".$language_result_arr['Language_Name']." </option>";
										}
									}
								?>
							</select>
							</td>
						</tr>
						<tr>
							<td>Implementation</td>
							<td >
							<textarea name='implementation' rows="6" cols="30">
								//Paste code here
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