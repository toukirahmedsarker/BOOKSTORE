


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Book Info</title>
</head>

<body>
<h6>Copyright © 2018 Booksket</h6>
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


$query = "SELECT * FROM book_for_sell";
  	
$results = mysqli_query ($db, $query);

// set array
$array =  array();

// look through query
 while($row =  mysqli_fetch_assoc($results)){
  // add each row returned into an array
  $array[] =  $row;
  

  // OR just echo the data:
 // echo $row['name']. '<br>'; // etc

}

// debug:
 //print_r($array); // show all array data
//echo $array[0]['name']; // print the first rows username
?>
<script>
var arr = <?php echo json_encode($array); ?> ; 
for(var i = 0 ; i< arr.length ; i++ )
{
	//arr[i]['name'] = arr[i]['name']+"dhdh";
	document.write(arr[i]['imagepath']);
}
</script>

</body>
</html>



