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
}

<!-- .button {
    background-color: lightgray; /* Green */
    border: none;
    color: black;
    padding: 2px 2px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin-right: 2px;
     margin-top: 4px;
      margin-bottom: 4px;
      height: 28px;
} -->
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
<!-- new added div/form -->
<div class="container">
  <form name="myForm" action="/main/search_result.php" onsubmit="return validateForm()" method="post">
    <!-- <select id="District" name="District">
	  <option value="starting">Select District </option>
      <option value="dhaka">Dhaka</option>
      <option value="rajshahi">Rajshahi</option>
      <option value="rangpur">Rangpur</option>
	  <option value="cumilla">Cumilla</option>
	  <option value="chuadanga">Chuadanga</option>
    </select>
	<select id="Thana" name="Thana">
	  <option value="0">Select Thana</option>
	</select> -->
    <select id="blood_doctor" name="category" onchange="Change(this)" style="margin-left : 300px;">
	  <option value="empty"> Search by Author/Book Name/Book Type </option>
      <option value="author">Author</option>
      <option value="title">Book Name</option>
	  <option value="type">Book Type</option>
    </select>
	<!-- <select id="grp_speciality" name="src_item"> 
    <option value="0">Select Book name/author/Type</option>
  </select> -->
  <input type="text" value="" name="search_word" placeholder="Enter your input">

   <input type="submit" value="Search" name="search">
  </form>
</div>


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
// print_r($array); // show all array data
//echo $array[0]['name']; // print the first rows username
?>


<script type="text/javascript">

var arr = <?php echo json_encode($array); ?> ; 
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var options = new Array(3);
 options["empty"] = ["Search by Author/Book Name/Book Type"]; 
 options["title"] =  ["Select Book name"]; 
 options["author"] = ["Select Author name"];
 options["type"]= ["Select book type","Drama","Poem","Novel","Short Story","Text Book","Science Fiction"]; 
 
for(x = 0 ;x<arr.length;x++)
{
	options["title"].push( arr[x]['title'] );
	options["author"].push( arr[x]['author'] );

} 

 
 
 function Change(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = options[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("grp_speciality"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 }
 </script>
<!--end -->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="new1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="new2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="new3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<!-- <div class="row">
	<div class="column side">
		<h1>Welcome book lovers</h1>
		<p1>Thanks for visiting our website. Its our pleasure to help you. you can buy second hand books here</p1>
	</div>
	<div class="column middle">
		<div class="largecontainer">
			<h2>Poem</h2>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
		</div>
		<div class="largecontainer">
		    <h2>Novel</h2>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
		</div>
        <div class="largecontainer">
			<h2>Drama</h2>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
			<div class="smallcontainer">
			</div>
	    </div>		
	</div> -->
	
</div>
<div class="footer">
  <h4 >Book Store</h4>
  <h6>Copyright © 2018 BookStore</h6>
</div>

</body>
</html>

