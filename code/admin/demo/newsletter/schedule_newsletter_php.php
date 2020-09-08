<?php
require '../connection.php';
session_start();
if(!isset($_SESSION['admin_id'])){
  header("location: ../logout_admin.php");
}

if(isset($_POST['blockscheduled'])){
  $blockscheduled=$_POST['blockscheduled'];
  $sqlqueryadmin7 = "UPDATE mailing_letter SET Status='0' WHERE Id='$blockscheduled'";
  $ressqlqueryadmin7 =mysqli_query($conn,$sqlqueryadmin7);
  if($ressqlqueryadmin7){
   echo $blockscheduled;
  }
  elseif(!$ressqlqueryadmin7){
    echo 'Could Not block scheduled Letter';
  }
}
if(isset($_POST['unblockscheduled'])){
  $unblockscheduled=$_POST['unblockscheduled'];
  $sqlqueryadmin8 = "UPDATE mailing_letter SET Status='1' WHERE Id='$unblockscheduled'";
  $ressqlqueryadmin8 =mysqli_query($conn,$sqlqueryadmin8);
  if($ressqlqueryadmin8){
   echo $unblockscheduled;
  }
  elseif(!$ressqlqueryadmin8){
    echo 'Could Not unblock scheduled Letter';
  }
}
?>