<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><i class="bi bi-tree-fill">SALESUPPORT</i></a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <div class="d-flex">
      

<button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#loginModal"><i class="bi bi-file-person">
       Employ Login</i>
      </button>
      <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#adminlogin"><i class="bi bi-person-circle">
        Admin Login</i>
      </button> 

     

        


      </div>
    </div>
  </div>
</nav>



<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">





    <!-- <form action="loginval.php" method="post"> -->
      <form action="loginval.php"  method="post">

        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>Employ Login</h5>
          <button type="reset" class="btn-close shadow-none " data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none" name="name" value="">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none" name="password" value="">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
          <!-- <input class="button" class="btn btn-dark shadow-none" type="submit"
                     name="login" value="Sign In"> -->
            <button type="submit" class="btn btn-dark shadow-none"> LOGIN</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password </a>
          </div>
        </div>


      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="adminlogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="validate.php" method="post">

        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>Admin Login</h5>
          <button type="reset" class="btn-close shadow-none " data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Admin Id</label>
            <input type="text" class="form-control shadow-none" placeholder="Username"
                         name="name" value="">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none" placeholder="Password"
                         name="password" value="">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            
            <input class="button" class="btn btn-dark shadow-none" type="submit"
                     name="login" value="Sign In">
            
          </div>
        </div>
        

      </form>
    </div>
  </div>
</div>

      </form>
    </div>
  </div>
</div>
