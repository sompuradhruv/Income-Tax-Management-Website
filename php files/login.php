<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername,$username, $password);
// Check connection
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
echo "Connected successfully";
mysqli_select_db($conn,'incometax_system');
$query="INSERT INTO ";
mysqli_query($conn,$query);
$a= ''; 
if( isset( $_POST["userid"])) { 
$a = $_POST["userid"]; 
} 
$b = ''; 
if( isset( $_POST["password"])) {
$b = $_POST["password"]; 
}
$query1="INSERT INTO `incometax_system`.`login` (`User_id`,`Password`) VALUES 
('$a','$b') ";
$res1=mysqli_query($conn,$query1);
if($res1) 
{echo"query1success";}
else {printf("query1Errormessage: %s\n", $conn->error);}
?>