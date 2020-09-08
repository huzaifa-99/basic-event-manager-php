<?php
require '../connection.php';
session_start();
if(!isset($_SESSION['admin_id'])){
  header("location: ../logout_admin.php");
}

//1 active
if(isset($_POST['markcheck'])){
  $markcheck=$_POST['markcheck'];
  $time_posted=$_POST['timeposted'];
  $id=$_POST['idd'];
  $sqlqueryadmin10 = "UPDATE reservation SET Reservation_Status='1',Time_Accepted=NOW() WHERE Reserver_Email='$markcheck' AND Time_Posted='$time_posted'";
  $ressqlqueryadmin10 =mysqli_query($conn,$sqlqueryadmin10);
  if($ressqlqueryadmin10){
   echo $id;
  }
  elseif(!$ressqlqueryadmin10){
    echo 'Could Not Make Active';
  }
}


// 2 completed
if(isset($_POST['markcomplete'])){
  $markcomplete=$_POST['markcomplete'];
  $time_posted=$_POST['timeposted'];
  $id=$_POST['idd'];
  $sqlqueryadmin10 = "UPDATE reservation SET Reservation_Status='2',Time_Completed=NOW() WHERE Reserver_Email='$markcomplete' AND Time_Posted='$time_posted'";
  $ressqlqueryadmin10 =mysqli_query($conn,$sqlqueryadmin10);
  if($ressqlqueryadmin10){
   echo $id;
  }
  elseif(!$ressqlqueryadmin10){
    echo 'Could Not Mark Complete';
  }
}
?>