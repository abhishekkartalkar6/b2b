<?php
session_start();
if(isset($_SESSION['username'])){
  include("../header.php");
  ?>


<div style="width: 90%;margin:auto;" class="bg-light p-2">

<form action="/action_page.php">
 <div class="row">
 <div class="form-group col-md-2 ">
   <label for="email" >Date Of Booking:</label>
   <input type="date" name="date" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Time Of Booking:</label>
   <input type="time" name="time" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">Unique Tracking no:</label>
   <input type="email" name="tracking_no" class="form-control" id="email">
 </div>
 <div class="form-group col-md-3">
   <label for="pwd">Matching Tracking No:</label>
   <input type="text" name="match_tracking_no" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-3">
   <label for="pwd">Doc/Non Doc:</label>
   <input type="text" name="doc_non_doc" class="form-control" id="pwd">
 </div>
 </div>
 
 <div class="row">
 <div class="form-group col-md-2">
   <label for="email">Booked under:</label>
   <input type="text" name="booked_under" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Booked Under Name:</label>
   <input type="text" name="booked_under_name" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">From City:</label>
   <input type="text" name="from_city" class="form-control" id="email">
 </div>
 <div class="form-group col-md-3">
   <label for="pwd">Sender Name:</label>
   <input type="text" name="sender_name" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-3">
   <label for="pwd">Sender Address:</label>
   <textarea class="form-control" name="sender_add" id=""></textarea>
 </div>
 </div>

 <div class="row">
 <div class="form-group col-md-2">
   <label for="email">Sender Mobile:</label>
   <input type="text" name="sender_mobile" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">To City:</label>
   <input type="text" name="to_city" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-3">
   <label for="email">Reciever Name:</label>
   <input type="text" name="reciever_name" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Reciever Mobile :</label>
   <input type="text" name="reciever_mobile" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-3">
   <label for="pwd">Reciever Address:</label>
   <textarea class="form-control" name="reciever_add" id=""></textarea>
 </div>
 </div>

 <div class="row">
 <div class="form-group col-md-2">
   <label for="email">Reciever Pin Code:</label>
   <input type="text" name="reciever_pin_code" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Channel partner:</label>
   <input type="text" name="channel_partner" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">Zone:</label>
   <input type="text" name="zone" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">From Company Code :</label>
   <input type="text" name="from_company_code" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">To Company Code :</label>
   <input type="text" name="to_company_code" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">Type Company Code:</label>
   <input type="text" name="type_company_code" class="form-control" id="email">
 </div>
 </div>


 <div class="row">
 
 <div class="form-group col-md-2">
   <label for="pwd">WeighT Company Code:</label>
   <input type="text" name="weight_company_code" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">T Round Amt:</label>
   <input type="text" name="round_of_amt" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">GST Amt :</label>
   <input type="text" name="gst_amt" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">RO Without GST :</label>
   <input type="text" name="round_of_gst" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">Actual paid:</label>
   <input type="text" name="actual_paid" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Balance:</label>
   <input type="text" name="balance" class="form-control" id="pwd">
 </div>
 </div>

 <div class="row">

 <div class="form-group col-md-2">
   <label for="email">Mode Of payment:</label>
   <input type="text" name="mop" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Expected Delievery :</label>
   <input type="text" name="expected_d_date" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Remind mail/no :</label>
   <input type="text" name="remainder_mail" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">mail/no:</label>
   <input type="text" name="number" class="form-control" id="email">
 </div>
 <div class="form-group col-md-2">
   <label for="pwd">Actual Delevery Dt:</label>
   <input type="date" name="weight_company_code" class="form-control" id="pwd">
 </div>
 <div class="form-group col-md-2">
   <label for="email">Delivery Time:</label>
   <input type="time" name="round_of_amt" class="form-control" id="email">
 </div>  
 </div>

 <div class="row">


 </div>
 <button type="submit" class="btn btn-default">Submit</button>
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
