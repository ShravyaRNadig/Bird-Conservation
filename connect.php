<?php


$conn=new mysqli("localhost","root","");
//$conn=mysqli_connect("localhost","root","");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$selected=mysqli_select_db($conn,"testdb");



?>

