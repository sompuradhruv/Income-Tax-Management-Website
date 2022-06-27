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
if( isset( $_POST["accountno"])) {
$a = $_POST["accountno"]; 
} 
$b = ''; 
if( isset( $_POST["bank"])) {
$b = $_POST["bank"]; 
} 
$c= ''; 
if( isset( $_POST["accountt"])) {
$c = $_POST["accountt"]; 
}
$d= ''; 
if( isset( $_POST["bifsc"])) { 
$d = $_POST["bifsc"]; 
} 
$e = ''; 
if( isset( $_POST["txttaxid"])) {
$e = $_POST["txttaxid"]; 
} 
$query1="INSERT INTO `incometax_system`.`bank_account` (`Acc_no`, `Bank`, 
`Acc_type`, `BIFSC`, `taxid`) VALUES ('$a','$b','$c','$d','$e') ";
$res1=mysqli_query($conn,$query1);
if($res1) 
{session_start();
$_SESSION['success_message'] = "Your bank account details have been noted ";
header("Location: welcome.php");
exit();}
else {printf("query1Errormessage: %s\n", $conn->error);}
?>
