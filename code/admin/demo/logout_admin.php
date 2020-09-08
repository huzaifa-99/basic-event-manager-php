<?php
require 'connection.php';
session_start();
// Update Login Table
if(isset($_SESSION['admin_id'])){
	$sqlquery15 = "UPDATE user_status SET Status='0',Logout_Time=NOW() WHERE User_Email='{$_SESSION['admin_email']}'";
	$ressqlquery15 =mysqli_query($conn,$sqlquery15);
	if($ressqlquery15){
		session_destroy();
		header("location:../../index.php");
		
	}
	elseif(!$ressqlquery15){
		echo 'Could Not Log You Out';
	}
}
else{
	header("location:../../index.php");
}
// Update Login Table

?>