<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Login Form</title>
		<link href="Home_Style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" href="img/icon.png" type="image/x-icon" />
		<?php
		require_once('auth.php');
		?>
	</head>
	<body>
		<div id="big_wrapper">
			<?php
			require_once ('header.php');
			?>
			<div class="login_form" class="login_form">
				<form class="loginForm" name="post_form" method="post" action="submit_post.php">
					<table>
						<tr>
							<th>Reply</th>
						</tr>
						<tr>
							<td>Title</td>
							<td >
							<input name="title" type="text" class="textfield" id="title" placeholder="title" />
							</td>
						</tr>
						<tr>
							<td>Content</td>
							<td>
							<textarea name="content" rows="5" cols="30" class="textfield" id="content" placeholder="Write your post here...."></textarea>
							</td>
						</tr>
						<tr>
							<td>
							<input type='hidden' name='discussion_id' value='<?php echo $_GET['id'];?>' />
							<input class='button' type="submit" name="submit" value="Submit" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
