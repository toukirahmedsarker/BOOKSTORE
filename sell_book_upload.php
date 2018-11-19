<?php
 session_start();
 //echo $_SESSION['email'];
 if (!isset($_SESSION['email'])) {
 		header('location:/');
 } 

// connect to the database
include ('book_db_conn.php');

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
$filename = "";



// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// Check if file was uploaded without errors
   if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
	    {
	        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
	        $filename = date("Y.m.d.h.i.s").$_FILES["photo"]["name"];
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
	            if(file_exists("/add_book/uploads/" . $filename)){
	                echo $_FILES["photo"]["name"] . " is already exists.";
	            } else{
	                move_uploaded_file($_FILES["photo"]["tmp_name"], "/var/www/html/add_book/uploads/" .$filename);
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
				
				$date = date("Y-m-d");
			
				
			  	$sql = "INSERT INTO book_for_sell (title, author, type, edition, numpage, language, quantity, price, status, description, imagepath, upload_date) 
			  			  VALUES('$title', '$author', '$type','$edition','$numpage','$language','$quantity','$price','$book_status','$description','$imagepath','$date')";
			  			  	  	
			  	
			  	//echo $book_status;
			  	if (mysqli_query($db, $sql)) {
				    echo "New record created successfully";
				    $book_id = mysqli_insert_id($db);//create new book id
				  
				    
				    $sql = "INSERT INTO sell_book (book_id, title, author, type, edition, numpage, language, price, quantity, status, description, imagepath, upload_date) 
			  			  VALUES('$book_id','$title', '$author', '$type','$edition','$numpage','$language','$price','$quantity','$book_status','$description','$imagepath','$date')";
				    if (mysqli_query($db, $sql)) {
				    			echo "New record created successfully";
				 		}
				 		else {
			   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
				     }
				     $user_mail  = $_SESSION['email'];
				     $change_type = "Sell";
				      $sql = "INSERT INTO user_book (book_id, email, change_style) 
			  			  VALUES('$book_id', '$user_mail','$change_type')";
				    if (mysqli_query($db, $sql)) {
				    			echo "New record created successfully";
				 		}
				 		else {
			   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
				     }
				} 
				else {
			   	 echo "Error: " . $sql . "<br>" . mysqli_error($db);
				}
			   header('location:/add_book');
				mysqli_close($db);
			}	
	
	
    
}
?>