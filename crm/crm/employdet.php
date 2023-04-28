<?php 
include 'adminpage.php' ;
?>

<!DOCTYPE html>
<html>
    


    <center>
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $emp_id = $_POST['emp_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "crm");
         
        // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }


    

    $sql = "INSERT INTO add_emp  VALUES ('$emp_id', '$name','$email','$phonenum','$password')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$emp_id \n $name\n "
            . "$email\n $phonenum\n $password");
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
<h1>Employ Details</h1>
    <form action="employdet.php" method="post">
    <div class="form-group">
        <label for="emp_id"></label>
        <input type="hidden" name="emp_id" class="form-control" id="emp_id" >
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
    </div>

    <div class="form-group">   
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" id="email" required>      
    </div>

    <div class="form-group">   
        <label for="phonenum">Phone number</label>
        <input type="text" name="phonenum" class="form-control" id="phonenum" required>      
    </div>

    <div class="form-group">   
        <label for="password">password</label>
        <input type="password" name="password" class="form-control" id="password" required >      
    </div><br>
    <input type="reset" class="btn btn-primary" value="Reset">
    <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
    </form>
</div>
</center>
</body>
</html>