<?php
include_once('connect.php');

$result = mysqli_query($conn,"select staff from bird where Name='flamingo'") or die ("Connection failed: " .mysqli_error());
$row=mysqli_fetch_array($result);


echo "owner : {$row['staff']}";
?>

<html>
welcome to flamingo
</html>
