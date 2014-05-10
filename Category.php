<!DOCTYPE HTML>
<html>
	<head>
		<title>Category</title>
		<link href="Home_Style.css" type="text/css" rel="stylesheet">
		<!-- Establish DB Connectivity -->
		<?php
		require_once ('auth.php');
		require_once ("config.php");
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		$db = mysql_select_db(DB_NAME);
		$category_query = "SELECT * from Category";
		$category_list = @mysql_query($category_query);
		?>
	</head>
	<body>
		<div id="big_wrapper">
			<header>
				All About Algorithms
			</header>

			<nav>
				<div class="main_nav_bar">
					<ul>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Categories</a>
							<ul>
								<?php
								while ($row = mysql_fetch_assoc($category_list)) {
									echo "<li><a href=\"#\">" . $row['Category_name'] . "</a></li>";
								}
								?>
							</ul>
						</li>
						<li>
							<a href="#">Forums</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
					</ul>
				</div>
			</nav>
			<?php
			while ($row = mysql_fetch_assoc($category_list)) {
				echo "<li><a href=\"#\">" . $row['Category_name'] . "</a></li>";
			}
			?>
			<a link="logout.php">Logout</a>
		</div>
	</body>
</html>