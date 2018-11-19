<?php

// connect to the database
include ('book_db_conn.php');

// initializing variables
$username = "";
$email    = "";
$cell     = "";
$password = "";
$confirm_password = "";
$institution = "";
$district = "";
$thana  = "";
$village = "";

$errors = array(); 


// REGISTER USER
if (isset($_POST['reg_submit'])) {
  // receive all input values from the registration form

  $username = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $cell = mysqli_real_escape_string($db, $_POST['cell']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $institution = mysqli_real_escape_string($db, $_POST['institution']);
  $district = mysqli_real_escape_string($db, $_POST['district']);
  $thana = mysqli_real_escape_string($db, $_POST['thana']);
  $village = mysqli_real_escape_string($db, $_POST['village']);
  
  
  if ($password != $confirm_password) {
	 array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {	
  
	//$pass = md5($password);//encrypt the password before saving in the database
  	 $sql = "INSERT INTO user (name, email, cell,password, institution, district, thana, village) 
  			  VALUES('$username', '$email','$cell','$password','$institution','$district','$thana','$village')";
  			  
  	if (mysqli_query($db, $sql)) {
	    echo "New record created successfully";
	    	header('location:index.php');
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