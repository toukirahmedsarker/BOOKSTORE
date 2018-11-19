
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type = "text/css" href="styles.css">
<title>Sign Up</title>

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

<div class = "form">
<h2>Sign Up</h2>

<form name ="signup_form" method="post" action="/register_action.php">

<input placeholder="Name" type="text" name="name" value="" required><br><br>
 
<input placeholder="Email" type="text" name="email" value="" required> <br><br>

<input placeholder="Cell No." type="text" name="cell" value="" required> <br><br>
 
<input placeholder="Password" type="password" name="password" value="" required><br><br>
 
<input placeholder="Confirm password"type="password" name="confirm_password" value="" required> <br><br>


<input placeholder="Institution or University"type="text" name="institution" value="" required> <br> <br>

  <select name = "district" id="continent" onchange="countryChange(this);"   style="height: 32px;width: 85%;padding: 5px 10px;font-size: 16px;border-radius: 5px;border: 1px solid gray;background: white;" required>
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
  </select><br><br>
   
  <select name ="thana" id="country"  style="height: 32px;width: 85%;padding: 5px 10px;font-size: 16px;border-radius: 5px;border: 1px solid gray;background: white;" required>
   
  </select>
  <br><br>
  <input placeholder="Road No. or Village"type="text" name="village" value="" required> <br> <br>

<button type="submit" class="btn" name="reg_submit">Register</button> 

</form>

<h4>Already have an account? 
<a href= "/"  > <button class="btn">Login</button></a> </h4>
</div>

<div class="footer">
  <h4 >Book Store</h4>
  <h6>Copyright © 2018 BookStore</h6>
</div>

</body>
</html>
