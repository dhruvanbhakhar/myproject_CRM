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
<?php require('include.php') ?>
</head>
<body>
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
<center>
<!-- code of msgsent -->
<div class="container mt-3">
<br><form method="post" action="<php echo $SERVER['PHP_SELF'];?>">

<div class="form-group">
<label for="email">Email:</label>
<input type="email" name="email" value="<?php $cust_id=$_GET['cust_id'];
$sql ="select * from `add_cust` where cust_id=$cust_id";
$result = mysqli_query($con, $sql);
if($result)
{
while ( $row=mysqli_fetch_assoc($result)) {
    $email = $row['email'];
    echo $email;

}
}?>" required><br><br></div>

<div class="form-group">
<lable >Subject:</lable>
<input name="subject" class="form-control" type="text"><br><br>
</div>

<div class="form-group">
<label for="">Message:</label>
<textarea name="message" class="form-control" id="" cols="10" rows="3"></textarea><br><br>
</div>

<button name="submit" type="submit" class="btn btn-danger"><a href='followup.php?updateid=<?php $cust_id=$_GET['cust_id'];?>' class="text-light" type="submit">send message</a></button>

</form>
</div>
</center>
</body>
<html>


<?php
    if(isset($_POST['submit'])){
        $to = $_POST['email'];
        $from = "dhruvanbhakhar@gmail.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
         
        $headers = "From: $from";
        
        mail($to ,$subject,$message,$headers);

        echo "Mail Sent.";
    }
?>