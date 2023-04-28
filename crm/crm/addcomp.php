<?php 
include 'adminpage.php' ;
?>
<!DOCTYPE html>
<html>

  <!-- <a href="logout.php">Logout<i  class="fa fa-trash"></i></a>  -->
</div> -->
<center>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cid = $_POST['cid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
   
    $conn = mysqli_connect("localhost", "root", "", "crm");
         
        // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }


    

    $sql = "INSERT INTO add_company  VALUES ('$cid', '$name','$address')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$cid \n $name\n "
            . "$address");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
}

    
?>
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
div.header{
              color: #f0f0f0;
              font-family: poppins;
              display: flex;
              flex-direction: row;
              align-items: center;  
              justify-content: space-between;
              padding: 0 60px;
              background-color: #1c1c1e ;
            }
            div.header button{
                background-color: #f0f0f0;
                font-size: 16px;
                font-weight: 550;
                padding: 8px 12px;
                border: 2px solid black;
                border-radius: 5px;
            }

   </style>
   <?php require('links.php') ?>
</head>

<body>
<div class="container mt-3">
<h1>Add Company </h1>
    <form action="addcomp.php" method="post">
    <!-- <div class="form-group">
        <label for="cid">Company Id</label>
        <input type="text" name="cid" class="form-control" id="cid" placeholder="autoincrement" >
    </div> -->

    

    <div class="form-group">   
        <label for="address">Name</label>
        <input type="text" name="address" class="form-control" id="address" >      
    </div>

    <div class="form-group">
        <label for="name">Address</label>
        <input type="text" name="name" class="form-control" id="name" >
    </div><br>
    <input type="reset" class="btn btn-primary" value="Reset">
    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
    </form>
</div>
</center>
</body>
</html>