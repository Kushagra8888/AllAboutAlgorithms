<?php
	session_start();
	require_once ('auth.php');
	require_once ("config.php");
	require_once("db_connect.php");
	date_default_timezone_set('Asia/Calcutta');
	$query = "INSERT INTO forum_discussion(discussion_name, discussion_description, discussion_date, discussion_author) 
	VALUES ('".$_POST['topic_name']."','".$_POST['topic_description']."','".date("Y:m:d g:i:s")."',".$_SESSION['user_id'].");";
	echo $_SESSION['SESS_MEMBER_ID'];
	echo $_SESSION['user_id'];
	echo $query;
	$result = mysqli_query($link, $query) or die("Query execution failed ".mysqli_error($link));
	header("location: discussions.php?id=".$_POST['discussion_id']."");
?>