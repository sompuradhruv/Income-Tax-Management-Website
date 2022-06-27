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
if( isset( $_POST["dob"])) { 
$d = $_POST["dob"]; 
} 
$e = '';
if( isset( $_POST["txttaxid"])) {
$e = $_POST["txttaxid"]; 
} 
$f = ''; 
if( isset( $_POST["txtAddress"])) {
$f = $_POST["txtAddress"]; 
} 
$g = ''; 
if( isset( $_POST["ab"])) {
$f = $_POST["ab"]; 
}
$h = ''; 
if( isset( $_POST["txtcity"])) {
$h = $_POST["txtcity"]; 
} 
$i = ''; 
if( isset( $_POST["txtdocid"])) {
$i = $_POST["txtdocid"]; 
} 
$query1="INSERT INTO `incometax_system`.`my_profile` (`taxid`, `Fname`, `Mname`, 
`Lname`, `Gender`, `DOB`, `Address`, `City`, `Docid`) VALUES 
('$e','$a','$b','$c','$g','$d','$f','$h','$i') ";
$res1=mysqli_query($conn,$query1);
if($res1)
{session_start();
    $_SESSION['success_message'] = "Records saved successfully !!";
    header("Location: welcome.php");
    exit();}
    else {printf("query1Errormessage: %s\n", $conn->error);}
    ?>
    