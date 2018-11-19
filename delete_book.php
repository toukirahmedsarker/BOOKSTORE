<?php
 session_start();
 //echo $_SESSION['email'];
 if (!isset($_SESSION['email'])) {
 		header('location:/');
 } 
?>


<?php
   include ('book_db_conn.php');
   $book_array =  array();
	/*if($_SERVER["REQUEST_METHOD"] == "POST"){*/
				
			if (isset($_GET['id'])) 
			{
				$getVar = $_GET['id'];		    
					
			}

			//$getVar = 19;
			$sql = "DELETE FROM book_for_sell WHERE book_id = $getVar";

			if (mysqli_query($db, $sql)) {
				    			echo "book_for_sell row deleted successfully".'<br>';
	 		}
			else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
			
			$sql = "DELETE FROM sell_book WHERE book_id = $getVar";

			if (mysqli_query($db, $sql)) {
				    			echo "sell_book row deleted successfully".'<br>';
	 		}
			else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
			
			$sql = "DELETE FROM donate_book WHERE book_id = $getVar";

			if (mysqli_query($db, $sql)) {
				    			echo "donate_book row deleted successfully".'<br>';
	 		}
			else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
			
			$sql = "DELETE FROM exchange_book WHERE book_id = $getVar";

			if (mysqli_query($db, $sql)) {
				    			echo "exchange_book row deleted successfully".'<br>';
	 		}
			else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
			
			$sql = "DELETE FROM user_book WHERE book_id = $getVar";

			if (mysqli_query($db, $sql)) {
				    			echo "user_book row deleted successfully".'<br>';
	 		}
			else {
   				 echo "Error: " . $sql . "<br>" . mysqli_error($db);
			}
  				header('location:/profile');
				mysqli_close($db);
			
?>