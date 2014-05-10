<?php
require_once('admin_auth.php');
require_once('config.php');
require_once('db_connect.php');
$name = $_POST['name'];
$description = $_POST['description'];
$process = $_POST['process'];

$insert_query = "INSERT into algorithm(Algorithm_Name, Algorithm_Description, Algorithm_Process) 
values('".$name."','".$description."','".$process."');";
$result = mysqli_query($link, $insert_query) or die("Query failed ".mysqli_error($link));
if($result){
	echo "<h2>Sucessfully added a new algorithm!</h2>
	<p><a href='Admin_home.php'>Go back</a></p>
	";
}
?>