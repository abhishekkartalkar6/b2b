<?php

include("dbconn.php");

if(isset($_POST['login_form'])){
  $obj = new Dbconn;
  $data = $obj->checkuser($_POST['username'],$_POST['password']);
  session_start();
  if($data['message']=='success'){
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["name"] = $data['name'];
    header("Location:home.php");
  }else{
    $_SESSION["message"] = $data['message'];
    header("Location:../admin.php");
  }
}

if(isset($_GET['logout']) && $_GET['logout']=="true"){
  session_start();
  session_destroy();
  session_unset();
  header("Location:../admin.php");
}

if(isset($_POST['track'])){
  $obj = new Dbconn;
  $data = $obj->track($_POST['tracking_no']);
  session_start();
 
  if($data['message']=='success'){
    $_SESSION["tracking"] = $data['data'];
    $_SESSION["name"] = $data['name'];
    echo '<pre>';
 echo "hii";
 print_r($_SESSION["name"]);
 echo '</pre>';
    header("Location:../details.php");
  }else{
    $_SESSION["message"] = $data['message'];
    header("Location:../index.php");
  }
}