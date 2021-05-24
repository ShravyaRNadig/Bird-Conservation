
<?php
session_start();
?>
<html>
<head>
  <script src="https://kit.fontawesome.com/4f41dd1c79.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="cssfile.css"> -->
<style type="text/css">
  .container
  {
    /*background-color: aqua;*/
    margin: 10px;
    padding: 10px;
    width: 50%;
    font-size: 20px;
    height: 50%;
  }
  input
  {
    margin: 10px;
    padding: 10px;
    height: 30px;
    width: 2in;
    margin-left: 50px;
  }

  .subbtn
  {
    height: 50px;
    width: 1in;
    border-radius: 5px;
    background-color: green;
    text-align: center;
   color: white;
   padding: 10px;
   margin: 10px;
   font-size: 20px;
  }

.regbtn{
  position: relative;
  left:400px;
  bottom:159px;
  width: 1in;
      height: 50px;

    border-radius: 5px;
    background-color: green;
    text-align: center;
   color: white;
   padding: 10px;
   margin: 10px;
   font-size: 20px;
}

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {

  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: relative; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 600px;
  bottom: 400px;
  width: 500px; /* Full width */
  height:300px; /* Full height */
  overflow: none; /* Enable scroll if needed */
 
   /* Black w/ opacity */
  
}

/* Modal Content/Box */
.modal-content {
  background-color:  #ffff00;
  margin: 20px auto 100px auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 70%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: yellow;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */

}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }





</style>
</head>
<body style="background-image: url('birdsan.jpg'); background-size: 100%; background-repeat: no-repeat; ">

<h1 style="text-align: center; color: white;"><i class="fa fa-dove"></i> South Bird</H1>

<div class="mainbody">

  <form action="login.php" method="POST">
   <div class="container">
    
      <table align="center" style="background-color: yellow; padding: 20px; width: 500px; border-radius: 10px;">
        <tr><td colspan="2" align="center"><label style="text-align: center; margin: auto; font-size: 25px; font-weight: 700;">Login</label></td></tr>
   <tr><td> <label for="uname" style="font-size: 20px; margin-left: 50px;"><b>Username</b></label></td>
    <td> <input type="text"  name="uname"></td></tr>

   <tr><td> <label for="psw" style="font-size: 20px; margin-left: 50px;"><b>Password</b></label></td>
    <td><input type="password" name="psw" ></td></tr>
   <tr style="text-align: center;"><td colspan="2" >
    <button type="submit"  class="subbtn" >Login</button></td></tr>
  
    </table>
  </div>
   </form>
</div>

<button class="regbtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="register.php" method="get">
   
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Submit</button>
    </div>
    <div class="container" style="background-color:none">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>

</div>
 

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
    if (event.target == modal) 

    {
        modal.style.display = "none";
    }
}
</script>




       <?php
       include_once('connect.php');
                     if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                   
                ?> 
      


</body>
</html>
<?php
    unset($_SESSION["error"]);
?>    