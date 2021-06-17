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
<?php include "nav.php" ?>
<?php

    if (isset($_REQUEST['gopls'])) {

        #$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $from = $_REQUEST['address_from'];
        $to = $_REQUEST['address_to'];
        $Phone = $_REQUEST['phone_number'];
        $date = $_REQUEST['moving_date'];
        $rooms = $_REQUEST['num_of_rooms'];
        $pa_unpa = $_REQUEST['packing/unpacking'];
        $add_ser = $_REQUEST['additional_service'];

        $sql = "INSERT INTO customers(name,address_from,address_to,phone_number,moving_date,num_of_rooms,packing_unpacking,additional_service) VALUES('".$name."','".$from."','".$to."','".$Phone."','".$date."','".$rooms."','".$pa_unpa."','".$add_ser."')";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        else {
            $id = mysqli_insert_id($conn);
            
        }


    }
    
?>

<div class="container" style="padding-top: 100px;padding-bottom: 180px;">
	<h1 class="fst-italic">Thank you for choosing us, we appreciate that</h1>
	<p>Your request in processing. Our colleagues will contact you during the day by phone or email.</p>
	<button  class="btn btn-primary " type="button"><a class="text-white" href="more.php">Go Back</a></button>
</div>

<?php include "footer.php" ?>
</body>
</html>