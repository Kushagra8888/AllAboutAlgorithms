<?php
require_once('admin_auth.php');
require_once('config.php');
require_once('db_connect.php');
$type_name = $_POST['type_name'];
$description = $_POST['description'];

$insert_query = "INSERT into analysis_types(analysis_type_name, analysis_type_description) 
values('".$type_name."','".$description."');";
$result = mysqli_query($link, $insert_query) or die("Query failed ".mysqli_error($link));
if($result){
	echo "<h2>Sucessfully added a new analysis type!</h2>
	<p><a href='Admin_home.php'>Go back</a></p>
	";
}
?>