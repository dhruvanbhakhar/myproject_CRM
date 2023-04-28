<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php require('include.php') ?>
<center>
<?php
$conn = mysqli_connect("localhost","root","","crm");

if(isset($_POST['update_cust_data']))
{
    $cust_id = $_POST['cust_id'];
    $cust_name = $_POST['cust_name'];
    $email = $_POST['email'];
    $phn_no = $_POST['phn_no'];
    $cname = $_POST['cname'];
    


    $query = "UPDATE add_cust SET cust_name='$cust_name', email='$email', phn_no='$phn_no', cname='$cname' WHERE cust_id='$cust_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        // header("Location: editemp.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        // header("Location: editemp.php");
    }
}

?>


<?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>


<div class="container mt-3">
<h1>Edit Lead</h1>
    <form action="editlead.php" method="post">
    <div class="form-group">
        <label for="cust_id">Cust Id</label>
        <input type="text" name="cust_id" class="form-control" required id="cust_id" >
    </div>

    <div class="form-group">
        <label for="cust_name">Name</label>
        <input type="text" name="cust_name" class="form-control" required id="cust_name" >
    </div>

    <div class="form-group">   
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" required id="email" >      
    </div>

    <div class="form-group">   
        <label for="phn_no">Phone number</label>
        <input type="text" name="phn_no" class="form-control" required id="phn_no" >      
    </div>

    <div class="form-group">   
        <label for="cname">cname</label>
        <input type="cname" name="cname" class="form-control" required id="cname" >      
    </div>

        <div class="col-md-2 inventory-data">
        <button type="submit" name="update_cust_data" class="btn btn-primary">Update Data</button>
          
        </div>
      </form>
    </div>
  </div>


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

$sql = "SELECT cust_id, cust_name, email, phn_no, cname  FROM add_cust";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>cname</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["cust_id"]. "</td><td>". $row["cust_name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["phn_no"] . "</td><td>" . $row["cname"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
  </center>
  </body>
</html>






