<!DOCTYPE HTML>
<html>
	<head>
		<title>Posts</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
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
			$query = "SELECT * FROM forum_post WHERE discussion_id = ".$_GET['id'].";";
			$result = mysqli_query($link, $query) or die('could not connect ' . mysqli_error($link));
			if ($result) {
				while ($res_array = mysqli_fetch_assoc($result)) {
					$query_author = "SELECT CONCAT(First_Name, ' ', Last_Name) AS name FROM user WHERE user_ID='".$res_array['post_author']."';";
					$author_result = mysqli_query($link, $query_author) or die('could not connect ' . mysqli_error($link));
					$author_res_array = mysqli_fetch_assoc($author_result);
					echo "<span class='algo_link'>
						<div class='algo_desc'>
							<h3>".$res_array['post_title']."</h3>
							<p>".$res_array['post_content']."</p>
							<p>Posted at: ".$res_array['post_date']." by ".$author_res_array['name']."</p>
						</div>
						</span>
						
					";

				}
				echo "<p>
						<a href='reply.php?id=".$_GET['id']."'><p>Reply</p></a></p>";
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