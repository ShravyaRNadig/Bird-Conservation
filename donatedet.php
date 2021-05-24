<?php
include_once('connect.php');

$name = $_POST['firstname'];
$amount = $_POST['amountdonate'];
$address = $_POST['email'];

$sql = "INSERT INTO donor (Pname, Amount, BAddress)
VALUES ('{$name}', '{$amount}', '{$address}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<html>
welcome donor
</html>
