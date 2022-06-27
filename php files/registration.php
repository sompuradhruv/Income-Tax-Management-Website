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
if( isset( $_POST["txtName"])) {
$a = $_POST["txtName"]; 
} 
$b = ''; 
if( isset( $_POST["txtMiddleName"])) {
$b = $_POST["txtMiddleName"]; 
} 
$c= ''; 
if( isset( $_POST["txtLastName"])) {
$c = $_POST["txtLastName"]; 
}
$d= ''; 
if( isset( $_POST["userid"])) { 
$d = $_POST["userid"]; 
} 
$e = ''; 
if( isset( $_POST["txttaxid"])) {
$e = $_POST["txttaxid"]; 
} 
$f = ''; 
if( isset( $_POST["phone"])) {
$f = $_POST["phone"]; 
} 
$g = ''; 
if( isset( $_POST["password"])) {
$g = $_POST["password"]; 
}
$query1="INSERT INTO `incometax_system`.`registration` (`User_id`, `taxid`, `Phone_no`, 
`Fname`, `Mname`, `Lname`, `Password`) VALUES ('$d','$e','$f','$a','$b','$c','$g') ";
$res1=mysqli_query($conn,$query1);
if($res1) 
{session_start();
$_SESSION['success_message'] = "The User has been registered successfully !!";
header("Location: welcome.php");
exit();}
else {printf("query1Errormessage: %s\n", $conn->error);}
?>