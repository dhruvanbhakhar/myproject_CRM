<?php

// Get the user id
$cust_id = $_REQUEST['cust_id'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "crm");

if ($cust_id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT cust_name,
	email, phn_no, cname FROM add_cust WHERE cust_id='$cust_id'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$cust_name = $row["cust_name"];

	// Get the first name
	$email = $row["email"];
    $phn_no = $row["phn_no"];
    $cname = $row["cname"];

}

// Store it in a array
$result = array("$cust_name", "$email", "$phn_no", "$cname");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
