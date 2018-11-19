<?php
// Start the session
session_start();
?>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["password"]);
  $comment = test_input($_POST["confirm_password"]);
  $gender = test_input($_POST["institution"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
	$mdata = $data;
	$mdata[0] ='"';
	$x = 0;
	for( $x=0;$x < strlen($data);$x+=1) 
	{
		$mdata[$x+1]= $data[$x];
	}
	$mdata[$x+1] = '"';
	//echo $mdata;
  return $mdata;
}
?>


<?php
//session_start();
//$_SESSION['name'] = $regValue;
$_SESSION["myname"] = "toha";
header('Location : sign_up');

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?> 



<!--
<?php
$servername = "localhost";
$username = "root";
$password = "4455";
$dbname = "weblab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO  user(name,email,password,institution)
VALUES ($name,$email,$comment,$gender)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("inzamam.csedu@gmail.com","My subject",$msg);
?>
-->