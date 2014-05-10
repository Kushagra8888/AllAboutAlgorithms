<?php
	session_start();
	require_once ('auth.php');
	require_once ("config.php");
	require_once("db_connect.php");
	date_default_timezone_set('Asia/Calcutta');
	$query = "INSERT INTO forum_post(discussion_id, post_title, post_content, post_date, post_author) 
	VALUES (".$_POST['discussion_id'].",'".$_POST['title']."','".$_POST['content']."','".date("Y:m:d g:i:s")."',".$_SESSION['user_id'].");";
	echo $_SESSION['SESS_MEMBER_ID'];
	echo $_SESSION['user_id'];
	echo $query;
	$result = mysqli_query($link, $query) or die("Query execution failed ".mysqli_error($link));
	header("location: posts.php?id=".$_POST['discussion_id']."");
?>