<?php include("header.php");session_start();?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-3 text-left">
            <div class="mb-md-5 mt-md-4 pb-1">
            <Form action="admin/controller.php" method="POST">
              <h5 class="fw-bold mb-2 text-uppercase">Username</h5>
              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeEmailX" placeholder="Username" class="form-control form-control-lg" /> 
              </div>
              <h5 class="fw-bold mb-2 text-uppercase">Password</h5>
              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typeEmailX" placeholder="Password" class="form-control form-control-lg" /> 
                <span style="color:red;"><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];  session_destroy();} ?></span>
              </div>
             
              <div class="text-center">
              <button class="btn btn-outline-light btn-lg px-3" name="login_form" type="submit">Login</button>
              </div>
              </Form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<?php include("footer.php");?>