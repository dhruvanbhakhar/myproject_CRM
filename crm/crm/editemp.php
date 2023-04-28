<?php 
include 'adminpage.php' ;
?>
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



<center>






<div class="container mt-3">
<h1>Employ Details</h1>



  <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>phone_no</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
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




$sql1 ="select * from `add_emp`  ";
$result = mysqli_query($con,$sql1);
if($result)
{
while ( $row=mysqli_fetch_assoc($result)) {

    ?>
   
   
    
     <tr>
     <td><?php echo $row['emp_id'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['phonenum'];?></td>
      <td><?php echo $row['password'];?></td>
      <td>
      <button class="btn btn-primary"><a href='editempbknd.php?emp_id=<?php echo $row['emp_id'];?>' class="text-light">Update</a></button>
      <!-- <button class="btn btn-danger"><a href='empdelete.php?deletid=$emp_id' class="text-light">delete</a></button> -->
      </td>
     </tr>
     


<?php    }
}
?>
    

</table>



  </center>
  </body>
</html>



