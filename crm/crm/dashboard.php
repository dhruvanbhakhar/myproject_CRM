<?php

include 'connection.php';
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

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center"></h2>
<div class="h-line bg-dark"></div>

</div>

<div class="container">
  <div class="row">  

     <div class="col-lg-9 col-md-12 px-4">
       <div class="card mb-4 border-0 shadow" >
         
  </div>
</div>


<style>
  body {
    /* background-color: #B0E2FF; */
    background-color: #efefef;
  }
  td {
    /* font-family: 'Assistant', sans-serif !important; */
    font-size: 18px !important;
  }
  p {
  font-size: 50px;
  font-weight: 100;
  font-family: 'product sans';  
  }  

  .main-section{
  width:120%;
  margin:0 auto;
  text-align: center;
  padding: 0px 5px;
}
.dashbord{
  width:23%;
  display: inline-block;
  background-color:#34495E;
  color:#fff;
  margin-top: 50px; 
}
.icon-section i{
  font-size: 30px;
  padding:10px;
  border:1px solid #fff;
  border-radius:50%;
  margin-top:-25px;
  margin-bottom: 10px;
  background-color:#34495E;
}
.icon-section p{
  margin:0px;
  font-size: 20px;
  padding-bottom: 10px;
}




.dashbord-blue .icon-section,.dashbord-blue .icon-section i{
  background-color: #2980B9;
}



  
</style>

<hr>
 <div class="container">

            <div class="main-section">
              <div class="dashbord">
                <div class="icon-section">
                  <i class="fa fa-users" aria-hidden="true"></i><br>
                 Total Customer
               <p> <?php 
                    echo number_format($conn->query("SELECT * FROM add_cust where status='customer'")->rowCount());
                  ?></p>
                </div>
               
              
              </div>
               <div class="dashbord dashbord-blue">
                <div class="icon-section">
                  <i class="fa fa-money" aria-hidden="true"></i><br>
                 Pending Lead
                  <p><?php  echo number_format($conn->query("SELECT * FROM add_cust where status='pending'")->rowCount());?></p> 
                </div>
               
              </div>     
              
              
</div>
</div>
<br>




<?php require('footer.php') ?>
 

</body>
</html> 
