
<?php

$title= "";
$author= "";
$type   = "";
$edition = "";
$numpage = "";
$language = "";
$quantity ="";
$price = "";
$book_status = "";
$description ="";
$imagepath = "";

// connect to the database
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



// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// Check if file was uploaded without errors
	    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
	    {
	        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
	        $filename = $_FILES["photo"]["name"];
	        $filetype = $_FILES["photo"]["type"];
	        $filesize = $_FILES["photo"]["size"];
	    
	        // Verify file extension
	        $ext = pathinfo($filename, PATHINFO_EXTENSION);
	        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
	    
	        // Verify file size - 5MB maximum
	        $maxsize = 5 * 1024 * 1024;
	        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
	    
	        // Verify MYME type of the file
	        if(in_array($filetype, $allowed)){
	            // Check whether file exists before uploading it
	            if(file_exists("/add_book/uploads/" . $_FILES["photo"]["name"])){
	                echo $_FILES["photo"]["name"] . " is already exists.";
	            } else{
	                move_uploaded_file($_FILES["photo"]["tmp_name"], "/var/www/html/add_book/uploads/" . $_FILES["photo"]["name"]);
	                echo "Your file was uploaded successfully.";
	                $imagepath = '/var/www/html/add_book/uploads/' . $filename;
	                echo '<img src =" ' . $filename . ' "  width=100 height=100 >';
	            } 
	        } else{
	            echo "Error: There was a problem uploading your file. Please try again."; 
	        }
	    } 
	    else
	    {
	        echo "Error: " . $_FILES["photo"]["error"];
	    }
	    
			if (isset($_POST['sell_book'])) {
			  // receive all input values from the registration form
			  
			   $title= mysqli_real_escape_string($db, $_POST['title']);
				$author= mysqli_real_escape_string($db, $_POST['author']);
				$type = mysqli_real_escape_string($db, $_POST['type']);
				$edition = mysqli_real_escape_string($db, $_POST['edition']);
				$numpage = mysqli_real_escape_string($db, $_POST['num_of_page']);
				$language = mysqli_real_escape_string($db, $_POST['language']);
				$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
				$price = mysqli_real_escape_string($db, $_POST['price']);
				$book_status = mysqli_real_escape_string($db, $_POST['status']); 
				$description = mysqli_real_escape_string($db, $_POST['description']);
			
				
			  	$sql = "INSERT INTO book_for_sell (title, author, type, edition, numpage, language, quantity, price, status, description, imagepath) 
			  			  VALUES('$title', '$author', '$type','$edition','$numpage','$language','$quantity','$price','$book_status','$description','$imagepath')";
			  			  
			  	echo $book_status;
			  	if (mysqli_query($db, $sql)) {
				    echo "New record created successfully";
				} 
				else {
			   	 echo "Error: " . $sql . "<br>" . mysqli_error($db);
				}
				
			  	$_SESSION['username'] = $username;
			  	$_SESSION['success'] = "You are now logged in";
			   header('location:/add_book');
				mysqli_close($db);
			}	
	
	
    
}
?>