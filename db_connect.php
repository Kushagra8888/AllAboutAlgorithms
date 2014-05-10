<?php
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$link) {
	die('Could not connect: ' . mysqli_connect_error());
}
?>