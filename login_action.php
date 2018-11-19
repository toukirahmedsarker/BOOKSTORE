
<?php 
session_start();
include 'book_db_conn.php';
?>

<?php 

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  

  	$query = "SELECT * FROM user WHERE email ='$email' AND password='$password'";
  	
  	$results = mysqli_query($db, $query);
  	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $row =  mysqli_fetch_assoc($results);
  	  $_SESSION['username'] = $row['name'];
  	  header('location:/main');
  	}
  	else {
  		echo "Wrong username/password combination"."<br>";
  	}
}

?>