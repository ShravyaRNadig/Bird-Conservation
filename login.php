
<?php

include_once('connect.php');

$username = $_POST['uname'];
$password = $_POST['psw'];
$error = "username/password incorrect";




$result = mysqli_query($conn,"select * from users where username='$username' and password='$password'") 
or die ("Connection failed: " .mysqli_error());

$row=mysqli_fetch_array($result);

if($row===null){

		echo '<script>alert("handling error in php");</script>';
		header("location: home.php");	
	
}
else{
	echo '<script>alert("handling error in php");</script>';
	header("location: bird.html");	
}


?>
<!--
<html>
<head>
<title>
Login page
</title>
</head>
<body>
<h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt;
color:#00FF00;>
Simple Login Page
</h1>
<form name="login">
Username1<input type="text" name="uname"/>
Password<input type="password" name="psw"/>
<input type="button" onclick="check(this.form)" value="Login"/>
<input type="reset" value="Cancel"/>
</form>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.uname.value == "myuserid" && form.psw.value == "mypswrd")
  {
    window.open('bird.html')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
</body>
</html>
*/