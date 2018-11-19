<?php
 session_start();
 //echo $_SESSION['email'];
 if (!isset($_SESSION['email'])) {
 		header('location:/');
 } 

// connect to the database
echo 'toha';
include ('book_db_conn.php');

$username = "";
$cell     = "";
$password = "";
$confirm_password = "";
$institution = "";
$district = "";
$thana  = "";
$village = "";

$errors = array(); 

// REGISTER USER
if (isset($_POST['edit_pro'])) {
  // receive all input values from the registration form

  $username = mysqli_real_escape_string($db, $_POST['name']);
  $cell = mysqli_real_escape_string($db, $_POST['cell']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $institution = mysqli_real_escape_string($db, $_POST['institution']);
  $district = mysqli_real_escape_string($db, $_POST['district']);
  $thana = mysqli_real_escape_string($db, $_POST['thana']);
  $village = mysqli_real_escape_string($db, $_POST['village']);
  
 $email = $_SESSION['email'];
 echo $username;
  
  if ($password != $confirm_password) {
	 array_push($errors, "The two passwords do not match");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {	
  			
		//$pass = md5($password);//encrypt the password before saving in the database
  	 $sql = " UPDATE user SET name = '$username',cell = '$cell' ,password = '$password', institution = '$institution', district = '$district', thana = '$thana', village = '$village' WHERE email = '$email' ";
  			  
  	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	    	header('location:/profile');
	} 
	else {
   	 echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
	
 } 
 else {
 	
  	 foreach ($errors as $error)
  	   { 
  	      echo $error.'<br>';
   	}
  		echo 'Try again';
 }	
  mysqli_close($db);
}


?>