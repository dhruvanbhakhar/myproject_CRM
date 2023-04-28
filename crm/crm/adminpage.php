<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {margin:0;}

.p2 {
  font-family: Arial, Helvetica, sans-serif;
}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}
</style>
<body bgcolor="97E5F7">
<div class="container-fluid">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="crm-img.jpg"  class="w-100 d-block" style="width:1500px;height:400px;">
        </div>
      </div>
    </div>
  </div>


<div class="icon-bar">

  <a class="active" href="employdet.php">Add Employ<i class="fa fa-home"></i></a> 
  <a href="addcomp.php">Add Company<i  class="fa fa-search"></i></a> 
  <a href="editemp.php">Edit Employ Details<i  class="fa fa-envelope"></i></a> 
  <!-- <a href="editempbknd.php"><i  class="fa fa-globe"></i></a> -->
  <a href="logout.php">Logout<i  class="fa fa-trash"></i></a> 
</div>



</body>
</html>