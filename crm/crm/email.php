

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
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
           
            <th>company</th>
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
    ?>
    <!-- $id= $row['cust_id'];
    $name =$row['cust_name'];
    $email = $row['email'];
    //$mobile = $row['phn_no'];
    $cname = $row['cname'];
    echo<<<data -->

     <tr>
     <td><?php echo $row['cust_id'];?></td>
      <td><?php echo $row['cust_name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['cname'];?></td>
      <td>
      <button class="btn btn-danger"><a href="el.php?cust_id=<?php echo $row['cust_id'];?>" class="text-light">select</a></button>
      </td>
     </tr>
     
<?php }

}

?>
</center>
</body>
<html>



