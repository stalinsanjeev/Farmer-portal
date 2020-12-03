<?php
$conn = mysqli_connect("localhost", "root", "", "dbdb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['delig'];
$sql = "DELETE FROM crops WHERE id2=$id";
$result = $conn->query($sql);
if($result) {
      header('location: farmer2.php');
;
        
    } else {
        echo "Error";
    error_reporting(E_ALL ^ E_DEPRECATED);
    }



$conn->close(); 


?>