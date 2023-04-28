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


$id=$_GET['deletid'];


    

    $sql = "DELETE FROM `add_cust`  where cust_id=$id";

    if(mysqli_query($con,$sql)){
        header('location:final.php');
    }
    else{
        echo"error:".mysqli_error($con);
    }
    mysqli_close($con);
?>