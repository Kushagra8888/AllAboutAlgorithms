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
			<h2>Forum topics</h2>
			<?php
			$query = "SELECT * FROM forum_discussion;";
			$result = mysqli_query($link, $query) or die('could not connect ' . mysqli_error($link));
			if ($result) {
				while ($res_array = mysqli_fetch_assoc($result)) {
					$discussion_id = $res_array['discussion_ID'];
					$query_author = "SELECT CONCAT(First_Name, ' ', Last_Name) AS name FROM user WHERE user_ID='".$res_array['discussion_author']."';";
					$author_result = mysqli_query($link, $query_author) or die('could not connect ' . mysqli_error($link));
					$author_res_array = mysqli_fetch_assoc($author_result);
					echo "<span class='algo_link'><a href='posts.php?id=".$res_array['discussion_ID']."'>
						<div class='algo_desc'>
							<h3>".$res_array['discussion_name']."</h3>
							<p>Posted on ".$res_array['discussion_date']." by ".$author_res_array['name']."</p>
							<p>".$res_array['discussion_description']."</p>
						</div>
						</a></span>
					";

				}
				echo "<br>
						<a href='new_discussion.php'><p>New Topic</p></a>";
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