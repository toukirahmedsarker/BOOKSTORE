<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<title>Log in</title>
</head>

<body>


<div class="header">
<p style="width:250px; padding-left:10px;"><span style="color:black;font-size:50px;font-weight:bold;font-family:cursive">BOOK</span> <span style="font-family:cursive">Store</span></p>

</div>



<div class = "form">
<h1>Login</h1>
<form name ="login_form" method="post"action="/login_action.php">
<pre style="color: white; font-family: times new roman"> 
<input placeholder="Email" type="text" name="email" value="" required> <br> 
<input placeholder="Password" type="password" name="password" value="" required> 
</pre>
<button type="submit" class="btn" name="login">Login</button> 
</form>

<h4> Don't have an account? <a href="sign_up"><button class="btn" >Sign Up</button></a> </h4>
<h4> Forget Password? 
<a href="forget_password" target="_parent"><button class="btn">Click here</button></a> </h4>

</div>
<div class="footer">
  <h4 >Book Store</h4>
  <h6>Copyright © 2018 BookStore</h6>
</div>

</body>
</html>
