<?php 
// Include the database configuration file  
include_once 'connect.php'; 
 
        $username =  $_REQUEST['uname'];
        $password = $_REQUEST['psw'];

 $sql = "INSERT INTO users (username,password) VALUES ('$username', '$password')";

              if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>"; 
  
        } else{
            echo "ERROR: invalid data $sql. " ;

        }
 
// Display status message 

?>