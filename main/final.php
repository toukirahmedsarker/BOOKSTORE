 <?php
 session_start();
 //echo $_SESSION['email'];
 if (!isset($_SESSION['email'])) {
 		header('location:/');
 	 
 } 
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Our Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">

<style>
* {
    box-sizing: border-box;
}
body {
  margin: 0;
}
img{
	vertical-aling:middle;
	border-radius: 8px;
}

.center {
    margin: 20px 40px;
    width: 80%;
    border-radius: 5px;
    padding: 10px;
	background-color: #F0FFFF;
	box-shadow: 0 0 10px 5px grey;
	margin-left:125px;
}

/* Style the header */
</style>

</head>


<body>

<div class="header">
<p style="width:250px; padding-left:10px;"><span style="color:black;font-size:50px;font-weight:bold;font-family:cursive">BOOK</span> <span style="font-family:cursive">Store</span></p>

</div>

<?php
if($_SESSION['username']!=''){
			$name  = $_SESSION['username'];
			$name_link = '/profile';
			$name2 = 'Logout';	
		   $name_link2 = '/logout_action.php';
	}
else {
		$name  = 'Login';
		$name_link = '/';
		$name2 = 'Signup';	
		$name_link2 = '/sign_up';
		
	}
?>

<div class="topnav">
<a href="/main" class="active">Home</a>
  <a href="#">About Us</a>
  <a href="#">Help</a>
  <a href=" <?php echo $name_link2;?> "  style="float: right;" > <?php echo $name2;?> </a>
  <a href=" <?php echo $name_link;?> "  style="float: right;" > <?php echo $name;?> </a>
  <!-- <a href="/"  style="float: right;" > Login </a>
      <a href="/sign_up" style="float: right;">Signup</a> -->
      <a href="/add_book"  style="float: center;" >Add Book</a>
  <div class="search-container">

     
  </div>
</div>

<!-- <div class="topnav">
<a href="#" class="active">Home</a>
  <a href="#">About Us</a>
  <a href="#">Help</a>
  <div class="search-container">
    <form action="/action_page.php" method="post">
      <input type="text" placeholder="Username or Email..." name="Username">
	  <input type="text" placeholder="password" name="password">
      <button type="submit">login</button>
    </form>
  </div>
</div> -->


<div class="center">
	<div class="row">
		<div class="column middle" style="border-right:1px solid gray">
		<img id="imagepath"></img>
		</div>
		<div class="column side" style="border-left:1px solid gray">
			<b><p1 id = "title" ></p1></b><br>
			<p id="author"> </p>
			<p id="type"> </p>
			<p id="edition"> </p>
			<p id="language"> </p>
			<p id="numpage"> </p>
			<p id="status"> </p>
			<p id="price"> </p> 
		    
		</div>
	</div>
	<div>
			<h2>Description:</h2><br>
			<p id="description"></p>
			
	</div>
	
	
<?php
$servername = "localhost";
$username = "root";
$password = "4455";
$dbname = "book_db";



// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}




// set array
$book_array =  array();

if (isset($_POST['btn_submit'])) 
{
	$getVar = $_POST['btn_submit'];		    
}

$query = "SELECT * FROM book_for_sell WHERE book_id = '$getVar'";
  	
$results = mysqli_query ($db, $query);


// look through query
 while($row =  mysqli_fetch_assoc($results)){
  // add each row returned into an array
  $book_array[] =  $row;
  // OR just echo the data:
 // echo $row['name']. '<br>'; // etc

}
// debug:
 //print_r($array); // show all array data
//echo $array[0]['name']; // print the first rows username
?>


<script>
var arr = <?php echo json_encode($book_array); ?> ; 
//var x = <?php echo json_encode($getVar); ?> ;
x=0;

document.getElementById("title").innerHTML= arr[x]['title'];
document.getElementById("status").innerHTML="Condition: " + arr[x]['status'];
document.getElementById("author").innerHTML= "Author: " + arr[x]['author'];
document.getElementById("type").innerHTML= "Type: " + arr[x]['type'];
document.getElementById("edition").innerHTML= "Edition: " + arr[x]['edition'];
document.getElementById("numpage").innerHTML= "Total page: " + arr[x]['numpage'];
document.getElementById("language").innerHTML= "Language: " + arr[x]['language'];
document.getElementById("price").innerHTML="Price: " + arr[x]['price'];
//document.getElementById("quantity").innerHTML= "Quantity: " + arr[x]['quantity'];

document.getElementById("description").innerHTML= arr[x]['description'];
//document.getElementById("price").innerHTML="Price: " + arr[x]['price'];

var str = arr[x]['imagepath'];
var res = str.slice(13,str.length);
var elem = document.getElementById("imagepath");
elem.setAttribute("src",res); 
elem.setAttribute("height", "400px");
elem.setAttribute("width", "80%");
elem.getElementById("imagepath").setAttribute("alt", "myimage");


</script>



</div>

<div class="footer">
  <h4 >Book Store</h4>
  <h6>Copyright © 2018 BookStore</h6>
</div>

</body>
</html>
