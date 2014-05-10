<?php
require_once('admin_auth.php');
require_once('config.php');
require_once('db_connect.php');
$title = addslashes($_POST['title']);
$description = addslashes($_POST['description']);
$algorithm = addslashes($_POST['algorithm']);
$language = addslashes($_POST['language']);
$implementation = addslashes($_POST['implementation']);

$insert_query = "INSERT into implementations
(implementation_name, implementation_description, algorithm_name, language, implementation) 
values('".$title."','".$description."','".$algorithm."','".$language."','".$implementation."');";
$result = mysqli_query($link, $insert_query) or die("Query failed ".mysqli_error($link));
if($result){
	echo "<h2>Sucessfully added a new implementation!</h2>
	<p><a href='Admin_home.php'>Go back</a></p>
	";
}
?>