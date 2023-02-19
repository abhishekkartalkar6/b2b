<?php
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  ?>
<div class="container">
<br>
<h5>* Make sure Required Fields should not blank</h5>
<h5>* Each csv does not contain more than 2000 rows</h5>
<br>
<form action="process_csv.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputAddress">Upload csv</label>
    <input type="file" name="csv" class="form-control" id="inputAddress" placeholder="add csv">
  </div>
  
  
 
  <button type="submit" name="submit" class="btn btn-primary">Upload CSV</button>
</form>
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
