
<?php

// initializing variables
$price = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbdb');


  

  	$quantity = $_POST['upq']; 
	$id = $_POST['id']; 
	 
  	$query = "UPDATE crops SET quantity=$quantity WHERE id2=$id";
  	mysqli_query($db, $query)or die("Error: " . mysqli_error($db));
	header('location:farmer2.php');

	$db->close(); 
  	
	
	
 
