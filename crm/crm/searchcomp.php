<html>
<head>
    <style>
   @import url('https://fonts.googleapis.com/css?family=Numans');
       .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

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
   <?php require('links.php') ?>
</head>

<body>
<?php require('include.php') ?>
<center>

<div class="container mt-3">
<form action="searchcomp.php" method="post">
<div class="form-group">
Search <input type="text" name="search"><br><br> </div>
<input type ="submit" class="btn btn-primary" name="submit">
</form>
		</div>
</body>
</html>


<?php



$servername = "localhost";
$username = "root";
$password = "";
$db = "crm";

$conn = new mysqli($servername, $username, $password, $db);



if ($conn->connect_error){
    
	die("Connection failed: ". $conn->connect_error);
}
?>
<?php
if(isset($_POST["submit"])) {
	

$search = $_POST['search'];
$sql = "select * from add_company where address like '%$search%' or cname like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    
while($row = $result->fetch_assoc() ){
	echo "<table><tr><th>ID</th><th>Address</th><th>Name</th></tr>";
	echo "<tr><td>".$row["cid"]."</td><td> ".$row["address"]." </td><td> ".$row["cname"]."</td></tr>";
}
} else {
	echo "0 records";
}
}
$conn->close();

?>
</center>  

</body>
</html>
