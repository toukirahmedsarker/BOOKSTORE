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

.inner {
    margin: 20px 40px;
    width: 60%;
	height: 240px;
    border-radius: 5px;
    padding: 10px;
	background-color: #ccc;
	box-shadow: 8px 5px 10px 5px grey;
	margin-left:125px;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
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

<div class="center" id="target">	

</div>

<a href="javascript:prevPage()" id="btn_prev" class="button" style="margin-left:600px">Prev</a>
<a href="javascript:nextPage()" id="btn_next"class="button" style="text-align : center ">Next</a>
page: <span id="page"></span>

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

$s_item ="";
$category = "";
$search_word = "";
if (isset($_POST['search'])) 
{
	$category = $_POST['category'];
 $s_item = $_POST['src_item'];	
 $search_word = $_POST['search_word'];
}
$search_word ='%' .$search_word.'%';
//echo $s_item;
//echo $category;
//echo $search_word;

//$query = "SELECT * FROM book_for_sell WHERE $category = '$s_item'";
 $query = "SELECT * FROM book_for_sell WHERE $category like '$search_word' ";
  	
$results = mysqli_query ($db, $query);

// set array
$array =  array();

// look through query
 while($row =  mysqli_fetch_assoc($results)){
  // add each row returned into an array
  $array[] =  $row;
  // OR just echo the data:
 // echo $row['title']. '<br>'; // etc

}
// print_r($array); // show all array data
//echo $array[0]['name']; // print the first rows username
?>


<script>

var arr = <?php echo json_encode($array); ?> ; 
/* 
var current_page = 1;
	var records_per_page = 2;
	function prevPage()
	{
		if (current_page > 1) {
			current_page--;
			changePage(current_page);
		}
	}

	function nextPage()
	{
		if (current_page < numPages()) {
			current_page++;
			changePage(current_page);
		}
	}
	
	function changePage(page)
				{
					var btn_next = document.getElementById("btn_next");
					var btn_prev = document.getElementById("btn_prev");
					var listing_table = document.getElementById("target");
					var page_span = document.getElementById("page");

					// Validate page
					if (page < 1) page = 1;
					if (page > numPages()) page = numPages();
                                        listing_table.innerHTML= "kuttar baccha hois na kan";
					listing_table.innerHTML = "";
					//while (listing_table.firstChild) {
					//	listing_table.removeChild(myNode.firstChild);
					//}
					

					for (var i = (page-1) * records_per_page; i < (page * records_per_page); i++) {
						var board = document.createElement('div');
						board.className = "inner";
						board.id="no"+i;
						var board1= document.createElement('div');
						board1.className= "row";
						//board1.id="row"+x;
						var board2= document.createElement('div');
						board2.className= "column side";
						//board2.id="columnside"+x;
						var board3= document.createElement('div');
						board3.className= "column middle";
						//board3.id="columnmiddle"+x;
							
						listing_table.appendChild(board);
						board.appendChild(board1);
						board1.appendChild(board2);
						board1.appendChild(board3);
						
						var elem=document.createElement('img');
						elem.setAttribute("src", "us.jpg");
						elem.setAttribute("height", "100%");
						elem.setAttribute("width", "200px");
						elem.setAttribute("alt", "myimage");
						elem.id=board.id;
						document.getElementById(elem.id).style.display="inline-block";
						
						var elem1=document.createElement('p');
						elem1.id=board.id;
						//elem1.style.color="blue";
						elem1.innerHTML="this div id is"+elem1.id;
						elem1.style.fontSize= "larger";
						var elem2=document.createElement('p');
						elem2.id=board.id;
						//elem2.style.color="blue";
						elem2.innerHTML="Type: Donate"
						elem2.style.fontSize= "larger";
						var elem3=document.createElement('p');
						elem3.id=board.id;
						//elem3.style.color="blue";
						elem3.innerHTML="Price: 100tk"
						elem3.style.fontSize= "larger";
						var btn = document.createElement('a');
						//var t = document.createTextNode("CLICK ME");
						btn.innerHTML="CLICK ME";
						btn.setAttribute("href","http://localhost/Bookstore/final.php");
						//btn.appendChild(t);
						btn.className ="button";
						//btn.href = "http://localhost/Bookstore/final.php";
						board2.appendChild(elem);
						board3.appendChild(elem1);
						board3.appendChild(elem2);
						board3.appendChild(elem3);
						board3.appendChild(btn);
						
					}
					page_span.innerHTML = page;

					if (page == 1) {
						btn_prev.style.visibility = "hidden";
					} else {
						btn_prev.style.visibility = "visible";
					}

					if (page == numPages()) {
						btn_next.style.visibility = "hidden";
					} else {
						btn_next.style.visibility = "visible";
					}
				}

				function numPages()
				{
					return Math.ceil(10 / records_per_page);
				}

				window.onload = function() {
					changePage(1);
				};
	//end
	*/

for(x=0; x<arr.length;x++) {
    var board = document.createElement('div');
    board.className = "inner";
	board.id="no"+x;
	var board1= document.createElement('div');
	board1.className= "row";
    //board1.id="row"+x;
    var board2= document.createElement('div');
	board2.className= "column side";
    //board2.id="columnside"+x;
	var board3= document.createElement('div');
	board3.className= "column middle";
    //board3.id="columnmiddle"+x;
      	
   document.getElementById('target').appendChild(board);
	board.appendChild(board1);
	board1.appendChild(board2);
	board1.appendChild(board3);
	
	var str = arr[x]['imagepath'];
	var res = str.slice(13,str.length);
	var elem=document.createElement('img');
	elem.setAttribute("src",res);
	elem.setAttribute("height", "200px");
	elem.setAttribute("width", "200px");
	elem.setAttribute("alt", "myimage");
	elem.id=board.id;
	document.getElementById(elem.id).style.display="inline-block";
	
	var elem1=document.createElement('p');
	elem1.id=board.id;
	//elem1.style.color="blue";
	elem1.innerHTML= arr[x]['title'];
	elem1.style.fontSize= "larger";
	
	var elem2=document.createElement('p');
	elem2.id=board.id;
	//elem2.style.color="blue";
	elem2.innerHTML="Type: "+ arr[x]['type'];
	elem2.style.fontSize= "larger";
	
	var elem3=document.createElement('p');
	elem3.id=board.id;
	//elem3.style.color="blue";
	elem3.innerHTML= "Price : "+ arr[x]['price'];
	elem3.style.fontSize= "larger";
	
	var frm = document.createElement('form');
	frm.setAttribute("action","/main/final.php");
	frm.setAttribute("method","POST");
	
	
	var btn = document.createElement('BUTTON');
	btn.setAttribute("type","submit");
	btn.setAttribute("name","btn_submit");
	btn.setAttribute("value",arr[x]['book_id']);
	var t = document.createTextNode("Details");
	//btn.innerHTML="Details";
	//btn.setAttribute("href","/main/final.php");
	btn.appendChild(t);
	btn.className ="button";
	
	board2.appendChild(elem);
	board3.appendChild(elem1);
	board3.appendChild(elem2);
	board3.appendChild(elem3);
	board3.appendChild(frm);
	frm.appendChild(btn);
    //document.getElementById(board.id).appendChild(elem);
	//document.getElementById(board.id).appendChild(elem1);
	
}
</script>
<div class="footer">
  <h4 >Book Store</h4>
  <h6>Copyright © 2018 BookStore</h6>
</div>

</body>
</html>
