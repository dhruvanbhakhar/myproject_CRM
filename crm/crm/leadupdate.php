<?php
$cust_id = $_POST['cust_id'];
$cust_name = $_POST['cust_name'];
$email = $_POST['email'];
$phn_no = $_POST['phn_no'];
$cname = $_POST['cname'];
$conn = mysqli_connect("localhost","root"," ","crud") or die("Connection Failed");

$sql = "UPDATE `add_cust` SET cust_name='$cust_name', email='$email', phn_no='$phn_no', cname='$cname' WHERE cust_id='$cust_id' ";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
header("Location: editlead.php");
mysqli_close($conn);
?>
