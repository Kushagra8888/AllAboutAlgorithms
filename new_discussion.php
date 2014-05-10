<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Post new discussion topic</title>
		<link href="Home_Style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="img/icon.png" type="image/x-icon" />
		<?php 
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}
		?>
	</head>
	<body>
		<div id="big_wrapper">
			<?php
			require_once ('header.php');
			?>
			<div class="login_form" class="login_form">
				<form class="loginForm" name="post_form" method="post" action="add_discussion.php">
					<table>
						<tr>
							<th>New Topic</th>
						</tr>
						<tr>
							<td>Topic name</td>
							<td >
							<input name="topic_name" type="text" class="textfield" id="title" placeholder="title" />
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td>
							<textarea name="topic_description" rows="5" cols="30" class="textfield" id="description" placeholder="Write topic description here...."></textarea>
							</td>
						</tr>
						<tr>
							<td>
							<input class='button' type="submit" name="submit" value="Submit" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
