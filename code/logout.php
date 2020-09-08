<?php
require 'connection.php';
session_start();
// Update Login Table
$sqlquery15 = "UPDATE user_status SET Status='0',Logout_Time=NOW() WHERE User_Email='{$_SESSION['email']}'";
$ressqlquery15 =mysqli_query($conn,$sqlquery15);
if($ressqlquery15){
	session_destroy();
	header("location:index.php");
	
}
elseif(!$ressqlquery15){
	echo 'Could Not Log You Out';
}
// Update Login Table

?>