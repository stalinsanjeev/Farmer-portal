E
<?php

// initializing variables
$username = "";
$password = "";
$email    = "";
$phone = "";
$state    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbdb1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  
    // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$username = $_POST['username1'];  
     	$password = $_POST['password_1'];
	$email = $_POST['email1'];
	$phone = $_POST['phone'];
	$state = $_POST['state'];
	$address = $_POST['address'];
	$type = $_POST['type'];
  	$query = "INSERT INTO register (username, email, password, state, phone,address,type) 
  			  VALUES('$username', '$email', '$password','$state','$phone','$address','$type')";
  	mysqli_query($db, $query)or die("Error: " . mysqli_error($db));
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
	header('location: http://localhost/hack1/indexlogin.html');
	
 }
}