<?php
require_once('admin_auth.php');
require_once('config.php');
require_once('db_connect.php');
$language = addslashes($_POST['language']);

$insert_query = "INSERT into languages(Language_Name) 
values('".$language."');";
$result = mysqli_query($link, $insert_query) or die("Query failed ".mysqli_error($link));
if($result){
	echo "<h2>Sucessfully added a new language!</h2>
	<p><a href='Admin_home.php'>Go back</a></p>
	";
}
?>