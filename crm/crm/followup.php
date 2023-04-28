<?php
$servername= "localhost";
$username="root";
$password="";
$database="crm";
$con = mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    die("Error deleting record:".mysqli_error($con));
}


$cust_id=$_GET['updateid'];

if(isset($_POST['submit']))
{
    $sql = "update `add_cust` set Status='folowup taken' 
    where cust_id=$cust_id";

    if(mysqli_query($con, $sql)){
        header('location:email.php');
    }
    else{
        echo"error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>