
<?php

// initializing variables
$price = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbdb1');


  

  	$price = $_POST['upp']; 
	$id = $_POST['id']; 
	 
  	$query = "UPDATE crops SET price=$price WHERE id2=$id";
  	mysqli_query($db, $query)or die("Error: " . mysqli_error($db));
	header('location:farmer.html');

	$db->close(); 
  	
	
	
 
