<?php
$docid = $_POST['docid'];
$doctype = $_POST['doctype'];
$docstatus = $_POST['docstatus'];
// Database connection
$conn = new mysqli('localhost','root','','incometax_system');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into document(Doc_id,Doc_type,Status) values(?, ?, 
?)");
$stmt->bind_param("iss",$docid,$doctype,$docstatus);
$execval = $stmt->execute();
session_start();
$_SESSION['success_message'] = "Document saved successfully.";
header("Location: welcome.php");
exit();
$stmt->close();
$conn->close();
}
?>