<?php
 session_start();
 //echo $_SESSION['email'];
 if (!isset($_SESSION['email'])) {
 		header('location:/');
 } 
 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<title>Upload a book</title>

<script>
//function openTab(tabName) {
//  var i, x;
//  x = document.getElementsByClassName("containerTab");
//  for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";
//  }
//  document.getElementById(tabName).style.display = "block";
//}   


function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
    //Donate
    function PreviewImageD() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImageD").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreviewD").src = oFREvent.target.result;
        };
    };
    //Exchange
     function PreviewImageE() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImageE").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreviewE").src = oFREvent.target.result;
        };
    };
    

</script>

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

<?php
   include ('book_db_conn.php');
   $book_array =  array();
	/*if($_SERVER["REQUEST_METHOD"] == "POST"){*/
				
			if (isset($_GET['id'])) 
			{
				$getVar = $_GET['id'];		    
					
			}

			//$getVar = 19;
			$query = "SELECT * FROM book_for_sell WHERE book_id = '$getVar'";
  	
			$results = mysqli_query ($db, $query);

			// look through query
 			while($row =  mysqli_fetch_assoc($results)){
  						// add each row returned into an array
  						$book_array[] =  $row;
  						// OR just echo the data:
 						// echo $row['name']. '<br>'; // etc

				}
				//echo $book_array[0]['title'];
		
	//}
?>

<!-- Full-width columns: (hidden by default) -->

 <div id="b1" class="containerTab" style="background:purple">
<!--  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span> -->
 <h3 style="font-family: times; margin-left: 570px"> Update Book</h3>
 <form name ="add_book_form"  method="post" action="/book_edit.php" enctype="multipart/form-data" >
<br><br>
<input placeholder="Book Name" type="text" name="title" value="<?php echo $book_array[0]['title']; ?>" required>  <span style="margin-left : 100px;"> </span> <input placeholder="Author Name" type="text" name="author" value="<?php echo $book_array[0]['author']; ?>" required> <span style="margin-left : 100px;"> </span> <input placeholder="Type ex: novel, textbook, poem etc." type="text" name="type" value="<?php echo $book_array[0]['type']; ?>" required> <br><br>
<input placeholder="Edition ex: 1st, 2017" type="text" name="edition" value="<?php echo $book_array[0]['edition']; ?>" required> <span style="margin-left : 100px;"> </span>  <input placeholder="Number of pages" type="number" name="num_of_page" min="0" value="<?php echo $book_array[0]['numpage']; ?>" required> <span style="margin-left : 100px;"> </span> <input placeholder="Language ex:Bengali, English" type="text" name="language" value="<?php echo $book_array[0]['language']; ?>" required> <br><br>
<input placeholder="Quantity" type="number" name="quantity" value="<?php echo $book_array[0]['quantity']; ?>" min="0"required> <span style="margin-left : 100px;"> </span> 
<input type="hidden" name="book_id" value="<?php echo $getVar; ?>">
<select name="status" required>
    <option value="Brand new">Brand New</option>
    <option value="Like_new">Like New</option>
    <option value="Good" selected="selected">Good</option>
    <option value="Acceptable">Acceptable</option>
    <option value="Poor">Poor</option>
  </select> 

<br><br>
<textarea rows="4" cols="50"name="description"><?php echo $book_array[0]['description']; ?></textarea> <span style="margin-left : 150px;"> </span>

<label style="font-family: times;">Upload a new cover photo of the book:</label>        
<input id="uploadImage" type="file" name="photo" onchange="PreviewImage();" required>
<img id="uploadPreview" style="width: 100px; height: 100px;" alt=" ">


<br><br>   

<button type="submit" class="btn" name="sell_book"> Update </button> 
</form>
</div> 



<!-- <div id="b2" class="containerTab" style="display:none;background:#e67300">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
 
  <form name ="add_book_form" method="post" action="/donate_book_upload.php" enctype="multipart/form-data">

<br><br>
<input placeholder="Book Name" type="text" name="title" value="" required>  <span style="margin-left : 100px;"> </span> <input placeholder="Author Name" type="text" name="author" value="" required> <span style="margin-left : 100px;"> </span> <input placeholder="Type ex: novel, textbook, poem etc." type="text" name="type" value="" required> <br><br>
<input placeholder="Edition ex: 1st, 2017" type="text" name="edition" value="" required> <span style="margin-left : 100px;"> </span>  <input placeholder="Number of pages" type="number" min="0" name="num_of_page" value="" required> <span style="margin-left : 100px;"> </span> <input placeholder="Language ex:Bengali, English" type="text" name="language" value="" required> <br><br>
<input placeholder="Quantity" type="number" name="quantity" min="0" value="" required> <span style="margin-left : 100px;"> </span> 

<select name = "status">
    <option value="brand_new">Brand New</option>
    <option value="like_new">Like New</option>
    <option value="good">Good</option>
    <option value="acceptable">Acceptable</option>
    <option value="poor">Poor</option>
  </select>
<br><br>
<textarea rows="4" cols="50"name="description">Add a description...</textarea> <span style="margin-left : 150px;"> </span>

<label style="font-family: times;">Upload cover photo of the book:</label>        
<input id="uploadImageD" type="file" name="photo" onchange="PreviewImageD();" required>
<img id="uploadPreviewD" style="width: 100px; height: 100px;" alt=" ">

<br><br>   

<button type="submit" class="btn" name="donate_book">Donate</button> 
</form>
 
</div>



<div id="b3" class="containerTab" style="display:none;background:#2eb8b8">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
 
  <form name ="add_book_form" method="post"action="/exchange_book_upload.php" enctype="multipart/form-data" >

<br><br>
<input placeholder="Book Name" type="text" name="title" value="" required>  <span style="margin-left : 100px;"> </span> <input placeholder="Author Name" type="text" name="author" value="" required> <span style="margin-left : 100px;"> </span> <input placeholder="Type ex: novel, textbook, poem etc." type="text" name="type" value="" required> <br><br>
<input placeholder="Edition ex: 1st, 2017" type="text" name="edition" value="" required> <span style="margin-left : 100px;"> </span>  <input placeholder="Number of pages" type="number" name="num_of_page" value="" required> <span style="margin-left : 100px;"> </span> <input placeholder="Language ex:Bengali, English" type="text" name="language" value="" required> <br><br>
<input placeholder="Quantity" type="number" name="quantity" value="" required> <span style="margin-left : 100px;"> </span> 
<select name="condition" required>
    <option value="brand_new">Brand New</option>
    <option value="like_new">Like New</option>
    <option value="good" selected="selected">Good</option>
    <option value="acceptable">Acceptable</option>
    <option value="poor">Poor</option>
  </select> <br><br>
<textarea rows="4" cols="50"name="description">Add a description...</textarea> <span style="margin-left : 100px;"> </span> 
<label style="font-family: times;">Upload cover photo of the book:</label>        
<input id="uploadImageE" type="file" name="photo" onchange="PreviewImageE();" required>
<img id="uploadPreviewE" style="width: 100px; height: 100px;" alt=" ">

<br><br>

<button type="submit" class="btn" name="exchange_book">Exchange</button> 
</form>  -->
 
</div>

</body>
</html> 
