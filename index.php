<?php include("header.php");?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-3 text-center">

            <div class="mb-md-5 mt-md-4 pb-1">
            <Form action="admin/controller.php" method="POST">
              <h5 class="fw-bold mb-2 text-uppercase">Enter Tracking No.</h5>
              <br>
              <div class="form-outline form-white mb-4">
                <input type="text" name="tracking_no" id="typeEmailX" placeholder="Enter tracking no." class="form-control form-control-lg" /> 
                <span style="color:red;"><?php session_start(); if(isset($_SESSION['message'])){echo $_SESSION['message'];  session_destroy();} ?></span>
              </div>
              <button class="btn btn-outline-light btn-lg px-3" name="track" type="submit">Submit</button>
              </Form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("footer.php");?>