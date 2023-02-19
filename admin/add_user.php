<?php
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  ?>

<div class="row ">
  <div class="col-md-4 p-3" >
      <a href="">
      <div id="rcorners1" style="margin:auto ;">
      <h4 class="text-center pt-2 font-weight-bold">Add Admin User</h4>
    </div>
  </a>
    </div>

    <div class="col-md-4 p-3">
      <a href="">
    <div id="rcorners1" style="margin:auto ;">
      <h4 class="text-center pt-2 font-weight-bold">Master Tracking List</h4></div>
    </a>
    </div>
    
      <a href="">
    <div class="col-md-4 p-3">
    <div id="rcorners1" style="margin:auto ;">
        <h4 class="text-center pt-2 font-weight-bold">CSV Import</h4></div>
      </a>
    </div>
    

  </div>

  <div class="row ">
  <div class="col-md-4 p-3" >
      <a href="">
      <div id="rcorners1" style="margin:auto ;">
      <h4 class="text-center pt-2 font-weight-bold">Some other 1</h4>
    </div>
  </a>
    </div>

    <div class="col-md-4 p-3">
      <a href="">
    <div id="rcorners1" style="margin:auto ;">
      <h4 class="text-center pt-2 font-weight-bold">Some Other 2</h4></div>
    </a>
    </div>
    
      <a href="">
    <div class="col-md-4 p-3">
    <div id="rcorners1" style="margin:auto ;">
        <h4 class="text-center pt-2 font-weight-bold">Some Other 3</h4></div>
      </a>
    </div>
    

  </div>

  



<br>
<br>
<br>
<br>
  <?php
  include("../footer.php");
}else{
  header("Location:../admin.php");
}
