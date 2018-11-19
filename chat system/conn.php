<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","4455","forum");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>