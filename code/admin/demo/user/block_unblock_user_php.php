<?php
require '../connection.php';
session_start();
if(!isset($_SESSION['admin_id'])){
  header("location: ../logout_admin.php");
}
if(isset($_POST['block'])){
  $block=$_POST['block'];
  $sqlqueryadmin7 = "UPDATE users SET Status='1' WHERE Email='$block'";
  $ressqlqueryadmin7 =mysqli_query($conn,$sqlqueryadmin7);
  if($ressqlqueryadmin7){
   echo $block;
  }
  elseif(!$ressqlqueryadmin7){
    echo 'Could Not Block User';
  }
}
if(isset($_POST['unblock'])){
  $unblock=$_POST['unblock'];
  $sqlqueryadmin8 = "UPDATE users SET Status='0' WHERE Email='$unblock'";
  $ressqlqueryadmin8 =mysqli_query($conn,$sqlqueryadmin8);
  if($ressqlqueryadmin8){
   echo $block;
  }
  elseif(!$ressqlqueryadmin8){
    echo 'Could Not Unblock User';
  }
}
?>