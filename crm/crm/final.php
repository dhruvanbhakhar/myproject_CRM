
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

</style>
</head>
<body>

<?php require('include.php') ?>
<center>
    <h2> Oppurtunity to make customer</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>phone_no</th>
            <th>company</th>
            <th>Status</th>
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




$sql ="select * from `add_cust` where Status='pending' ";
$result = mysqli_query($con,$sql);
if($result)
{
while ( $row=mysqli_fetch_assoc($result)) {
    $id= $row['cust_id'];
    $name =$row['cust_name'];
    $email = $row['email'];
    $mobile = $row['phn_no'];
    $cname = $row['cname'];
    $status = $row['Status'];
    echo<<<data
     <tr>
     <td>$id</td>
      <td>$name</td>
      <td>$email</td>
      <td>$mobile</td>
      <td>$cname</td>
      <td>$status</td>
      <td>
      <button class="btn btn-primary"><a href="custupdate.php?updateid=$id" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="custdelet.php?deletid=$id" class="text-light">delete</a></button>
      </td>
     </tr>
     data;

}
}
?>
    </table>



   <br> <h3> Converted to customer </h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>phone_no</th>
            <th>company</th>
            <th>Status</th>
            
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




$sql ="select * from `add_cust` where Status='customer' ";
$result = mysqli_query($con,$sql);
if($result)
{
while ( $row=mysqli_fetch_assoc($result)) {
    $id= $row['cust_id'];
    $name =$row['cust_name'];
    $email = $row['email'];
    $mobile = $row['phn_no'];
    $cname = $row['cname'];
    $status = $row['Status'];
    echo<<<data
     <tr>
     <td>$id</td>
      <td>$name</td>
      <td>$email</td>
      <td>$mobile</td>
      <td>$cname</td>
      <td>$status</td>
      
     </tr>
     data;

}
}
?>
    </table>

</center>
</body>
<html>



