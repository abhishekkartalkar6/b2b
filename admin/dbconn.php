<?php

class Dbconn {

  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect("localhost","u176246072_root","Abi@1122","u176246072_b2b");
    // $this->conn = mysqli_connect("localhost","root","","js");
    if (!$this->conn){
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  public function checkuser($username,$password){
    $query = "select * from user_details where username = '$username'";
    $data = $this->conn->query($query);
    if ($data->num_rows > 0) {
      $row = $data->fetch_assoc();
      if($row['password']==$password){
        return $data = array("name"=>$row['name'],"message"=>"success");
      }else{
        return $data = array("message"=>"Invalid Username or Password");
      }
    }else{
      return $data = array("message"=>"Invalid Username or Password");
    }
  }

  public function track($no){
    $query = "select * from tracking_details where tracking_no = '$no'";
    $data = $this->conn->query($query);
    if ($data->num_rows > 0) {
      $row = $data->fetch_assoc();
     
        return $data = array("data"=>$row,"message"=>"success");
      
    }else{
      return $data = array("message"=>"Invalid Tracking no");
    }
  }


}
