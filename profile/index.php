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
<title>Profile</title>
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
	border-radius: 50%;
	width: 150px;
	height : 150px;
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

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

/* Style the header */
</style>

<script type="text/javascript">
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var countryLists = new Array(4) 
 //countryLists["empty"] = ["Select your Area"]; 
 countryLists["Dhaka"] = ["Adabor","Badda","Bangsal","Bimanbandar","Cantonment","ChakBazar","Dakshinkhan","DarusSalam","Demra","Dhamrai","Dhanmondi","Dohar","Gendaria","Gulshan","Hazaribagh","Jatrabari","Kadamtali","Kafrul","Kalabagan","Kamrangirchar","Keraniganj","Khilgaon","khilkhet","Kotwali","Lalbagh","Mirpur","Mohammadpur","Motijheel","Nawabganj","Newmarket","Pallabi","Paltan","Ramna","Rampura","Sabujbagh","Savar","ShahAli","Shahbag","Sher-e-BanglaNagar","Shyampur","Sutrapur","Tejgaon","Mohakhali","TejgaonIndustrialArea","Turag","Uttara","UttarKhan"]; 
 countryLists["Chittagong"] =  ["Anwara","Banshkhali","Boalkhali","Chandanaish","Fatikchhari","Hathazari","Lohagara","Mirsharai","Patiya","Rangunia","Raozan","Sandwip","Satkania","Sitakunda","AkborSha","Baizid","Bakoliya","Bandar","Bhujpur","Chandgaon","Chaowkbazar","Chittagong","Kotwali","Double","Mooring","Halishahar","Karnaphuli","Khulshi","Pahartali","Panchlaish","Patenga","Sadarghat"];
 countryLists["Gazipur"] =  ["Gazipur","Kaliakair","Kaliganj","Kapasia","Tongi","Sreepur"];
 countryLists["Rajshai"]= ["Adamdighi","Bogra","Dhunat","Dupchanchia","Gabtali","Kahaloo","Nandigram","Sariakandi","Sahajanpur","Sherpur","Shibganj","Sonatala"];
 countryLists["Khulna"]= ["Terokhada","Batiaghata","Dacope","Dumuria","Dighalia","Koyra","Paikgachha","Phultala","Rupsa","Daulatpur","Khalishpur","KhanJahanAli","Kotwali","Sonadanga","Labanchara","Harintana","Arangghata"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
		 // get the index of the selected option 
		 var idx = selectObj.selectedIndex; 
		 // get the value of the selected option 
		 var which = selectObj.options[idx].value; 
		 // use the selected option value to retrieve the list of items from the countryLists array 
		 cList = countryLists[which]; 
		 // get the country select element via its known id 
		 var cSelect = document.getElementById("country"); 
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
			 			cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
				 } 
		 		catch (e) { 
		 				cSelect.appendChild(newOption); 
		 		} 
		 } 
 } 

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

<div class="center">
	<div class="center" style="box-shadow : 1px 2px 3px 4px white">
	<h3 style="margin-left:40%">PROFILE</h3>
	<img id="image" src="/profile/image/image.png" style="margin-left:37%">
	<p id ="para1" style="margin-left:37%">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
	<p id ="para2" style="margin-left:37%">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
	<p id ="para3" style="margin-left:37%">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
	<p id ="para4" style="margin-left:37%">Institution&nbsp;&nbsp;&nbsp;&nbsp;: </p>
	<p id ="para5" style="margin-left:37%">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </p>
	<button style="margin-left: 42%" onclick="changeDisplay(this)" >Edit Profile</button>
	
	<div class="container" id="editprofile">
	
	 <form action="/edit_profile.php" method="post" name="edit_pro_form">
     <label for="fname" style="width: 100%">Name</label>
     <input type="text" id="fname" name="name" placeholder="Your name.." style="width: 100%" required>

     <label for="contact" style="width: 100%">Contact</label>
     <input type="text" id="contact" name="cell" placeholder="insert your contact" style="width: 100%" required>
     
	 <label for="institute" style="width: 100%">Institution</label>
     <input type="text" id="institute" name="institution" placeholder="Insert your Institution name" style="width: 100%" required>
     
     <label for="New Password" style="width: 100%">New Password</label>
     <input type="text" id="password" name="password" placeholder="Insert your New Password or Old Password" style="width: 100%" required>
     
     <label for="Confirm Password" style="width: 100%">Confirm Password</label>
     <input type="text" id="confirm_password" name="confirm_password" placeholder="Insert your New Password or Old Password" style="width: 100%" required>
     
      <label for="Road No. or Village" style="width: 100%">District</label>
      <select name = "district" id="continent" onchange="countryChange(this);"   style="height: 45px;width: 100%;padding: 5px 10px;font-size: 16px;border-radius: 5px;border: 1px solid gray;background: white;" required>
    <!-- <option selected="selected" value="empty">Present address</option> -->
		<!-- <option value="01">BAGERHAT</option>
		<option value="03">BANDARBAN</option>
		<option value="04">BARGUNA</option> -->
		<option value="06">BARISAL</option>
		<!-- <option value="09">BHOLA</option>
		<option value="10">BOGRA</option>
		<option value="12">BRAHMANBARIA</option>
		<option value="13">CHANDPUR</option>
		<option value="70">CHAPAINAWABGANJ</option> -->
		<option value="Chittagong">CHITTAGONG</option>
		<!-- <option value="18">CHUADANGA</option>
		<option value="19">COMILLA</option>
		<option value="22">COX'S BAZAR</option> -->
		<option value="Dhaka">DHAKA</option>
		<option value="Gazipur">GAZIPUR</option>
		<!-- <option value="27">DINAJPUR</option>
		<option value="29">FARIDPUR</option>
		<option value="30">FENI</option>
		<option value="32">GAIBANDHA</option>
		<option value="35">GOPALGANJ</option>
		<option value="36">HABIGANJ</option>
		<option value="39">JAMALPUR</option>
		<option value="41">JESSORE</option>
		<option value="42">JHALAKATI</option>
		<option value="44">JHENAIDAH</option>
		<option value="38">JOYPURHAT</option>
		<option value="46">KHAGRACHHARI</option> -->
		<option value="Khulna">KHULNA</option>
		<!-- <option value="48">KISHOREGANJ</option>
		<option value="49">KURIGRAM</option>
		<option value="50">KUSHTIA</option>
		<option value="51">LAKSHMIPUR</option>
		<option value="52">LALMONIRHAT</option>
		<option value="54">MADARIPUR</option>
		<option value="55">MAGURA</option>
		<option value="56">MANIKGANJ</option>
		<option value="57">MEHERPUR</option>
		<option value="58">MOULVIBAZAR</option>
		<option value="59">MUNSHIGANJ</option> -->
		<option value="61">MYMENSINGH</option>
		<!-- <option value="64">NAOGAON</option>
		<option value="65">NARAIL</option>
		<option value="67">NARAYANGANJ</option>
		<option value="68">NARSINGDI</option>
		<option value="69">NATORE</option>
		<option value="72">NETROKONA</option>
		<option value="73">NILPHAMARI</option>
		<option value="75">NOAKHALI</option>
		<option value="76">PABNA</option>
		<option value="77">PANCHAGARH</option>
		<option value="78">PATUAKHALI</option>
		<option value="79">PIROJPUR</option>
		<option value="82">RAJBARI</option> -->
		<option value="Rajshahi">RAJSHAHI</option>
		<option value="85">RANGPUR</option>
		<!-- <option value="84">RANGAMATI</option>
		<option value="87">SATKHIRA</option>
		<option value="86">SHARIATPUR</option>
		<option value="89">SHERPUR</option>
		<option value="88">SIRAJGANJ</option>
		<option value="90">SUNAMGANJ</option> -->
		<option value="91">SYLHET</option>
		<!-- <option value="93">TANGAIL</option>
		<option value="94">THAKURGAON</option> -->
  </select>
   
   <label for="Road No. or Village" style="width: 100%">Thana or Upazilla</label>
  <select name ="thana" id="country" style="height: 45px;width: 100%;padding: 5px 10px;font-size: 16px;border-radius: 5px;border: 1px solid gray;background: white;"   required>
   
  </select>
     
     
	<label for="Road No. or Village" style="width: 100%">Road No. or Village</label>
     <input type="text" id="village" name="village" placeholder="Insert your Road No. or Village" style="width: 100%" required>    
     
     <input type="submit" value="Submit" name = "edit_pro"style="margin-left: 40%"> 
     
     </form>
	 </div>
	</div>
	
	<div id ="links">
		<h3>Uploaded books by you</h3>
		
		
		<?php
		
			$con=mysqli_connect("localhost","root","4455","book_db");
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$email  = $_SESSION['email'];
			
			$query = "SELECT * FROM user WHERE email  = '$email' ";
			
			//echo $query;
  	
			$results = mysqli_query($con, $query);

			// set array
				$array =  array();

			// look through query
 			while($row =  mysqli_fetch_assoc($results)){
  						// add each row returned into an array
  						$array[] =  $row;
  					// OR just echo the data:
 				//	echo $row['email']. '<br>'; // etc

			}			
			//echo $array[0]['email'];
			
			$sql  = "SELECT * FROM book_for_sell JOIN user_book ON book_for_sell.book_id = user_book.book_id AND user_book.email = '$email' ";
			$result = mysqli_query($con,$sql);





			echo "<table id= 'customers'>
			<tr>
			<th>Book Name</th>
			<th>Author</th>
			<th>Price</th>
			<th>Type</th>
			<th>Action</th>
			</tr>";

			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['title'] . "</td>";
			echo "<td>" . $row['author'] . "</td>";
			echo "<td>" . $row['price'] . "</td>";
			echo "<td>" . $row['type'] . "</td>";
			echo "<td>" .'<a href= " /edit_book/index.php?id='.$row['book_id'].'">Edit</a>'."/".'<a href= "/delete_book.php?id='. $row['book_id'].' ">Delete</a>'. "</td>";
			echo "</tr>";
			}
			echo "</table>";
			
			//echo $email;
			
			
			

			mysqli_close($con);
		?>
		
	</div>
	
	<script>
	
    var arr = <?php echo json_encode($array); ?> ;
	    
	    var elem = document.getElementById("editprofile");
		//elem.style.visibility="hidden";
		elem.style.display="none";
		document.getElementById("para1").innerHTML= document.getElementById("para1").innerHTML+ arr[0]['name'] ;
		document.getElementById("para2").innerHTML=document.getElementById("para2").innerHTML+arr[0]['cell'];
		var el3 = document.getElementById("para3");
		 var el4 = document.getElementById("para4");
		var el5 = document.getElementById("para5");
		//el1.innerHTML =  "Toukir";
		//el2.innerHTML = "0174342325";
		el3.innerHTML=el3.innerHTML+arr[0]['email'];
		el4.innerHTML=el4.innerHTML+arr[0]['institution'];
		el5.innerHTML= el5.innerHTML+arr[0]['thana']+","+arr[0]['district'];
		var count=0;
		
		function changeDisplay(id) { 
		    if(count%2==0)
				elem.style.display="block";
			else
				elem.style.display="none";
			count++;
				
		}
	</script>
	

</div>

<div class="footer">
  <h2>Book Exchanger footer</h2>
</div>

</body>
</html>
