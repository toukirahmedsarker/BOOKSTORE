<?php
$servername = "localhost";
$username = "root";
$password = "4455";
$dbname = "weblab";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>