<?php
	$user="root";
	$pass="bookstore";
	$db="BookStore";
	$conn= new mysqli("localhost",$user,$pass,$db);
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
    }
?>