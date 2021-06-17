<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	
	<title>Document</title>
	
</head>
<body class="bg-light" >
	<?php include "nav.php"; ?>


	    <div class="container w-75"  style="margin-top: 120px;">
	    	

	   <form class="row g-3">
	   	<div class="col-6"><h1  >Help Request </h1>
	    	<p class="mb-5">Allow employees to request support</p></div>
	    	<div class="col-6"><!-- <img class="rounded float-center" width="300" src="twohelp.png" alt=""> --> </div>
	   	
	  <div class="col-md-6">
	    <label for="inputEmail4" class="form-label">Name</label>
	    <input type="text" class="form-control" id="inputEmail4" placeholder="Name" required>
	  </div>
	  <div class="col-md-6">
	    <label for="inputPassword4" class="form-label">Second name</label>
	    <input type="text" class="form-control" id="inputPassword4" placeholder="Second Name" required>
	  </div>
	  <div class="col-12">
	    <label for="inputAddress" class="form-label">Email</label>
	    <input type="email" class="form-control" id="inputAddress" placeholder="name@example.com" required>
	  </div>
	  <div class="col-md-6">
	    <label for="inputCity" class="form-label">City</label>
	    <input type="text" class="form-control" id="inputCity" placeholder="Your City" required>
	  </div>
	  <div class="col-md-4">
	    <label for="inputState" class="form-label">Adress</label>
	    <input type="text" class="form-control" id="inputAddress" placeholder="Your Adress" required>
	  </div>
	  <div class="col-md-2 ">
	    <label for="inputZip" class="form-label">Zip</label>
	    <input type="text" class="form-control" id="inputZip" placeholder="Zip code" required>
	  </div>
	  
	  
	  <div class="col-12">
	      <div class="form-floating">
	        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="problem"></textarea>
	        <label for="floatingTextarea2">Describe your problem</label>
	      </div>
	  </div>
	  <div class="col-12">
	    <div class="form-check">
	      <input class="form-check-input" type="checkbox" id="gridCheck" required>
	      <label class="form-check-label" for="gridCheck">
	        Agree with <a href="helppri.php">privace</a>  of help form
	      </label>
	    </div>
	  </div>
	  <div class="col-12">
	    <button type="submit" class="btn btn-warning" name="submit">Send form</button>
	  </div>
	</form>
	</div>
	<hr>
<div class="container"><h1>Frequently asked Questions  </h1></div>



<!-- 	<div class="container ">
		
	 <form  style="margin-top: 120px;" action="DBforhelp.php" method="post">
	 	<div class="row">
    	<div class=" m-4 fst-italic">
  		<h1>Please if you have any questions fill the form below:</h1>
  	    </div>

    	<div class="col-xxl  mb-1">
		<label for="exampleInputName1" class="form-label">Name</label>
		<input name="name" type="name" class="form-control" required >		
    	</div>

    	<div class="col-xxl  mb-1">
    		<label for="exampleInputNumber1" class="form-label">Phone number</label>
    		<input name="phone" type="phone" class="form-control" required >
    	</div>

		  <div class="col-xxl  mb-1">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input name="email" type="email" class="form-control"  required>
		  </div>

		  <div class="col-xxl  mb-1">
		  <label for="exampleFormControlTextarea1" class="form-label">Describe your problem</label>
		  <textarea name="problem" class="form-control" rows="3"  required></textarea>
		</div>

		 
		<div class=" mt-4 p-3 ">

	    <div class="text-center">
	      <button type="submit" class="w-75 btn btn-warning" name="submit">Send form</button>
	    </div>

	  </div>
	</div>
		</form>
	</div>
	<hr> -->

	<?php include "answers.php" ?>

		  <?php include "footer.php"; ?>
</body>
</html>