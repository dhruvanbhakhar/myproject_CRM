<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// $conn = mysqli_connect("localhost","root","","crm");

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