<?php
 include 'adminpage.php';
?>

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


$id=$_GET['emp_id'];
$sql="SELECT * FROM add_emp where emp_id=$id";
$result =mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
 
?>


<!DOCTYPE html>
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
<center>
<div class="container mt-3">
<h1>Update Details</h1>

    <form method="POST">
    <div class="form-group">
        <label for="emp_id">Emp Id</label>
        <input type="text" name="emp_id" class="form-control" id="emp_id"  value=<?php echo $row['emp_id'];?>>
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required id="name" value=<?php echo $row['name'];?>>
    </div>

    <!-- <div class="form-group">
        
    </div> -->

    <div class="form-group">   
        <label for="email">Email</label>
        <input type="text" name="email" required class="form-control" id="email" value=<?php echo $row['email'];?>>      
    </div>

    <div class="form-group">   
        <label for="phonenum">Phone number</label>
        <input type="text" name="phonenum" required class="form-control" id="phonenum" value=<?php echo $row['phonenum'];?>>      
    </div>

    <div class="form-group">   
        <label for="password">password</label>
        <input type="password" name="password" required class="form-control" id="password" value=<?php echo $row['password'];?>>      
    </div><br>

        <div class="col-md-2 inventory-data">
        <button type="submit" name="submit"  class="btn btn-primary" >Update Data</button>
          
        </div>
      </form>
      
      
    </div>


<?php

if(isset($_POST['submit']))
{
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $password = $_POST['password'];


    $sql = "  update `add_emp` set name='$name',email='$email',phonenum='$phonenum',password='$password' where emp_id=$id  ";
   
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('record updated')</script>";
        header("Location: http://localhost/crm/editemp.php");
    }
    else{
        echo"error:".mysqli_error($conn);
        header("Location: http://localhost/crm/editemp.php");
    }
}
    mysqli_close($conn);
    
?>





  </center>
  



  </body>
</html>