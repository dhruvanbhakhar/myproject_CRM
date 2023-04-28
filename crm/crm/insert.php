<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
<?php require('include.php') ?>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => crm
        $conn = mysqli_connect("localhost", "root", "", "crm");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $cust_id =  $_REQUEST['cust_id'];
        $cust_name = $_REQUEST['cust_name'];
        $email = $_REQUEST['email'];
        $phn_no = $_REQUEST['phn_no'];
        $cname = $_REQUEST['cname'];
        $Status = $_REQUEST['Status'];
         
        // Performing insert query execution
        // here our table name is add_cust
        $sql = "INSERT INTO add_cust  VALUES ('$cust_id',
            '$cust_name','$email','$phn_no','$cname','$Status')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n $cust_id\n $cust_name\n "
                . "$email\n $phn_no\n $cname\n $Status");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        
        ?>
        <br><button type="submit"  value="Submit"> <a href="leadavb.php">Check lead available</button></a>
    </center>
</body>
 
</html>