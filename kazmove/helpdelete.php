<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
    require('connection.php');


?>

	<?php

 
  if(isset($_REQUEST['delete1'])){
   $id = $_REQUEST['id'];
   $sql = "DELETE FROM help_form WHERE help_form_id = '".$id."'";
   $result = mysqli_query($conn, $sql);
    if(mysqli_error($conn)){
     echo 'the problem with request '.mysqli_error($conn);
    }
    else{
     echo 'deleted successfully';
    }
  }
  else{
   require('delete.html');
  }
 ?>
 <button  class="btn btn-primary " type="button"><a class="text-white" href="helpinfo.php">Go Back</a></button>
</body>
</html>