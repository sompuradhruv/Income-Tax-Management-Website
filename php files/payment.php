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
if( isset( $_POST["cin"])) {
$a = $_POST["cin"]; 
} 
$b = ''; 
if( isset( $_POST["bank"])) {
$b = $_POST["bank"]; 
} 
$c= ''; 
if( isset( $_POST["payd"])) {
$c = $_POST["payd"];
}
$d= ''; 
if( isset( $_POST["amount"])) { 
$d = $_POST["amount"]; 
} 
$e = ''; 
if( isset( $_POST["accountno"])) {
$e = $_POST["accountno"]; 
} 
$f = ''; 
if( isset( $_POST["txttaxid"])) {
$f = $_POST["txttaxid"]; 
} 
$query1="INSERT INTO `incometax_system`.`payment` (`CIN`, `Bank`, `Pay_date`, 
`Amount`, `Acc_no`, `taxid`) VALUES ('$a','$b','$c','$d','$e','$f')";
$res1=mysqli_query($conn,$query1);
if($res1) 
{session_start();
$_SESSION['success_message'] = "Payment details are duly recorded";
header("Location: welcome.php");
exit();}
else {printf("query1Errormessage: %s\n", $conn->error);}
?>