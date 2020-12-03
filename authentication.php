<?php      
    include('connection.php');  
     $username = $_POST['user'];  
     $password = $_POST['pass'];  
     $type = $_POST['type'];
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register where username = '$username' and password = '$password'and type = '$type'";  
         $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($con)); 
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
          
        if($count > 0){
	    if($type=='farmer') 
            header('location: http://localhost/hack1/farmer.html');  
 
	    else if($type=='customer') 
            header('location: http://localhost/hack1/customer.php');}  
        
	    else  
            echo "<h1> Login failed. Invalid username or password or Type.</h1>"; 
 
             
?>  