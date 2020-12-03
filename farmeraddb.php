
<?php

// initializing variables
$username = "";
$crop = "";
$quantity    = "";
$price = "";
$region   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbdb1');


  
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$username = $_POST['name']; 
     	$crop = $_POST['addc'];
	$quantity = $_POST['addq'];
	$price = $_POST['addp'];
	$region = $_POST['addr'];
  	$query = "INSERT INTO crops (username, crop, quantity, price, region) 
  			  VALUES('$username', '$crop', '$quantity','$price','$region')";
  	mysqli_query($db, $query)or die("Error: " . mysqli_error($db));
	header('location: farmer.html');

	$db->close(); 
  	
	
	
 
}