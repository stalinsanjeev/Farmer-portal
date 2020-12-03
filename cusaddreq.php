
<?php

$username = "";
$price = "";
$quantity    = "";
$address = "";
$phone = "";



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbdb1');

  	echo $id = $_POST['request'];  
     	echo $username = $_POST['request45'];
	echo $price = $_POST['request2'];
	echo $quantity = $_POST['request3'];
	echo $address = $_POST['request4'];
	echo $phone = $_POST['request5'];
  	$query = "UPDATE requests SET  requestedQ='$quantity', proposedprice='$price',customername='$username',deliveryaddress='$address',phone='$phone' WHERE id2 =$id ";
  	mysqli_query($db, $query)or die("Error: " . mysqli_error($db));
	header('location: http://localhost/hack1/reqfinal.php');
	
	
  		
 


?>
