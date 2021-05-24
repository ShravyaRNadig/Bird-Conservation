

<html>
<br><body>
	<div  style="font-size: 50px;text-align:center ;">welcome to ostrich page</div>
</html>

<?php
include_once('connect.php');

$result = mysqli_query($conn,"select staff from bird where Name='Ostriches'") or die ("Connection failed: " .mysqli_error());
$row=mysqli_fetch_array($result);
echo "staff : {$row['staff']}";
?>
