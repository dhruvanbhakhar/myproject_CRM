
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


</style>
</head>
<body>
<?php require('include.php') ?>

<center>

            <h1>Leads Avalible</h1>
            
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT cust_id, cust_name, phn_no FROM add_cust";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>Name</th><th>Phone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["cust_id"]. "</td><td>". $row["cust_name"]. "</td><td>" . $row["phn_no"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<p> Remeber the customer id to check leads in details.</p>
<br><button type=""  > <a href="leaddet.php">Check Lead in Details</button></a>

</center>

</body>
</html>