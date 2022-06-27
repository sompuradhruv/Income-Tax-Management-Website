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
$a = ''; 
if( isset( $_POST["skd"])) {
$a = $_POST["skd"]; 
} 
$b = ''; 
if( isset( $_POST["status"])) {
$b = $_POST["status"]; 
} 
$c = ''; 
if( isset( $_POST["txttaxid"])) {
$c = $_POST["txttaxid"]; 
} 
$query1="INSERT INTO `incometax_system`.`schedule` (`Skd_Date`, 
`Status_confirmation`, `taxid`) VALUES ('$a','$b','$c')";
$res1=mysqli_query($conn,$query1);
if($res1) 
{session_start();
$_SESSION['success_message'] = "Your interview has been scheduled";
header("Location: welcome.php");
exit();}
else {printf("query1Errormessage: %s\n", $conn->error);}
?>