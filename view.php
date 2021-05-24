<?php 
// Include the database configuration file  
require_once 'connect.php'; 
 
// Get image data from database 
$result = $conn->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> Retriving images from database using PHP </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<h3>Retrieve images from database </h3>
		<table><tr>
        <?php if($result->num_rows > 0){ ?> 
        <div class="gallery"> 
        	<?php while($row = $result->fetch_assoc()){ ?> 
        	<td>
            	<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="150" height="150" /> 
            	
            </td>
        	<?php } ?> 

        </div> 
    </tr>
</table>
		<?php }else{ ?> 
    	<p class="status error">Image(s) not found...</p> 
		<?php } ?>
</div>
</body>
</html>	
<?php   ?>