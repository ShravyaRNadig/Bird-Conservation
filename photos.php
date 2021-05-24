<?php
include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>store Image in Mysql Database using PHP </title>
	<meta charset="utf-8">

	

<style type="text/css">
	.uploading{
left:100px;
font-size: large;
}

.container{
  position: relative;
  top:110px;
background-color: lemonchiffon;
border: 2px;
outline: #05387c solid 5px;
margin: 100px;  
padding: 20px;
text-align: center;
}

.uploadbutton {
 
  outline: #05387c;  
  border: 3px solid #05387c;
  
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 15px;
}

.uploadbutton:hover{
  background-color: #05387c;
  color: white;
}
.thebanner{
  top: 100px;
}
</style>
</head>  


<body style="background-image: url('uploadpagebird.jpeg'); background-size: 100%; background-repeat: repeat; ">

>
	<div class="thebanner">
	<div class="container">
		<div class="uploading>"
		<h3>Store Image in database using PHP</h3>
		<?php if(!empty($statusMsg))
		{
			?>
			<p class="status<?php echo $status; ?>"><?php echo $statusMsg; ?></p>
		<?php } ?>
		<form action="" method="post" enctype="multipart/form-data">
			<label>select Image File :</label>
			<input type="file" name="image">
			<input class="uploadbutton" type="submit" name="submit" value="upload">
		</form>
	</div>
</div>
	</div>
</body>
</html>
