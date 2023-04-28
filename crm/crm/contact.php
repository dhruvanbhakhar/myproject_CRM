
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALESUPPORT</title>
    


    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <?php require('links.php') ?>

</head>
<body class="bg-light">

<?php require('include.php') ?>

</div>
</div>


    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h1>Lead Details</h1>
            <p class="blue-text">Register your lead here.</p>
            <div class="card">
                <h5 class="text-center mb-4">Enter the following details</h5>
                <form action="insert.php" method="post" >
                    <div class="row justify-content-between text-left">
                        <!-- <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Customer Id <span class="text-danger"> *</span></label> <input type="text" id="cust_id" name="cust_id" placeholder="autoincrement" > </div>
                        <div class="row justify-content-between text-left"> -->
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full Name<span class="text-danger"> *</span></label> <input type="text" id="cust_name" name="cust_name" placeholder="Enter Full name" > </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" > </div>
                        <div class="row justify-content-between text-left"> 
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="phn_no" name="phn_no" placeholder="" > </div>
                    </div>

                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Company:<span class="text-danger"> *</span></label>
                    
                    <select name="cname">
<?php
$sql ="select * from `add_company` ";
$result = mysqli_query($con,$sql);
if($result)
{
while ($row=mysqli_fetch_assoc($result)) {
    
    $cname = $row['cname'];
    
     echo<<<data
      <option value='$cname'>$cname</option>
     data;
    
}
}
?>
</select>

                   
<div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Status<span class="text-danger"> *</span></label><input type="text" id="Status" name="Status" placeholder="pending" > </div>
                    <!-- <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" value="Submit" class="btn-block btn-primary">Submit</button> </div> -->

                        <div class="row justify-content-end">
                        
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <br><button class="btn btn-secondary" type="submit" value="submit">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require('footer.php') ?>
</body>
</html>