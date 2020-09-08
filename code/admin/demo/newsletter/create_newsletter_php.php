<?php
require '../connection.php';
session_start();
if(!isset($_SESSION['admin_id'])){
  header("location: ../logout_admin.php");
}

if(isset($_POST['description']) && $_POST['description']!==""){
  $description=$_POST['description'];
  if(isset($_POST['publishdatetime']) && $_POST['publishdatetime']!==""){
    $datetime_received = $_POST['publishdatetime'];
    $datetime_received = new DateTime($datetime_received);
    $publishdatetime=$datetime_received->format('Y-m-d H:i:s');
    $sqlqueryadmin9 = "INSERT INTO mailing_letter (Letter_Body,Upload_Time,Publish_Time,Author_Email,Status) VALUES ('$description',NOW(),'$publishdatetime','{$_SESSION['admin_email']}','1')";
  }
  else{
    $sqlqueryadmin9 = "INSERT INTO mailing_letter (Letter_Body,Upload_Time,Publish_Time,Author_Email,Status) VALUES ('$description',NOW(),NOW(),'{$_SESSION['admin_email']}','1')";
  }
  $ressqlqueryadmin9 =mysqli_query($conn,$sqlqueryadmin9);
  if($ressqlqueryadmin9){
   echo "Newsletter Uploaded";
  }
  elseif(!$ressqlqueryadmin9){
    echo 'Could Not Upload Newsletter';
  }
}
else{
  echo "Newsletter is Null";
}
?>