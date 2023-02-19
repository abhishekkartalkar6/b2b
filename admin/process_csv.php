<?php
session_start();
if(isset($_SESSION['username'])){
  include("dbconn.php");
  include("../header.php");
  ?>
  <br><br>
<div class="container">
<?php
if(isset($_POST['submit'])){

 $csv = array();

 $obj = new Dbconn;
 
// check there are no errors
if($_FILES['csv']['error'] == 0){
    $name = $_FILES['csv']['name'];
    $ext = strtolower(end(explode('.', $_FILES['csv']['name'])));
    $type = $_FILES['csv']['type'];
    $tmpName = $_FILES['csv']['tmp_name'];

    // check the file is a csv
    if($ext === 'csv'){
        if(($handle = fopen($tmpName, 'r')) !== FALSE) {
            // necessary if a large csv file
            set_time_limit(0);

            $row = 0;

            $db_coumn_name = array('tracking_id','datetime','tracking_no','match_tracking_no','doc_non_doc','booked_under','booked_under_name','from_city','sender_name','sender_add','sender_mobile','to_city','reciever_name','reciever_add','reciever_mobile','reciever_pin_code','channel_partner','zone','from_company_code','to_company_code','type_company_code','weight_company_code','round_of_amt','gst_amt','round_of_gst','actual_paid','balance','mop','expected_d_date','remainder_mail','number','actual_delevery_datetime','total_tat','settlement','dt_of_pickup','dt_of_delievery','name_city','url','t_tat');

            $csv_col_name = array();
            while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
              $csv_col_name = $data;
                break;
            }

            $result=array_diff($csv_col_name,$db_coumn_name);
            if (count($result) === 0) {
              $t_count = 0;
              while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                $no =  $data[2];
                $query = "select * from  tracking_details where tracking_no = '$no'";
                  $data_db = $obj->conn->query($query);
                  if ($data_db->num_rows > 0) {
                    echo "<h3>Duplicate entry : Tracking no $no already exist. </h3><br>";
                  }else{  
                    
                    $counter=0;
                    $values ='';
                 
                    foreach($data as $str){
                        if($counter == 0){

                        }else{

                          $values.= '"'.($str).'",';
                        }
                        $counter++;
                    }
                     $values = rtrim($values,",");
                 $ins = "INSERT INTO tracking_details (`datetime`,`tracking_no`,`match_tracking_no`,`doc_non_doc`,`booked_under`,`booked_under_name`,`from_city`,`sender_name`,`sender_add`,`sender_mobile`,`to_city`,`reciever_name`,`reciever_add`,`reciever_mobile`,`reciever_pin_code`,`channel_partner`,`zone`,`from_company_code`,`to_company_code`,`type_company_code`,`weight_company_code`,`round_of_amt`,`gst_amt`,`round_of_gst`,`actual_paid`,`balance`,`mop`,`expected_d_date`,`remainder_mail`,`number`,`actual_delevery_datetime`,`total_tat`,`settlement`,`dt_of_pickup`,`dt_of_delievery`,`name_city`,`url`,`t_tat`) VALUES ($values)";
                 $obj->conn->query($ins);
                 $t_count++;
                  }
                }
            }else{
              foreach ($result as $key => $val){
                echo "<h3>Error : Column name $val must be $db_coumn_name[$key]. </h3><br>";
              }
            }
            echo "<h3>Report : Total  $t_count Records inserted </h3><br>";
            fclose($handle);
        }
    }
}
}

?> <a href="csv.php"><button class="btn btn-primary">Go Back</button></a>
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
