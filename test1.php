      
        
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>crop</th>
<th>quantity</th>
<th>price</th>
<th>region</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "dbdb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  id2,username, crop,quantity,price,region FROM crops";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id2"]. "</td><td>". $row["username"]. "</td><td>" . $row["crop"] . "</td><td>" . $row["quantity"]. "</td><td>". $row["price"]. "</td><td>"
. $row["region"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close(); 


?>
</table>
</body>
</html>    
 